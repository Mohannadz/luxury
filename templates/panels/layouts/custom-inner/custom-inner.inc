<?php
// $Id: onecol.inc,v 1.1.2.3 2010/06/22 15:54:24 merlinofchaos Exp $

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Inner pages'),
  'category' => t('Inner pages'),
  'icon' => 'custom-inner.png',
  'theme' => 'panels-custom-inner',
  'regions' => array(
    'timeline'=> t('Timeline'),
    'row1left'=> t('Articles'),
	'row1right'=> t('Killer'),
    'row2left'=> t('Row 2 left'),
	'row2middle'=> t('Row 2 middle'),
	'row2right'=> t('Row 2 right'),
    'row3left'=> t('Row 3 left'),
	'row3right'=> t('Row 3 right'),
	'row3middle'=> t('Row 3 middle'),
	'rowsongs'=> t('Row Songs'),
	'row4left'=> t('Row 4 left'),
	'row4right'=> t('Row 4 right'),
	'row5'=> t('Row 5 planning tools')
	)
	
	);
