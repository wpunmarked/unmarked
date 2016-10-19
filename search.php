<?php
/**
 * The template for displaying search results pages.
 */

get_header(); ?>

<div class="wrapper search-wrapper">
    
    <div class="container-fluid">
	
			<?php  
				/* unmarked_breadcrumbs first checks if yoast_breadcrumb exists
				* It supports custom post type and custom taxonomy.
				* If you have any custom taxonomy change the cat name in inc > function > breadcrumbs.php
				*/
				unmarked_breadcrumbs(); 
			?>

        <div class="row">
        
            <div id="primary" class="col-md-8 content-area">
                
                <main id="main" class="site-main" role="main">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">

                        <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'unmarked' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        
                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                       <article id="post-<?php the_ID(); ?>" <?php post_class( 'p-b-2' ); ?>>

							<header class="entry-header">

								<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

								<?php if ( 'post' == get_post_type() ) : ?>

									<div class="entry-meta">

										<?php unmarked_posted_on(); ?>

									</div><!-- .entry-meta -->

								<?php endif; ?>

							</header><!-- .entry-header -->

							<section class="entry-summary">

								<?php the_excerpt(); ?>

							</section><!-- .entry-summary -->

							<footer class="entry-footer">

								<?php unmarked_entry_footer(); ?>

							</footer><!-- .entry-footer -->

						</article><!-- #post-## -->

                    <?php endwhile; ?>

                    <?php unmarked_paging_nav(); ?>

                <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

                </main><!-- #main -->
                
            </div><!-- #primary -->

            <?php get_sidebar(); ?>

        </div><!-- .row -->
    
    </div><!-- .container -->
    
</div><!-- .wrapper -->

<?php get_footer(); ?>