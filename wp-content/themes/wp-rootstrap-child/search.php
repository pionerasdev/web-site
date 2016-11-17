<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package rootstrap
 */

get_header(); ?>
	<div class="">
		<section  class="content-area searchresult col-sm-12 col-md-8 <?php echo rootstrap_get_option( 'site_layout' ); ?>">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'rootstrap' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php rootstrap_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</section><!-- #primary -->


<?php get_footer(); ?>
