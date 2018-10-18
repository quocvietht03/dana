<?php
	global $dana_options;
	$post_title = isset($dana_options['portfolio_title']) ? $dana_options['portfolio_title']: true;
	$post_featured = isset($dana_options['portfolio_featured']) ? $dana_options['portfolio_featured']: true;
	$post_image_size = isset($dana_options['portfolio_image_size']) ? $dana_options['portfolio_image_size']: '';
	$post_meta = isset($dana_options['portfolio_meta']) ? $dana_options['portfolio_meta']: true;
	$post_meta_author = isset($dana_options['portfolio_meta_author']) ? $dana_options['portfolio_meta_author']: true;
	$post_meta_author_label = isset($dana_options['portfolio_meta_author_label'])&&$dana_options['portfolio_meta_author_label'] ? $dana_options['portfolio_meta_author_label']: esc_html__('By:', 'dana');
	$post_meta_date = isset($dana_options['portfolio_meta_date']) ? $dana_options['portfolio_meta_date']: true;
	$post_meta_date_label = isset($dana_options['portfolio_meta_date_label'])&&$dana_options['portfolio_meta_date_label'] ? $dana_options['portfolio_meta_date_label']: esc_html__('Date:', 'dana');
	$post_meta_date_format = isset($dana_options['portfolio_meta_date_format'])&&$dana_options['portfolio_meta_date_format'] ? $dana_options['portfolio_meta_date_format']: get_option('date_format');
	$post_meta_category = isset($dana_options['portfolio_meta_category']) ? $dana_options['portfolio_meta_category']: true;
	$post_meta_category_label = isset($dana_options['portfolio_meta_category_label'])&&$dana_options['portfolio_meta_category_label'] ? $dana_options['portfolio_meta_category_label']: esc_html__('Category:', 'dana');
	$post_excerpt = isset($dana_options['portfolio_excerpt']) ? $dana_options['portfolio_excerpt']: true;
	$post_excerpt_length = (int) isset($dana_options['portfolio_excerpt_length']) ? $dana_options['portfolio_excerpt_length']: 55;
	$post_excerpt_more = isset($dana_options['portfolio_excerpt_more']) ? $dana_options['portfolio_excerpt_more']: '[...]';
	$post_readmore = isset($dana_options['portfolio_readmore']) ? $dana_options['portfolio_readmore']: true;
	$post_readmore_label = isset($dana_options['portfolio_readmore_label'])&&$dana_options['portfolio_readmore_label'] ? $dana_options['portfolio_readmore_label']: esc_html__('Read More', 'dana');
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'portfolio_options'):array();
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php } ?>
		
		<?php if($post_featured){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
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
				?>
			</div>
		<?php } ?>
		
		<?php if($post_meta){ ?>
			<ul class="bt-meta">
				<?php if($post_meta_author){ ?>
					<li class="bt-author"><?php echo '<span>'.esc_html($post_meta_author_label).' </span>'.get_the_author(); ?></li>
				<?php } ?>
				<?php if($post_meta_date){ ?>
					<li class="bt-public"><?php echo '<span>'.esc_html($post_meta_date_label).' </span>'.get_the_date($post_meta_date_format); ?></li>
				<?php } ?>
				<?php if($post_meta_category){ ?>
					<li><?php the_terms( get_the_ID(), 'fw-portfolio-category', '<span>'.esc_html($post_meta_category_label).' </span>', ', ' ); ?></li>
				<?php } ?>
			</ul>
		<?php } ?>
		
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
