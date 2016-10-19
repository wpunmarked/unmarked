<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * You can copy this template and create as many as custom 
 * page-templates you require for your project.
 */

get_header(); ?>

<div class="wrapper" id="page-wrapper">
    
    <div id="content" class="container-fluid">
	
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

								<?php the_title( '<h1 class="entry-title page-title">', '</h2>' ); ?>

							</header><!-- .entry-header -->

							<?php echo the_post_thumbnail( 'full', array( 'class' => 'img-thumbnail' ) ); ?> 
    
							<section class="entry-content">

								<?php the_content( ); ?>

								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'unmarked' ),
										'after'  => '</div>',
									) );
								?>

							</section><!-- .entry-content -->

							<footer class="entry-footer">

								<?php edit_post_link( __( 'Edit', 'unmarked' ), '<span class="edit-link">', '</span>' ); ?>

							</footer><!-- .entry-footer -->

						</article><!-- #post-## -->

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