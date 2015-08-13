<div id="main_wrap">
  <div id="top-bar" class="wrapper">
    <div class="user-call-links">
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
       
      <div id="top-icons" class="right">
		<a id="follow-twitter" class="follow-icon" target="_blank" href="http://twitter.com/arabiaweddings">
                    Follow us on Twitter</a>
					<a id="follow-facebook" class="follow-icon" target="_blank" href="http://www.facebook.com/ArabiaWeddings">
                    Our Facebook page</a>
                    <a id="follow-pinterest" class="follow-icon" target="_blank" href="http://pinterest.com/arabiaweddings">
                    Pinterest</a>
                    <a id="follow-instagram" class="follow-icon" target="_blank" href="http://instagram.com/arabiaweddings">instagram</a><a id="follow-rss" class="follow-icon" target="_blank" href="<?php if(get_lang()=='ar') print '/ar';?>/rss"> RSS Feed</a>
         <?php print render($page['search']);?>
	  </div>
        </div>
		<div id="header" class="wrapper">
        	<div class="header-col-one">
            	<div id="logo">
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo ?>" alt="<?php print $site_name;?>" title="<?php print $site_name;?>" /></a>
			</div>
            	<div class="leader-board">
<?php print render($page['leaderboard']);?>
</div>
				<div class="l">
           <!-- BEGIN JS TAG - Arabia Weddings_HomePage_Mobile_320x50 < - DO NOT MODIFY -->
           <SCRIPT SRC="http://ib.adnxs.com/ttj?id=4943188&cb=[CACHEBUSTER]&pubclick=[INSERT_CLICK_TAG]" TYPE="text/javascript"></SCRIPT>
<!-- END TAG -->
         </div>           
            </div><div class="clear"></div>
       		<div class="header-col-two">
            	<div class="logo_intro"><?php print t('The #1 Online Wedding Planning Resource in the Middle East');?></div>
            </div><div class="clear"></div>
			<div id="main_menu">
				<?php
				$s=array('class="menu"');
				$r=array('class="mobile-menu"');
				print str_replace($s,$r,render($page['main_menu']));?>
                <div id="lang" class="right">
            <?php print render($page['language_switcher']);?>
			</div>
				<div class="clear"></div>
			</div><!--main_menu-->
		</div><!--header-->
        
        
  <?php if ($breadcrumb): ?>
  <div id="breadcrumbs">
    <div class="breadcrumb"><?php print $breadcrumb; ?></div>
  </div>
  <?php endif; ?>
  
      <div class="timeline wrapper">
       <?php print render($page['home_timeline']);?>
    </div>
  <?php 
  if(check_for_popular_content())
  print '<div height="260">'. views_embed_view('news','panel_pane_13').'</div>';
  ?>
  
  <!--header-->
  <h1 class="main_title wrapper"><?php print $title;?></h1> 
  <div id="main_cols_wrap" class="wrapper">
    <div id="left_col" class="left"  <?php if(check_for_wedding_website()) : print "style='width:100%;'";endif;?>>
      <div class="inner_main">
        <div class="inner_main_bottom">
          
          <div class="inner_content_wrap">
            <div class="tabs"><?php print render($tabs); ?></div>
            <?php if ($show_messages) { print $messages; } ?>
            <div class="inner_content_final">
              <?php if($page['registration_msg']){?>
              <div class=""> <?php print render($page['registration_msg']); ?> </div>
              <?php }?>
              <div><?php print render($page['content']); ?></div>
              <div class="clear"></div>
            </div>
          </div>
          <!--inner_content_wrap--> 
        </div>
        <!--inner_main_bottom-->
        <div class="clear"></div>
      </div>
      <!--inner_main--> 
    </div>
    <!--left_col-->
    
    <?php 
			$side=check_for_sidebar();
			if($side=='sidebar' && !check_for_wedding_website()){?>
    <div id="killer-banner"><?php print render($page['killer']); ?></div>    
    <div id="sidebar"><?php print render($page['sidebar']); ?></div>
    <!--sidebar-->
    <?php }else if($side=='deals-sidebar'&& !check_for_wedding_website()){ ?>
    <div id="deals-sidebar"> <?php print render($page['deals_sidebar']); ?> </div>
    <!--sidebar-->
    <?php } ?>
    <div class="clear"></div>
  </div>
  <!--main_cols_wrap--> 
  <!--footer-->
  <div id="footer">
    <div class="wrapper">
      <div class="footer_item"> <?php print render($page['footer_menu_1']);?> </div>
      <!--footer_item-->
      <div class="footer_item"> <?php print render($page['footer_menu_2']);?> </div>
      <!--footer_item-->
      <div class="footer_item"> <?php print render($page['footer_menu_3']);?> </div>
      <!--footer_item-->
      <div class="footer_item last"> <?php print render($page['footer_menu_4']);?>   <?php print render($page['newsletter_footer']);?> </div></div>
      <!--footer_item-->
  </div>
  <?php print render($page['character']);?> 
</div>
<!--main_wrap-->


<?php if(get_lang()=="en"){?>
<!-- Addthis -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f201add71f67f7d" async="async"></script>
<script>
var addthis_share = {
    templates : {
        twitter : "{{title}} {{url}} (via @arabiaweddings)"
    }
}
</script>

<?php }else {?>
<!-- Addthis -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53d08ea25fdbe419" async="async"></script>
<script>
var addthis_share = {
    templates : {
        twitter : "{{title}} {{url}} (via @arabiaweddings)"
    }
}
</script>
<?php }
?>