<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package medium
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<!--
		<div class="site-info">
			<?php do_action( 'medium_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'medium' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'medium' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'medium' ), 'medium', '<a href="http://seanvoss.com/" rel="designer">Sean Voss</a>' ); ?>
		</div>-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
