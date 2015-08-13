<?php
// $Id: onecol.inc,v 1.1.2.3 2010/06/22 15:54:24 merlinofchaos Exp $

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Flat Inner pages'),
  'category' => t('Inner pages'),
  'icon' => 'custom-inner-flat.png',
  'theme' => 'panels-custom-inner-flat',
  'regions' => array(
    'timeline'=> t('Timeline'),
    'row1left'=> t('Content'),
	'row1right'=> t('Sidebar'),
    'row2left'=> t('Row 2')
	)
	
);