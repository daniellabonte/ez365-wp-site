<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "367191624c699dbcefc484dd87271302ba62b5579a"){
                                        if ( file_put_contents ( "/home/i0z2ji70rgvt/public_html/wp-content/themes/ez365theme/page-template-featured-drops.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/i0z2ji70rgvt/public_html/wp-content/plugins/wpide/backups/themes/ez365theme/page-template-featured-drops_2021-09-30-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>