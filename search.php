<?php
/**
 * The template for displaying search results pages.
 *
 * @package Bootstrap to WordPress
 */

get_header(); ?>


	<div class="container">
		<div id="primary" class="row">
			<div class="col-sm-12 hidden">
			    <h2 class="page-title text-center"><?php printf( __( 'Search Results for: %s', 'bootstrap2wordpress' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</div>
			<main id="content" class="col-sm-12">

			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>
	
				<?php endwhile; ?>
	
				<?php bootstrap2wordpress_paging_nav(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
		
			</main><!-- #content -->
			
		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
