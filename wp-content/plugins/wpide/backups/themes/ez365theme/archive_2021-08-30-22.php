<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "367191624c699dbcefc484dd8727130281357dfdd4"){
                                        if ( file_put_contents ( "/home/i0z2ji70rgvt/public_html/wp-content/themes/ez365theme/archive.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/i0z2ji70rgvt/public_html/wp-content/plugins/wpide/backups/themes/ez365theme/archive_2021-08-30-22.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php get_header(); ?>
<div class="container" style="padding-bottom: 81px;" aria-hidden="true"><!-- no content under the navbar --></div>
<div class="container text-center mx-auto">

  <h1><?php single_cat_title(); /* echo single_cat_title();*/ ?></h1>
  
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