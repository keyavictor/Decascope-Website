<!DOCTYPE html>
<html lang="en">
<head>
<title>Decascope | Contact Us</title>
<?php
include './components/head.php';
?>
</head>
<body>



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php
include './components/preloader.php';
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<div class="cursor"></div>
<div class="cursor-follower"></div>


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section three">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                <?php
include './components/navbar.php';
?>
                </div>
            </div>
        </div>
    </div>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section two inner">
    <div class="banner-element-four two">
        <img src="assets/images/element/element-5.png" alt="element">
    </div>
    <div class="banner-element-five two">
        <img src="assets/images/element/element-7.png" alt="element">
    </div>
    <div class="banner-element-nineteen two">
        <img src="assets/images/element/element-6.png" alt="element">
    </div>
    <div class="banner-element-twenty-two two">
        <img src="assets/images/element/element-69.png" alt="element">
    </div>
    <div class="banner-element-twenty-three two">
        <img src="assets/images/element/element-70.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center mb-30-none">
            <div class="col-xl-12 mb-30">
                <div class="banner-content two">
                   <div class="banner-content-header">
                        <h2 class="title">Contact us</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                </ol>
                            </nav>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Contact-item
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="contact-item-section ptb-120">
    <div class="contact-item-element-one">
        <img src="assets/images/element/element-71.png" alt="element">
    </div>
    <div class="contact-item-element-two">
        <img src="assets/images/element/element-72.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="contact-item text-center">
                    <div class="contact-icon-area">
                        <div class="contact-icon">
                            <i class="las la-map-marked-alt"></i>
                        </div>
                    </div>
                    <div class="contact-content">
                        <h3 class="title">Visit Our Office</h3>
                        <p>SAMPU VILLA, 2nd FLOOR room B7 - Kajiado </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="contact-item text-center">
                    <div class="contact-icon-area">
                        <div class="contact-icon">
                            <i class="las la-phone"></i>
                        </div>
                    </div>
                    <div class="contact-content">
                        <h3 class="title">Call Us</h3>
                        <p><a href="tel:+254712327266">+254 712 327266</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                <div class="contact-item text-center">
                    <div class="contact-icon-area">
                        <div class="contact-icon">
                            <i class="las la-envelope-open-text"></i>
                        </div>
                    </div>
                    <div class="contact-content">
                        <h3 class="title">Mail Us</h3>
                        <p><a href="mailto:info@decascope.co.ke">info@decascope.co.ke</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Contact-item
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="contact-section ptb-120">
    <div class="contact-element-one">
        <img src="assets/images/element/element-73.png" alt="element">
    </div>
    <div class="contact-element-two">
        <img src="assets/images/element/element-74.png" alt="element">
    </div>
    <div class="container">
        <form class="contact-form">
            <div class="row justify-content-center mb-25-none">
                <div class="col-xl-6 col-lg-6 form-group">
                    <label>Enter Name</label>
                    <input type="text" name="name" class="form--control" placeholder="Jhon david smith">
                </div>
                <div class="col-xl-6 col-lg-6 form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form--control" placeholder="info@decascope.co.ke">
                </div>
                <div class="col-xl-6 col-lg-6 form-group">
                    <label>Your Phone</label>
                    <input type="text" name="number" class="form--control" placeholder="+254 712 327266" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                </div>
                <div class="col-xl-6 col-lg-6 form-group">
                    <label>Select Subject</label>
                    <div class="contact-select">
                        <select class="form--control">
                            <option value="1">Web Development</option>
                            <option value="2">Web Design</option>
                            <option value="3">Digital Marketing</option>
                            <option value="4">Search SEO</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 form-group">
                    <label>Write Message</label>
                    <textarea name="message" class="form--control" placeholder="Write Here ..."></textarea>
                </div>
                <div class="col-xl-12 col-lg-12 form-group text-center">
                    <button type="submit" class="btn--base mt-20">Send Now <i class="fas fa-arrow-right ml-2"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Map
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.753975188936!2d36.7841014147548!3d-1.8431935986561157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182fc554942e4a6b%3A0xdedafc954d483685!2sSampu%20Villa%2C%20Kajiado!5e0!3m2!1sen!2ske!4v1667195816522!5m2!1sen!2ske" style="border:0" allowfullscreen></iframe>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Map
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php
include './components/footer.php';
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php
include './components/scripts.php';
?>


</body>
</html>
