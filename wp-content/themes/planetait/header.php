<?php
	$general_settings = get_option("project_settings");
	$logo = intval($general_settings["project_settings_header_logo"]);
	$logo_obj = wp_get_attachment_metadata($logo);
	$logo = wp_get_attachment_image_src($logo, "medium")[0];
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href="http://fonts.googleapis.com/css?family=Lato%3A700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=Roboto%3A700%2C300" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=Poppins:700%2C400%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all">
			
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
<!-- MENU -->			

<!-- logo -->
					<!-- /nav -->
<!-- END MENU -->
	<!--BODY-->