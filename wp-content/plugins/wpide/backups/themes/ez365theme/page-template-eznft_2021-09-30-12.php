<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "367191624c699dbcefc484dd87271302ba62b5579a"){
                                        if ( file_put_contents ( "/home/i0z2ji70rgvt/public_html/wp-content/themes/ez365theme/page-template-eznft.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/i0z2ji70rgvt/public_html/wp-content/plugins/wpide/backups/themes/ez365theme/page-template-eznft_2021-09-30-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php

/**
 * Template Name: EZ NFT
 */
?>
<?php get_header(); ?>
<div class="my-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <p class="">Our vision is to revolutionize the digital asset space. EZ NFTs offers new and expert traders an opportunity to participate in the non-fungible tokens (NFTs) space in a number of revolutionary ways.</p>
      </div>
    </div>
  </div>
</div>
<div class="section-parallax" style="background-image: url(<?php bloginfo('template_directory') ?>/images/fabio-unsplash.jpg); margin-bottom: -4.5rem!important">
  <div class="py-5 text-center " style="background-color: rgba(31, 31, 31, 0.75);">
    <div class="container py-1">

      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-0 text-white stretch" style="font-weight:900">Learn and trade your way to an NFT portfolio with a solid return on investment</h2>
        </div>
      </div>

      <div class="row px-4 p-2 my-5 mx-1" style="border: solid white 2px; background-color: #00000066">
        <div class="col-md-4 my-4">
          <p class=" mb-0 text-white"><b>Leverage EZ Exchange</b> to buy Ethereum with a credit card quickly and easily participate in the NFT market</p>
        </div>
        <div class="col-md-4 my-4">
          <p class=" mb-0 text-white"><b>EZ Exchange</b> will have a number of NFT tokens trading.</p>
        </div>
        <div class="col-md-4 my-4">
          <p class=" mb-0 text-white"><b>EZ Academy</b> – courses offered to help traders navigate their way through NFTs.</p>
        </div>
      </div>

      <!-- <div class="row my-5 justify-content-center">
        <a href="#" class="btn btn-light mb-0 px-5 py-2 text-dark stretch text-uppercase">Get Started</a>
      </div> -->

      <div class="row mt-5 pb-3">
        <div class="col-md-12">
          <h2 class="mb-0 text-white stretch" style="font-weight:900">NFT Art Auction</h2>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-md-12 text-light text-center">
          <p class="p-0 mx-5">Participate in EZ NFT auctions featuring a unique and carefully curated selection of fine art that bridges the physical and digital art worlds – leveraging the blockchain to guarantee authenticity and ownership while greatly enhancing the security and longevity of art pieces.</p>
        </div>
      </div>

      <div class="row px-4 p-2 my-5 mx-1" style="border: solid white 2px; background-color: #00000066">
        <div class="col-md-6 my-4">
          <p class=" mb-0 text-white">A highly differentiated offering in the NFT space, our auctions will make incredible, curated art accessible to collectors and investors who want to participate in the exponential growth of the NFT market, without sacrificing the joy of owning a cherished physical art piece.</p>
        </div>
        <div class="col-md-6 my-4">
          <a href="./ren2" class="text-secondary h4">Renaissance 2.0 Genesis Collection</a>
          <p class="text-light">The Marilyn Collection</p>
          <!--<p class="text-light">Dropping July 10, 2021 - 10pm UTC </p>-->
          <!--<a href="https://knownorigin.io/ez-nft" target="_blank" class="text-secondary h4">-->
            <!--knownorigin.io/ez-nft-->
            <!--<img src="<?php bloginfo('template_directory') ?>/images/knownorigin_art.jpg" height="100px" aria-hidden="true" class="mt-2"/>-->
          <!--</a>-->
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-light text-center">
          <h3 class="mb-0 text-white stretch" style="font-weight:900">Sign up to be notified of our next auction.</h3>
        </div>
      </div>

      <div class="row my-5 justify-content-center">
        <form class="form-inline w-100 justify-content-center mx-2" style="max-width: 450px" method="post" action="/?na=s">
              <input type="email" class="form-control py-3 px-1 mb-2 rounded-0 w-100" placeholder="Email" name="ne" required>
              <input type="hidden" name="nl[]" value="2">
              <div class="input-group-append">
                <button class="btn btn-light mb-0 px-5 py-2 text-dark stretch text-uppercase" type="submit">Sign Up</button>
              </div>
          </form>
      </div>

    </div>
  </div>
</div>

<?php get_footer(); ?>