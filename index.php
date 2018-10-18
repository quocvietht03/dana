<?php get_header(); ?>
<?php
global $dana_options;
$fullwidth = isset($dana_options['blog_fullwidth'])&&$dana_options['blog_fullwidth'] ? 'fullwidth': 'container';
$sidebar_width = (int) isset($dana_options['blog_sidebar_width']) ?  $dana_options['blog_sidebar_width']: 3;

$sidebar_class = 'col-md-'.$sidebar_width;
$content_width = 12 - $sidebar_width;
$content_class = 'col-md-'.$content_width;

dana_titlebar();
?>
	<div class="bt-main-content">
		<div class="<?php echo esc_attr($fullwidth); ?>">
			<div class="row">
				<div class="bt-content <?php echo esc_attr($content_class); ?>">
					<?php
					if( have_posts() ) {
						while ( have_posts() ) : the_post();
							get_template_part( 'framework/templates/blog/home/entry', get_post_format());
						endwhile;
						
						dana_paging_nav();
					}else{
						get_template_part( 'framework/templates/entry', 'none');
					}
					?>
				</div>
				<div class="bt-sidebar bt-right-sidebar <?php echo esc_attr($sidebar_class); ?>">
					<?php echo get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
