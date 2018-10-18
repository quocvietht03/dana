<?php
// Portfolio
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Portfolio', 'dana' ),
	'id'               => 'bt_portfolio',
	'icon'             => 'el el-folder-open',
	'fields'           => array(
		array(
			'id'       => 'portfolio_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'dana' ),
			'default'  => false
		),
		array(
			'id'       => 'portfolio_fullwidth_space',
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
			'required' 		=> array('portfolio_fullwidth' , '=', '1'),
			'output'    => array('.tax-fw-portfolio-category .bt-main-content')
		),
		array(
			'id'            => 'portfolio_columns',
			'type'          => 'slider',
			'title'         => esc_html__( 'Columns', 'dana' ),
			'subtitle'      => esc_html__( 'Controls the number columns of list items.', 'dana' ),
			'default'       => 1,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text'
		),
		array(
			'id'            => 'portfolio_sidebar_width',
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
			'id'       => 'portfolio_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'dana' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'dana' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('portfolio_titlebar' , '=', '1'),
			'output'    => array('.tax-fw-portfolio-category .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'portfolio_content_sapce',
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
			'output'   => array('.tax-fw-portfolio-category .bt-main-content')
		),
		array(
			'id'    => 'portfolio_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'dana' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the portfolio page.', 'dana' )
		),
		array(
			'id'       => 'portfolio_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'dana' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'dana' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '28px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'portfolio_title_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Title Color', 'dana' ),
			'subtitle' => esc_html__( 'Controls the color post title.', 'dana' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#fab702',
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title a')
		),
		array(
			'id'       => 'portfolio_title_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Title Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post title.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_title' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-title')
		),
		array(
			'id'       => 'portfolio_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'dana' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'dana' ),
			'default'  => 'full',
			'required' 		=> array('portfolio_featured' , '=', '1')
		),
		array(
			'id'       => 'portfolio_featured_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Featured Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post featured.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_featured' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-media')
		),
		array(
			'id'       => 'portfolio_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'dana' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'dana' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'portfolio_meta_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Meta Color', 'dana' ),
			'subtitle' => esc_html__( 'Controls the color post meta.', 'dana' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#fab702',
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'portfolio_meta_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Meta Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post meta.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('portfolio_meta' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'portfolio_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'dana' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_author_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Author Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'dana' ),
			'default'  => 'By:',
			'required' 		=> array('portfolio_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'dana' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'dana' ),
			'default'  => 'Date:',
			'required' 		=> array('portfolio_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_date_format',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Format', 'dana' ),
			'subtitle' => esc_html__( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'dana' ),
			'default'  => 'M d, Y',
			'required' 		=> array('portfolio_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'dana' ),
			'default'  => true,
			'required' 		=> array('portfolio_meta' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_meta_category_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'dana' ),
			'default'  => 'Category:',
			'required' 		=> array('portfolio_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'dana' ),
			'default'  => '55',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'dana' ),
			'default'  => '[...]',
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_excerpt_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Excerpt Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post excerpt.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '15px'
			),
			'required' 		=> array('portfolio_excerpt' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'portfolio_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'portfolio_readmore_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Read More Button Typography', 'dana' ),
			'subtitle' => esc_html__( 'These settings control the typography post read more button.', 'dana' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('portfolio_readmore' , '=', '1'),
			'output'   => array('.tax-fw-portfolio-category .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'portfolio_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'dana' ),
			'default'  => 'Read More',
			'required' 		=> array('portfolio_readmore' , '=', '1'),
		),
		array(
			'id'       => 'portfolio_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.tax-fw-portfolio-category .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Portfolio', 'dana' ),
	'id'               => 'bt_single_portolio',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'single_portolio_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'dana' ),
			'default'  => false
		),
		array(
			'id'       => 'single_portolio_fullwidth_space',
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
			'required' 		=> array('single_portolio_fullwidth' , '=', '1'),
			'output'    => array('.single-fw-portfolio .bt-main-content')
		),
		array(
			'id'            => 'single_portolio_sidebar_width',
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
			'id'       => 'single_portfolio_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portolio_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'dana' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'dana' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('single_portfolio_titlebar' , '=', '1'),
			'output'    => array('.single-fw-portfolio .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'single_portfolio_content_sapce',
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
			'output'   => array('.single-fw-portfolio .bt-main-content')
		),
		array(
			'id'       => 'single_portfolio_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'dana' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'dana' ),
			'default'  => 'full'
		),
		array(
			'id'       => 'single_portfolio_share',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Shares', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the share.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portolio_share_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Tags Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the share. Leave empty to use "Share:" label.', 'dana' ),
			'default'  => 'Share:',
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_facebook',
			'type'     => 'switch',
			'title'    => esc_html__( 'Facebook', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the facebook share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_twitter',
			'type'     => 'switch',
			'title'    => esc_html__( 'Twitter', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the twitter share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_google_plus',
			'type'     => 'switch',
			'title'    => esc_html__( 'Google Plus', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the google plus share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_linkedin',
			'type'     => 'switch',
			'title'    => esc_html__( 'Linkedin', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the linkedin share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_share_pinterest',
			'type'     => 'switch',
			'title'    => esc_html__( 'Pinterest', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the pinterest share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_portfolio_share' , '=', '1'),
		),
		array(
			'id'       => 'single_portolio_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .fw-portfolio')
		),
		array(
			'id'       => 'single_portfolio_related_post',
			'type'     => 'switch',
			'title'    => esc_html__( 'Related Post', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the related post.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_portfolio_related_post_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Related Post Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the related post. Leave empty to use "Portfolio Related" label.', 'dana' ),
			'default'  => 'Portfolio Related',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_post_count',
			'type'     => 'text',
			'title'    => esc_html__( 'Related Post Count', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter post count of the related post. Leave empty to use "3" for post count.', 'dana' ),
			'default'  => '3',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'            => 'single_portfolio_related_post_per_row',
			'type'          => 'slider',
			'title'         => esc_html__( 'Related Post Per Row', 'dana' ),
			'subtitle'      => esc_html__( 'Controls the post per row of the related post.', 'dana' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 4,
			'display_value' => 'text',
			'required' 		=> array('single_portfolio_related_post' , '=', '1'),
		),
		array(
			'id'       => 'single_portfolio_related_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Related Post Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the related post.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-fw-portfolio .bt-related')
		),
	)
) );
