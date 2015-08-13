<div id="inner">

<?php if($content['timeline']){?>
    <div class="inner-box col-3-3rd inner-timeline"><?php print $content['timeline']; ?></div>
<?php }?>

<?php if($content['row1left']){?>
  <div id="top1" class="inner-row">
	<?php if($content['row1left']){?><div id="top2left" class="articles inner-box"><?php print $content['row1left']; ?></div><?php }?>
    <?php if($content['row1right']){?><div id="top2right" class="killer"><?php print $content['row1right']; ?></div><?php }?>
</div>
<?php }?>

  <?php if($content['row2left']){?><div id="top2" class="inner-row">
	<?php if($content['row2left']){?><div class="inner-box col-1-3rd"><?php print $content['row2left']; ?></div><?php }?>
    <?php if($content['row2middle']){?><div class="inner-box col-1-3rd"><?php print $content['row2middle']; ?></div><?php }?>
    <?php if($content['row2right']){?><div class="inner-box col-1-3rd last"><?php print $content['row2right']; ?></div><?php }?>
   </div>
   <?php }?>
  <?php if($content['row3left']){?><div class="inner-row">
	<?php if($content['row3left']){?><div class="inner-box col-1-3rd"><?php print $content['row3left']; ?></div><?php }?>
    <?php if($content['row3middle']){?><div class="inner-box col-1-3rd"><?php print $content['row3middle']; ?></div><?php }?>
    <?php if($content['row3right']){?><div class="inner-box col-1-3rd last"><?php print $content['row3right']; ?></div><?php }?>
   </div>
   <?php }?>
   
   
   <?php if($content['rowsongs']){?>
   <div class="inner-row">
    <div class="col-3-3rd songs"><?php print $content['rowsongs']; ?></div>
   </div>
   <?php }?>
   
   
   <?php if($content['row4left']){?>
   <div class="inner-row">
    <div class="inner-box col-3-3rd"><?php print $content['row4left']; ?></div>
   </div>
   <?php }?>
   
   <?php if($content['row5']){?>
   <div class="inner-row">
    <div class="inner-box col-3-3rd"><?php print $content['row5']; ?></div>
   </div>
   <?php }?>
</div>