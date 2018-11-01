<head>
  <style>
    <?php include "event.css"; ?>
  </style>
</head>
<body>
  <header>

  </header>

  <div class="wrap">

    <?php while ( have_posts() ) : the_post(); ?>
      <h1> <?php echo wp_title(); ?> </h1>

      <div class="eventBox">
        <iframe class="video" width="560" height="315" src="<?php echo get_field("trailer_embed_link")?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
        <p class="quickInfo">
          <?php echo get_field("director"); ?> ||
          <?php echo get_field("year_of_release"); ?> ||
          <?php echo get_field("duration"); ?> min ||
          <?php echo get_field("available_subtitles"); ?> ||
          <?php echo get_field("genre"); ?>
        </p>
        <p class="restrictions">
          <?php echo get_field("restrictions"); ?>
        </p>
        <button class="purchase"> Buy Now </button>
        <section class="description">
          <?php the_content(); ?>
        </section>
        <p class="dateTime">
          <b>Date and Time: </b> <br>
          <?php $date = get_field('date', false, false);
          $date = new DateTime($date);
          echo $date->format('F d Y');
           ?>, <?php echo get_field("time"); ?>
        </p>
        <p class="location">
          <b>Location</b> <br>
          <?php echo get_field("location");?> </p>
      </div>

      <div class="share">
        <section class="shareIcons">
          <h2>Share:</h2>
          <img id="facebook" src="<?php echo get_template_directory_uri() . '/assets/images/Facebook.svg'; ?>" alt="Facebook">
          <img id="twitter" src="<?php echo get_template_directory_uri() . '/assets/images/Twitter.svg'; ?>" alt="Twitter">
          <img id="googleplus" src="<?php echo get_template_directory_uri() . '/assets/images/GooglePlus.svg'; ?>" alt="GoogleP">
          <img id="instagram" src="<?php echo get_template_directory_uri() . '/assets/images/Instagram.svg'; ?>" alt="Instagram">
          <img id="mail" src="<?php echo get_template_directory_uri() . '/assets/images/Mail.svg'; ?>" alt="Mail">
        </section>
        <section class="shareEmail">
          <h2> Subscribe </h2>
          <textarea id="subscribe">E-mail</textarea>
        </section>
      </div>

      <div class="more">
        <h2> Check out some other events! </h2>
        <div class="moreItem">
          <p class="moreImage"> Image here </p>
          <p class="moreType"> film </p>
          <button class="moreBuyNow"> Buy Now! </button>
          <h3 class="moreTitle"> The name of the Event </h3>
          <p class="moreDescription"> The description of the event and stuff goes in here </p>
          <p class="moreRestrictions"> The restrictions of the event here </p>
        </div>
      </div>

    <?php endwhile; ?>
  </div><!-- .wrap -->

</body>
