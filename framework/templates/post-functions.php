<?php
/* Count post view. */
function dana_set_count_view(){
    $post_id = get_the_ID();
	if(is_single() && !empty($post_id) && !isset($_COOKIE['dana_post_view_'. $post_id])){

        $views = get_post_meta($post_id , '_dana_post_views', true);

        $views = $views ? $views : 0 ;

        $views++;

        update_post_meta($post_id, '_dana_post_views' , $views);

        /* set cookie. */
        setcookie('dana_post_view_'. $post_id, $post_id, time() * 20, '/');
    }
}

add_action( 'wp', 'dana_set_count_view' );

/* Get Post view */
function dana_get_count_view() {
	$post_id = get_the_ID();
    $views = get_post_meta($post_id , '_dana_post_views', true);

    $views = $views ? $views : 0 ;
    return $views;
}

/* Post Meta */
if ( ! function_exists( 'dana_post_meta' ) ){
	function dana_post_meta() {
		ob_start();
		?>
		<?php if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) { ?>
			<ul class="bt-meta">
				
					<li class="bt-public"><i class="fa fa-calendar"></i> <a href="<?php the_permalink(); ?>"><?php echo get_the_date(get_option('date_format')); ?></a></li>
				
				<?php 
					if ( 'post' == get_post_type() ) {
						if ( is_singular() || is_multi_author() ) {
							?>
								<li class="bt-author"><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a></li>
							<?php
						}
						the_terms( get_the_ID(), 'category', '<li><i class="fa fa-folder"></i> ', ', ', '</li>' );
						if ( ! is_single()){
							the_terms( get_the_ID(), 'post_tag', '<li><i class="fa fa-tag"></i> ', ', ', '</li>' );
						}
					}
				?>
				
				<?php if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
					<li><i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a></li>
				<?php } ?>
			</ul>
		<?php } ?>
		<?php
		return  ob_get_clean();
	}
}

/* Author */
if ( ! function_exists( 'dana_author_render' ) ) {
	function dana_author_render() {
		ob_start();
		?>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<span class="featured-post"> <?php esc_html_e( 'Sticky', 'dana' ); ?></span>
		<?php } ?>
		<div class="bt-about-author clearfix">
			<div class="bt-author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 170 ); ?></div>
			<div class="bt-author-info">
				<h4 class="bt-title"><?php esc_html_e('About The Author', 'dana'); ?></h4>
				<h6 class="bt-name"><?php the_author(); ?></h6>
				<?php the_author_meta('description'); ?>
			</div>
		</div>
		<?php
		return  ob_get_clean();
	} 
}
/*Custom comment list*/
function dana_custom_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo esc_html( $tag ); ?> <?php comment_class( empty( $args['has_children'] ) ? 'bt-comment-item clearfix' : 'bt-comment-item parent clearfix' ) ?> id="comment-<?php comment_ID() ?>">
	<div class="bt-avatar">
		<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	</div>
	<div class="bt-comment">
		<h5 class="bt-name">
			<?php echo '<span class="name">'.get_comment_author( get_comment_ID() ).'</span><span class="bt-time"> / '.get_comment_date().'</span>'; ?>
		</h5>
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'dana' ); ?></em>
		<?php endif; ?>
		<?php comment_text(); ?>
		<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</div>
<?php
}
