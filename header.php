<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Burger</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<nav class="header__nav"> 
			<a class="header__logo" href="http://burger.local">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo-dark.png'); ?>" alt="" />
			</a>
			<div class="header__wrap" id="header-menu">
				<?php wp_nav_menu([
				'theme_location' => 'header-menu',
				'menu_class' => 'header__links',
				]); ?>
			</div>
		</nav>
	</header>
