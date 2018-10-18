<?php
// Page
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Page', 'dana' ),
	'id'               => 'bt_page',
	'icon'             => 'el el-bookmark-empty',
	'fields'           => array(
		array(
			'id'       => 'page_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Page Comment', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to enable page comment.', 'dana' ),
			'default'  => true,
		),
		array(
			'id'            => 'sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'dana' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'dana' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
	)
) );
