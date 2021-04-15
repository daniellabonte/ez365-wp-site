<?php get_header(); ?>
<div class="container" style="padding-bottom: 81px;" aria-hidden="true"><!-- no content under the navbar --></div>
<div class="container mt-5">
  <?php the_title('<h1 class="display-5 font-weight-bold">','</h1>',true); ?>
  <?php
  while (have_posts()) : the_post();
    the_content();
  endwhile;
  ?>
</div>
<?php get_footer(); ?>