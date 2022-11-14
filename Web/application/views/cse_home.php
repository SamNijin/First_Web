<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Custom -->
    <link rel="stylesheet" href="application/views/css/cse.css">
    <link rel="icon" href="application/views/image/favicon.ico">


    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link href="application/views/css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swipper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Ajax -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Computer Science</title>
</head>

<body style="background-color: aliceblue;">
    <div class="container">


        <!-- Header -->
        <div class="logocontai">
            <img class="logo" src="application/views/image/cselogo.png" width="125px" height="75px">
            <div class="logotext">
                <h2>
                    COMPUTER SCIENCE <br> <span class="format">
                        AND ENGINEERING
                    </span>
                </h2>
            </div>
        </div>
        <div class="top">
            <h6>
                Run By Mar Ephraem College
                <br>
                of Engineering And Technology
                <br>
                <span class="txt">
                    APPROVED BY AICTE, AFFILIATED TO ANNA UNIVERSITY, CHENNAI
                </span>
            </h6>
            <div class="numb">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-telephone" viewBox="0 0 16 16">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <p style="margin-top: -5px">+91-9442448111</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <!-- SideBAr -->

        <div class="mobnav">
            <div class="dropdownmob">

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <ul class="headlinkmob">
                        <!-- dropdown -->
                        <li>
                            <a class="headlinktext" href="#">
                                HOME
                            </a>
                        </li>
                        <li>
                            <a class="headlinktext" href="#">
                                ABOUT US
                            </a>
                        </li>
                        <li>
                            <a class="headlinktext" href="#">
                                GALLERY
                            </a>
                        </li>
                        <div class="tezt">
                            <li>

                                <a class="headlinktext" href="#">
                                    <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        STUDENTS <i class="arrow down"></i>
                                    </button>
                                </a>

                                <ul class="dropdown-menu-mob">
                                    <li>
                                        <a class="dropdown-item-mob" href="application/views/login.php">
                                            LOGIN
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item-mob" href="#">
                                            UPDATE
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item-mob" href="application/views/form.php">
                                            REGISTER
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item-mob" href="application/views/listRegisteredUsers.php">
                                            LIST STUDENTS
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <li>
                            <a class="headlinktext" href="#">
                                CONTACT US
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <span style="font-size:30px;cursor:pointer" class="sideNavBtn" onclick="openNav()">&#9776;</span>
        </div>


        <!-- NAv BAr -->


        <div class="header">
            <div class="dropdown">
                <!-- headlink -->
                <ul class="headlink">
                    <!-- dropdown -->
                    <li>
                        <a class="headlinktext" href="#">
                            HOME
                        </a>
                    </li>
                    <li>
                        <a class="headlinktext" href="#">
                            ABOUT US
                        </a>
                    </li>
                    <li>
                        <a class="headlinktext" href="#">
                            GALLERY
                        </a>
                    </li>
                    <div class="test">
                        <li>

                            <a class="headlinktext" href="#">
                                <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    STUDENTS <i class="arrow down"></i>
                                </button>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="application/views/login.php">
                                        LOGIN
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        UPDATE
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="application/views/form.php">
                                        REGISTER
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="application/views/listRegisteredUsers.php">
                                        LIST STUDENTS
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </div>
                    <li>
                        <a class="headlinktext" href="#">
                            CONTACT US
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Body -->

        <!-- Image slider -->

        <div class="swiper h-full w-full">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper mt-1">
                <!-- Slides -->
                <div class="swiper-slide"><img class="object-center object-cover w-full"
                        src="application/views/image/slider1.jpg" alt=""></div>
                <div class="swiper-slide"><img class="object-center object-cover w-full"
                        src="application/views/image/slider2.jpg" alt=""></div>
                <div class="swiper-slide"><img class="object-center object-cover w-full"
                        src="application/views/image/slider3.jpg" alt=""></div>
                <div class="swiper-slide"><img class="object-center object-cover w-full"
                        src="application/views/image/slider4.png" alt=""></div>

            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="container">
        </div>

        <div class="viewporthead">
            <h2>COURSES AVAILABLE</h2>
        </div>

        <!-- CARD -->
        <section class="cardsec">

            <!-- <div class="cards"> -->
            <div class="row justify-content-space-evenly">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2.9">
                    <div class="card-box">
                        <div class="imgs">
                            <img src="application/views/image/card1.png" alt="Python">
                        </div>
                        <div class="card-content">
                            <h2>Python</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste ex
                                voluptates sit molestias consectetur esse repellendus tempore cum sequi corporis
                                sint minus soluta, ullam laudantium, eveniet laboriosam. Accusamus, magnam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2.5">
                    <div class="card-box">
                        <div class="imgs">
                            <img src="application/views/image/card2.png" alt="Java">
                        </div>
                        <div class="card-content">
                            <h2>Java</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste ex
                                voluptates sit molestias consectetur esse repellendus tempore cum sequi corporis
                                sint minus soluta, ullam laudantium, eveniet laboriosam. Accusamus, magnam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2.5">
                    <div class="card-box">
                        <div class="imgs">
                            <img src="application/views/image/card3.png" alt="C++" class="changeimg">
                        </div>
                        <div class="card-content">
                            <h2>C++</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste ex
                                voluptates sit molestias consectetur esse repellendus tempore cum sequi corporis
                                sint minus soluta, ullam laudantium, eveniet laboriosam. Accusamus, magnam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2.5">
                    <div class="card-box">
                        <div class="imgs">
                            <img src="application/views/image/card4.png" alt="R" class="changeimg">
                        </div>
                        <div class="card-content">
                            <h2>R</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste ex
                                voluptates sit molestias consectetur esse repellendus tempore cum sequi corporis
                                sint minus soluta, ullam laudantium, eveniet laboriosam. Accusamus, magnam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2.5">
                    <div class="card-box">
                        <div class="imgs">
                            <img src="application/views/image/card5.png" alt="SQL">
                        </div>
                        <div class="card-content">
                            <h2>SQL</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste ex
                                voluptates sit molestias consectetur esse repellendus tempore cum sequi corporis
                                sint minus soluta, ullam laudantium, eveniet laboriosam. Accusamus, magnam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2.5">
                    <div class="card-box">
                        <div class="imgs">
                            <img src="application/views/image/card6.png" alt="Flutter">
                        </div>
                        <div class="card-content">
                            <h2>flutter</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste ex
                                voluptates sit molestias consectetur esse repellendus tempore cum sequi corporis
                                sint minus soluta, ullam laudantium, eveniet laboriosam. Accusamus, magnam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2.5">
                    <div class="card-box">
                        <div class="imgs">
                            <img src="application/views/image/card7.png" alt="Data Science">
                        </div>
                        <div class="card-content">
                            <h2>data science</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste ex
                                voluptates sit molestias consectetur esse repellendus tempore cum sequi corporis
                                sint minus soluta, ullam laudantium, eveniet laboriosam. Accusamus, magnam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2.5">
                    <div class="card-box">
                        <div class="imgs">
                            <img src="application/views/image/card8.png" alt="Deep Learning">
                        </div>
                        <div class="card-content">
                            <h2>Deep learning</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque iste ex
                                voluptates sit molestias consectetur esse repellendus tempore cum sequi corporis
                                sint minus soluta, ullam laudantium, eveniet laboriosam. Accusamus, magnam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->



        </section>

        <!-- Footer -->

        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Web design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Hosting</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>COMPUTER SCIENCE AND ENGINEERING</h3>
                            <p>Computer science (CS) is the study of computers and algorithmic processes, including
                                their principles, their hardware and software designs, their applications, and their
                                impact on society.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a
                                href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i
                                    class="icon ion-social-snapchat"></i></a><a href="#"><i
                                    class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">CSE © 2020</p>
                </div>
            </footer>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
    // SideNav Phone

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }



    // Swipper Image
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,
        speed: 400,
        spaceBetween: 100,
        autoplay: {
            delay: 3000,
        },
    });
    </script>
</body>

</html>