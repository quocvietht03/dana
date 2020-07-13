<?php
// Blog
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Archive Blog', 'dana' ),
	'id'               => 'bt_blog',
	'icon'             => 'el el-file-edit',
	'fields'           => array(
		array(
			'id'       => 'blog_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'dana' ),
			'default'  => false
		),
		array(
			'id'       => 'blog_fullwidth_space',
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
			'required' 		=> array('blog_fullwidth' , '=', '1'),
			'output'    => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'            => 'blog_columns',
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
			'id'            => 'blog_sidebar_width',
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
			'id'       => 'blog_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'dana' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'dana' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('blog_titlebar' , '=', '1'),
			'output'    => array('.category .bt-titlebar .bt-titlebar-inner, .tag .bt-titlebar .bt-titlebar-inner, .search .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'blog_content_sapce',
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
			'output'   => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'    => 'blog_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'dana' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'dana' )
		),
		array(
			'id'       => 'post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'post_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'dana' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'dana' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '28px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_title_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Title Color', 'dana' ),
			'subtitle' => esc_html__( 'Controls the color post title.', 'dana' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#fab702',
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title a, .tag .bt-post-item .bt-title a, .search .bt-post-item .bt-title a')
		),
		array(
			'id'       => 'post_title_sapce',
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
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'dana' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'dana' ),
			'default'  => 'full',
			'required' 		=> array('post_featured' , '=', '1')
		),
		array(
			'id'       => 'post_featured_sapce',
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
			'required' 		=> array('post_featured' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-media, .tag .bt-post-item .bt-media, .search .bt-post-item .bt-media')
		),
		array(
			'id'       => 'post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'post_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'dana' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'dana' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li, .tag .bt-post-item .bt-meta > li, .search .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'post_meta_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Meta Link Color', 'dana' ),
			'subtitle' => esc_html__( 'Controls the color post meta.', 'dana' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#fab702',
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li a, .tag .bt-post-item .bt-meta > li a, .search .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'post_meta_sapce',
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
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta, .tag .bt-post-item .bt-meta, .search .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'post_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'post_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'dana' ),
			'default'  => '55',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'dana' ),
			'default'  => '[...]',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_sapce',
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
			'required' 		=> array('post_excerpt' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-excerpt, .tag .bt-post-item .bt-excerpt, .search .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'post_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'post_readmore_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Read More Button Typography', 'dana' ),
			'subtitle' => esc_html__( 'These settings control the typography post read more button.', 'dana' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_readmore' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-readmore, .tag .bt-post-item .bt-readmore, .search .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'post_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'dana' ),
			'default'  => 'Read More',
			'required' 		=> array('post_readmore' , '=', '1'),
		),
		array(
			'id'       => 'blog_article_space',
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
			'output'    => array('.category .bt-post-item, .tag .bt-post-item, .search .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Post', 'dana' ),
	'id'               => 'bt_post',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'post_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'dana' ),
			'default'  => false
		),
		array(
			'id'       => 'post_fullwidth_space',
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
			'required' 		=> array('post_fullwidth' , '=', '1'),
			'output'    => array('.single-post .bt-main-content')
		),
		array(
			'id'            => 'post_sidebar_width',
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
			'id'       => 'post_titlebar',
			'type'     => 'switch',
			'title'    => esc_html__( 'Title Bar', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to display the title bar.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'post_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'dana' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'dana' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'required' 	=> array('post_titlebar' , '=', '1'),
			'output'    => array('.single-post .bt-titlebar .bt-titlebar-inner'),
		),
		array(
			'id'       => 'post_content_sapce',
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
			'output'   => array('.single-post .bt-main-content')
		),
		array(
			'id'       => 'single_post_navigation',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Navigation', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the post navigation.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_navigation_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Navigation Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post navigation.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_post_navigation' , '=', '1'),
			'output'   => array('.single-post .bt-blog-article-nav')
		),
		array(
			'id'       => 'single_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Author', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the author.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_author_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Author Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the author.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_author' , '=', '1'),
			'output'   => array('.single-post .bt-about-author')
		),
		array(
			'id'       => 'single_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Comment', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the comment.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_comment_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Comment Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the comment.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_comment' , '=', '1'),
			'output'   => array('.single-post .bt-comment-wrapper')
		),
		array(
			'id'    => 'single_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'dana' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'dana' )
		),
		array(
			'id'       => 'single_post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'dana' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'dana' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'dana' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'font-size'   => '36px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '46px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_title_sapce',
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
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'dana' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'dana' ),
			'default'  => 'full',
			'required' 		=> array('single_post_featured' , '=', '1')
		),
		array(
			'id'       => 'single_post_featured_sapce',
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
			'required' 		=> array('single_post_featured' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-media')
		),
		array(
			'id'       => 'single_post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'dana' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'dana' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'ext-font-css' => get_template_directory().'/framework/options/fonts.css',
			'fonts'  => $fonts,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'single_post_meta_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Meta Link Color', 'dana' ),
			'subtitle' => esc_html__( 'Controls the color post meta.', 'dana' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#fab702',
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'single_post_meta_sapce',
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
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta, .tag .bt-post-item .bt-meta, .search .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'single_post_content',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Content', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the content.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Content Space', 'dana' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post excerpt.', 'dana' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_content' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-content')
		),
		array(
			'id'       => 'single_post_tag',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Tags', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the tags.', 'dana' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_tag_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Tags Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the tags. Leave empty to use "Tags:" label.', 'dana' ),
			'default'  => 'Tags:',
			'required' 		=> array('single_post_tag' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Shares', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the share.', 'dana' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_share_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Share Label', 'dana' ),
			'subtitle' => esc_html__( 'Please, Enter label of the share. Leave empty to use "Share:" label.', 'dana' ),
			'default'  => 'Share:',
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_facebook',
			'type'     => 'switch',
			'title'    => esc_html__( 'Facebook', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the facebook share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_twitter',
			'type'     => 'switch',
			'title'    => esc_html__( 'Twitter', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the twitter share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_google_plus',
			'type'     => 'switch',
			'title'    => esc_html__( 'Google Plus', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the google plus share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_linkedin',
			'type'     => 'switch',
			'title'    => esc_html__( 'Linkedin', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the linkedin share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_post_share_pinterest',
			'type'     => 'switch',
			'title'    => esc_html__( 'Pinterest', 'dana' ),
			'subtitle' => esc_html__( 'Turn on to show the pinterest share.', 'dana' ),
			'default'  => true,
			'required' 		=> array('single_post_share' , '=', '1'),
		),
		array(
			'id'       => 'single_article_space',
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
			'output'    => array('.single-post .bt-post-item')
		),
		
	)
) );
