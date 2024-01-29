<?php
$site = require 'includes/config.php';
$error = $success = '';
if (isset($_REQUEST['submit']) && !empty($_POST['email']) && isset($_POST['captcha']) && isset($_POST['captcha_sum'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $message = filter_input(INPUT_POST, 'your-message', FILTER_SANITIZE_STRING);
    $userAnswer = (int)$_POST['captcha'];
    $correctSum = (int)$_POST['captcha_sum'];

    // Email configuration
    $to = $site->email;
    $subject = 'Contact Form Submission - '. $email;
    $headers = 'From: ' . $email;

    // Email content
    $content = "Name: $name\n";
    $content .= "Phone: $phone\n";
    $content .= "Email: $email\n";
    $content .= "Message:\n$message";

    // Send email
    if ($userAnswer === $correctSum && !empty($email) && !empty($phone) && !empty($message)) {
        mail($to, $subject, $content, $headers);
        $success = 'Thank you, your message has been sent. We will get in touch with you soon!';
        $_POST = [];
    }

    if ($userAnswer != $correctSum) {
        $error = 'Please provide correct answer for the Math challenge.';
    }
}

$page = new \stdClass();
$page->title = 'Contact Us - CIBEDTECH';
$page->breadcrumbs = true;
$page->description = "Let's Talk Speak to Us Email: info@cibed.ca Phone: +1 (306) 807 5813 Address: 2010 - 11th Avenue, 7th Floor, Regina, Saskatchewan S4P 0J3. Canada. Get In Touch Fill The Form Below";
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" prefix="og: https://ogp.me/ns#">
    <?php include 'includes/header.php'; ?>

    <body class="page-template-default page page-id-12 theme-braintech woocommerce-no-js elementor-default elementor-kit-7 elementor-page elementor-page-12">
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
            <?php include 'includes/navigation.php'; ?>

            <!-- End Header Menu End -->
            <div class="main-contain offcontents">

                <div class="container">
                    <div id="content" class="site-content">
                        <div class="row padding-">
                            <div class="col-lg-12 ">

                                <article id="post-12" class="post-12 page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12">
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-7988a369 elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7988a369" data-element_type="section" id="contact" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-70dc4f47" data-id="70dc4f47" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-2a5e326f elementor-widget elementor-widget-rs-heading" data-id="2a5e326f" data-element_type="widget" data-widget_type="rs-heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="rs-heading default  ">
                                                                        <div class="title-inner">
                                                                            <span class="sub-text "> Let's Talk</span><h2 class="title"><span class="watermark"></span>Speak to Us</h2>					        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-e3299e elementor-widget elementor-widget-rs-contact-box" data-id="e3299e" data-element_type="widget" data-widget_type="rs-contact-box.default">
                                                                <div class="elementor-widget-container">


                                                                    <!-- Style 1 Start -->
                                                                    <div class="rs-contact-box">

                                                                        <div class="address-item horizontal boxstyle2">

                                                                            <div class="address-icon">
                                                                                <i class="fa fa-home"></i>
                                                                            </div>

                                                                            <div class="address-text">
                                                                                <div class="text">
                                                                                    <span class="label">Email:</span>
                                                                                    <span class="des">
                                                                                       <?= $site->email; ?>
                                                                                    </span>
                                                                                </div>




                                                                            </div>
                                                                        </div>
                                                                        <div class="address-item horizontal boxstyle2">

                                                                            <div class="address-icon">
                                                                                <i class="fa fa-phone"></i>
                                                                            </div>

                                                                            <div class="address-text">
                                                                                <div class="text">
                                                                                    <span class="label">Phone:</span>
                                                                                    <span class="des">
                                                                                        <?= $site->phone; ?>
                                                                                    </span>
                                                                                </div>




                                                                            </div>
                                                                        </div>
                                                                        <div class="address-item horizontal boxstyle2">

                                                                            <div class="address-icon">
                                                                                <i class="fa fa-map-marker"></i>
                                                                            </div>

                                                                            <div class="address-text">
                                                                                <div class="text">
                                                                                    <span class="label">Address:</span>
                                                                                    <span class="des">
                                                                                        <?= $site->address; ?>
                                                                                    </span>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Style 1 End -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-16d1932a" data-id="16d1932a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-background-overlay"></div>
                                                            <div class="elementor-element elementor-element-589312f elementor-widget elementor-widget-rs-heading" data-id="589312f" data-element_type="widget" data-widget_type="rs-heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="rs-heading default  ">
                                                                        <div class="title-inner">
                                                                            <span class="sub-text ">Get In Touch</span>
                                                                            <h2 class="title"><span class="watermark"></span>Fill The Form Below</h2>
                                                                            <?php if (!empty($success)) { ?>
                                                                                <div class="alert alert-success" role="alert"><?= $success; ?></div>
                                                                            <?php } ?>
                                                                                
                                                                            <?php if (!empty($error)) { ?>
                                                                                <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-ac78edd elementor-widget elementor-widget-rs-cf7" data-id="ac78edd" data-element_type="widget" data-widget_type="rs-cf7.default">
                                                                <div class="elementor-widget-container">

                                                                    <div class="wpcf7 no-js" id="wpcf7-f11860-p12-o1" lang="en-US" dir="ltr">
                                                                        <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                                                        <form action="?submit" method="post" class="wpcf7-form init" aria-label="Contact form">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <p>
                                                                                        <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                                            <input size="30" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" value="<?= $_POST['name'] ?? ''; ?>" type="text" name="name" required/>
                                                                                        </span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <p><span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="30" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone Number" value="<?= $_POST['phone'] ?? ''; ?>" type="telephone" name="phone" required /></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-Mail" value="<?= $_POST['email'] ?? ''; ?>" type="email" required name="email" /></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <p><span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message Here" name="your-message" required><?= $_POST['your-message'] ?? ''; ?></textarea></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <p>
                                                                                        <label for="captcha">Please solve the following math problem:</label>
                                                                                        <?php
                                                                                        // Generate random numbers for the captcha
                                                                                        $num1 = rand(1, 10);
                                                                                        $num2 = rand(1, 10);
                                                                                        $sum = $num1 + $num2;
                                                                                        ?>
                                                                                        <span><?php echo $num1; ?> + <?php echo $num2; ?> = </span>
                                                                                        <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="text" id="captcha" name="captcha" required>
                                                                                        <input type="hidden" name="captcha_sum" value="<?php echo $sum; ?>">
                                                                                    </p>
                                                                                </div>
                                                                                <div class="form-button col-sm-12">
                                                                                    <p class="submit-btn"><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit" value="Submit Now" />
                                                                                    </p>
                                                                                </div>

                                                                            </div><p style="display: none !important;"><label>&#916;<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="13"/><script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script></p><div class="wpcf7-response-output" aria-hidden="true"></div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-ecf3cad elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="ecf3cad" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5558fbc" data-id="5558fbc" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-db9b222 elementor-widget elementor-widget-google_maps" data-id="db9b222" data-element_type="widget" data-widget_type="google_maps.default">
                                                                <div class="elementor-widget-container">
                                                                    <style>/*! elementor - v3.15.0 - 20-08-2023 */
                                                                        .elementor-widget-google_maps .elementor-widget-container{
                                                                            overflow:hidden
                                                                        }
                                                                        .elementor-widget-google_maps .elementor-custom-embed{
                                                                            line-height:0
                                                                        }
                                                                        .elementor-widget-google_maps iframe{
                                                                            height:300px
                                                                        }</style>		<div class="elementor-custom-embed">
                                                                        <iframe loading="lazy"
                                                                                src="https://maps.google.com/maps?q=2010%20-%2011th%20Avenue%2C%207th%20Floor%2C%20Regina%2C%20Saskatchewan%20S4P%200J3.%20Canada.&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                                                                                title="2010 - 11th Avenue, 7th Floor, Regina, Saskatchewan S4P 0J3. Canada."
                                                                                aria-label="2010 - 11th Avenue, 7th Floor, Regina, Saskatchewan S4P 0J3. Canada."
                                                                                ></iframe>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div>
                                    <!-- .entry-content -->

                                </article>
                                <!-- #post-12 -->
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .main-container -->
            <?php include 'includes/footer.php'; ?>
        </div><!-- #page -->

        <?php include 'includes/scripts.php'; ?>
    </body>
</html>
