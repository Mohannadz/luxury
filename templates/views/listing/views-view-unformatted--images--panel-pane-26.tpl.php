<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $counter=1; foreach ($rows as $id => $row): ?>
  <div<?php if($counter%3==0) $last=" last"; else $last=""; if ($classes_array[$id]) { print ' class="' . $classes_array[$id].$last.'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php if($counter%3==0){print '<div class="clear"></div>'; } $counter+=1; endforeach; ?>