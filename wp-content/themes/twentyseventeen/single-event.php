<head>
  <style>
    <?php include "allfonts.css"; ?>
    <?php include "event.css"; ?>
  </style>
</head>
<body>
  <header>
  <?php>
        get_header();
   <?php>
  </header>

  <div class="wrap">

    <?php while ( have_posts() ) : the_post(); ?>

      <div class="eventBox">
        <iframe class="video" width="560" height="315" src="<?php echo get_field("trailer_embed_link")?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
        <section class="quickInfo">
          <p class="title"> <b><?php echo get_the_title(); ?> </b></p>

          <p>
            <?php echo get_field("director"); ?> ||
            <?php echo get_field("year_of_release"); ?> ||
            <?php echo get_field("duration"); ?> min ||
            <?php echo get_field("available_subtitles"); ?> ||
            <?php echo get_field("genre"); ?>
          </p>
        </section>
        <p class="restrictions">
          <?php echo get_field("restrictions"); ?>
        </p>
        <button class="purchase"> Buy Now </button>
        <section class="description">
          <?php the_content(); ?>
        </section>
        <p class="dateTimeLocation">
          <b>Date and Time: </b> <br>
          <?php $date = get_field('date', false, false);
          $date = new DateTime($date);
          echo $date->format('F d Y');
           ?>, <?php echo get_field("time"); ?> <br><br>
          <b>Location</b> <br>
          <?php echo get_field("location");?> <br>
          <iframe src="http://maps.google.com/maps?output=embed&z=15&q=<?php echo get_field("location");?>"></iframe>
        </p>
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

      <!-- Random posts -->
      <div class="more">
        <h2> Check out some other events! </h2>

        <?php
          $events_posts = get_posts([
            'post_type' => 'event',
            'numberposts' => 2,
            'orderby' => rand
          ]);

          foreach ($events_posts as $post){
            setup_postdata( $post );
        ?>
        <div class="moreItem">
          <p class="moreVideo"> <iframe class="video" src="<?php echo get_field("trailer_embed_link")?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe> </p>
          <p class="moreType"> <?= get_field('genre') ?> </p>
          <button class="moreBuyNow"> Buy Now! </button>
          <h3 class="moreTitle"> <?= get_the_title() ?> </h3>
          <p class="moreDescription"> <?= wp_trim_words( get_the_content(), 40, null ) ?> <br> <br> <?= get_field(restrictions) ?></p>
        </div>
        <?php
          wp_reset_postdata();
          }
        ?>
      </div>

    <?php endwhile; ?>
  </div><!-- .wrap -->

</body>
