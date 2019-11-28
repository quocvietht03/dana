<?php
// General
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'General', 'dana' ),
	'id'               => 'bt_general',
	'icon'             => 'el el-adjust-alt',
	'fields'           => array(
		array(
			'id'       => 'less_design',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Less Design', 'dana' ),
			'subtitle' => esc_html__( 'Enable less design to generate css over time...', 'dana' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_layout',
			'type'     => 'button_set',
			'title'    => __('Site Layout', 'dana'),
			'subtitle' => __('Control the site layout.', 'dana'),
			'options' => array(
				'wide' => __('Wide', 'dana'), 
				'boxed' => __('Boxed', 'dana'),
			 ), 
			'default' => 'wide'
		),
		array(
			'id'            => 'site_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Site Width', 'dana' ),
			'subtitle'      => esc_html__( 'Control the overall site width.', 'dana' ),
			'default'       => 1200,
			'min'           => 1200,
			'step'          => 1,
			'max'           => 1600,
			'display_value' => 'text',
			'required' 		=> array('site_layout' , '=', 'boxed')
		),
		array(
			'id'       => 'boxed_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Boxed Background', 'dana' ),
			'subtitle' => esc_html__( 'Control the background color of the boxed.', 'dana' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'boxed_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'         => false,
			'left'          => false,
			'title'    => esc_html__( 'Boxed Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the space top and bottom of boxed.', 'dana' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'body_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Body Background', 'dana' ),
			'subtitle' => esc_html__( 'Control the background of the body.', 'dana' ),
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('body'),
		),
		array(
			'id'            => 'mobile_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Mobile Width', 'dana' ),
			'subtitle'      => esc_html__( 'Controls the width to enable mobile.', 'dana' ),
			'default'       => 991,
			'min'           => 540,
			'step'          => 1,
			'max'           => 1199,
			'display_value' => 'text'
		),
		array(
			'id'       => 'particles_effect',
			'type'     => 'switch',
			'title'    => esc_html__( 'Particles Effect', 'dana' ),
			'subtitle' => esc_html__( 'Use particles effect.', 'dana' ),
			'default'  => false,
		),
		array(
			'id'       => 'nice_scroll_bar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Nice Scroll Bar', 'dana' ),
			'subtitle' => esc_html__( 'Use nice scroll bar.', 'dana' ),
			'default'  => false,
		),
		array(
			'id'=>'nice_scroll_bar_element',
			'type' => 'textarea',
			'title' => __('Nice Scroll Bar Elements', 'dana'), 
			'subtitle' => __('Add the html tags, element ID or class as you need. Ex: body,a,.class-name,#tag-id,...', 'dana'),
			'default' => 'html',
			'required' 		=> array('nice_scroll_bar' , '=', '1')
		),
		array(
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Back To Top', 'dana' ),
			'subtitle' => esc_html__( 'Control button back to top.', 'dana' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top_style',
			'type'     => 'select',
			'title'    => esc_html__( 'Back To Top Style', 'dana' ),
			'subtitle' => esc_html__( 'Select style button back to top.', 'dana' ),
			'options'  => array(
				'square' => esc_html__( 'Square', 'dana' ),
				'rounded' => esc_html__( 'Rounded', 'dana' ),
				'circle' => esc_html__( 'Circle', 'dana' )
			),
			'default'  => 'square',
			'required' 		=> array('back_to_top' , '=', '1')
		),
		array(
			'id'       => 'site_loading',
			'type'     => 'switch',
			'title'    => esc_html__( 'Site Loading', 'dana' ),
			'subtitle' => esc_html__( 'Control animation before site load complete.', 'dana' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_loading_spinner',
			'type'     => 'select',
			'title'    => esc_html__( 'Spinner Style', 'dana' ),
			'subtitle' => esc_html__( 'Select style spinner.', 'dana' ),
			'options'  => array(
				'spinner0' => esc_html__( 'Default', 'dana' ),
				'spinner1' => esc_html__( 'Style 1', 'dana' ),
				'spinner2' => esc_html__( 'Style 2', 'dana' ),
				'spinner3' => esc_html__( 'Style 3', 'dana' ),
				'spinner4' => esc_html__( 'Style 4', 'dana' ),
				'spinner5' => esc_html__( 'Style 5', 'dana' )
			),
			'default'  => 'spinner0',
			'required' 		=> array('site_loading' , '=', '1')
		),
		array(
			'id'       => 'site_loading_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Site Loading Background', 'dana' ),
			'subtitle' => esc_html__( 'Control the background of site loading.', 'dana' ),
			'default'  => array(
				'background-color' => '#fab702',
			),
			'required' 		=> array('site_loading' , '=', '1'),
			'output'    => array('#site_loading')
		),
		
	)
) );
