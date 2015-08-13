<?php
// $Id: onecol.inc,v 1.1.2.3 2010/06/22 15:54:24 merlinofchaos Exp $

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Wedding website'),
  'category' => t('Wedding websites'),
  'icon' => 'custom-wedding-website.png',
  'theme' => 'panels-custom-wedding-website',
  'regions' => array(
	'menu'=> t('Menu'),
    'content' => t('Content')
	)
);
