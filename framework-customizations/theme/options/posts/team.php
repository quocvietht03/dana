<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'team_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'team-meta' => array(
				'title' => __('Meta Fields', 'dana'),
				'type' => 'tab',
				'options' => array(
					'position' => array(
						'type'  => 'text',
						'value' => 'Ceo/Founder',
						'label' => __('Position', 'dana'),
						'desc'  => __('Please, enter position of member.', 'dana'),
					),
					'email' => array(
						'type'  => 'text',
						'value' => 'bearsthemes@gmail.com',
						'label' => __('Email', 'dana'),
						'desc'  => __('Please, enter email of member.', 'dana'),
					),
					'phone' => array(
						'type'  => 'text',
						'value' => '(1200)-0989-568-331',
						'label' => __('Phone', 'dana'),
						'desc'  => __('Please, enter phone number of member.', 'dana'),
					),
					
				),
			),
			'team-social' => array(
				'title' => __('Social', 'dana'),
				'type' => 'tab',
				'options' => array(
					'social' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Facebook',
								'icon' => 'fa fa-facebook',
								'link' => '#'
							),
							array(
								'title' => 'Twitter',
								'icon' => 'fa fa-twitter',
								'link' => '#'
							),
							array(
								'title' => 'Google Plus',
								'icon' => 'fa fa-google-plus',
								'link' => '#'
							)
						),
						'label' => __('Social', 'dana'),
						'desc'  => __('Please configs social of member', 'dana'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Title', 'dana'),
								'desc'  => __('Please, enter title of social item.', 'dana'),
							),
							'icon' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Icon', 'dana'),
								'desc'  => __('Please, enter icon of social item.', 'dana'),
							),
							'link' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Url(Link)', 'dana'),
								'desc'  => __('Please, enter link of social item.', 'dana'),
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