<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Yogic</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="assets/js/swup.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php include("partials/navigation.php") ?>

    <div class="content-container">
        
        <!-- Hero section -->
        <div class="hero slides">

            <video autoplay muted loop id="video-bg">
                    <source src="assets/img/yoga_woman.mp4" type="video/mp4">
            </video>

            <div class="hero-img--container">
                <svg class="hero-img">
                    <use xlink:href="assets/img/svg/symbols.svg#hero-img"></use>
                </svg>
            </div>

            <h1>Welcome to Yogic yoga studio</h1>

            <div class="col-sm-12 text-center">
                <ul>
                    <li>
                        <a href="http://www.facebook.com" target="_blank">
                        <svg class="gulp_logo" id="hero-logo">
                            <use xlink:href="assets/img/svg/symbols.svg#facebook-logo"></use>
                        </svg></a>
                    </li>

                    <li>
                        <a href="http://www.isntagram.com" target="_blank">
                        <svg class="sass_logo" id="hero-logo">
                            <use xlink:href="assets/img/svg/symbols.svg#instagram-logo"></use>
                        </svg></a>
                    </li>
                </ul>
            </div>
            <!-- Footer -->
            <?php include("partials/footer.php") ?>
        </div>
        
        <!-- Blog section -->
        <div class="blog slides">
            <video autoplay muted loop id="video-bg">
                <source src="assets/img/yoga_woman_2.mp4" type="video/mp4">
            </video>

                <div class="blog-container-1">
                    <div class="blog-image-container-1">
                        <img src="assets/img/blog_img1.jpg">
                    </div>
                    <div class="blog-text-container-1">
                        <div class="blog-text-1">
                            <h1>Title</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p>
                            <a class="continue-link" href="#">Continue</a>
                        </div>
                    </div>
                </div>

                <div class="blog-container-2">
                    <div class="blog-text-container-2">
                        <div class="blog-text-2">
                            <h1>Title</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p>
                            <a class="continue-link" href="#">Continue</a>
                        </div>
                    </div>
                    <div class="blog-image-container-2">
                        <img src="assets/img/blog_img2.jpg">
                    </div>
                    
                </div>

                <div class="blog-container-1">
                    <div class="blog-image-container-1">
                        <img src="assets/img/blog_img1.jpg">
                    </div>
                    <div class="blog-text-container-1">
                        <div class="blog-text-1">
                            <h1>Title</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p>
                            <a class="continue-link" href="#">Continue</a>
                        </div>
                    </div>
                </div>

            <?php include("partials/footer.php") ?>
        </div>

        <!-- Classes section -->
        <div class="classes slides">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Class</th>
                                    <th>Instructor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2018/03/25</td>
                                    <td>23</td>
                                    <td>John</td>
                                </tr>
                                <tr>
                                    <td>2018/03/25</td>
                                    <td>34</td>
                                    <td>Melissa</td>
                                </tr>
                                <tr>
                                    <td>2018/03/25</td>
                                    <td>32</td>
                                    <td>Margaret</td>
                                </tr>
                                <tr>
                                    <td>2018/03/25</td>
                                    <td>18</td>
                                    <td>Jack</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include("partials/footer.php") ?>
        </div>

        <!-- Contact section -->
        <div class="contact slides">
            
            <div class="container form-container">
                <h2>Contact Us!</h2>
                
                <div class="row justify-content-center">
                    <div class="col-md-6 col-md-offset-3">

                        <form id="contact-form" method="post" action="assets/php/contact-form/handler.php">
                            <div class="from-group">
                                <input class="form-control" type="text" name="name" placeholder="Please add your name" required>
                            </div><br>
                            <div class="from-group">
                                <input class="form-control" type="text" name="subject" placeholder="Subject" required>
                            </div><br>
                            <div class="from-group">
                                <input class="form-control" type="email" name="email" placeholder="Please add your email address" required>
                            </div><br>
                            <div class="from-group">
                                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Your Message" required></textarea>
                            </div><br>
                            <div>
                                <button class="btn btn-form" type="submit" name="send">Send Message</button>                                
                            </div>
                            
                        </form>

                    </div>
                </div>
                
            </div>

            <!-- <div class="map-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="cd-google-map">
                                <div id="google-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Footer -->
            <?php include("partials/footer.php") ?>
        </div>

    </div>


    <!-- Handlebars.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.11/handlebars.min.js"></script>


    <!-- Bootstrap 4 scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- HandlebarsJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.11/handlebars.min.js"></script>


    <!-- Swiper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>

    <!-- Contact -->
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/validator.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            mousewheelControl: false,
            coverflow: {
                rotate: 20,
                stretch: -20,
                depth: 250,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

    <script>
        $(document).ready(function () {
            $(".skills_modal").click(function () {
                $(this).fadeOut("slow");
            });
        });
    </script>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
        showDivs(slideIndex += n);
        }

        function currentDiv(n) {
        showDivs(slideIndex = n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("slides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
        }
    </script>

    <!-- Smoothscroll script -->
    <!-- script src="assets/js/smoothscroll.js"></scrip -->


</body>

</html>