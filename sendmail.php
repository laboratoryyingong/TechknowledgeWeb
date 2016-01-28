<html lang="en">
    <head>
        <title>TechKnowledge Institute | Innovation by design</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--favicon icon-->
        <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">

<!--Lib font-->
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
        <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
<!-- Lib css-->
        <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
<!--style css-->
        <link type="text/css" rel="stylesheet" href="assets/css/color.css">
    </head>
    <body>



<?php

//mail('max.g.laboratory@gmail.com','Test','Test 123');
	require_once "PHPMailerAutoload.php";

    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    $mail = new PHPMailer;

//  $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info.tkie@gmail.com';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;

    $mail->setFrom('info.tkie@gmail.com', 'Mailer');
    $mail->addAddress('max.g.laboratory@gmail.com', 'Admin');

    $mail->Subject = $title;
    $mail->Body = '<h2>Hi, I am '.$name.'</h2>'.'<h2>My email is '.$email.'</h2>'.'<p>I may need some help: '.$content.'</p>';
    $mail->isHTML(true);


    if(!$mail->send()) {
        echo '<div class="footer-top">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="footer-top-left">
                            <p class="footer-top-focus">Message could not be sent.</p>
                            <p class="footer-top-text">There are some tech problem, please try later, Thanks!</p></div>
                        <div class="footer-top-right">
                            <button onclick="window.location.href=\'http://www.tkie.com\';" class="btn btn-blue btn-bold"><a><span>Press to Return Home</span></a></button>
                        </div>
                    </div>
                </div>
            </div>';
		exit();

    } else {
        echo '<div class="footer-top">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="footer-top-left">
                            <p class="footer-top-focus">Congratulation! Message has been sent</p>
                            <p class="footer-top-text">We will contact you as soon as possible</p></div>
                        <div class="footer-top-right">
                            <button onclick="window.location.href=\'http://www.tkie.com\';" class="btn btn-blue btn-bold"><a href="index.html"><span>Press to Return Home</span></a></button>
                        </div>
                    </div>
                </div>
            </div>';
    }

?>


<!--Lib js -->
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
    <script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
    <script src="assets/libs/appear/jquery.appear.js"></script>
    <script src="assets/libs/count-to/jquery.countTo.js"></script>
    <script src="assets/libs/wow-js/wow.min.js"></script>
    <script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
    <script src="assets/libs/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
    <script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!--main js-->
    <script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
    <script src="assets/js/pages/homepage.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy0AVaP3xLQPozS2M7CzzHU_BVRJh0pOA&amp;amp;sensor=false"></script>
    <script src="assets/js/pages/contact.js"></script>
    </body>
</html>
