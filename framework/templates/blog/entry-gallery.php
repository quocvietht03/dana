<?php
	global $dana_options;
	$post_title = isset($dana_options['post_title']) ? $dana_options['post_title']: true;
	$post_featured = isset($dana_options['post_featured']) ? $dana_options['post_featured']: true;
	$post_image_size = isset($dana_options['post_image_size']) ? $dana_options['post_image_size']: '';
	$post_meta = isset($dana_options['post_meta']) ? $dana_options['post_meta']: true;
	$post_excerpt = isset($dana_options['post_excerpt']) ? $dana_options['post_excerpt']: true;
	$post_excerpt_length = (int) isset($dana_options['post_excerpt_length']) ? $dana_options['post_excerpt_length']: 55;
	$post_excerpt_more = isset($dana_options['post_excerpt_more']) ? $dana_options['post_excerpt_more']: '[...]';
	$post_readmore = isset($dana_options['post_readmore']) ? $dana_options['post_readmore']: true;
	$post_readmore_label = isset($dana_options['post_readmore_label'])&&$dana_options['post_readmore_label'] ? $dana_options['post_readmore_label']: esc_html__('Read More', 'dana');
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php } ?>
		
		<?php if($post_featured){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
					$gallery_images = isset($post_options['gallery_images'])?$post_options['gallery_images']:array();
					if(!empty($gallery_images)){
						$date = time() . '_' . uniqid(true);
						?>
							<div id="<?php echo esc_attr( 'carousel-generic'.$date ) ?>" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
								<?php
									foreach($gallery_images as $key => $gallery_image){
										$cl_active = ($key == 0) ? 'active' : '';
										echo '<img class="item bt-gallery '.$cl_active.'" src="'.esc_url($gallery_image['url']).'" alt="'.esc_html__('Thumbnail', 'dana').'"/>';
									}
								?>
							  </div>
								<a class="left carousel-control" href="<?php echo esc_attr( '#carousel-generic'.$date ) ?>" role="button" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								</a>
								<a class="right carousel-control" href="<?php echo esc_attr( '#carousel-generic'.$date ) ?>" role="button" data-slide="next">
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						<?php
					}else{
						if($post_image_size){
							$thumb_size = (!empty($post_image_size))?$post_image_size:'full'; 
							$thumbnail = wpb_getImageBySize( array(
								'post_id' => get_the_ID(),
								'attach_id' => null,
								'thumb_size' => $thumb_size,
								'class' => ''
							) );
							echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
						}else{
							if (has_post_thumbnail()) the_post_thumbnail('full');
						}
					}
				?>
			</div>
		<?php } ?>
		
		<?php if($post_meta) echo dana_post_meta(); ?>
		
		<?php if($post_excerpt){ ?>
			<div class="bt-excerpt">
				<?php echo wp_trim_words(get_the_excerpt(), $post_excerpt_length, $post_excerpt_more); ?>
			</div>
		<?php } ?>
		
		<?php if($post_readmore){ ?>
			<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php echo esc_html($post_readmore_label); ?></a>
		<?php } ?>
	</div>
</article>
