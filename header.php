<?php
/**
 * The header for our theme.
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<!-- If Site Icon isn't set in customizer -->
<?php if ( ! has_site_icon() ) { ?>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<?php } ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

    <header class="wrapper-fluid wrapper-navbar" id="wrapper-header">
	
				<div class="navbar-header hidden-md-up">
					
					<div class="container-fluid">
					
						<div class="navbar-text"><?php _e( 'Menu', 'unmarked' ); ?></div>
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-navigation">&#9776;</button>
					
					</div>
					
				</div>
	
					<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'unmarked' ); ?></a>
           
                <div class="container-fluid">
					
					<div class="row">
					
						<div class="col-md-4">
						
						<?php 
						if ( has_custom_logo() && get_theme_mod('unamrked_logo_width') ){
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$custom_logo_width = get_theme_mod( 'unamrked_logo_width' );
								$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								echo '<div class="site-logo" style="max-width:'.$custom_logo_width.'px; height:auto;">';
									the_custom_logo();
								echo '</div>';
						} elseif ( has_custom_logo()) {
								echo '<div class="site-logo">';
										the_custom_logo();
								echo '</div>';
						} else { ?>
								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="site-title"><?php bloginfo( 'name' ); ?></span><br><span class="site-tagline"><?php if ( get_option('blogdescription') ) { echo get_option('blogdescription'); }?></span></a>
							<?php }?>
							
						</div>
					
						<div class="col-md-8 collapse navbar-toggleable-sm" id="site-navigation">
						
                            <nav class="navbar site-navigation">
								<?php 
								/* SmartMenus is possibly the most advanced menu script out there. 
								 * It is a perfect solution for multilevel responsive menu.  */
								?>
								
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
										'container_id' => 'unmarkedNav',
                                        'container_class' => '',
                                        'menu_class' => 'sm sm-custom',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => '',
                                    )
                            ); ?>
							</nav><!-- .site-navigation -->
							
						</div>
						
					</div> <!-- .row -->
					
                </div> <!-- .container-fluid -->
                
    </header><!-- .wrapper-navbar end -->