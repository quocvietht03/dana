<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => __('Type', 'dana'),
				'value' => 'customize',
				'choices' => array(
					'customize' => __('Customize', 'dana'),
					'fullwidth' => __('Fullwidth', 'dana'),
				),
			)
		),
		'choices' => array(
			'customize' => array(
				'menu_mega_container_width' => array(
					'label' => __('Width', 'dana'),
					'desc' => __('Please enter number with px for container width (default: 840px)', 'dana'),
					'type' => 'short-text',
					'value' => '1000px'
				),
				'menu_mega_container_position' => array(
					'label' => __('Position', 'dana'),
					'desc' => __('Select the sub menu display position', 'dana'),
					'type' => 'radio',
					'value' => 'menu-item-pos-left',
					'choices' => array(
						'menu-item-pos-left' => __('Left', 'dana'),
						'menu-item-pos-center' => __('Center', 'dana'),
						'menu-item-pos-right' => __('Right', 'dana'),
					),
					'inline' => true,
				),
			),
		),
	),
	'menu_mega_container_bg' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => __('Background Type', 'dana'),
				'value' => 'color',
				'choices' => array(
					'color' => __('Color', 'dana'),
					'image' => __('Image', 'dana'),
				),
			)
		),
		'choices' => array(
			'color' => array(
				'bg_color' => array(
					'label' => esc_html__( 'Background Color', 'dana' ),
					'desc'  => esc_html__( 'Choose background color for container mega menu (default: #f1f4fb)', 'dana' ),
					'type'  => 'color-picker',
					'value' => '#ffffff',
				),
			),
			'image' => array(
				'bg_image' => array(
					'label' => esc_html__( 'Background Image', 'dana' ),
					'desc'  => esc_html__( 'Choose background image for container mega menu', 'dana' ),
					'type'  => 'upload',
				),
				'bg_image_repeat' => array(
					'label' => esc_html__( 'Background Repeat', 'dana' ),
					'desc'  => esc_html__( 'Choose background repeat for container mega menu', 'dana' ),
					'type' => 'short-select',
					'value' => 'no-repeat',
					'choices' => array(
						'no-repeat' => __('No Repeat', 'dana'),
						'repeat' => __('Repeat', 'dana'),
					),
				),
				'bg_image_size' => array(
					'label' => esc_html__( 'Background Size', 'dana' ),
					'desc'  => esc_html__( 'Choose background size for container mega menu', 'dana' ),
					'type' => 'short-select',
					'value' => 'cover',
					'choices' => array(
						'cover' => __('Cover', 'dana'),
						'contain' => __('Contain', 'dana'),
					),
				),
				'bg_image_position' => array(
					'label' => esc_html__( 'Background Position', 'dana' ),
					'desc'  => esc_html__( 'Please enter background position for container mega menu (default: center center)', 'dana' ),
					'type' => 'short-text',
					'value' => 'center center',
				),
			),
		),
	),
	'menu_mega_row_padding' => array(
		'label' => __('Padding', 'dana'),
		'desc' => __('Please enter number with px or % for row padding (default: 15px 10px)', 'dana'),
		'type' => 'short-text',
		'value' => '15px 10px'
	),
);
