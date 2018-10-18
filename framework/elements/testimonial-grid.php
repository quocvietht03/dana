<?php
class WPBakeryShortCode_bt_testimonial_grid extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'columns' =>  '',
			'space' =>  30,
			'show_pagination' => 0,
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'category' => '',
			'posts_per_page' => 10,
			'orderby' => 'none',
			'order' => 'none',
			
			'layout' => 'default',
			'img_size' => '',
			
			'columns_md' => '',
			'columns_sm' => '',
			'columns_xs' => '',
			
			
			'css' => ''
			
		), $atts));
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-testimonial-grid-element',
			$layout,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Space */
		$item_style = array();
		$item_style[] = 'padding-left: '.($space/2).'px;';
		$item_style[] = 'padding-right: '.($space/2).'px;';
		$item_style[] = 'margin-bottom: '.$space.'px;';
		
		$item_attributes = array();
		if ( ! empty( $item_style ) ) {
			$item_attributes[] = 'style="' . esc_attr( implode(' ', $item_style) ) . '"';
		}
		
		/* Columns */
		$column_class = array();
		$column_class[] = (!empty($columns)) ? $columns: 'col-lg-3';
		if($columns != 'col-lg-12'){
			$column_class[] = (!empty($columns_md)) ? $columns_md : 'col-md-4';
			$column_class[] = (!empty($columns_sm)) ? $columns_sm : 'col-sm-6';
			$column_class[] = (!empty($columns_xs)) ? $columns_xs : 'col-xs-12';
		}
		
		if ( ! empty( $column_class ) ) {
			$item_attributes[] = 'class="' . esc_attr( implode(' ', $column_class) ) . '"';
		}
		
		/* Query */
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		
		$args = array(
			'posts_per_page' => $posts_per_page,
			'paged' => $paged,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'testimonial',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$taxonomy = array();
			foreach ((array) $cats as $cat){
				$taxonomy[] = trim($cat);
			}
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'testimonial_category',
					'field' => 'slug',
					'terms' => $taxonomy
				)
			);
		}
		$wp_query = new WP_Query($args);
		
		ob_start();
		if ( $wp_query->have_posts() ) {
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>">
				<div class="row">
					<?php while ( $wp_query->have_posts() ) { $wp_query->the_post(); ?>
						<div <?php echo implode(' ', $item_attributes); ?>>
							<?php require get_template_directory().'/framework/elements/testimonial_layouts/'.$layout.'.php'; ?>
						</div>
					<?php } ?>
				</div>
				<?php if ($show_pagination) { ?>
					<nav class="bt-pagination" role="navigation">
						<?php
							$big = 999999999; // need an unlikely integer
							
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages,
								'prev_text' => '<i class="fa fa-angle-left"></i>'.esc_html__('Previous', 'dana'),
								'next_text' => esc_html__('Next', 'dana').'<i class="fa fa-angle-right"></i>',
							) );
						?>
					</nav>
				<?php } ?>
			</div>
		<?php
		} else {
			echo 'Post not found!';
		}
		wp_reset_query();
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => __('Testimonial Grid', 'dana'),
	'base' => 'bt_testimonial_grid',
	'category' => __('BT Elements', 'dana'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Columns', 'dana'),
			'param_name' => 'columns',
			'value' => array(
				'4 Columns' => 'col-lg-3',
				'3 Columns' => 'col-lg-4',
				'2 Columns' => 'col-lg-6',
				'1 Column' => 'col-lg-12'
			),
			'description' => __('Select columns display in this element.', 'dana')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Item Space', 'dana'),
			'param_name' => 'space',
			'value' => 30,
			'description' => esc_html__( 'Please, enter number space in this element.', 'dana' )
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Show Pagination', 'dana'),
			'param_name' => 'show_pagination',
			'value' => '',
			'description' => __('Show or not pagination in this element.', 'dana')
		),
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Element ID', 'dana'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__( 'Enter element ID (Note: make sure it is unique and valid).', 'dana' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Extra Class', 'dana'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'dana' )
		),
		array (
			'type' => 'bt_taxonomy',
			'taxonomy' => 'testimonial_category',
			'heading' => esc_html__( 'Categories', 'dana' ),
			'param_name' => 'category',
			'group' => __('Data Setting', 'dana'),
			'description' => esc_html__( 'Note: By default, all your testimonials will be displayed. If you want to narrow output, select category(s) above. Only selected categories will be displayed.', 'dana' )
		),
		array (
			'type' => 'textfield',
			'heading' => esc_html__( 'Count', 'dana' ),
			'param_name' => 'posts_per_page',
			'value' => '10',
			'group' => __('Data Setting', 'dana'),
			'description' => esc_html__( 'The number of posts to display on each page. Set to "-1" for display all posts on the page.', 'dana' )
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__( 'Order by', 'dana' ),
			'param_name' => 'orderby',
			'value' => array (
					'None' => 'none',
					'Title' => 'title',
					'Date' => 'date',
					'ID' => 'ID'
			),
			'group' => __('Data Setting', 'dana'),
			'description' => esc_html__( 'Select order type.', 'dana' )
		),
		array (
			'type' => 'dropdown',
			'heading' => esc_html__( 'Order', 'dana' ),
			'param_name' => 'order',
			'value' => Array (
					'None' => 'none',
					'ASC' => 'ASC',
					'DESC' => 'DESC'
			),
			'group' => __('Data Setting', 'dana'),
			'description' => esc_html__( 'Select sorting order.', 'dana' )
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Layout', 'dana'),
			'param_name' => 'layout',
			'value' => array(
				'Default' => 'default',
				'Layout 1' => 'layout1',
				'Layout 2' => 'layout2',
				'Layout 3' => 'layout3',
				'Layout 4' => 'layout4'
			),
			'admin_label' => true,
			'group' => __('Item Setting', 'dana'),
			'description' => __('Select layout of items display in this element.', 'dana')
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Image size', 'dana' ),
			'param_name' => 'img_size',
			'value' => 'thumbnail',
			'group' => __('Item Setting', 'dana'),
			'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'dana' ),
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Columns Medium Screen', 'dana'),
			'param_name' => 'columns_md',
			'value' => array(
				'Auto' => '',
				'4 Columns' => 'col-md-3',
				'3 Columns' => 'col-md-4',
				'2 Columns' => 'col-md-6',
				'1 Column' => 'col-md-12'
			),
			'group' => __('Responsive', 'dana'),
			'description' => __('Select columns display in this element (Screen width >=992px and <1199px).', 'dana')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Columns Small Screen', 'dana'),
			'param_name' => 'columns_sm',
			'value' => array(
				'Auto' => '',
				'4 Columns' => 'col-sm-3',
				'3 Columns' => 'col-sm-4',
				'2 Columns' => 'col-sm-6',
				'1 Column' => 'col-sm-12'
			),
			'group' => __('Responsive', 'dana'),
			'description' => __('Select columns display in this element (Screen width >=768px and <992px).', 'dana')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Columns Extra Screen', 'dana'),
			'param_name' => 'columns_xs',
			'value' => array(
				'Auto' => '',
				'4 Columns' => 'col-xs-3',
				'3 Columns' => 'col-xs-4',
				'2 Columns' => 'col-xs-6',
				'1 Column' => 'col-xs-12'
			),
			'group' => __('Responsive', 'dana'),
			'description' => __('Select columns display in this element (Screen <768px).', 'dana')
		),
		
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'dana' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'dana' ),
		)
	)
));
