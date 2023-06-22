<?php
/**
 * Header - Niche Blog
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package niche_blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> lang="<?php echo esc_attr( get_bloginfo( 'language' ) ); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'niche-blog' ); ?></a>

	<?php if( is_front_page() || !is_paged() ) {
		get_template_part( 'inc/header', 'image' );
	} ?>
	
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="container">
				<div class="site-branding-logo">
					<?php the_custom_logo(); ?>
				</div><!-- .site-branding-logo -->

				<div class="site-branding-text">
					<?php if ( is_front_page() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>

					<?php
					$description = get_bloginfo( 'description', 'display' );

					if ( $description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html( $description ); ?></p>
					<?php endif; ?>
				</div><!-- .site-branding-text -->
			</div><!-- .container -->
		</div><!-- .site-branding -->

		<!-- Social Icons -->
		<div class="col-md-4 col-sm-4 col-xs-3">
					<ul class="social-header clearfix">
						<?php if( get_theme_mod( 'social_facebook' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_facebook' ) ); ?>" class="facebook"><i class="fa-brands fa-facebook"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_twitter' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_twitter' ) ); ?>" class="twitter"><i class="fa-brands fa-twitter"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_instagram' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_instagram' ) ); ?>" class="instagram"><i class="fa-brands fa-instagram"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_github' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_github' ) ); ?>" class="github"><i class="fa-brands fa-github"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_youtube' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_youtube' ) ); ?>" class="youtube"><i class="fa-brands fa-youtube"></i></a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'social_tiktok' )): ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'social_tiktok' ) ); ?>" class="youtube"><i class="fa-brands fa-tiktok"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>
		
		<nav id="site-navigation" class="main-navigation navigation-menu">
			<div class="container">
				<button aria-label="menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" role="button">
					<?php
						echo niche_blog_get_svg( array( 'icon' => 'bars' ) );
						echo niche_blog_get_svg( array( 'icon' => 'close' ) );
					?>
					<span aria-label="menu" class="primary-menu-label"><?php esc_html_e( 'Menu', 'niche-blog' ); ?></span>
				</button>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary_menu',
	    			'container' 	 => false,
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav-menu',
				) );
				?>
			</div><!-- .container -->
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		

