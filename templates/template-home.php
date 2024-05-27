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
	</section>
	<section class="menu section-container" id="menu">
		<h3 class="menu__subheading">
			<?php echo esc_html( get_field('menu_subheading') ); ?>
		</h3>
		<h2 class="menu__heading">
			<?php echo esc_html( get_field('menu_heading') ); ?>
		</h2>
		<p class="menu__text">
			<?php echo esc_html( get_field('menu_text') ); ?>
		</p>
		<div class="menu__filters">
			<label class="menu__filter">
				<input type="checkbox" class="menu__filter-checkbox" value="beef">
				<div class="menu__filter-icon">
					<img src="<?= esc_html(get_field('menu_icon-beef')); ?>" alt=""/>
				</div>
			</label>
			<label class="menu__filter">
				<input type="checkbox" class="menu__filter-checkbox" value="chicken">
				<div class="menu__filter-icon">
					<img src="<?= esc_html(get_field('menu_icon-chicken')); ?>" alt=""/>
				</div>
			</label>
			<label class="menu__filter">
				<input type="checkbox" class="menu__filter-checkbox" value="bacon">
				<div class="menu__filter-icon">
					<img src="<?= esc_html(get_field('menu_icon-bacon')); ?>" alt=""/>
				</div>
			</label>
		</div>
		<div class="menu__items">
				
		</div>
		<button class="menu__show-more-btn btn" data-page-number="2">SHOW MORE</button>


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
	<section class="reservation" id="booking">
		<div class="reservation__content section-container">
			<h3 class="reservation__subheading">
				<?php echo esc_html( get_field('booking_subheading') ); ?>
			</h3>
			<h2 class="reservation__heading">
				<?php echo esc_html( get_field('booking_heading') ); ?>
			</h2>
			<form class="reservation__form">
				<input name="name" type="text" placeholder="NAME" required>
				<input name="email" type="email" placeholder="EMAIL" required>
				<div><input name="date" type="date" required><i class="ri-calendar-schedule-line"></i></div>
				<div><input name="time" type="time" required><i class="ri-time-line"></i></div>
				<input name="number" type="number" min="1" max="10" placeholder="PEOPLE" required>
				<button class="btn" type="submit">FIND TABLE</button>
				<p class="reservation__message"></p>
			</form>
		</div>
		<img class="reservation__decor-left" src="<?php echo esc_html( get_field('booking_decor-left') ); ?>" alt=""/>
		<img class="reservation__decor-right" src="<?php echo esc_html( get_field('booking_decor-right') ); ?>" alt=""/>
	</section>
</main>
<?php get_footer(); ?>