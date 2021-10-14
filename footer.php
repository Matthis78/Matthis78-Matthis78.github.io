<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Verschuer
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer1">
			<div><h3>LABORATOIRE LOREM</h3></div>
			<div>
				<p>Aide</p>
				<a href="<?= get_page_link(62) ?>">Contact</a>
			</div>

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
