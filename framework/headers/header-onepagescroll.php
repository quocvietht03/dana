<?php 
	global $dana_options;
	$page_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'page_options'):array();
	
	$container_class = (isset($dana_options['honepage1_fullwidth'])&&$dana_options['honepage1_fullwidth'])?'fullwidth':'container';
	$menu_assign = isset($dana_options['honepage1_menu_assign'])&&($dana_options['honepage1_menu_assign'] != 'auto')?$dana_options['honepage1_menu_assign']:'';
	if(isset($page_options['header_menu_assign'])&&$page_options['header_menu_assign'] != 'auto'){ $menu_assign = $page_options['header_menu_assign']; }
	
?>
<header id="bt_header" class="bt-header-onepage bt-header-onepagev1">
		
	<div class="bt-subheader bt-header-inner">
		<div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
			<div class="bt-subheader-cell bt-left">
				<div class="bt-content text-left">
					<?php
						$logo = isset($dana_options['honepage1_logo']['url'])?$dana_options['honepage1_logo']['url']:'';
						
						$logo_height = (isset($dana_options['honepage1_logo_height'])&&$dana_options['honepage1_logo_height'])?$dana_options['honepage1_logo_height']:'24';
						
						dana_logo($logo, $logo_height); 
						
						
					?>
				</div>
			</div>
			
			<div class="bt-subheader-cell bt-right">
				<div class="bt-content text-right">
					<?php
						if(isset($dana_options['honepage1_content_right_element'])&&$dana_options['honepage1_content_right_element']&&isset($dana_options['honepage1_content_right_element'])&&$dana_options['honepage1_content_right_element']){
							echo '<div class="bt-menu-content-right">';
								foreach($dana_options['honepage1_content_right_element'] as $sidebar_id){
									dynamic_sidebar( $sidebar_id );
								}
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="bt-scroll-menu-wrap">
		<?php
			dana_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
		?>
	</div>
		
</header>