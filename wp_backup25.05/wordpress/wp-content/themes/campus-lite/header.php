 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Campus Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( is_active_sidebar( 'headtopleft' ) || is_active_sidebar( 'headtopright' ) ) : ?>
<div class="header-top">
  <div class="container">
     <div class="left"><?php dynamic_sidebar('headtopleft'); ?></div>       
     <div class="right"><?php dynamic_sidebar('headtopright'); ?></div>
     <div class="clear"></div>
  </div>
 </div><!--end header-top-->
 <?php endif; ?>
<div class="header">
            		<div class="header-inner">
                    		<div class="logo">
                            		<?php campus_lite_the_custom_logo(); ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p><?php echo $description; ?></p>
					<?php endif; ?>
                             </div>                             
                             <div class="toggle">
                            	<a class="toggleMenu" href="#"><?php _e('Menu','campus-lite'); ?></a>
                            </div>                           
                            <div class="nav">
								<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div><!-- nav --><div class="clear"></div>
                    </div><!-- header-inner -->
            </div><!-- header -->