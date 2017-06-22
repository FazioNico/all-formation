<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   22-06-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 22-06-2017

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tp_wp_seo
 */

?>


<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tp_wp_seo' ) ); ?>"><?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'tp_wp_seo' ), 'WordPress' );
		?></a>
		<span class="sep"> | </span>
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'tp_wp_seo' ), 'tp_wp_seo', '<a href="https://automattic.com/">Nicolas Fazio</a>' );
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
