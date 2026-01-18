<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Saptha Global Solutions</title>

    <meta name="description" content="Contacts">
    <meta name="author" content="Tineth Pathirage">
    <meta property="og:image" content="assets/img/logo/logo-og.png" />
    <meta property="og:image:width" content="1000" />
    <meta property="og:image:height" content="1000" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Preconnect for faster font loading (PUT THIS FIRST!) -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.png">

    <!-- Google Fonts (deferred) -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">

    <!-- Load Font Awesome CSS asynchronously -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="print" onload="this.media='all'">

    <!-- fontello font css -->
    <link rel="stylesheet" href="assets/css/plugins/fontello-enqueue.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="assets/css/plugins/fontello-icons.css" media="print" onload="this.media='all'">


    <!-- others css -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>


    <!--Navbar-->
    <?php include 'components/navbar.php'; ?>


    <!-- page-banner9 -->
    <section class="page-banner9">

        <div class="staff-text">Contacts</div>
        <div class="container">
            <div class="page-content">
                <h1 class="title">Contact Us</h1>
            </div>
        </div>
        <ul class="breadcrumbs">
            <li><a href='index.php' aria-label="home">Home</a></li>
            <li>/</li>
            <li>Contacts</li>
        </ul>
    </section>
    <!-- End page-banner9 -->

    <!-- contact-sec -->
    <section class="contact-sec2 ibt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-content2">
                        <div class="sec-title">
                            <span class="sub-title">get in touch</span>
                            <h2 class="title animated-heading">We are always ready to help you and answer your questions
                            </h2>
                            <p>Have a question, project idea, or need expert guidance? Our team is always
                                ready to assist you with reliable answers and tailored software solutions.
                                Reach out to us and let’s build something impactful together.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <div class="call-center2">
                                        <h4 class="title">Call Center</h4>
                                        <a href="tel:+94773340795" class="nmbr" aria-label="mobile">(+94) 773340795</a>
                                        <a href="https://wa.me/0760543394" aria-label="whatsapp" target="_blank"
                                            class="nmbr">(+94) 760543394</a>
                                    </div>
                                    <div class="call-center2 mb-0">
                                        <h4 class="title">Email</h4>
                                        <a href="mailto:info@sapthaglobal.com" aria-label="email"
                                            class="gmail">info@sapthaglobal.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="contact-info">
                                    <div class="call-center2">
                                        <h4 class="title">Our Location</h4>
                                        <p>166/A/01<br>Egaloya, Bulathsinhala</p>
                                    </div>
                                    <div class="call-center2 mb-0">
                                        <h4 class="title">Social network</h4>
                                        <ul class="social-icon">
                                            <li><a href="https://www.facebook.com/" target="_blank"
                                                    aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="http://www.twitter.com/" target="_blank" aria-label="x"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="http://www.linkedin.com/" target="_blank"
                                                    aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="https://wa.me/0760543394" aria-label="whatsapp"
                                                    target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form v2">
                        <form action="send_mail.php" method="POST" class="custom-form">
                            <h2>Get in Touch</h2>
                            <input type="text" name="name" placeholder="Full name" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="text" id="subject" name="subject" placeholder="Subject" required>
                            <textarea id="message" name="message" rows="5" placeholder="Write your message..."
                                required></textarea>
                            <button type="submit" class="ibt-btn ibt-btn-outline">
                                <span>Send message</span>&nbsp;&nbsp;
                                <i class="icon-arrow-top"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-sec -->

    <!-- googel-map -->
    <!-- <section class="googel-map">
        <h2>googel map</h2>
        <div class="container2">
            <iframe
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Egaloya,%20Bulathsinhala,%20Kalutara+(Saptha%20Global%20Solutions)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                height="500" style="border:0; border-radius: 25px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section> -->
    <!-- End googel-map -->

    <!-- footer-style4 -->
    <?php include 'components/footer.php'; ?>
    <!-- footer-style4 -->

    <!-- Scroll Button -->
    <button id="scrollBtn" title="Go to top">
        <i class="fas fa-angle-up"></i>
    </button>


    <!-- Js Plugin -->
    <script src="assets/js/bootstrap.min.js" defer></script>
    <script src="assets/js/vendor/swiper-bundle.min.js" defer></script>
    <script src="assets/js/vendor/lenis.min.js" defer></script>
    <script src="assets/js/vendor/gsap.min.js" defer></script>
    <script src="assets/js/vendor/ScrollTrigger.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>

</html>