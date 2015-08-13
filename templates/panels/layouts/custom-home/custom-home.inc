<?php
// $Id: onecol.inc,v 1.1.2.3 2010/06/22 15:54:24 merlinofchaos Exp $

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Home'),
  'category' => t('Arabia Weddings'),
  'icon' => 'custom-home.png',
  'theme' => 'panels-custom-home',
  'panels' => array(
	'top1'=> t('Top 1'),
	'top2left'=> t('Top 2 Left'),
	'top2right'=> t('Top 2 Right'),
	'top3'=> t('Top 3'),
	'top4'=> t('Top 4')
	)
);
