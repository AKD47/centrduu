<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moudod
 */

?>

<footer class="footer">
	<div class="container">
		<div class="row">

			<h3 class="footer__title">
				МУНИЦИПАЛЬНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ДОПОЛНИЕЛЬНОГО ОБРАЗОВАНИЯ ДЕТЕЙ <br>
				«ДОМ ДЕТСКОГО ТВОРЧЕСТВА ВОРОШИЛОВСКОГО РАЙОНА ГОРОДА ДОНЕЦКА»
			</h3>

			<div class="footer__contacts">
				<span class="footer__contacts--name">НАШ АДРЕС:</span>
				<div class="footer__contacts--address">
					<span
						class="address"><?php echo fw_get_db_customizer_option('address'); ?></span>
					<span class="phone">тел.: <a href="tel:<?php echo fw_get_db_customizer_option('phone'); ?>"><?php echo fw_get_db_customizer_option('phone'); ?></a></span>
					<span class="email">е-mail: <a href="mailto:<?php echo fw_get_db_customizer_option('email'); ?>"><?php echo fw_get_db_customizer_option('email'); ?></a></span>
				</div>
			</div>

			<div class="footer__social">
				<span class="footer__contacts--name">мы в социальных сетях</span>
				<a href="<?php echo fw_get_db_customizer_option('vk'); ?>" class="clubs__item--social" target="_blank"><i class="fa fa-vk"
				                                                                                    aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
