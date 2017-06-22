<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   22-06-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 22-06-2017

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tp_wp_seo
 */

get_header(); ?>
<div class="row">


	<main id="main" class="site-main col m8" role="main">
		<section class="indigo darken-2 z-depth-3">
			<a class="waves-effect waves-light indigo lighten-3 btn"> <i class="material-icons right">thumb_down</i> button</a>
			<!-- Modal Trigger -->
		  <a class="waves-effect waves-light btn" href="#modal1">Modal</a>

		  <!-- Modal Structure -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <h4>Modal Header</h4>
		      <p>A bunch of text</p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		    </div>
		  </div>
			<?php
			if ( have_posts() ) :

				// echo 'XXXXXXXXX';
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</section>


	</main><!-- #main -->

	<?php
		get_sidebar();
	?>
</div>
<?php
get_footer();
