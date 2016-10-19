<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

<div class="wrapper" id="single-wrapper">
    
    <div  id="content" class="container-fluid">
	
			<?php  
				/* unmarked_breadcrumbs first checks if yoast_breadcrumb exists
				* It supports custom post type and custom taxonomy.
				* If you have any custom taxonomy change the cat name in inc > function > breadcrumbs.php
				*/
				unmarked_breadcrumbs(); 
			?>

        <div class="row">
        
            <div id="primary" class="col-md-8 content-area">
			
                <main id="main" class="site-main">
				
                    <?php while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<header class="entry-header">

								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

								<div class="entry-meta">

									<?php unmarked_posted_on(); ?>

								</div><!-- .entry-meta -->

							</header><!-- .entry-header -->

							<?php echo the_post_thumbnail( 'full', array( 'class' => 'img-thumbnail' ) ); ?>						
    
							<div class="entry-content">

								<?php the_content( ); ?>
														
								<?php unmarked_link_pages( ); ?>

							</div><!-- .entry-content -->

							<footer class="entry-footer">

								<?php unmarked_entry_footer(); ?>

							</footer><!-- .entry-footer -->

						</article><!-- #post -->

                        <?php unmarked_post_nav(); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>
                        
                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <?php get_sidebar(); ?>

        </div><!-- .row -->
        
    </div><!-- .container-fluid -->
    
</div><!-- .wrapper -->

<?php get_footer(); ?>