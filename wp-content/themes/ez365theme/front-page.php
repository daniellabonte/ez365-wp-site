<?php get_header(); ?>
<!-- Article style section -->
<div class="mt-5">
  <div class="container d-flex flex-column align-items-center">
    <div class="row">
      <div class="col-md-12">
        <h3 class="mb-3"><b>Learn how EZ365 is changing the digital asset landscape</b></h3>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/LBGJUDF5Ca0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <hr class="">
  </div>
</div>
<div>
  <div class="container">
    <hr>
  </div>
</div>
<div class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex flex-column align-items-center">
        <h3 class=""><b>Be in the know.</b></h3>
        <form class="d-flex flex-column align-items-center">
          <div class="form-group">
            <label class="mb-0">Email *</label>
            <input type="email" class="form-control rounded-0" placeholder="Email Address">
            <small class="form-text text-muted">*By signing up, you agree to receive updates and marketing emails from EZ365.</small>
          </div>
          <button type="submit" class="btn text-uppercase btn-primary text-light rounded-0 py-2 px-3">Sign Up Now</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Secion 1 -->
<div class="py-5 text-center section-dark" style="background-image: url(<?php bloginfo('template_directory') ?>/images/pattern-3232784_1920b.jpg);">
  <div class="container py-1">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb-0 text-white stretch text-uppercase">Facilitating the Mass Adoption of Digital Assets.</h2>
      </div>
    </div>
  </div>
</div>
<div class="my-5" id="features">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <p class="">EZ365 is a digital ecosystem that combines the best aspects of NFTs, online gaming, digital asset trading and blockchain education. The EZ365 experience is simple, user friendly and fun, so you can easily play, trade and learn with digital assets. </p>
      </div>
    </div>
    <div class="row">
      <div class="text-center col-lg-4 col-md-4 d-flex flex-column align-items-center px-3 my-4">
        <h4 class="mb-3 text-dark"><b>Play.</b></h4>
        <p class="mb-3 text-uppercase"><b>A provably fair, effortless way to play and bet with cryptocurrency.</b></p>
        <p class="mb-3 text-md-left">A casino you can trust because you can see the outcome of every play. EZ Win attracts a community with top casino games, plus betting for sports and e-sports. Customers can play a stable coin pegged to the US dollar.</p>
        <a class="btn btn-outline-dark rounded-0 text-uppercase py-2 px-3" href="/ez-win">Learn More</a>
      </div>
      <div class="text-center col-lg-4 col-md-4 d-flex flex-column align-items-center px-3 my-4">
        <h4 class="mb-3 text-dark"><b>Trade.</b></h4>
        <p class="mb-3 text-uppercase"><b>Enabling new and expert users to invest in NFTs and cryptocurrency.</b></p>
        <p class="mb-3 text-md-left">An exchange platform dedicated to new and expert traders. EZ Exchange is intuitive, fully supported and fiat-enabled. Trade digital assets such as non-fungible tokens (NFTs) and cryptocurrency with the click of a button.</p>
        <a class="btn btn-outline-dark rounded-0 text-uppercase py-2 px-3" href="https://ezexchange.com">Learn More</a>
      </div>
      <div class="text-center col-lg-4 col-md-4 d-flex flex-column align-items-center px-3 my-4">
        <h4 class="mb-3 text-dark"><b>Learn.</b></h4>
        <p class="mb-3 text-uppercase"><b>helping the world embrace blockchain.</b></p>
        <p class="mb-3 text-md-left">An all-in-one educational portal that helps users take their blockchain knowledge to the next level. EZ Academy offers instruction and insight on a wide range of topics throughout the blockchain and digital asset universe.</p>
        <a class="btn btn-outline-dark rounded-0 text-uppercase py-2 px-3" href="/ez-academy">Learn More</a>
      </div>
    </div>
  </div>
</div>
<div class="my-5" id="features">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="">The EZ365 Platform</h3>
      </div>
    </div>
    <div class="row"4
      <div class="col-md-12"><img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/the_ez365_platform.png"></div>
    </div>
  </div>
</div>
<!-- Section 2 -->
<div class="py-5 text-center section-dark" style="background-image: url(<?php bloginfo('template_directory') ?>/images/stock-graph.jpg);">
  <div class="container py-1">
    <div class="row">
      <div class="col-md-12">
        <h2 class="display-5 mb-0 text-white stretch text-uppercase">Built by the Professionals Who Create and Protect the World's Leading Technology Platforms.</h2>
      </div>
    </div>
  </div>
</div>
<div class="my-5" id="features">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <p class="">EZ365 brings the rigor of established technology and financial market security to our digital asset platforms. From server redundancy Blockchain optimization, fault tolerance and high availability systems, to Know Your Customer (KYC)/ Anti-Money Laundering (AML) compliance, EZ365 has the expertise and experience to enable users to play, trade and learn safely and securely.</p>
      </div>
    </div>
  </div>
</div>
<!-- Section 3 -->
<div class="py-5 text-center section-dark" style="background-image: url(<?php bloginfo('template_directory') ?>/images/markus-spiske-unsplash.jpg);">
  <div class="container py-1">
    <div class="row">
      <div class="col-md-12">
        <h2 class="display-5 mb-0 text-white stretch text-uppercase">Stay Up To Date with the Latest from EZ365.</h2>
      </div>
    </div>
  </div>
</div>

<div class="my-5" id="features">
  <div class="container">
    <div class="row justify-content-center">
      <?php
      $args = array('numberposts' => 3, 'post_status' => 'publish', 'category' => 'featured');
      $recent_posts = wp_get_recent_posts($args);
      foreach ($recent_posts as $recent) { ?>
        <div class="col-md-4">
          <div class="card">
            <a href="<?php echo get_permalink($recent["ID"]); ?>" style="text-decoration: none;" class="text-dark">
              <img class="card-img-top" src="<?php bloginfo('template_directory') ?>/images/Logo.png" alt="Card image cap">
            </a>
            <div class="card-body bg-light d-flex flex-column align-items-center">
              <a href="#" style="text-decoration: none;" class="text-dark">
                <h4 class="card-title text-center"><?php echo $recent["post_title"]; ?></h4>
                <p class="card-text"><?php echo $recent["post_excerpt"]; ?></p>
              </a><a class="btn btn-link" href="<?php echo get_permalink($recent["ID"]); ?>">Read more <i class="fa fa-arrow-right" style="font-size: 12px;" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="row">
      <div class="my-3 col-md-12 d-flex flex-column align-items-center">
        <a class="btn btn-outline-dark rounded-0 text-uppercase py-2 px-3" href="#">More EZ365 News</a>
      </div>
    </div>
  </div>
</div>

<div class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="d-flex align-items-center flex-column"><b>As Seen In</b></h3>
      </div>
    </div>
    <div class="row d-flex justify-content-center px-4">
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://venturebeat.com/2019/08/08/ez365-reveals-blockchain-for-digital-asset-trading-gambling-esports-betting-and-education/">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/Venture_Beat.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://blocktribune.com/crypto-exchange-and-online-casino-ez365-adds-key-industry-leaders-to-its-team/">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/BlockTribune.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://bitport.hu/egy-maltai-ceg-majdnem-mindent-osszepakol-egy-blockchain-platformra">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/Bitport.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://digitalmediawire.com/2019/08/08/ez365-reveals-blockchain-for-digital-asset-trading-gambling-esports-betting-and-education/">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/DMW.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://financialit.net/news/blockchain/ez365-launch-worlds-first-blockchain-ecosystem-combining-digital-asset-trading">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/Financial_IT.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://www.paymentexpert.com/2019/08/09/ez365-to-launch-blockchain-based-betting-trading-and-educational-ecosystem/">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/Payment_Expert.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://www.pcnewsbuzz.com/2019/08/08/ez365-reveals-blockchain-for-digital-asset-trading-gambling-esports-betting-and-education/">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/PCNewsBuzz.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://www.pymnts.com/blockchain/bitcoin/2019/australia-police-charge-five-crypto-cold-calling-scam-ez365-launch-blockchain-ecosystem-trading-betting/">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/Pymnts.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://www.securities.io/ez365-play-trade-learn/">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/Securities.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://it.toolbox.com/blogs/shrutiumathe/ez365-to-launch-worlds-first-blockchain-ecosystem-combining-digital-asset-trading-igaming-and-blockchain-education-080919">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/Toolbox_Tech.png">
        </a>
      </div>
      <div class="col-6 col-lg-4 col-xl-3 d-flex justify-content-center">
        <a href="https://www.wiredfocus.com/ez365-reveals-blockchain-for-digital-asset-trading-gambling-esports-betting-and-education/">
          <img class="img-fluid d-block" src="<?php bloginfo('template_directory') ?>/images/Wired_Focus.png">
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Section 4 -->
<div class="py-5 text-center section-dark" style="background-image: url(<?php bloginfo('template_directory') ?>/images/hector-j-rivas-unsplashb.jpg);">
  <div class="container py-1">
    <div class="row">
      <div class="col-md-12">
        <h2 class="display-5 mb-0 text-white stretch text-uppercase">Partnering with Leading Companies in the Blockchain Industry.</h2>
      </div>
    </div>
  </div>
</div>
<div class="my-5">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center px-4">
      <div class="col-6 col-lg-3 col-xl-2 d-flex justify-content-center"><img class="img-fluid d-block" style="object-fit: contain;" src="<?php bloginfo('template_directory') ?>/images/CertiK.png"></div>
      <div class="col-6 col-lg-3 col-xl-2 d-flex justify-content-center"><img class="img-fluid d-block" style="object-fit: contain;" src="<?php bloginfo('template_directory') ?>/images/KABN_Logo.jpeg"></div>
      <div class="col-6 col-lg-3 col-xl-2 d-flex justify-content-center"><img class="img-fluid d-block" style="object-fit: contain;" src="<?php bloginfo('template_directory') ?>/images/Shyft.jpg"></div>
      <div class="col-6 col-lg-3 col-xl-2 d-flex justify-content-center"><img class="img-fluid d-block" style="object-fit: contain;" src="<?php bloginfo('template_directory') ?>/images/Digimax.jpg"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>