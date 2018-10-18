<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'mega_menu_item_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label' => esc_html__( 'Type', 'dana' ),
				'desc' => esc_html__( 'Please select menu type', 'dana' ),
				'value' => '',
				'choices' => array(
					'default' => __('Default', 'dana'),
					'sidebar' => __('Sidebar', 'dana'),
				),
			),
		),
		'choices' => array(
			'sidebar' => array(
				'sidebar_id' => array(
					'type' => 'select',
					'label' => esc_html__( 'Sidebar', 'dana' ),
					'desc' => esc_html__( 'Please select sitebar', 'dana' ),
					'value' => '',
					'choices' => dana_get_sidebars(),
				),
			),
		),
	),
	'badge' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'selected' => array(
				'type' => 'switch',
				'value' => 'no',
				'label' => __('Badge', 'dana'),
				'left-choice' => array(
					'value' => 'no',
					'label' => __('No', 'dana'),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => __('Yes', 'dana'),
				)
			),
		),
		'choices' => array(
			'yes' => array(
				'badge_group' => array(
					'type' => 'group',
					'attr' => array('class' => ''),
					'options' => array(
						'badge_text' => array(
							'type' => 'short-text',
							'html' => '',
							'value' => '',
							'label' => __('Text', 'dana'),
						),
						'badge_background_color' => array(
							'value' => '#E23F3F',
							'type' => 'color-picker',
							'label' => __('Background Color', 'dana'),
						),
						'badge_color' => array(
							'value' => '#FFFFFF',
							'type' => 'color-picker',
							'label' => __('Color', 'dana'),
						),
					),
				),
			),
		),
	),
);
