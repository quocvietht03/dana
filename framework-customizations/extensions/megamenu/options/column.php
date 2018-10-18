<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_column_width' => array(
		'label' => __('Column Width', 'dana'),
		'desc' => __('Please enter number with px or % for column width (default: 210px)', 'dana'),
		'type' => 'short-text',
		'value' => '250px'
	),
	'menu_mega_column_padding' => array(
		'label' => __('Padding', 'dana'),
		'desc' => __('Please enter number with px or % for column padding (default: 0px 10px)', 'dana'),
		'type' => 'short-text',
		'value' => '0px 10px'
	),
);