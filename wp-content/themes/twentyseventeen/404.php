
<?php get_header(); ?>
<style></style>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">

					<h1 class="page-title"><?php ( 'Oh no! We were not able to find the page you are looking for'); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/sadpanda.png'; ?>">
					<p><?php _e( 'It seems like nothing was found here. Would you like to try search instead?'); ?></p>
				</div>
				<div></div>
			</section>
		</main>
	</div>
</div>
