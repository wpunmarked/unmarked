<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div class="wrapper" id="wrapper-index">
        
	<div id="content" class="container-fluid">
	
        <div class="row">
           
    	    <div id="primary" class="col-md-8 content-area">
                   
                <main id="main" class="site-main"> <!-- Element main does not need a role main attribute -->
                    
                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                                /* WordPress has a nice post format system. If you require different types of
								* formatting in post check https://codex.wordpress.org/Post_Formats
								* For more details see http://www.wpbeginner.com/glossary/post-formats/
								* https://www.competethemes.com/blog/wordpress-post-format-examples/
								*/
							?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								
								<header class="entry-header">
									
									<?php the_title( sprintf( '<h2 class="entry-title archive-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

									<div class="entry-meta">
										<?php unmarked_posted_on(); ?>
									</div><!-- .entry-meta -->
						
								</header><!-- .entry-header -->

								<?php echo the_post_thumbnail( 'full', array( 'class' => 'img-thumbnail' ) ); ?>
								
								<div class="entry-content">

									<?php the_excerpt( ); ?>

									<?php unmarked_link_pages( ); ?>
										
								</div><!-- .entry-content -->

								<footer class="entry-footer">

									<?php unmarked_entry_footer(); ?>
									
								</footer><!-- .entry-footer -->
								
							</article><!-- #post -->

                        <?php endwhile; ?>
                        
							<?php
								
									wp_bootstrap_pagination();
							?>
                        
                    <?php else : ?>

                        <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                        
                    <?php endif; ?>
                        
				</main><!-- #main -->
                   
    	    </div><!-- #primary -->
        
			<?php get_sidebar(); ?>

        </div><!-- .row -->
           
	</div><!-- .container-fluid -->
        
</div><!-- .wrapper -->

<?php get_footer(); ?>