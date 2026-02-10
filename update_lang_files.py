import json
import os

# Base directory
lang_dir = r'z:\2026_Ktday\lang'

# Common HTML parts (to ensure consistency in links)
link_dist = "https://www.kingtony.com/dstribution.php?utm_source=311-Activity&utm_medium=btn&utm_campaign=Distribution"
link_support = "https://www.kingtony.com/support.php?utm_source=311-Activity&utm_medium=btn&utm_campaign=Support"
link_community = "https://www.kingtony.com/link/socialmedia/FB_en_link.html?utm_source=311-Activity&utm_medium=btn&utm_campaign=FB_link"

link_class_dist = "our-locations-link zz-btn zz-btn-text"
link_class_common = "zz-btn zz-btn-text"
link_style = "display: inline; vertical-align: baseline;"

def make_link(url, text, extra_class=""):
    cls = link_class_common
    if extra_class:
        cls = extra_class
    return f'<a href="{url}" class="{cls}" style="{link_style}">{text}</a>'

# Translations Data
translations = {
    "en": {
        "hero-title": "March 11 | International Tool Worship Day",
        "hero-description": "Respect your tools, enjoy your work. When tools are respected, they give something back— clarity, confidence, and pride in the job.",
        "season": "Explore the Season",
        "why": "Why is KING TONY",
        "new-items": "NEW ITEMS",
        "learn-more": "Learn more",
        "our-stores": "Our <br> Locations",
        "stores-description": f"are located all over the world; you can find {make_link(link_dist, 'our presence', 'our-locations-link')} in America, Europe, Africa, the Middle East, Asia, and the Oceania.",
        "reliable-support": "Reliable<br>Support",
        "support-description": f"built for professionals. Backed by {make_link(link_support, 'support')} you can rely on—anytime.",
        "join-us": "JOIN US",
        "join-description": f"the {make_link(link_community, 'KING TONY Community')}, be part of our journey and grow with KING TONY—where professionals come together."
    },
    "cn": {
        "hero-title": "3月11日 | 國際工具崇拜日",
        "hero-description": "尊重工具，享受工作。當工具受到尊重時，它們會回饋——工作中的清晰度、信心和自豪感。",
        "season": "探索本季活動",
        "why": "為什麼選擇 KING TONY",
        "new-items": "新品推薦",
        "learn-more": "了解更多",
        "our-stores": "我們的<br>據點",
        "stores-description": f"遍布全球；您可以在美洲、歐洲、非洲、中東、亞洲和大洋洲找到{make_link(link_dist, '我們的蹤影', 'our-locations-link')}。",
        "reliable-support": "可靠的<br>支援",
        "support-description": f"專為專業人士打造。您可以隨時信賴的{make_link(link_support, '支援服務')}。",
        "join-us": "加入我們",
        "join-description": f"加入{make_link(link_community, 'KING TONY 社群')}，參與我們的旅程，與 KING TONY 一同成長——專業人士的聚集地。"
    },
    "fr": {
        "hero-title": "11 Mars | Journée Internationale du Culte de l'Outil",
        "hero-description": "Respectez vos outils, appréciez votre travail. Quand les outils sont respectés, ils vous le rendent bien — clarté, confiance et fierté dans le travail.",
        "season": "Explorer la Saison",
        "why": "Pourquoi KING TONY",
        "new-items": "NOUVEAUTÉS",
        "learn-more": "En savoir plus",
        "our-stores": "Nos <br> Emplacements",
        "stores-description": f"sont situés partout dans le monde ; vous pouvez trouver {make_link(link_dist, 'notre présence', 'our-locations-link')} en Amérique, Europe, Afrique, Moyen-Orient, Asie et Océanie.",
        "reliable-support": "Support<br>Fiable",
        "support-description": f"conçu pour les professionnels. Soutenu par un {make_link(link_support, 'support')} sur lequel vous pouvez compter — à tout moment.",
        "join-us": "REJOIGNEZ-NOUS",
        "join-description": f"la {make_link(link_community, 'Communauté KING TONY')}, faites partie de notre voyage et grandissez avec KING TONY — là où les professionnels se rassemblent."
    },
    "es": {
        "hero-title": "11 de Marzo | Día Internacional de Adoración a las Herramientas",
        "hero-description": "Respeta tus herramientas, disfruta tu trabajo. Cuando se respetan las herramientas, ellas te devuelven algo: claridad, confianza y orgullo en el trabajo.",
        "season": "Explorar la Temporada",
        "why": "Por qué KING TONY",
        "new-items": "NUEVOS ARTÍCULOS",
        "learn-more": "Saber más",
        "our-stores": "Nuestras <br> Ubicaciones",
        "stores-description": f"están ubicadas en todo el mundo; puedes encontrar {make_link(link_dist, 'nuestra presencia', 'our-locations-link')} en América, Europa, África, Medio Oriente, Asia y Oceanía.",
        "reliable-support": "Soporte<br>Confiable",
        "support-description": f"construido para profesionales. Respaldado por {make_link(link_support, 'soporte')} en el que puedes confiar, en cualquier momento.",
        "join-us": "ÚNETE A NOSOTROS",
        "join-description": f"a la {make_link(link_community, 'Comunidad KING TONY')}, sé parte de nuestro viaje y crece con KING TONY, donde los profesionales se unen."
    },
    "br": {
        "hero-title": "11 de Março | Dia Internacional de Adoração às Ferramentas",
        "hero-description": "Respeite suas ferramentas, aproveite seu trabalho. Quando as ferramentas são respeitadas, elas retribuem – clareza, confiança e orgulho no trabalho.",
        "season": "Explorar a Temporada",
        "why": "Por que KING TONY",
        "new-items": "NOVOS ITENS",
        "learn-more": "Saiba mais",
        "our-stores": "Nossas <br> Localizações",
        "stores-description": f"estão localizadas em todo o mundo; você pode encontrar {make_link(link_dist, 'nossa presença', 'our-locations-link')} na América, Europa, África, Oriente Médio, Ásia e Oceania.",
        "reliable-support": "Suporte<br>Confiável",
        "support-description": f"feito para profissionais. Apoiado por {make_link(link_support, 'suporte')} no qual você pode confiar — a qualquer momento.",
        "join-us": "JUNTE-SE A NÓS",
        "join-description": f"à {make_link(link_community, 'Comunidade KING TONY')}, faça parte da nossa jornada e cresça com a KING TONY — onde os profissionais se encontram."
    },
    "pl": {
        "hero-title": "11 Marca | Międzynarodowy Dzień Kultu Narzędzi",
        "hero-description": "Szanuj swoje narzędzia, ciesz się pracą. Gdy narzędzia są szanowane, oddają to – jasnością, pewnością i dumą z pracy.",
        "season": "Odkryj Sezon",
        "why": "Dlaczego KING TONY",
        "new-items": "NOWOŚCI",
        "learn-more": "Dowiedz się więcej",
        "our-stores": "Nasze <br> Lokalizacje",
        "stores-description": f"są na całym świecie; możesz znaleźć {make_link(link_dist, 'naszą obecność', 'our-locations-link')} w Ameryce, Europie, Afryce, na Bliskim Wschodzie, w Azji i Oceanii.",
        "reliable-support": "Niezawodne<br>Wsparcie",
        "support-description": f"stworzone dla profesjonalistów. Wspierane przez {make_link(link_support, 'wsparcie')}, na którym możesz polegać — zawsze.",
        "join-us": "DOŁĄCZ DO NAS",
        "join-description": f"do {make_link(link_community, 'Społeczności KING TONY')}, bądź częścią naszej podróży i rozwijaj się z KING TONY — gdzie spotykają się profesjonaliści."
    },
    "ar": {
        "hero-title": "11 مارس | اليوم الدولي لتقديس الأدوات",
        "hero-description": "احترم أدواتك، استمتع بعملك. عندما تُحترم الأدوات، فإنها تعطي شيئًا بالمقابل— الوضوح، الثقة، والفخر بالعمل.",
        "season": "اكتشف الموسم",
        "why": "لماذا KING TONY",
        "new-items": "عناصر جديدة",
        "learn-more": "تعرف على المزيد",
        "our-stores": "مواقعنا <br>",
        "stores-description": f"موجودة في جميع أنحاء العالم؛ يمكنك العثور على {make_link(link_dist, 'توابدنا', 'our-locations-link')} في أمريكا، أوروبا، أفريقيا، الشرق الأوسط، آسيا، وأوقيانوسيا.",
        "reliable-support": "دعم<br>موثوق",
        "support-description": f"صُنع للمحترفين. مدعوم بـ {make_link(link_support, 'دعم')} يمكنك الاعتماد عليه — في أي وقت.",
        "join-us": "انضم إلينا",
        "join-description": f"إلى {make_link(link_community, 'مجتمع KING TONY')}, كن جزءًا من رحلتنا وانمو مع KING TONY — حيث يجتمع المحترفون."
    },
    "ru": {
        "hero-title": "11 марта | Международный день почитания инструментов",
        "hero-description": "Уважайте свои инструменты, наслаждайтесь работой. Когда инструменты уважают, они отдают должное — ясность, уверенность и гордость за работу.",
        "season": "Исследовать сезон",
        "why": "Почему KING TONY",
        "new-items": "НОВИНКИ",
        "learn-more": "Узнать больше",
        "our-stores": "Наши <br> Локации",
        "stores-description": f"расположены по всему миру; вы можете найти {make_link(link_dist, 'наше присутствие', 'our-locations-link')} в Америке, Европе, Африке, на Ближнем Востоке, в Азии и Океании.",
        "reliable-support": "Надежная<br>Поддержка",
        "support-description": f"создано для профессионалов. Поддерживается {make_link(link_support, 'поддержкой')}, на которую вы можете положиться — в любое время.",
        "join-us": "ПРИСОЕДИНЯЙТЕСЬ",
        "join-description": f"к {make_link(link_community, 'Сообществу KING TONY')}, станьте частью нашего путешествия и растите вместе с KING TONY — местом встречи профессионалов."
    },
    "th": {
        "hero-title": "11 มีนาคม | วันบูชาเครื่องมือสากล",
        "hero-description": "เคารพเครื่องมือของคุณ สนุกกับงานของคุณ เมื่อเครื่องมือได้รับการเคารพ พวกมันจะให้อะไรบางอย่างกลับคืนมา— ความชัดเจน ความมั่นใจ และความภาคภูมิใจในงาน",
        "season": "สำรวจฤดูกาล",
        "why": "ทำไมต้อง KING TONY",
        "new-items": "สินค้าใหม่",
        "learn-more": "เรียนรู้เพิ่มเติม",
        "our-stores": "สถานที่ตั้ง<br>ของเรา",
        "stores-description": f"ตั้งอยู่ทั่วโลก; คุณสามารถพบ {make_link(link_dist, 'การมีอยู่ของเรา', 'our-locations-link')} ในอเมริกา ยุโรป แอฟริกา ตะวันออกกลาง เอเชีย และโอเชียเนีย",
        "reliable-support": "การสนับสนุน<br>ที่เชื่อถือได้",
        "support-description": f"สร้างขึ้นเพื่อมืออาชีพ สนับสนุนโดย {make_link(link_support, 'การสนับสนุน')} ที่คุณวางใจได้ — ตลอดเวลา",
        "join-us": "เข้าร่วมกับเรา",
        "join-description": f"สู่ {make_link(link_community, 'ชุมชน KING TONY')} มาเป็นส่วนหนึ่งของการเดินทางและเติบโตไปพร้อมกับ KING TONY — ที่ซึ่งมืออาชีพมารวมตัวกัน"
    },
    "vi": {
        "hero-title": "11 tháng 3 | Ngày Quốc tế Tôn vinh Công cụ",
        "hero-description": "Tôn trọng công cụ của bạn, tận hưởng công việc của bạn. Khi công cụ được tôn trọng, chúng sẽ mang lại điều gì đó— sự rõ ràng, tự tin và niềm tự hào trong công việc.",
        "season": "Khám phá Mùa",
        "why": "Tại sao là KING TONY",
        "new-items": "SẢN PHẨM MỚI",
        "learn-more": "Tìm hiểu thêm",
        "our-stores": "Địa điểm <br> Của Chúng Tôi",
        "stores-description": f"có mặt trên toàn thế giới; bạn có thể tìm thấy {make_link(link_dist, 'sự hiện diện của chúng tôi', 'our-locations-link')} ở Châu Mỹ, Châu Âu, Châu Phi, Trung Đông, Châu Á và Châu Đại Dương.",
        "reliable-support": "Hỗ trợ<br>Đáng tin cậy",
        "support-description": f"được xây dựng cho các chuyên gia. Được hỗ trợ bởi {make_link(link_support, 'sự hỗ trợ')} mà bạn có thể tin cậy — bất cứ lúc nào.",
        "join-us": "THAM GIA CÙNG CHÚNG TÔI",
        "join-description": f"vào {make_link(link_community, 'Cộng đồng KING TONY')}, trở thành một phần của hành trình và phát triển cùng KING TONY — nơi các chuyên gia hội tụ."
    },
    "hu": {
        "hero-title": "Március 11. | Nemzetközi Szerszámtisztelet Napja",
        "hero-description": "Tiszteld a szerszámaidat, élvezd a munkádat. Amikor a szerszámokat tisztelik, azok visszaadnak valamit — tisztaságot, magabiztosságot és büszkeséget a munkában.",
        "season": "Fedezze fel az Évszakot",
        "why": "Miért a KING TONY",
        "new-items": "ÚJ TERMÉKEK",
        "learn-more": "Tudjon meg többet",
        "our-stores": "Helyszíneink <br>",
        "stores-description": f"a világ minden táján megtalálhatók; megtalálhatja {make_link(link_dist, 'jelenlétünket', 'our-locations-link')} Amerikában, Európában, Afrikában, a Közel-Keleten, Ázsiában és Óceániában.",
        "reliable-support": "Megbízható<br>Támogatás",
        "support-description": f"szakembereknek készült. Olyan {make_link(link_support, 'támogatással')}, amelyre bármikor számíthat.",
        "join-us": "CSATLAKOZZON HOZZÁNK",
        "join-description": f"a {make_link(link_community, 'KING TONY Közösséghez')}, legyen részese utunknak és fejlődjön a KING TONY-val — ahol a szakemberek találkoznak."
    },
    "ko": {
        "hero-title": "3월 11일 | 국제 공구 숭배의 날",
        "hero-description": "도구를 존중하고, 작업을 즐기세요. 도구가 존중받을 때, 명확성, 자신감, 그리고 작업에 대한 자부심으로 보답합니다.",
        "season": "시즌 살펴보기",
        "why": "왜 KING TONY인가",
        "new-items": "신제품",
        "learn-more": "더 알아보기",
        "our-stores": "매장 <br> 위치",
        "stores-description": f"는 전 세계에 위치해 있습니다; 미주, 유럽, 아프리카, 중동, 아시아 및 오세아니아에서 {make_link(link_dist, '우리의 존재', 'our-locations-link')}를 찾을 수 있습니다.",
        "reliable-support": "신뢰할 수 있는<br>지원",
        "support-description": f"전문가를 위해 만들어졌습니다. 언제든지 의지할 수 있는 {make_link(link_support, '지원')}이 뒷받침합니다.",
        "join-us": "함께 하세요",
        "join-description": f"{make_link(link_community, 'KING TONY 커뮤니티')}에 가입하여 여정에 동참하고 KING TONY와 함께 성장하세요 — 전문가들이 모이는 곳."
    }
}

target_langs = list(translations.keys())

for lang in target_langs:
    file_path = os.path.join(lang_dir, f"{lang}.json")
    
    if os.path.exists(file_path):
        try:
            with open(file_path, 'r', encoding='utf-8') as f:
                data = json.load(f)
            
            # Update data with translations
            if lang in translations:
                for key, value in translations[lang].items():
                    data[key] = value
            
            with open(file_path, 'w', encoding='utf-8') as f:
                json.dump(data, f, ensure_ascii=False, indent=2)
            
            print(f"Updated {file_path}")
            
        except Exception as e:
            print(f"Error updating {lang}.json: {e}")

print("Done.")
