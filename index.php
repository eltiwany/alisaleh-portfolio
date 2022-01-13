<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include_once('inc/links/head.php') ?>

<body id="top" data-spy="scroll" data-target="#menu_items">

    <!--  start page loader  -->
    <div id="preloader">
        <div class="scroll-static"></div>
    </div>
    <!--  end page loader  -->

    <!-- start landing wrapper  -->
    <div id="particles-js" class="landing_wrapper no-bg-img">
        
        <?php include_once('inc/top-nav.php') ?>

        <!-- start home wrapper -->
        <div class="home_wrapper">
            <?php include_once('inc/fragments/landing-content.php') ?>
        </div>
        <!-- end home wrapper -->
    </div>
    <!-- end landing wrapper  -->
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- start about wrapper -->
                <?php include_once('about.php'); ?>
                <!-- end about wrapper -->

                <!-- start services wrapper -->
                <?php include_once('services.php'); ?>
                <!-- end services wrapper -->

                <!-- start work wrapper -->
                <?php include_once('my-works.php'); ?>
                <!-- end work wrapper -->
                
                <!-- start testimonials wrapper -->
                <?php include_once('testimonials.php'); ?>
                <!-- end testimonials wrapper -->
                
                <!-- start clients wrapper -->
                <?php include_once('clients.php'); ?>
                <!-- end clients wrapper -->

                <!-- start contact wrapper -->
                <?php include_once('contact.php'); ?>
                <!-- end contact wrapper -->

                <!-- start footer wrapper -->
                <?php include_once('inc/footer.php'); ?>
                <!-- end footer wrapper -->
            </div>
        </div>
    </div>

    <?php include_once('inc/links/js.php') ?>

</body>


<!-- Mirrored from ixtheme.netlify.app/zuman/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jan 2022 06:43:12 GMT -->
</html>
