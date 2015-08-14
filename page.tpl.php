<div id="page-wrapper">
	<div id="page" class="wrapper">

  <div id="top-bar">
    <div class="user-call-links hidden">
    	<?php
      	global $user;
				if($user->uid){
	    ?>
          <div class="home-action-butons">
                    <a class="call-to-action" href="<?php print url('user'); ?>"><?php print t('My Account'); ?></a>
                    <a class="call-to-action" href="<?php print url('user/'.$user->uid.'/edit'); ?>"><?php print t('Edit'); ?></a>
                    <a class="call-to-action" href="<?php print url('user/logout'); ?>"><?php print t('Logout'); ?></a>                    
                    </div>   
		<?php } else{ ?>
        <div class="home-action-butons">
		  <a class="call-to-action" href="<?php print url('user/register'); ?>"><?php print t('Register'); ?></a>
          <a class="call-to-action" href="<?php print url('user/login'); ?>"><?php print t('Login'); ?></a>
        </div>
         <?php } ?>
      </div>
       
    <div id="top-icons" class="right hidden">
			<a id="follow-twitter" class="follow-icon" target="_blank" href="http://twitter.com/arabiaweddings">
                    Follow us on Twitter</a>
			<a id="follow-facebook" class="follow-icon" target="_blank" href="http://www.facebook.com/ArabiaWeddings">
                    Our Facebook page</a>
      <a id="follow-pinterest" class="follow-icon" target="_blank" href="http://pinterest.com/arabiaweddings">
                    Pinterest</a>
      <a id="follow-instagram" class="follow-icon" target="_blank" href="http://instagram.com/arabiaweddings">instagram</a>
      <a id="follow-rss" class="follow-icon" target="_blank" href="/rss"> RSS Feed</a>
         <?php print render($page['search']);?>
	  </div>
	</div>
  
	<div id="header">
		
    	<div id="logo">
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo ?>" alt="<?php print $site_name;?>" title="<?php print $site_name;?>" /></a>
			</div>
      
<div id="main_menu">
				<?php
				$s=array('class="menu"');
				$r=array('class="mobile-menu"');
				print str_replace($s,$r,render($page['main_menu']));?>
                
				<div class="clear"></div>
			</div>
	
	</div>
  <div id="lang" class="right hidden">
            <?php print render($page['language_switcher']);?>
			</div>
  <div class="header-col-two">
		<div class="logo_intro hidden"><?php print t('The #1 Online Wedding Planning Resource in the Middle East');?></div>
            </div>
            
            <div class="clear"></div>

<div class="clear"></div>

<div class="leader-board">
<?php print render($page['leaderboard']);?>
</div>

<div class="clear"></div>

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb" class="hidden"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php print $messages; ?>

    <div id="main-wrapper"><div id="main" class="clearfix">

      <div id="content" class="column"><div class="section">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div></div> <!-- /.section, /#content -->

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>

    </div></div> <!-- /#main, /#main-wrapper -->

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->

  </div>
</div> <!-- /#page, /#page-wrapper -->