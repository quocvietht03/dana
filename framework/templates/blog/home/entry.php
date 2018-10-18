<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		
		<?php if (has_post_thumbnail()) { ?>
			<div class="bt-media <?php echo get_post_format(); ?>">
				<?php the_post_thumbnail('full'); ?>
			</div>
		<?php } ?>
		
		<?php echo dana_post_meta(); ?>
	
		<div class="bt-excerpt">
			<?php the_excerpt(); ?>
		</div>
		
		<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'dana'); ?></a>
		
	</div>
</article>
