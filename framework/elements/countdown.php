<?php
class WPBakeryShortCode_bt_countdown extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'style' => 'style1',
			'date_end' => '2018/12/1 0:0:0',
			'format' => 'ODHMS',
			
			'css' => ''
			
		), $atts));
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-countdown-element',
			apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts )
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		
		wp_enqueue_script('dana-plugin');
		wp_enqueue_script('dana-countdown');
		
		$current_date = current_time('Y/m/d H:i:s');
		$count_date = strtotime($date_end) - strtotime($current_date);
		
		$months = 0;
		if($format == 'ODHMS') {
			$months = floor($count_date/(30*24*3600));
			$count_date = $count_date%(30*24*3600);
		}
		
		$days = floor($count_date/(24*3600));
		$count_date = $count_date%(24*3600);
		
		$hours = floor($count_date/(3600));
		$count_date = $count_date%(3600);
		
		$minutes = floor($count_date/(60));
		$seconds = $count_date%(60);
		
		$until = '+'.$months.'o +'.$days.'d +'.$hours.'h +'.$minutes.'m +'.$seconds.'s';
		
		ob_start();
		?>
			<div data-countdown="<?php echo esc_attr($until); ?>" data-format="<?php echo esc_attr($format); ?>" class="<?php echo esc_attr(implode(' ', $css_class)); ?>"  <?php echo esc_attr(implode(' ', $wrapper_attributes)); ?>></div>
			<script>
				jQuery(document).ready(function($) {
					$('.bt-countdown-element').each(function() {
						var countdownTime = $(this).attr('data-countdown');
						var countdownFormat = $(this).attr('data-format');
						$(this).countdown({
							until: countdownTime,
							format: countdownFormat,
							padZeroes: true
						});
					});
				});
			</script>
		<?php
		return ob_get_clean();
	}
}

vc_map(array(
	'name' => __('Countdown', 'dana'),
	'base' => 'bt_countdown',
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
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Date End", 'dana'),
			"param_name" => "date_end",
			"value" => "",
			'group' => __('Date Setting', 'dana'),
			"description" => esc_html__("Please, Enter date end in this element. Ex: 2018/12/1 0:0:0", 'dana')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Format", 'dana'),
			"param_name" => "format",
			"value" => "",
			'group' => __('Date Setting', 'dana'),
			"description" => esc_html__("Please, Enter format in this element. Ex: ODHMS or DHMS", 'dana')
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'dana' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'dana' ),
		)
	)
));
