<?php
/**
 * The template for displaying 404 pages (not found)
 * template name: 404
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					
					<h1 class="page-title"><?php ( 'Oh no! We were not able to find the page you are looking for', 'twentyseventeen' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<img src="/assets/images/sadpanda.png">
					<p><?php _e( 'It seems like nothing was found here. Would you like to try search instead?', 'twentyseventeen' ); ?></p>

					<?php get_search_form(); ?>
                      
				</div>
			</section>
		</main>
	</div>
</div>
