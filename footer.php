<?php wp_footer(); 
$adress_link = get_field('footer_address', 'options');
$mail_link = get_field('footer_mail', 'options');
?>
	<footer class="footer" id="contact-us" style="background: url('<?php echo esc_html( get_field('footer_background', 'options') ); ?>') center center / cover no-repeat">
		<div class="section-container">
			<a class="footer__logo" href="http://burger.local">
				<?php the_secondary_logo(); ?>
			</a>
			<div class="footer__content">
				<p class="footer__text"><?php echo esc_html( get_field('footer_text', 'options') ); ?></p>
				<div class="footer__links">
					<a href="<?php echo esc_url( $adress_link['url'] ); ?>" class="footer__address">
						<i class="ri-map-pin-2-fill"></i>
						<?php echo esc_html( $adress_link['title'] ); ?>
					</a>
					<a href="<?php echo esc_url( $mail_link['url'] ); ?>" class="footer__mail">
						<i class="ri-mail-fill"></i>
						<?php echo esc_html( $mail_link['title'] ); ?>
					</a>
					<div class="footer__social">
						<a href="<?php echo esc_url( get_field('footer_link-facebook', 'options') ); ?>">
							<i class="ri-facebook-circle-fill"></i>
						</a>
						<a href="<?php echo esc_url( get_field('footer_link-instagram', 'options') ); ?>">
							<i class="ri-instagram-fill"></i>
						</a>
						<a href="<?php echo esc_url( get_field('footer_link-twitter', 'options') ); ?>">
							<i class="ri-twitter-fill"></i>
						</a>
						<a href="<?php echo esc_url( get_field('footer_link-whatsapp', 'options') ); ?>">
							<i class="ri-whatsapp-fill"></i>
						</a>
					</div>
				</div>
			</div>
			<p class="footer__copyright">
			<?php echo esc_html( get_field('footer_copyright', 'options') ); ?>
			</p>
		</div>
	</footer>
</body>
</html>