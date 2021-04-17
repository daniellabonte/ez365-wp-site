<?php if(have_posts()) : while(have_posts()): the_post(); ?>

<div class="row my-3 text-center">
  <div class="col col-md-8 mx-auto">
    <?php the_title('<h3 class="display-5 font-weight-bold mb-0">','</h3>',true); ?>
    <small><?php the_date('l F jS, Y'); ?></small>
    <div class="text-left">
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-arrow-right" style="font-size: 12px;" aria-hidden="true"></i></a>
    </div>
    
    <hr />
  </div>
</div>

<?php endwhile; else: endif ?>