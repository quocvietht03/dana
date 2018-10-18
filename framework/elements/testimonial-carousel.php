<?php
class WPBakeryShortCode_bt_testimonial_carousel extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'rows' => 1,
			'items' => '',
			'margin' => '',
			'loop' => '',
			'autoplay' => '',
			'autoplayhoverpause' => '',
			'smartspeed' => '',
			'nav' => '',
			'dots' => '',
			'nav_dots' => 'nav-dot-default',
			
			'category' => '',
			'posts_per_page' => 10,
			'orderby' => 'none',
			'order' => 'none',
			
			'layout' => 'default',
			'img_size' => '',
			
			'items_md' => '',
			'items_sm' => '',
			'items_xs' => '',
			'nav_xs' => '',
			'dots_xs' => '',
			
			'css' => ''
			
		), $atts));
		
		$space_class = ( ! empty( $margin ) ) ? 'space'.$margin : 'space0';
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-testimonial-carousel-element',
			$layout,
			$nav_dots,
			$space_class,
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		/* Owl */
		$owl_attributes = array();
		$owl_attributes['items'] = ( ! empty( $items ) ) ? $items : 4;
		$owl_attributes['margin'] = ( ! empty( $margin ) ) ? (int)$margin : 0;
		$owl_attributes['loop'] = ( ! empty( $loop ) ) ? true : false;
		$owl_attributes['autoplay'] = ( ! empty( $autoplay ) ) ? true : false;
		$owl_attributes['autoplayHoverPause'] = ( ! empty( $autoplayhoverpause ) ) ? true : false;
		$owl_attributes['smartSpeed'] = ( ! empty( $smartspeed ) ) ? (int)$smartspeed : 500;
		$owl_attributes['nav'] = ( ! empty( $nav ) ) ? true : false;
		if ( ! empty( $nav ) ) $owl_attributes['navText'] = array('<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>');
		$owl_attributes['dots']= ( ! empty( $dots ) ) ? true : false;
		
		if($items != 1){
			$items_md = ( ! empty( $items_md ) ) ? $items_md : 3;
			$items_sm = ( ! empty( $items_sm ) ) ? $items_sm : 2;
			$items_xs = ( ! empty( $items_xs ) ) ? $items_xs : 1;
		}else{
			$items_md = $items_sm = $items_xs = 1;
		}
		
		if(! empty( $nav )){
			$nav_xs = ( ! empty( $nav_xs ) ) ? false : true;
		}else{
			$nav_xs = false;
		}
		
		if(! empty( $dots )){
			$dots_xs = ( ! empty( $dots_xs ) ) ? false : true;
		}else{
			$dots_xs = false;
		}
		
		$owl_attributes['responsive'] = array(
			1200 => array(
				'items' => $items
			),
			992 => array(
				'items' => $items_md
			),
			768 => array(
				'items' => $items_sm
			),
			0 => array(
				'items' => $items_xs,
				'nav' => $nav_xs,
				'dots' => $dots_xs
			),
		);
		
		
		$owl_json = json_encode($owl_attributes);
		
		
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
		
		wp_enqueue_script( 'dana-owl-carousel');
		wp_enqueue_style('dana-owl-carousel');
		
		ob_start();
		if ( $wp_query->have_posts() ) {
		?>
			<div class="<?php echo esc_attr(implode(' ', $css_class)); ?>">
				<div class="owl-carousel" data-owl="<?php echo esc_attr($owl_json); ?>">
					<?php
						if($rows == 1){
							while ( $wp_query->have_posts() ) { $wp_query->the_post();
								require get_template_directory().'/framework/elements/testimonial_layouts/'.$layout.'.php';
							}
						}else{
							$post_count = $wp_query->post_count;
							$count = 0;
							while ( $wp_query->have_posts() ) { $wp_query->the_post();
								if($count == 0 || $count%$rows == 0) echo '<div class="bt-items">';
									require get_template_directory().'/framework/elements/testimonial_layouts/'.$layout.'.php';
									$count++;
								if($count == $post_count || $count%$rows == 0) echo '</div>';
							}
						}
					?>
				</div>
				<script>
					jQuery(document).ready(function($) {
						if ($('.bt-testimonial-carousel-element .owl-carousel').length) {
							$('.bt-testimonial-carousel-element .owl-carousel').each(function() {
								$(this).owlCarousel($(this).data('owl'));
							});
						}
					});
				</script>
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
	'name' => __('Testimonial Carousel', 'dana'),
	'base' => 'bt_testimonial_carousel',
	'category' => __('BT Elements', 'dana'),
	'icon' => 'bt-icon',
    'params' => array(
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
			'value' => 10,
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
			'heading' => __('Items', 'dana'),
			'param_name' => 'rows',
			'value' => array(
				'1 Row' => 1,
				'2 Rows' => 2,
				'3 Rows' => 3
				
			),
			'group' => __('Owl Setting', 'dana'),
			'description' => __('The number of rows you want to see on the screen.', 'dana')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Items', 'dana'),
			'param_name' => 'items',
			'value' => array(
				'4 Items' => 4,
				'3 Items' => 3,
				'2 Items' => 2,
				'1 Item' => 1
			),
			'group' => __('Owl Setting', 'dana'),
			'description' => __('The number of items you want to see on the screen.', 'dana')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Margin', 'dana'),
			'param_name' => 'margin',
			'value' => array(
				'0px' => 0,
				'10px' => 10,
				'20px' => 20,
				'30px' => 30
			),
			'group' => __('Owl Setting', 'dana'),
			'description' => __('Margin-right(px) on item.', 'dana')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Loop', 'dana'),
			'param_name' => 'loop',
			'value' => '',
			'group' => __('Owl Setting', 'dana'),
			'description' => __('Infinity loop. Duplicate last and first items to get loop illusion.', 'dana')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Autoplay.', 'dana'),
			'param_name' => 'autoplay',
			'value' => '',
			'group' => __('Owl Setting', 'dana'),
			'description' => __('Autoplay.', 'dana')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('AutoplayHoverPause', 'dana'),
			'param_name' => 'autoplayhoverpause',
			'value' => '',
			'group' => __('Owl Setting', 'dana'),
			'description' => __('Pause on mouse hover.', 'dana')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('SmartSpeed', 'dana'),
			'param_name' => 'smartspeed',
			'value' => 500,
			'group' => __('Owl Setting', 'dana'),
			'description' => esc_html__( 'Speed Calculate.', 'dana' )
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Nav', 'dana'),
			'param_name' => 'nav',
			'value' => '',
			'group' => __('Owl Setting', 'dana'),
			'description' => __('Show next/prev buttons.', 'dana')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Dots', 'dana'),
			'param_name' => 'dots',
			'value' => '',
			'group' => __('Owl Setting', 'dana'),
			'description' => __('Show dots navigation.', 'dana')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Nav & Dots Style', 'dana'),
			'param_name' => 'nav_dots',
			'value' => array(
				'Default' => 'nav-dots-default',
				'Dana Style' => 'nav-dots-dana'
			),
			'group' => __('Owl Setting', 'dana'),
			'description' => __('Select nav and dots style display in this element.', 'dana')
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
			'heading' => __('Items Medium Screen', 'dana'),
			'param_name' => 'items_md',
			'value' => array(
				'Auto' => '',
				'4 Items' => 4,
				'3 Items' => 3,
				'2 Items' => 2,
				'1 Item' => 1
			),
			'group' => __('Responsive', 'dana'),
			'description' => __('The number of items you want to see on the screen(>=992px and <1199px).', 'dana')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Items Small Screen', 'dana'),
			'param_name' => 'items_sm',
			'value' => array(
				'Auto' => '',
				'4 Items' => 4,
				'3 Items' => 3,
				'2 Items' => 2,
				'1 Item' => 1
			),
			'group' => __('Responsive', 'dana'),
			'description' => __('The number of items you want to see on the screen(>=768px and <992px).', 'dana')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Items Extra Screen', 'dana'),
			'param_name' => 'items_xs',
			'value' => array(
				'Auto' => '',
				'4 Items' => 4,
				'3 Items' => 3,
				'2 Items' => 2,
				'1 Item' => 1
			),
			'group' => __('Responsive', 'dana'),
			'description' => __('The number of items you want to see on the screen(<768px).', 'dana')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Disable Nav On Extra Screen', 'dana'),
			'param_name' => 'nav_xs',
			'value' => '',
			'group' => __('Responsive', 'dana'),
			'description' => __('Disable next/prev buttons on the screen(<768px).', 'dana')
		),
		array(
			'type' => 'checkbox',
			'class' => '',
			'heading' => __('Disable Dots On Extra Screen', 'dana'),
			'param_name' => 'dots_xs',
			'value' => '',
			'group' => __('Responsive', 'dana'),
			'description' => __('Disable dots navigation on the screen(<768px).', 'dana')
		),
		
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'dana' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'dana' ),
		)
	)
));
