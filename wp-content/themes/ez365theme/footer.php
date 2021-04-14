<!-- Footer -->
<div class="p-5 bg-primary">
  <div class="container">
    <div class="row justify-content-center">
    <?php
        wp_nav_menu(array(
          'theme_location' => 'socialmediaicons',
          'menu_class' => 'footer-links list-inline text-muted d-flex justify-content-center'
        ));
        ?>
    </div>

    <div class="row m-1">
      <div class="col-md-12">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footerlinks',
          'menu_class' => 'footer-links list-inline text-muted d-flex justify-content-center'
        ));
        ?>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12 text-center">
        <p class="text-muted">© Copyright EZ365 Limited 2019. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>

<script src="js/smooth-scroll.js"></script>
</body>

</html>