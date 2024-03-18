<?php 
/*
Template Name: Home
*/
get_header(); 
?>
<main class="main">
	<section class="hero" id="home" style="background: url('<?php echo esc_html( get_field('hero_background') ); ?>') center center / cover no-repeat">
		<div class="hero-container section-container">
			<div class="hero__content">
				<h3 class="hero__text"><?php echo esc_html( get_field('hero_text') ); ?></h3>
				<h1 class="hero__heading"><?php echo esc_html( get_field('hero_heading') ); ?></h1>
				<h2 class="hero__subheading"><?php echo esc_html( get_field('hero_subheading') ); ?></h2>
			</div>
			<img src="<?php the_field('hero_image'); ?>" alt="" class="hero__image"/>
		</div>
	</section>
	<section class="banner" id="special">
		<div class="section-container">
			<div class="banners">
					<a href="#" class="banners__card">
						<img src="<?php echo esc_html( get_field('banner-1_image') ); ?>" alt="" class="banners__image"/>
						<div class="banners__card-content">
							<h4 class="banners__subtitle"><?php echo esc_html( get_field('banner_subheading') ); ?></h4>
							<h3 class="banners__title"><?php echo esc_html( get_field('banner-1_heading') ); ?></h3>
						</div>
					</a>
					<div class="banners__wrap">
						<a href="#" class="banners__card">
							<img src="<?php echo esc_html( get_field('banner-2_image') ); ?>" alt="" class="banners__image"/>
							<div class="banners__card-content">
								<h4 class="banners__subtitle"><?php echo esc_html( get_field('banner_subheading') ); ?></h4>
								<h3 class="banners__title"><?php echo wp_kses_post ( get_field('banner-2_heading') ); ?></h3>
							</div>
						</a>
						<a href="#" class="banners__card">
							<img src="<?php echo esc_html( get_field('banner-3_image') ); ?>" alt="" class="banners__image"/>
							<div class="banners__card-content">
								<h4 class="banners__subtitle"><?php echo esc_html( get_field('banner_subheading') ); ?></h4>
								<h3 class="banners__title"><?php echo esc_html( get_field('banner-3_heading') ); ?></h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="menu section-container" id="menu">
		
	</section>
	<section class="discover" id="events">
		<div class="section-container">
			<div class="discover__wrap">	
				<div class="discover__content">
					<h3 class="discover__subheading"><?php echo esc_html( get_field('discover_subheading') ); ?></h3>
					<h2 class="discover__heading"><?php echo esc_html( get_field('discover_heading') ); ?></h2>
					<p class="discover__text"><?php echo esc_html( get_field('discover_text') ); ?></p>
				</div>
				<img src="<?php echo esc_html( get_field('discover_image') ); ?>" alt="" class="discover__image"/>
			</div>
		</div>
	</section>
	<section class="reservation section-container" id="booking">
		
	</section>
</main>
<?php get_footer(); ?>