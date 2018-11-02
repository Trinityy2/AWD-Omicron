
<?php get_header(); ?>

<style>
	<?php include "allfonts.css"; ?>
	<?php include "404.css"; ?>
</style>

<div class="wrap">

			<section class="error-404 not-found">
				<header class="page-header">

					<h1 class="page-title">
						<?php ( 'Oh no! We were not able to find the page you are looking for'); ?>
					</h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<a href = "<?php echo get_home_url('/'); ?>">
						<img class = "panda" src="<?php echo get_template_directory_uri() . '/assets/images/sadpanda.png'; ?>">
					</a>
					<h1><?php _e( 'Looks like you and this panda got lost. Let\'s take this panda back home...'); ?></h1>
				</div>
			</section>

</div>
