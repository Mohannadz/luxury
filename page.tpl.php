<div id="page-wrapper">
<div id="top-bar">
  <div class="wrapper">
  	<div id="lang" class="right"><?php print render($page['language_switcher']);?> </div>
    <div class="user-call-links right">
      <?php
      	global $user;
				if($user->uid){
	    ?>
      <div class="home-action-butons"> <a class="call-to-action" href="<?php print url('user'); ?>"><?php print t('My Account'); ?></a> <a class="call-to-action" href="<?php print url('user/'.$user->uid.'/edit'); ?>"><?php print t('Edit'); ?></a> <a class="call-to-action" href="<?php print url('user/logout'); ?>"><?php print t('Logout'); ?></a> </div>
      <?php } else{ ?>
      <div class="home-action-butons"> <a class="call-to-action" href="<?php print url('user/register'); ?>"><?php print t('Register'); ?></a> <a class="call-to-action" href="<?php print url('user/login'); ?>"><?php print t('Login'); ?></a> </div>
      <?php } ?>
    </div>
    <div class="collect left"><?php print t("Are you getting married?");?> <a href="<?php print url("user/register");?>"><?php print t("Get Started");?></a></div>
    <div class="search-box"><?php print render($page['search']);?></div>
  </div>
</div>
<div id="page" class="wrapper">
  <div id="header">
  	<div id="logo"><a href="<?php print url("luxury"); ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo ?>" alt="<?php print $site_name;?>" title="<?php print $site_name;?>" /></a></div>
    <div id="main_menu">
        <?php
				$s=array('class="menu"');
				$r=array('class="mobile-menu"');
				print str_replace($s,$r,render($page['main_menu']));?>
        <div class="clear"></div>
      </div>
  </div>
    <?php if (($breadcrumb && arg(1) != 364381) && ( $breadcrumb && arg(1) != 375319)): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    <?php if(arg(1) != 364381 && arg(1) != 375319) {?>
    <div class="leader-board"> <?php print render($page['leaderboard']);?> </div>
    <div class="clear"></div>
    <?php } ?>
    <?php print $messages; ?>
    <div id="main-wrapper">
      <div id="main" class="clearfix">
        <div id="content" class="column">
          <div class="section">
            <?php if ($page['highlighted']): ?>
            <div id="highlighted"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <a id="main-content"></a> <?php print render($title_prefix); ?>
            <?php if (($title  && arg(1) != 364381) && ($title && arg(1) != 375319) ): ?>
            <h1 class="title" id="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
        </div>
        <!-- /.section, /#content -->
        
        <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar">
          <div class="section"> <?php print render($page['sidebar_first']); ?> </div>
        </div>
        <!-- /.section, /#sidebar-first -->
        <?php endif; ?>
        <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar">
          <div class="section"> <?php print render($page['sidebar_second']); ?> </div>
        </div>
        <!-- /.section, /#sidebar-second -->
        <?php endif; ?>
      </div>
    </div>
    <!-- /#main, /#main-wrapper --> 
  </div>
</div>
<!-- /#page, /#page-wrapper -->

<footer>
  <div class="wrapper">
    <div class="footer_item"> <?php print render($page['footer_menu_1']);?> </div>
    <!--footer_item-->
    <div class="footer_item"> <?php print render($page['footer_menu_2']);?> </div>
    <!--footer_item-->
    <div class="footer_item"> <?php print render($page['footer_menu_3']);?> </div>
    <!--footer_item-->
    <div class="footer_item last"> <?php print render($page['footer_menu_4']);?> <?php print render($page['newsletter_footer']);?> </div>
  </div>
</footer>
<div class="footer-message"><span><?php print t("All Rights Reserved ") .date('Y'); ?></span></div>
