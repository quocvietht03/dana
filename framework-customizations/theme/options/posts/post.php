<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'post_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'post_general' => array(
				'title' => __('General', 'dana'),
				'type' => 'tab',
				'options' => array(
					'titlebar_background' => array(
						'label' => esc_html__( 'Title Bar Background', 'dana' ),
						'desc'  => esc_html__( 'Upload title bar background image.', 'dana' ),
						'type'  => 'upload',
					),
				),
			),
			'post_gallery' => array(
				'title' => __('Gallery', 'dana'),
				'type' => 'tab',
				'options' => array(
					'gallery_images' => array(
						'label' => esc_html__( 'Add Images', 'dana' ),
						'desc'  => esc_html__( 'Upload gallery images.', 'dana' ),
						'type'  => 'multi-upload',
					),
				),
			),
			'post_video' => array(
				'title' => __('Video', 'dana'),
				'type' => 'tab',
				'options' => array(
					'video_url' => array(
						'label' => esc_html__( 'Video Url', 'dana' ),
						'desc'  => esc_html__( 'Please video url(vimeo/youtube/mp4). Ex: https://www.youtube.com/embed/YE7VzlLtp-4?rel=0', 'dana' ),
						'type'  => 'text',
					),
					'video_poster' => array(
						'label' => esc_html__( 'Add Image', 'dana' ),
						'desc'  => esc_html__( 'Upload video poster image.', 'dana' ),
						'type'  => 'upload',
					),
					'video_caption' => array(
						'label' => esc_html__( 'Video Caption', 'dana' ),
						'desc'  => esc_html__( 'Please video caption.', 'dana' ),
						'type'  => 'text',
					),
				),
			),
			'post_audio' => array(
				'title' => __('Audio', 'dana'),
				'type' => 'tab',
				'options' => array(
					'audio_type' => array(
						'type' => 'multi-picker',
						'label' => false,
						'desc' => false,
						'picker' => array(
							'type' => array(
								'type' => 'short-select',
								'label' => __('Audio Types', 'dana'),
								'desc' => __('Choose the audio type.', 'dana'),
								'value' => 'html5',
								'choices' => array(
									'html5' => __('HTML5', 'dana'),
									'embed' => __('Embed', 'dana')
								),
							),
						),
						'choices' => array(
							'html5' => array(
								'format' => array(
									'type'  => 'short-select',
									'value' => 'mp3',
									'label' => __('Format', 'dana'),
									'desc'  => __('Choose the audio format.', 'dana'),
									'choices' => array(
										'audio/mpeg' => __('MP3', 'dana'),
										'audio/ogg' => __('Ogg', 'dana'),
										'audio/wav' => __('Wav', 'dana')
									)
								),
								'src' => array(
									'label' => __('Src', 'dana'),
									'desc' => __('Enter url audio (Ex: http://yourdomain.com/audio.mp3)', 'dana'),
									'type' => 'text',
									'value' => ''
								),
							),
							'embed' => array(
								'iframe' => array(
									'label' => __('Embed', 'dana'),
									'desc' => __('Please enter embed code(SoundCloud, ...)', 'dana'),
									'type' => 'textarea',
									'value' => '',
								),
							),
							
						),
					),
				),
			) ,
			'post_quote' => array(
				'title' => __('Quote', 'dana'),
				'type' => 'tab',
				'options' => array(
					'quote_text' => array(
						'label' => esc_html__( 'Quote Text', 'dana' ),
						'desc'  => esc_html__( 'Please enter quote.', 'dana' ),
						'type'  => 'textarea',
					),
				),
			),
			'post_link' => array(
				'title' => __('Link', 'dana'),
				'type' => 'tab',
				'options' => array(
					'url' => array(
						'label' => esc_html__( 'Url', 'dana' ),
						'desc'  => esc_html__( 'Please enter url.', 'dana' ),
						'type'  => 'text',
					),
				),
			),
			
		),
	),
	
);
