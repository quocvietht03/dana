<?php get_header(); ?>
<?php
global $dana_options;
$fullwidth = isset($dana_options['blog_fullwidth'])&&$dana_options['blog_fullwidth'] ? 'fullwidth': 'container';
$columns = (int) isset($dana_options['blog_columns']) ?  $dana_options['blog_columns']: 2;
$sidebar_width = (int) isset($dana_options['blog_sidebar_width']) ?  $dana_options['blog_sidebar_width']: 3;

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

$blog_titlebar = isset($dana_options['blog_titlebar']) ? $dana_options['blog_titlebar']: true;
if($blog_titlebar) dana_titlebar();
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
					if( have_posts() ) {
						?>
							<div class="bt-items-wrap columns-<?php echo esc_attr($columns); ?>">
								<?php
									while ( have_posts() ) : the_post();
										get_template_part( 'framework/templates/blog/entry', get_post_format());
									endwhile;
								?>
							</div>
						<?php
						dana_paging_nav();
					}else{
						get_template_part( 'framework/templates/entry', 'none');
					}
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