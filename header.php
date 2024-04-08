<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Burger</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="header" id="header">
		<nav class="header__nav"> 
			<?php the_custom_logo() ?>
			<div class="header__wrap" id="header-menu">
				<?php wp_nav_menu([
				'theme_location' => 'header-menu',
				'menu_class' => 'header__links',
				]); ?>
				<div class="header__close" id="header-close">
					<i class="ri-close-line"></i>
				</div>
			</div>
			<div class="header__toggle" id="header-toggle">
				<i class="ri-menu-fill"></i>
			</div>
		</nav>
	</header>
