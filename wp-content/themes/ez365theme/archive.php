<?php get_header(); ?>
<div class="container" style="padding-bottom: 81px;" aria-hidden="true"><!-- no content under the navbar --></div>
<div class="container text-center mx-auto">

  <h1 style="margin-top: 80px;margin-bottom: 70px;"><?php single_cat_title(); ?></h1>
  
  <?php get_template_part('includes/section','archive'); ?>

  <?php
  global $wp_query;

  $big = 9999999999;
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages
  ));
  ?>

</div>
<?php get_footer(); ?>