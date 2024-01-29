<?php
    $page = new \stdClass();
    $page->title = '404: Page Not Found - CIBEDTECH';
    $page->breadcrumbs = true;
    $page->description = "";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" prefix="og: https://ogp.me/ns#">
    <?php include 'includes/header.php'; ?>

    <body class="error404 theme-braintech woocommerce-no-js hfeed elementor-default elementor-kit-7">
        <!--Preloader start here-->
        <div id="braintech-load">
            <div class="loader-braintech">
                <div id="medvill-load">
                    <div class="spinner_inner">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Preloader area end here-->
        <div id="page" class="site">
            <!-- End Header Menu End -->
            <div class="main-contain offcontents">
                <div class="page-error not-found-bg" style="background:url(https://cibedtech.com/wp-content/uploads/2020/12/404.jpg)">
                    <div class="container">
                        <div id="content">
                            <div id="primary" class="content-area">
                                <main id="main" class="site-main">
                                    <section class="error-404 not-found">
                                        <div class="page-content">
                                            <h2>
                                                <span>

                                                    404                                </span>
                                                Page Not Found                            </h2>
                                            <a class="readon" href="/">
                                                Back to Homepage
                                            </a>
                                        </div><!-- .page-content -->
                                    </section><!-- .error-404 -->
                                </main><!-- #main -->
                            </div><!-- #primary -->
                        </div>
                    </div>
                </div> <!-- .page-error -->

            </div><!-- .main-container -->
        </div>
        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
