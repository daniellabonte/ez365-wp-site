<?php

/**
 * Template Name: Investors
 */
?>
<?php get_header(); ?>

<div class="my-5" id="features">
  <div class="container">
    <div class="row justify-content-center">
      <?php
      $args = array('numberposts' => 3, 'post_status' => 'publish', 'category' => 'news');
      $recent_posts = wp_get_recent_posts($args);
      foreach ($recent_posts as $recent) { ?>
        <div class="col-md-4">
          <div class="card">
            <a href="<?php echo get_permalink($recent["ID"]); ?>" style="text-decoration: none;" class="text-dark">
              <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/Logo.png" alt="Card image cap">
            </a>
            <div class="card-body bg-light d-flex flex-column align-items-center">
              <a href="#" style="text-decoration: none;" class="text-dark">
                <h4 class="card-title text-center"><?php echo $recent["post_title"]; ?></h4>
                <p class="card-text"><?php echo $recent["post_excerpt"]; ?></p>
              </a><a class="btn btn-link" href="<?php echo get_permalink($recent["ID"]); ?>">Read more <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row">
      <div class="my-3 col-md-12 d-flex flex-column align-items-center">
        <a class="btn btn-outline-dark rounded-0 text-uppercase py-2 px-3" href="#">More EZ365 News</a>
      </div>
    </div>
  </div>
</div>

<div class="py-5 text-center section-dark" style="background-image: url(<?php bloginfo('template_directory') ?>/images/pattern-3232784_1920b.jpg);">
  <div class="container py-1">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-0 text-white stretch text-uppercase">Stock Information</h2>
      </div>
    </div>
  </div>
</div>
<div class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="p-0 mx-5">Stock name</p>
        <p class="p-0 mx-5">Stock ticker</p>
        <p class="p-0 mx-5">Filing</p>
        <p class="p-0 mx-5">List of filings</p>
      </div>
    </div>
  </div>
</div>

<div class="py-5 text-center section-dark" style="background-image: url(<?php bloginfo('template_directory') ?>/images/pattern-3232784_1920b.jpg);">
  <div class="container py-1">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-0 text-white stretch text-uppercase">Global Leadership Team</h2>
      </div>
    </div>
  </div>
</div>
<div class="my-5">
  <div class="container">
    <div class="row justify-content-center">
      <?php
      $args = array(
        'post_type' => 'leadership-team',
        'posts_per_page' => 10,
        'meta_key' => 'order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="<?php the_field('profile_picture'); ?>" alt="Card image cap">
              <div class="card-body bg-light d-flex flex-column align-items-center">
                <h4 class="card-title text-center"><?php the_title(); ?></h4>
                <p><?php the_field('role'); ?></p>
                <span class="card-text text-center"><?php the_excerpt(); ?></span>
                <a class="btn btn-link" href="<?php the_field('linkedin_url'); ?>">
                  <img src="<?php bloginfo('template_directory') ?>/images/linkedin-icon.jpg" />
                </a>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else :  ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>