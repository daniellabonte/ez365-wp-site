<?php

/**
 * Template Name: Investors
 */
?>
<?php get_header(); ?>

<?php
$args = array(
  'numberposts' => 3,
  'post_status' => 'publish',
  'category_name' => 'featured'
);
$query = new WP_Query($args);
if ($query->have_posts()) { ?>
  <div class="my-5">
    <div class="container">
      <div class="row justify-content-center">
        <?php
        while ($query->have_posts()) {
          $query->the_post(); ?>
          <div class="col-md-4">
            <div class="card">
              <a href="<?php the_guid(); ?>" style="text-decoration: none;" class="text-dark">
                <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/Logo.png" alt="Card image cap">
              </a>
              <div class="card-body bg-light d-flex flex-column align-items-center">
                <a href="<?php the_guid(); ?>" style="text-decoration: none;" class="text-dark">
                  <h4 class="card-title text-center"><?php the_title(); ?></h4>
                  <?php if (has_excerpt()) { ?><p class="card-text"><?php the_excerpt(); ?></p><?php } ?>
                </a>
                <a class="btn btn-link" href="<?php the_guid(); ?>">Read more <i class="fa fa-arrow-right" style="font-size: 12px;" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        <?php  }
        wp_reset_postdata(); ?>
      </div>
    </div>
  </div><?php
      }
        ?>

<div class="container">
  <div class="row my-5">
    <div class="col-md-12 d-flex flex-column align-items-center text-center">
      <h3 class=""><b>Stock Information</b></h3>
      <div class="row">
        <a href="https://www.otcmarkets.com/stock/wcig/profile" target="_blank">Wee-Cig International Corporation (WCIG)</a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="py-5 text-center section-dark" style="background-image: url(< ?php bloginfo('template_directory') ? >/images/pattern-3232784_1920b.jpg);">
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
</div> -->

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