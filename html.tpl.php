<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <?php if(arg(0)=='node'&&(check_node_type(arg(1))=='videos'||check_node_type(arg(1))=='music')){print '<meta property="og:image" content="'.trim(views_embed_view('Videos','panel_pane_4',arg(1))).'">';}?>
  <?php if($is_front){?>
  <?php if($language->language=='en'){
	  $des='Plan your wedding in Jordan and other Arab countries with Arabia Weddings; a useful online resource with rich content and planning tools to help Arab brides and grooms.';
	  $key='Arab wedding, Arab bride, Arab groom, wedding in Jordan, wedding planning tools, wedding ideas, wedding trends, bridal fashion, bridal dresses, wedding songs, real weddings in Jordan, wedding venues, wedding suppliers, honeymoon deals, wedding photos, bridal beauty, wedding news, celebrity weddings, wedding cakes, wedding flowers';
	  }else
	  {
	$des='موقع الكتروني يساعد العروس والعريس في فترة الخطوبة على تجهيز العروس والتحضير لحفل الزفاف. ويشمل موقع العروس فساتين زفاف وتسريحات ومكياج واغاني اعراس وحجز صالات الافراح وشهر العسل ونصائح وأفكار للعروس والمرأة بشكل عام.';
	$key='تجهيز العروس، عروس، موقع العروس, موقع الأعراس, موقع الزفاف, زفاف، عرس، خطبة، اعراس، عرايس، تنظيم حفلات الزفاف، فساتين زفاف، خطوبة، حفل زفاف، موقع العروس، عروض، صور، فيديو، اغاني افراح، دليل الشركات، نصائح للعروس، مقالات، جمال، ازياء، اعلانات، صحة، لياقة، كيك، ورد، كوش، مسكات، تسريحات عرايس، شهر العسل، اكسسوارات، ديكور، مجوهرات، قاعات افراح، موضة، موقع الزفاف، اخبار الزفاف';
}?>
<meta name="description" content="<?php print $des; ?>" />
<meta name="keywords" content="<?php print $key; ?>" />
<meta property="og:image" content="http://www.arabiaweddings.com/sites/all/themes/arabia/images/los.jpg" />
<?php }?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/arabia/css/style<?php if(get_lang()=='ar') print '-ar';  ?>.css" />
<link type="text/css" rel="stylesheet" media="all" href="/sites/all/themes/arabia/css/mobile<?php if(get_lang()=='ar') print '-ar';  ?>.css" />

<script type="text/javascript" src="http://www.arabiaweddings.com/files/MB_SDK_Web.js"></script>
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '416886695116987']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=416886695116987&amp;ev=NoScript" /></noscript>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?> onload="mbServiceInitialization('006-oZi02DQhsDIqYY64MbiLOcVOwl0N4l6eZo98F-i55c');">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<!--Crazy Egg code-->
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0023/3205.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>   
</body>
</html>