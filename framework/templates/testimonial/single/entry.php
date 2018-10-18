<?php
$testimonial_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'testimonial_options'):array();

$positon = isset($testimonial_options['position'])?$testimonial_options['position']:'';
$email = isset($testimonial_options['email'])?$testimonial_options['email']:'';
$phone = isset($testimonial_options['phone'])?$testimonial_options['phone']:'';
$social = isset($testimonial_options['social'])?$testimonial_options['social']:array();

$social_item = array();
if(!empty($social)){
	foreach($social as $item){
		$social_item[] = '<li><a href="'.esc_url($item['link']).'"><i class="'.esc_attr($item['icon']).'"></i></a></li>';
	}
}
?>
<article <?php post_class(); ?>>
	<div class="row">
		<div class="col-md-12">
			<div class="bt-thumb">
				<?php if (has_post_thumbnail()) the_post_thumbnail('full'); ?>
			</div>
			<h3 class="bt-title"><?php the_title(); ?></h3>
			<div class="bt-position"><?php echo esc_html($positon); ?></div>
			<div class="bt-content"><?php the_content(); ?></div>
		</div>
	</div>
</article>