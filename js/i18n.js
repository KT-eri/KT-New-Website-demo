let currentTranslations = null;
let currentLang = '';

async function initI18n() {
    // 1. 判斷使用者語言
    // 優先順序：URL 參數 > HTML lang 屬性 > LocalStorage > 瀏覽器語言 > 預設 en
    const urlParams = new URLSearchParams(window.location.search);
    const htmlLangAttr = document.documentElement.lang.toLowerCase();
    const supportedLangs = ['ar', 'cn', 'en', 'es', 'fr', 'hu', 'ko', 'pl', 'br', 'ru', 'th', 'vi', 'jp'];

    let lang = urlParams.get('lang');

    // 如果 URL 沒有指定，嘗試從 HTML lang 屬性判斷
    if (!lang) {
        if (htmlLangAttr.includes('zh')) lang = 'cn';
        else if (htmlLangAttr.includes('pt') || htmlLangAttr.includes('br')) lang = 'br';
        else if (htmlLangAttr.includes('ja') || htmlLangAttr.includes('jp')) lang = 'jp';
        else {
            const short = htmlLangAttr.slice(0, 2);
            if (supportedLangs.includes(short)) lang = short;
        }
    }

    // 如果還是沒有，從 LocalStorage 或瀏覽器語言判斷
    if (!lang) {
        lang = localStorage.getItem('preferredLang') || navigator.language;
    }

    lang = lang.toLowerCase();
    
    // 語言代碼轉換邏輯
    if (supportedLangs.includes(lang)) {
        // 直接匹配
    } else if (lang.startsWith('zh')) {
        lang = 'cn';
    } else if (lang.startsWith('pt') || lang.startsWith('br')) {
        lang = 'br';
    } else if (lang.startsWith('ja') || lang.startsWith('jp')) {
        lang = 'jp';
    } else {
        lang = lang.slice(0, 2);
    }

    if (!supportedLangs.includes(lang)) {
        lang = 'en';
    }

    // 如果語言沒變且已經有翻譯資料，則不重複載入
    if (lang === currentLang && currentTranslations) {
        translateAll();
        return;
    }

    console.log(`Attempting to load language: ${lang}`);

    try {
        // 加入快取破解 (Cache-buster)，避免瀏覽器抓到舊版的 JSON 檔案
        const cacheBuster = `v=${new Date().getTime()}`;
        const response = await fetch(`./lang/${lang}.json?${cacheBuster}`);
        if (!response.ok) throw new Error(`Could not load lang/${lang}.json`);
        currentTranslations = await response.json();
        currentLang = lang;

        // 儲存偏好語言
        localStorage.setItem('preferredLang', lang);
        
        // 執行翻譯
        translateAll();
        
        // 同步 HTML 屬性
        syncHtmlAttributes(lang);
        
        // 更新選單
        updateDropdownLinks();
        
        console.log(`Language successfully set to: ${lang}`);
    } catch (error) {
        console.error('i18n Error:', error);
    }
}

/**
 * 翻譯頁面上所有帶有 data-i18n 的元素
 */
function translateAll() {
    if (!currentTranslations) return;
    const targets = document.querySelectorAll('[data-i18n]');
    targets.forEach(el => translateElement(el));
}

/**
 * 翻譯單一元素
 */
// function translateElement(el) {
//     if (!currentTranslations) return;
//     const key = el.getAttribute('data-i18n');
//     if (currentTranslations[key]) {
//         if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
//             el.placeholder = currentTranslations[key];
//         } else {
//             el.innerHTML = currentTranslations[key];
//         }
//     }
// }
/**
 * 翻譯單一元素
 */
function translateElement(el) {
    if (!currentTranslations) return;
    const key = el.getAttribute('data-i18n');
    
    if (currentTranslations[key]) {
        const translatedText = currentTranslations[key];

        // 支援 Input 與 TextArea 的 Placeholder 翻譯
        if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
            el.placeholder = translatedText;
        } else {
            // 直接替換 innerHTML，支援 JSON 中的連結 (<a> 標籤)
            el.innerHTML = translatedText;
        }
    }
}

/**
 * 動態更新語言切換選單
 */
function updateDropdownLinks() {
    const dropdowns = document.querySelectorAll('.language .dropdown');
    const supportedLangsMap = {
        'cn': '繁體中文',
        'en': 'English',
        'es': 'Español',
        'fr': 'Français',
        'hu': 'Magyar',
        'ko': '한국어',
        'pl': 'Polski',
        'br': 'Português',
        'ru': 'Русский',
        'th': 'ไทย',
        'vi': 'Tiếng Việt',
        'ar': 'العربية'
    };

    // dropdowns.forEach(dropdown => {
    //     if (dropdown.getAttribute('data-i18n-updated') === 'true') return;
        
    //     dropdown.innerHTML = '';
    //     for (const [code, name] of Object.entries(supportedLangsMap)) {
    //         const a = document.createElement('a');
    //         a.href = `javascript:switchLang('${code}')`;
    //         a.textContent = name;
    //         dropdown.appendChild(a);
    //     }
    //     dropdown.setAttribute('data-i18n-updated', 'true');
    // });

    const currentLangSpan = document.querySelector('.language > a > span');
    if (currentLangSpan) {
        currentLangSpan.setAttribute('data-i18n', 'current-lang');
        translateElement(currentLangSpan);
    }
}

// 標記是否為內部腳本觸發的屬性變更
let isInternalChange = false;

/**
 * 同步 html 標籤屬性
 */
function syncHtmlAttributes(lang) {
    let targetLang = lang;
    if (lang === 'cn') targetLang = 'zh-TW';
    
    if (document.documentElement.lang !== targetLang) {
        isInternalChange = true;
        document.documentElement.lang = targetLang;
        setTimeout(() => { isInternalChange = false; }, 100);
    }
    
    if (document.documentElement.hasAttribute('translate')) {
        isInternalChange = true;
        document.documentElement.removeAttribute('translate');
        setTimeout(() => { isInternalChange = false; }, 100);
    }
}

/**
 * 手動切換語言
 */
function switchLang(newLang) {
    const url = new URL(window.location);
    url.searchParams.set('lang', newLang);
    window.history.pushState({}, '', url);
    initI18n();
}

// 1. 監測 html 標籤的 lang 屬性變化 (跟隨外部翻譯工具)
const langObserver = new MutationObserver((mutations) => {
    if (isInternalChange) return;

    mutations.forEach(mutation => {
        if (mutation.attributeName === 'lang') {
            console.log('HTML lang attribute changed externally, re-initializing i18n...');
            initI18n();
        }
    });
});

langObserver.observe(document.documentElement, { 
    attributes: true, 
    attributeFilter: ['lang'] 
});

// 2. 監測 DOM 變化，自動翻譯新加入的元素 (例如 Slider 動態生成的內容)
const domObserver = new MutationObserver((mutations) => {
    if (!currentTranslations) return;
    
    mutations.forEach(mutation => {
        mutation.addedNodes.forEach(node => {
            if (node.nodeType === 1) { // Element
                if (node.hasAttribute('data-i18n')) {
                    translateElement(node);
                }
                node.querySelectorAll('[data-i18n]').forEach(el => translateElement(el));
            }
        });
    });
});

domObserver.observe(document.body, { 
    childList: true, 
    subtree: true 
});

// 監聽瀏覽器導覽
window.addEventListener('popstate', initI18n);

// 啟動
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initI18n);
} else {
    initI18n();
}