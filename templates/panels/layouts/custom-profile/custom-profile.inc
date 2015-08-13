<?php
// $Id: onecol.inc,v 1.1.2.3 2010/06/22 15:54:24 merlinofchaos Exp $

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('User Profiles'),
  'category' => t('Profiles'),
  'icon' => 'custom-profile.png',
  'theme' => 'panels-custom-profile',
  'regions' => array(
    'row1left'=> t('Left'),
	'row1right'=> t('Right'),
	'row2full'=> t('Content'),
	'disabled'=> t('Disabled')
	)
	
	);
