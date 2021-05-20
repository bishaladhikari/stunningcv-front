<?php
/**
 * Displays footer site info
 *
 * @subpackage Geschaft Business
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<?php
		echo esc_html( get_theme_mod( 'geschaft_business_footer_text' ) );
		printf(
			/* translators: %s: Business WordPress Theme. */
			esc_html__( ' %s ', 'geschaft-business' ),
			'<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-business-wordpress-theme/', 'geschaft-business' ) . '"> Business WordPress Theme</a>'
		);
	?>
</div>