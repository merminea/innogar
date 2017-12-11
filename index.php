<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 */

get_header(); ?>

<?php require get_template_directory()."./wpng2/dist/index.html"; ?>


		</div><!-- .col-full -->
		</div><!-- #content -->
	
		<?php do_action( 'storefront_before_footer' ); ?>
	
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="col-full">
	
				<?php
				/**
				 * Functions hooked in to storefront_footer action
				 *
				 * @hooked storefront_footer_widgets - 10
				 * @hooked storefront_credit         - 20
				 */
				do_action( 'storefront_footer' ); ?>
	
			</div><!-- .col-full -->
		</footer><!-- #colophon -->
	
		<?php do_action( 'storefront_after_footer' ); ?>
	
	</div><!-- #page -->
	
	<?php wp_footer(); ?>
	
	</body>
	</html>
