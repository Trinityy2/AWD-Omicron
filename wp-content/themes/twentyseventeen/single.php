<head>
	<style>
		<?php include "single.css"; ?>
	</style>
</head>

<?php
function getPrevNext(){
	$postlist = get_posts('sort_column=menu_order&sort_order=asc');
	$posts = array();
	foreach ($postlist as $post) {
	   $posts[] += $post->ID;
	}

	$current = array_search(get_the_ID(), $posts);
	$prevID = $posts[$current-1];
	$nextID = $posts[$current+1];

	if (!empty($prevID)) {
		echo '<a href="';
		echo get_permalink($prevID);
		echo '"';
		echo 'title="';
		echo get_the_title($prevID);
		echo'"><< Previous</a>';
	} else{
		echo '<< Previous';
	}

	echo " || ";

	if (!empty($nextID)) {
		echo '<a href="';
		echo get_permalink($nextID);
		echo '"';
		echo 'title="';
		echo get_the_title($nextID);
		echo'">Next >></a>';
	}else{
		echo 'Next >>';
	}
}
?>

<body>

	<div class="wrap">

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();?>
		<div class="title">
			<h1><?= wp_title() ?></h1>
		</div>

		<div class="content">
			<p><?= the_content() ?> </p>
		</div>

		<div class="navigation">
			<p><?php getPrevNext(); ?>
		</div>

		<?php endwhile; // End of the loop. ?>

	</div><!-- .wrap -->

</body>
