<?php
	global $dana_options;
	$post_title = isset($dana_options['single_post_title']) ? $dana_options['single_post_title']: false;
	$post_featured = isset($dana_options['single_post_featured']) ? $dana_options['single_post_featured']: false;
	$post_image_size = isset($dana_options['single_post_image_size']) ? $dana_options['single_post_image_size']: '';
	$post_meta = isset($dana_options['single_post_meta']) ? $dana_options['single_post_meta']: true;
	$post_content = isset($dana_options['single_post_content']) ? $dana_options['single_post_content']: true;
	$post_tag = isset($dana_options['single_post_tag']) ? $dana_options['single_post_tag']: true;
	$post_tag_label = isset($dana_options['single_post_tag_label'])&&$dana_options['single_post_tag_label'] ? $dana_options['single_post_tag_label']: esc_html__('Tags:', 'dana');
	$post_share = isset($dana_options['single_post_share']) ? $dana_options['single_post_share']: true;
	$post_share_label = isset($dana_options['single_post_share_label'])&&$dana_options['single_post_share_label'] ? $dana_options['single_post_share_label']: esc_html__('Share:', 'dana');
	$social_item = array();
	$share_facebook = isset($dana_options['single_post_share_facebook']) ? $dana_options['single_post_share_facebook']: true;
	if($share_facebook){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Facebook', 'dana').'" href="https://www.facebook.com/sharer/sharer.php?u='.get_the_permalink().'"><i class="fa fa-facebook"></i></a></li>';
	}
	$share_twitter = isset($dana_options['single_post_share_twitter']) ? $dana_options['single_post_share_twitter']: true;
	if($share_twitter){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Twitter', 'dana').'" href="https://twitter.com/share?url='.get_the_permalink().'"><i class="fa fa-twitter"></i></a></li>';
	}
	$share_google_plus = isset($dana_options['single_post_share_google_plus']) ? $dana_options['single_post_share_google_plus']: true;
	if($share_google_plus){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Google Plus', 'dana').'" href="https://plus.google.com/share?url='.get_the_permalink().'"><i class="fa fa-google-plus"></i></a></li>';
	}
	$share_linkedin = isset($dana_options['single_post_share_linkedin']) ? $dana_options['single_post_share_linkedin']: true;
	if($share_linkedin){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Linkedin', 'dana').'" href="https://www.linkedin.com/shareArticle?url='.get_the_permalink().'"><i class="fa fa-linkedin"></i></a></li>';
	}
	$share_pinterest = isset($dana_options['single_post_share_pinterest']) ? $dana_options['single_post_share_pinterest']: true;
	if($share_pinterest){
		$social_item[] = '<li><a target="_blank" title="'.esc_attr__('Pinterest', 'dana').'" href="https://pinterest.com/pin/create/button/?url='.get_the_permalink().'"><i class="fa fa-pinterest"></i></a></li>';
	}
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$url = isset($post_options['url'])?$post_options['url']:'';
	
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><?php the_title(); ?></h3>
		<?php } ?>
		
		<?php if($post_featured){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
					if($url){
						echo '<a href="'.esc_url($url).'" target="_blank">'.$url.'</a>';
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
		
		<?php if($post_content){ ?>
			<div class="bt-content">
				<?php
					the_content();
					wp_link_pages(array(
						'before' => '<div class="page-links">' . __('Pages:', 'dana'),
						'after' => '</div>',
					));
				?>
			</div>
		<?php } ?>
		
		<?php if($post_tag || $post_share){ ?>
			<div class="bt-tag-share">
				<?php if($post_tag){ ?>
					<div class="bt-tag">
					<?php
						if(has_tag()){
							the_tags( '<h4>'.$post_tag_label.'</h4>', ', ', '' );
						}
					?>
					</div>
				<?php } ?>
				<?php if($post_share){ ?>
					<div class="bt-share">
						<?php
							if(!empty($social_item)){
								echo '<h4>'.$post_share_label.'</h4><ul>'.implode(' ', $social_item).'</ul>';
							}
						?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</article>
