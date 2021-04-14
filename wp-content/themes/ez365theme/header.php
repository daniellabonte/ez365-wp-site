<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="<?php bloginfo('template_directory') ?>/images/favicon.gif">
  <title>EZ365</title>
  <meta name="description" content="EZ365 is digital ecosystem that makes it  easy to play, trade and learn with cryptocurrency, such as Bitcoin, easily and securely.  Our ecosystem includes a digital asset trading platform, a blockchain based casino and a blockchain educational portal.">
  <meta name="keywords">

  <?php
  wp_head();
  $hero = get_field('hero');
  ?>
</head>

<body>
  <!-- Navbar -->
  <header>
    <nav <?php if ($hero['show_hero']) echo 'id="fadenavbar"' ?> class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark <?php if ($hero['show_hero']) echo 'navbar-ontop' ?>">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="<?php bloginfo('template_directory') ?>/images/EZ365_logo_TM_white.png" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcollapse" aria-controls="navcollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navcollapse">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'mainnav',
            'menu_class' => ' top-menu navbar-nav uppercase text-uppercase'
          ));
          ?>
          <a class="btn navbar-btn text-white mx-2 rounded-0 border-light border text-uppercase py-2 px-3" href="#https://ezexchangehelp.zendesk.com/hc/en-us/requests/new" contenteditable="true"> Contact Us </a>
        </div>
      </div>
    </nav>
    <!-- Cover -->
    <?php if ($hero['show_hero']) { ?>
      <div class="py-5 text-center section-parallax section-dark" style="background-image: url(<?php echo $hero['banner_image'] ?>);">
        <div class="container mv-5 p-5">
          <div class="row text-white">
            <div class="col-md-12 my-5 text-lg-left text-center align-self-center d-flex flex-column<?php if ($hero['title_first']) echo '-reverse' ?> justify-content-center align-items-center">
              <span class="lead text-uppercase"><?php echo $hero['subtitle']; ?></span>
              <h1 class="display-2" style="font-weight: 400"><?php echo $hero['title']; ?></h1>
            </div>
          </div>
        </div>
      </div>
  </header>
<?php echo var_dump($hero); } ?>