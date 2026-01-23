<?php require_once("meta.php")?> 
<?php


$SiteKeywords = ($SiteKeywords) ? $SiteKeywords : $System['SiteKeywords'.$cfg['Lang']];
$SiteDescription = ($SiteDescription) ? $SiteDescription : $System['SiteDescription'.$cfg['Lang']];
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="Author" content="艾傑網頁設計">
<meta name="copyright" content="艾傑網頁設計公司 www.artware.com.tw @2022">
<meta name="description" content="<?php echo $SiteDescription;?>">
<meta name="keywords" content="<?php echo $SiteKeywords;?>">
<meta name="facebook-domain-verification" content="sqcrugtmilcpbgvlfpzbhjxp8008oo" />
<link rel="icon" href="<?php echo $cfg['Url']?>images/favicon.png">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $cfg['Url']?>images/app/144x144.jpg">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $cfg['Url']?>images/app/114x114.jpg">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $cfg['Url']?>images/app/72x72.jpg">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $cfg['Url']?>images/app/57x57.jpg">

<title><?php echo $TitleName.$System['SiteName'.$cfg['Lang']].$TitleName1;?></title>
<meta property="og:title" content="<?php echo $TitleName.$System['SiteName'.$cfg['Lang']].$TitleName1;?>">
<meta property="og:type" content="website">
<meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']."/img/KINGTONY.png";?>">
<meta property="og:site_name" content="<?php echo $TitleName.$System['SiteName'.$cfg['Lang']].$TitleName1;?>">
<meta property="og:description" content="<?php echo $SiteDescription;?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700&family=Staatliches&display=swap" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="<?php echo $cfg['Url']?>css/bootstrap-grid.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $cfg['Url']?>css/swiper-bundle.min.css" />
<link href="<?php echo $cfg['Url']?>css/style.css?v=1.01" rel="stylesheet">

<link href="<?php echo $cfg['Url']?>css/animate.css" rel="stylesheet">
<?php 
 if(GetIP() != "60.248.221.4"){
    echo $System['GoogleAnalytics'.$Lang];
 }
?>

<!-- weglot.com翻譯網站 
<link rel="alternate" hreflang="en" href="https://www.kingtony.com">
<link rel="alternate" hreflang="es" href="https://es.kingtony.com">
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_8b26dbdd41cc53bef6321887bbf75cef2'
    });
</script>-->

<!--<link rel="alternate" hreflang="en" href="https://www.kingtony.com">
<link rel="alternate" hreflang="ar" href="https://ar.kingtony.com">
<link rel="alternate" hreflang="hu" href="https://hu.kingtony.com">
<link rel="alternate" hreflang="pl" href="https://pl.kingtony.com">
<link rel="alternate" hreflang="pt-br" href="https://pt-br.kingtony.com">
<link rel="alternate" hreflang="th" href="https://th.kingtony.com">
<link rel="alternate" hreflang="es" href="https://es.kingtony.com">
<link rel="alternate" hreflang="fr" href="https://fr.kingtony.com">
<link rel="alternate" hreflang="vi" href="https://vi.kingtony.com">
<link rel="alternate" hreflang="ru" href="https://ru.kingtony.com">
<link rel="alternate" hreflang="ko" href="https://ko.kingtony.com">-->
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_8b26dbdd41cc53bef6321887bbf75cef2'
    });
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '234223867329780');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=234223867329780&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/ab4c431a5f1b810da33195f3a/e153ebdc871c0376ce0e5cd62.js");</script>
<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
 #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
 /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    
.autocomplete-suggestions { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: 1px solid #999; background: #fff; cursor: default; overflow: auto; -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); cursor: pointer; }
.autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
.autocomplete-no-suggestion { padding: 2px 5px;}
.autocomplete-selected { background: #fff; }
.autocomplete-suggestions strong { font-weight: bold; color: #F00; }
.autocomplete-group { padding: 2px 5px; }
.autocomplete-group strong { font-weight: bold; font-size: 16px; color: #000; display: block; border-bottom: 1px solid #000; }
</style>