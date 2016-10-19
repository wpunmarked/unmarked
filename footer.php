<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>

<footer id="colophon" class="site-footer">

<?php
	if ( is_active_sidebar( 'footer-left' ) 
	|| is_active_sidebar( 'footer-center' )
	|| is_active_sidebar( 'footer-right' )
	) : ?>

<div class="wrapper p-t-2 m-t-2" id="wrapper-footer">

    <div class="container-fluid">

        <div class="row">
		
			<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
			
				<div class="col-md-4 widget-area">

					<?php dynamic_sidebar( 'footer-left' ); ?>
					
				</div>
						
			<?php endif; ?>
			
			<?php if ( is_active_sidebar( 'footer-center' ) ) : ?>
			
				<div class="col-md-4 widget-area">

					<?php dynamic_sidebar( 'footer-center' ); ?>
					
				</div>
						
			<?php endif; ?>
			
			<?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
			
				<div class="col-md-4 widget-area">

					<?php dynamic_sidebar( 'footer-right' ); ?>
					
				</div>
						
			<?php endif; ?>
			
		</div>
	
	</div>

</div><!-- #wrapper-footer -->

<?php endif; //end widget check ?>

<div class="wrapper p-y-1" id="wrapper-copyright">
    
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">
    
                    <div class="site-info">
						<?php echo get_theme_mod( 'footer_setting', 'Footer Copyright Text can be customized in wp-customizer' ); ?>
                    </div><!-- .site-info -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- .container-fluid -->
    
</div><!-- .wrapper -->

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>