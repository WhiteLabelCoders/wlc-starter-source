<?php
/**
 * Default footer template
 * Footer template is required by WordPress!
 *
 * This template is based on Genesis Theme hooks,
 * You can use such hooks from this guide https://genesistutorials.com/visual-hook-guide/,
 * just replace 'genesis_' prefix with 'il_'.
 *
 * @package fh-starter
 * @version 1.0.0.
 * @author  Mateusz Major
 * @link    https://frontend.house/
 */

?>
				<?php do_action( 'fh_before_footer' ); ?>

				<footer class="site-footer">
					<?php do_action( 'fh_footer' ); ?>
				</footer>

				<?php do_action( 'fh_after_footer' ); ?>

			</div><!-- End of site-container, from header.php -->

		<?php do_action( 'fh_after' ); ?>
		<?php wp_footer(); ?>

	</body>

</html>