<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



		<?php // wordpress head functions ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="description" content="住宅ローンを払えなくなった方を対象に、専門的な法律相談や解決までのサポートを行う弁護士法人です。転職・休職、離婚、事業の失敗などにより滞納・延滞が発生しお悩みを抱えている方はぜひご無料相談にお申し込みください。競売・任意売却のご相談も承ります。">
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-datepicker.min.css"/>        <link rel="stylesheet" type="text/css" href="/css/bootstrap-datetimepicker.min.css"/>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script> 	



<style type="text/css">

</style>

		<?php wp_head(); ?>

		<div class="container">
			<div class="breadcrumb">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
			</div>
		</div>