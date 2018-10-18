<?php
//vc_section
vc_add_params( 'vc_section', array(
	array(
		'type' => 'dropdown',
		'heading' => 'Particles Effect',
		'param_name' => 'particles_effect',
		'value' => array(
			'None' => 'none',
			'Default' => 'default',
			'Nasa' => 'nasa',
			'Bubble' => 'bubble',
			'Snow' => 'snow',
			'Nyan' => 'nyan',
			'Custom' => 'custom'
		),
		'group' => __('Particles', 'dana'),
		'description' => esc_html__( 'Enable particles effect in this section.', 'dana' )
	),
	array(
		'type' => 'textarea',
		'heading' => "particles Json",
		'param_name' => 'particles_json',
		'value' => '',
		'group' => __('Particles', 'dana'),
		'dependency' => array(
			'element'=>'particles_effect',
			'value'=> 'custom'
		),
		'description' => __( 'Enter text json config particles effect.', 'dana' )
	)
) );

//vc_row
vc_add_params( 'vc_row', array(
	array(
		'type' => 'dropdown',
		'heading' => 'Particles Effect',
		'param_name' => 'particles_effect',
		'value' => array(
			'None' => 'none',
			'Default' => 'default',
			'Nasa' => 'nasa',
			'Bubble' => 'bubble',
			'Snow' => 'snow',
			'Nyan' => 'nyan',
			'Custom' => 'custom'
		),
		'group' => __('Particles', 'dana'),
		'description' => esc_html__( 'Enable particles effect in this section.', 'dana' )
	),
	array(
		'type' => 'textarea',
		'heading' => "particles Json",
		'param_name' => 'particles_json',
		'value' => '',
		'group' => __('Particles', 'dana'),
		'dependency' => array(
			'element'=>'particles_effect',
			'value'=> 'custom'
		),
		'description' => __( 'Enter text json config particles effect.', 'dana' )
	)
) );

//vc_row
vc_add_params( 'vc_row', array(
	array(
		'type' => 'checkbox',
		'heading' => 'Row Container',
		'param_name' => 'row_container',
		'value' => '',
		'weight' => 1,
		'description' => esc_html__( 'Enable row container.', 'dana' )
	),
	array(
		'type' => 'checkbox',
		'heading' => 'Columns no gap',
		'param_name' => 'columns_no_gap',
		'value' => '',
		'weight' => 1,
		'description' => esc_html__( 'Enable no gap between columns in row.', 'dana' )
	)
) );

vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "gap" );

//vc_custom_heading
vc_add_param( 'vc_custom_heading', array(
    'type' => 'textarea',
    'heading' => 'Custom Style',
    'param_name' => 'custom_style',
    'value' => '',
    'description' => esc_html__( 'Enter custom style for heading element', 'dana' ),
	'group' => __('Extra Options', 'dana')
) );

// vc_hoverbox
vc_add_param( 'vc_hoverbox', array(
    'type' => 'textfield',
    'heading' => 'Oder Number',
    'param_name' => 'oder_number',
    'value' => '',
	'weight' => 1,
    'description' => esc_html__( 'Enter oder number.', 'dana' )
) );
