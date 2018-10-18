<div class="bt-top">
	<div class="bt-title-wrap">
		<?php
			if($title) echo '<h3 class="bt-title" '.implode(' ', $title_attributes).'>'.$title.'</h3>';
			if($sub_title) echo '<div class="bt-subtitle" '.implode(' ', $sub_title_attributes).'>'.$sub_title.'</div>';
		?>
	</div>
	<h4 class="bt-price-time">
		<?php
			if($price) echo '<span class="bt-price" '.implode(' ', $price_attributes).'>'.$price.'</span>';
			if($time) echo '<span class="bt-time" '.implode(' ', $time_attributes).'>'.$time.'</span>';
		?>
	</h4>
</div>
<div class="bt-middle">
	<?php
		if(!empty($options_value)){
			echo '<ul class="bt-options" '.implode(' ', $options_attributes).'>'.implode(' ', $options_value).'</ul>';
		}
	?>
</div>
<div class="bt-bottom">
	<?php if($button_text) echo '<a class="bt-btn-order" '.implode(' ', $button_attributes).'>'.$button_text.'</a>'; ?>
</div>

