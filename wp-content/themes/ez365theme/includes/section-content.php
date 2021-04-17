<?php if(have_posts()) : while(have_posts()): the_post(); ?>

<div class="col col-md-8 mx-auto text-center">
  <p class="text-muted"><?php echo get_the_date('l F jS, Y') ?></p>

  <div class="text-left">
    <?php the_content(); ?>
  </div>
</div>

<?php endwhile; else: endif ?>