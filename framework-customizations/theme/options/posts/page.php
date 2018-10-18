<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$menu_slug_opt = array();
$menus_obj = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
$menu_slug_opt['auto'] = 'Auto';
foreach ( $menus_obj as $menu_obj ) {
	$menu_slug_opt[$menu_obj->slug] = $menu_obj->name;
}

$options = array(
	'page_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'page_general_setting' => array(
				'title' => __('General', 'dana'),
				'type' => 'tab',
				'options' => array(
					'page_titlebar' => array(
						'type' => 'switch',
						'label' => __('Disable Title Bar', 'dana'),
						'desc' => __('Turn on to disable title bar in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					
				),
			),
			'page_header_setting' => array(
				'title' => __('Header', 'dana'),
				'type' => 'tab',
				'options' => array(
					'header_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Header Layout', 'dana'),
						'desc'  => __('Select a header layout in current page', 'dana'),
						'choices' => array(
							'default' => __('Default', 'dana'),
							'1' => __('Header 1', 'dana'),
							'2' => __('Header 2', 'dana'),
							'3' => __('Header 3', 'dana'),
							'onepage' => __('Header One Page', 'dana'),
							'onepagescroll' => __('Header One Page Scroll', 'dana'),
							'vertical' => __('Header Vertical', 'dana'),
							'minivertical' => __('Header Mini Vertical', 'dana')
						)
					),
					'header_fullwidth' => array(
						'type' => 'switch',
						'label' => __('Disable Full Width (100%)', 'dana'),
						'desc' => __('Turn on to disable header full width (100%) in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'header_absolute' => array(
						'type' => 'switch',
						'label' => __('Disable Header Absolute', 'dana'),
						'desc' => __('Turn on to disable header absolute in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'header_top' => array(
						'type' => 'switch',
						'label' => __('Disable Header Top', 'dana'),
						'desc' => __('Turn on to disable header top in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'header_logo' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo', 'dana'),
						'desc'  => __('Select image to change the logo in current page.', 'dana'),
					),
					'header_logo_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'dana'),
						'desc'  => __('Controls the height of the logo in current page. EX: 50', 'dana')
					),
					'header_menu_assign' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => __('Menu Assign', 'dana'),
						'desc'  => __('Select a menu assign of header layout in current page', 'dana'),
						'choices' => $menu_slug_opt
					),
					'header_stick' => array(
						'type' => 'switch',
						'label' => __('Disable Header Sticky', 'dana'),
						'desc' => __('Turn on to disable header stick in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'header_logo_stick' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo Stick', 'dana'),
						'desc'  => __('Select image to change the logo stick in current page.', 'dana'),
					),
					'header_logo_stick_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'dana'),
						'desc'  => __('Controls the height of the logo stick in current page. EX: 40', 'dana')
					),
					'mobile_header_top' => array(
						'type' => 'switch',
						'label' => __('Disable Header Top Mobile', 'dana'),
						'desc' => __('Turn on to disable header top mobile in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'logo_mobile' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo Mobile', 'dana'),
						'desc'  => __('Select image to change the logo mobile in current page.', 'dana'),
					),
					'logo_mobile_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'dana'),
						'desc'  => __('Controls the height of the logo mobile in current page. EX: 30', 'dana')
					),
					
				),
			),
			'page_titlebar_setting' => array(
				'title' => __('Title Bar', 'dana'),
				'type' => 'tab',
				'options' => array(
					'titlebar_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Title Bar Layout', 'dana'),
						'desc'  => __('Select a title bar layout in current page', 'dana'),
						'choices' => array(
							'default' => __('Default', 'dana'),
							'1' => __('Title Bar 1', 'dana'),
							'2' => __('Title Bar 2', 'dana')
						)
					),
					'page_titlebar_space' => array(
						'type' => 'switch',
						'label' => __('Disable Title Bar Space', 'dana'),
						'desc' => __('Turn on to disable space between title bar and content in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'page_titlebar_background' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Title Bar Background', 'dana'),
						'desc'  => __('Select image to change the title bar background in current page.', 'dana'),
					),
				),
			) ,
			'page_footer_setting' => array(
				'title' => __('Footer', 'dana'),
				'type' => 'tab',
				'options' => array(
					'footer_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Footer Layout', 'dana'),
						'desc'  => __('Select a footer layout in current page', 'dana'),
						'choices' => array(
							'default' => __('Default', 'dana'),
							'1' => __('Footer 1', 'dana'),
							'2' => __('Footer 2', 'dana')
						)
					),
					'page_footer_space' => array(
						'type' => 'switch',
						'label' => __('Disable Footer Space', 'dana'),
						'desc' => __('Turn on to disable space between footer and content in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'footer_fixed' => array(
						'type' => 'switch',
						'label' => __('Disable Fixed', 'dana'),
						'desc' => __('Turn on to disable footer fixed in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'footer_fullwidth' => array(
						'type' => 'switch',
						'label' => __('Disable Full Width (100%)', 'dana'),
						'desc' => __('Turn on to disable footer full width (100%) in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
					'footer_top' => array(
						'type' => 'switch',
						'label' => __('Disable Footer Top', 'dana'),
						'desc' => __('Turn on to disable footer top in current page.', 'dana'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'dana'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'dana'),
						),
					),
				),
			),
		),
	),
	
);