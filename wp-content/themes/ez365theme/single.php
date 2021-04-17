<?php get_header(); ?>
<div class="container" style="padding-bottom: 81px;" aria-hidden="true"><!-- no content under the navbar --></div>
<div class="container mt-5">
  <?php the_title('<h1 class="display-5 text-center font-weight-bold">','</h1>',true); ?>
  <?php
  get_template_part('includes/section','content');
  ?>
</div>
<?php get_footer(); ?>