<?php
	global $dana_options;
	$fullwidth = isset($dana_options['titlebar_fullwidth'])&&$dana_options['titlebar_fullwidth'] ? 'fullwidth': 'container';
?>
<div class="bt-titlebar bt-titlebar-v2">
	<div class="bt-titlebar-inner">
		<div class="bt-overlay"></div>
		<div class="bt-subheader">
			<div class="bt-subheader-inner <?php echo esc_attr($fullwidth); ?>">
				<div class="bt-subheader-cell bt-left">
					<div class="bt-content text-left">
						<div class="bt-page-title">
							<?php
								if(isset($dana_options['titlebar_page_title_before'])&&$dana_options['titlebar_page_title_before']&&isset($dana_options['titlebar_page_title_before_content'])&&$dana_options['titlebar_page_title_before_content']){
									echo '<div class="bt-before">'.$dana_options['titlebar_page_title_before_content'].'</div>';
								}
							?>
							<h2><?php echo dana_page_title(); ?></h2>
							<?php
								if(isset($dana_options['titlebar_page_title_after'])&&$dana_options['titlebar_page_title_after']&&isset($dana_options['titlebar_page_title_after_content'])&&$dana_options['titlebar_page_title_after_content']){
									echo '<div class="bt-after">'.$dana_options['titlebar_page_title_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
				<div class="bt-subheader-cell bt-right">
					<div class="bt-content text-right">
						<div class="bt-breadcrumb">
							<?php
								if(isset($dana_options['titlebar_breadcrumb_before'])&&$dana_options['titlebar_breadcrumb_before']&&isset($dana_options['titlebar_breadcrumb_before_content'])&&$dana_options['titlebar_breadcrumb_before_content']){
									echo '<div class="bt-before">'.$dana_options['titlebar_breadcrumb_before_content'].'</div>';
								}
							?>
							<div class="bt-path">
								<?php
									$home_text = (isset($dana_options['titlebar_breadcrumb_home_text'])&&$dana_options['titlebar_breadcrumb_home_text'])?$dana_options['titlebar_breadcrumb_home_text']: 'Home';
									$delimiter = (isset($dana_options['titlebar_breadcrumb_delimiter'])&&$dana_options['titlebar_breadcrumb_delimiter'])?$dana_options['titlebar_breadcrumb_delimiter']: '-';
									
									echo dana_page_breadcrumb($home_text, $delimiter);
								?>
							</div>
							<?php
								if(isset($dana_options['titlebar_breadcrumb_after'])&&$dana_options['titlebar_breadcrumb_after']&&isset($dana_options['titlebar_breadcrumb_after_content'])&&$dana_options['titlebar_breadcrumb_after_content']){
									echo '<div class="bt-after">'.$dana_options['titlebar_breadcrumb_after_content'].'</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>