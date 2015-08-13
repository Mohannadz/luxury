<div id="inner">

<?php if($content['timeline']){?>
    <div class="inner-box col-3-3rd inner-timeline"><?php print $content['timeline']; ?></div>
<?php }?>


  <div id="top1" class="inner-row">
     <div id="top2right" class="sidebar"><?php print $content['row1right']; ?></div>

	<div id="top2left" class=""><?php print $content['row1left']; ?></div>
</div>

  <?php if($content['row2left']){?><div id="top2" class="inner-row"><?php print $content['row2left']; ?></div><?php }?>
 
</div>