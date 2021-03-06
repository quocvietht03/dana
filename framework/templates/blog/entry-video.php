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
	$video_url = isset($post_options['video_url'])?$post_options['video_url']:'';
	$video_poster = isset($post_options['video_poster'])?$post_options['video_poster']:array();
	$video_caption = isset($post_options['video_caption'])?$post_options['video_caption']:'';
	
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php } ?>
		
		<?php if($post_featured){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
					if(!empty($video_url)){
						?>
							<div class="bt-overlay">
								<a href="<?php echo esc_url($video_url); ?>" class="html5lightbox" data-group=""  data-thumbnail="" data-width="800" data-height="450" title="<?php echo esc_attr($video_caption); ?>"><i class="fa fa-play"></i></a>
							</div>
						<?php
						if(!empty($video_poster)){
							echo '<img src="'.esc_url($video_poster['url']).'" alt="'.esc_html__('Poster Image', 'dana').'"/>';
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
