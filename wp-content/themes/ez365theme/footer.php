<!-- Footer -->
<div class="mt-5">
  <?php
  if (get_field('footer_newsletter_signup')) {
  ?>
  <div class="mt-5 bg-info">
    <div class="container p-5">
      <div class="row">
        <div
          class="col-md-12 text-lg-left text-center align-self-center d-flex flex-column justify-content-center align-items-center my-0">
          <p class="text-center">Don’t be left in the dark. Sign up for our newsletter today!</p>
          <form class="form-inline w-100" style="max-width: 450px" method="post" action="/?na=s">
            <div class="input-group w-100">
              <input type="email" class="form-control py-3 rounded-0" placeholder="Email" name="ne" required style="min-width: 230px">
              <input type="hidden" name="nl[]" value="1">
              <div class="input-group-append">
                <button class="btn btn-dark py-2 px-3 text-uppercase rounded-0" type="submit">Subscribe Now</button>
              </div>
            </div>
            <small class="form-text text-muted mt-3 text-center" style="font-size: 12;">By subscribing to our
              newsletter, you agree to receive marketing emails from EZ365.</small>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
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
          <p class="text-muted">© Copyright EZ365
            <?php echo date("Y"); ?>. All rights reserved.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>

<script src="js/smooth-scroll.js"></script>
</body>

</html>