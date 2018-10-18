<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'portfolio-layout' => array(
				'title' => __('Layout Settings', 'dana'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'dana' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'dana' ),
						'type'  => 'upload',
					),
					'layout' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => __('Layout', 'dana'),
						'desc'  => __('Select a layout of project', 'dana'),
						'choices' => array(
							'default' => __('Default(Image Left)', 'dana'),
							'layout1' => __('Layout 1(Image Top)', 'dana'),
							'layout2' => __('Layout 2(Image Bottom)', 'dana')
						)
					),
					'gallery-column' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Select Gallery Columns', 'dana'),
						'desc'  => __('Select gallery columns of project', 'dana'),
						'choices' => array(
							'col-md-12' => __('1 Column', 'dana'),
							'col-md-6' => __('2 Columns', 'dana'),
							'col-md-4' => __('3 Columns', 'dana'),
							'col-md-3' => __('4 Columns', 'dana')
						)
					),
					'gallery-space' => array(
						'type'  => 'short-text',
						'value' => '30',
						'label' => __('Gallery Space', 'dana'),
						'desc'  => __('Please, enter gallery space of project.', 'dana'),
					),
				),
			),
			'portfolio-meta' => array(
				'title' => __('Meta Fields', 'dana'),
				'type' => 'tab',
				'options' => array(
					'infor-title' =>  array( 
						'type' => 'text',
						'value' => 'Infor',
						'label' => __('Info Title', 'dana'),
						'desc'  => __('Please, enter info title of project.', 'dana'),
					),
					'info-option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Client:',
								'value' => 'Bearsthemes'
							),
							array(
								'title' => 'Date:',
								'value' => 'May 14, 2017'
							),
							array(
								'title' => 'Tags:',
								'value' => 'photography, agency, creative'
							),
							array(
								'title' => 'Project Type:',
								'value' => 'Multipurpose Template'
							)
						),
						'label' => __('Info Option', 'dana'),
						'desc'  => __('Please configs info option of project', 'dana'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Title', 'dana'),
								'desc'  => __('Please, enter title of project item.', 'dana'),
							),
							'value' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Value', 'dana'),
								'desc'  => __('Please, enter value of project item.', 'dana'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => __('Add', 'dana'),
						'sortable' => true,
					)
					
				),
			),
			
		)
	)
	
);