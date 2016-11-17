<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *PARA EL INDEX
 * @package rootstrap
 */

get_header(); ?>



<div class="top-section">

    </div>

    <div class="">
        <div  class="content-area col-sm-12 col-md-8 <?php echo rootstrap_get_option( 'site_layout', 'no entry' ); ?>">
            <div id="main" class="site-main" role="main">
            <?php do_action( 'rootstrap_post_before' ); ?>
            <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php do_action( 'rootstrap_post_start' ); ?>

           </div>
       </div>
                    

	

</div>
<?php get_footer(); ?>
