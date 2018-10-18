<?php
// Colors
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Colors', 'dana' ),
	'id'               => 'bt_colors',
	'icon'             => 'el el-tint',
	'fields'           => array(
		array(
			'id'       => 'main_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Main Color', 'dana' ),
			'subtitle' => esc_html__( 'Control the main highlight color throughout the theme. Class apply: bt-main-color', 'dana' ),
			'default'  => '#fab702',
			'output'   => array('.bt-main-color')
		),
		array(
			'id'       => 'secondary_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Secondary Color', 'dana' ),
			'subtitle' => esc_html__( 'Control the secondary highlight color throughout the theme. Class apply: bt-secondary-color', 'dana' ),
			'default'  => '#1ab7ea',
			'output'   => array('.bt-secondary-color')
		),
		array(
			'id'       => 'link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Link Color', 'dana' ),
			'subtitle' => esc_html__( 'Controls the color of all text links.', 'dana' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#fab702',
			),
			'output'   => array('a, .bt-link-color')
		),
		
	)
) );
