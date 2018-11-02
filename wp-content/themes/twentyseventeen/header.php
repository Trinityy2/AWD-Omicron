<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?></title>
<style>
	<?php include "allfonts.css"; ?>
	<?php include "header.css"; ?>
  </style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<nav class="site-nav">
                    <ul id = "menu">
                    <a href="#"><li>ABOUT</li></a>
                    <a href="#"><li>PROGRAM</li></a>
                    <a href="#"><li>CINESEEDS</li></a>

										<!-- To get the details of the first news item -->
										<?php
						          $news_posts = get_posts([
						            'post_type' => 'post',
						            'numberposts' => 1,
						            'orderby' => 'post_date',
												'order' => 'DESC',
												'post_status' => 'publish'
						          ]);

											$link = get_permalink($news_posts[0]->ID);
										?>

                    <a href ="<?php echo $link ?>"><li>NEWS</li></a>
                    <a href="#"><li>OUR IMPACT</li></a>
                    <a href="#"><li>GET INVOLVED</li></a>
                    <a href="#"><li>CONTACT US</li></a>
				</ul>
        </nav>
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>


	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
