<?php get_header(); ?>
<?php
global $dana_options;
$fullwidth = isset($dana_options['post_fullwidth'])&&$dana_options['post_fullwidth'] ? 'fullwidth': 'container';
$sidebar_width = (int) isset($dana_options['post_sidebar_width']) ?  $dana_options['post_sidebar_width']: 3;
$post_navigation = isset($dana_options['single_post_navigation']) ? $dana_options['single_post_navigation']: true;
$author = isset($dana_options['single_author']) ? $dana_options['single_author']: true;
$comment = isset($dana_options['single_comment']) ? $dana_options['single_comment']: true;

$sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : 'right';

$sidebar_class = 'col-md-'.$sidebar_width;
if($sidebar_position == 'left' || $sidebar_position == 'right'){
		$content_width = 12 - $sidebar_width;
		$content_class = 'col-md-'.$content_width;
	
}elseif($sidebar_position == 'left_right'){
	$content_width = 12 - 2*$sidebar_width;
	$content_class = 'col-md-'.$content_width;
}else{
	$content_class = 'col-md-12';
}

$post_titlebar = isset($dana_options['post_titlebar']) ? $dana_options['post_titlebar']: true;
if($post_titlebar) dana_titlebar();

?>
	<div class="bt-main-content">
		<div class="<?php echo esc_attr($fullwidth); ?>">
			<div class="row">
				<!-- Start Left Sidebar -->
				<?php if($sidebar_position == 'left' || $sidebar_position == 'left_right'){ ?>
					<div class="bt-sidebar bt-left-sidebar <?php echo esc_attr($sidebar_class); ?>">
						<?php echo get_sidebar('left'); ?>
					</div>
				<?php } ?>
				<!-- End Left Sidebar -->
				<!-- Start Content -->
				<div class="bt-content <?php echo esc_attr($content_class); ?>">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'framework/templates/blog/single/entry', get_post_format());
						
						if($post_navigation) dana_post_nav();
						
						$author_desc = get_the_author_meta('description');
						if($author && $author_desc) echo dana_author_render();
						
						// If comments are open or we have at least one comment, load up the comment template.
						if($comment){
							if ( comments_open() || get_comments_number() ) comments_template();
						}
					endwhile;
					?>
				</div>
				<!-- End Content -->
				<!-- Start Right Sidebar -->
				<?php if($sidebar_position == 'right' || $sidebar_position == 'left_right'){ ?>
					<div class="bt-sidebar bt-right-sidebar <?php echo esc_attr($sidebar_class); ?>">
						<?php echo get_sidebar('right'); ?>
					</div>
				<?php } ?>
				<!-- End Right Sidebar -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>
