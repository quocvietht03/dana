<?php
// Team
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Team', 'dana' ),
	'id'               => 'bt_team',
	'icon'             => 'el el-user',
	'fields'           => array(
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Team', 'dana' ),
	'id'               => 'bt_single_team',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_team_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'dana' ),
			'default'  => false
		),
		array(
			'id'       => 'single_team_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'dana' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('single_team_fullwidth' , '=', '1'),
			'output'    => array('.single-team .bt-main-content')
		),
		array(
			'id'            => 'single_team_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'dana' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'dana' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'single_team_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_team_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'dana' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'dana' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('single_team_titlebar' , '=', '1'),
			'output'    => array('.single-team .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'single_team_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Main Content Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the top/bottom padding the content.', 'dana' ),
			'default'  => array(
				'padding-top' => '0px',
				'padding-bottom' => '0px'
			),
			'output'   => array('.single-team .bt-main-content')
		),
	)
) );
