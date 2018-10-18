<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Global site tag (gtag.js) - AdWords: 863414505 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-863414505"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-863414505');
</script>
	<?php wp_head(); ?>
	
	<style>
		.hvr-shutter-out-horizontal.hvr-black {
			background-color: #fab702;
		}
		.hvr-shutter-out-horizontal.hvr-black:hover {
			background-color: #fab702 !important;
		}
		.hvr-shutter-out-horizontal.hvr-black::before {
	    background: #000000;
		}
	</style>
</head>
<body <?php body_class() ?>>
	<?php do_action('dana_add_content_before_header'); ?>
	<div id="bt-main">
		<?php dana_Header(); ?>
