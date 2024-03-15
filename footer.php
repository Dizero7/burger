<?php wp_footer(); 
$facebook_link = get_field('footer_link-facebook');
?>
	<footer class="footer" id="contact-us" style="background: url('<?php echo esc_html( get_field('footer_background') ); ?>') center center / cover no-repeat">
		<div class="section-container">
			<a class="footer__logo" href="http://burger.local">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo-light.png'); ?>" alt="" />
			</a>
			<div class="footer__content">
				<p class="footer__text"><?php echo esc_html( get_field('footer_text') ); ?></p>
				<div class="footer__links">
					<a href="" class="footer__address"></a>
					<a href="" class="footer__mail"></a>
					<div class="footer__social">
						<a href="<?php echo esc_url( $facebook_link['url'] ); ?>"><i class="ri-facebook-circle-fill"></i></a>
						<a href=""><i class="ri-instagram-fill"></i></a>
						<a href=""><i class="ri-twitter-fill"></i></a>
						<a href=""><i class="ri-whatsapp-fill"></i></a>
					</div>
				</div>
			</div>
			<p class="footer__copyright">
			<?php echo esc_html( get_field('footer_copyright') ); ?>
			</p>
		</div>
	</footer>
</body>
</html>