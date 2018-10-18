<?php 
	global $dana_options;
	
?>
<div class="bt-menu-toggle"></div>
<header id="bt_header" class="bt-header bt-header-vertical">
	
	<div class="bt-header-inner">
		<div class="bt-logo">
			<?php
				$logo = isset($dana_options['hvertical_logo']['url'])?$dana_options['hvertical_logo']['url']:'';
				
				$logo_height = (isset($dana_options['hvertical_logo_height'])&&$dana_options['hvertical_logo_height'])?$dana_options['hvertical_logo_height']:'24';
				
				dana_logo($logo, $logo_height); 
			?>
		</div>
		
		<div class="bt-vertical-menu-wrap">
			<?php
				$menu_assign = isset($dana_options['hvertical_menu_assign'])&&($dana_options['hvertical_menu_assign'] != 'auto')?$dana_options['hvertical_menu_assign']:'';
				dana_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
			?>
		</div>
		
		<div class="bt-sidebar">
			<?php
				if(isset($dana_options['hvertical_content_bottom_element'])&&$dana_options['hvertical_content_bottom_element']&&isset($dana_options['hvertical_content_bottom_element'])&&$dana_options['hvertical_content_bottom_element']){
					echo '<div class="bt-menu-content-right">';
						foreach($dana_options['hvertical_content_bottom_element'] as $sidebar_id){
							dynamic_sidebar( $sidebar_id );
						}
					echo '</div>'; 
				}
			?>
		</div>
		
	</div>
		
</header>