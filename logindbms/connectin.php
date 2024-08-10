<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to C@NNECT-IN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <div id="section1">
    <?php
    // Include the database connection file
    include ("php/config.php");
    ?>
        <nav class="navbar navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713801800/logo-aruk_mslbcd.png" width="50"
                    height="50" alt="" loading="lazy">
            </a>
            <div class="form-inline ">
                <button class="btn btn-outline-success " type="submit">Home</button>
                 <a href="./login.php">
                    <button class="btn btn-outline-success">Login</button>
                 </a>
             
                <a href="./signup.php"><button class="btn btn-outline-success">Sign up</button></a>
            </div>
        </nav>
        <div class="d-flex flex-row justify-content-center ">
            <img src="https://res.cloudinary.com/dmdiia2yv/image/upload/v1702142025/connectin_logo_sqchms.jpg"
                class="connect-in_image" height="300" width="300" />
        </div>
        <div class="d-flex flex-row justify-content-center heading">
            <h2>C@NNECT-IN</h2>
        </div>
        <div class="container">
            <h3 class="space0">WHY CONNECT-IN?</h3>
            <div class="row">
                <!-- one div deleted -->
                <div class="col-8 col-md-6">
                    <div class="d-flex flex-row">
                        <div class="d-flex flex-column">
                            <img src="https://res.cloudinary.com/ds7dqfb1n/image/upload/v1711902656/employer_1_fp151j.jpg"
                                class="image1" alt="">
                            <img src="https://res.cloudinary.com/ds7dqfb1n/image/upload/v1711902777/employer_2_p1djgx.png"
                                class="image2" alt="">
                        </div>
                        <div class="d-flex flex-column">
                            <img src="https://res.cloudinary.com/ds7dqfb1n/image/upload/v1711904042/employer_3_u9g62w.png"
                                class="image3" alt="">
                            <img src="https://res.cloudinary.com/ds7dqfb1n/image/upload/v1711904112/employer_4_e0hj1z.jpg"
                                class="image4" alt="">
                        </div>
                    </div>
                </div>

                <div class=" col-6 d-none d-md-block">
                    <p class="content"> "Connect your skills with needs. Find part-time gigs that fit your
                        schedule,
                        only on CONNECT
                        IN."</p>
                </div>
                <div class=" col-12 d-block d-md-none">
                    <p class="content"> "Connect your skills with needs. Find part-time gigs that fit your
                        schedule,
                        only on CONNECT
                        IN."</p>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <h2 class="serve_space"> What we serve better than other ..</h2>
                    <p class="content1">"CONNECT IN stands out by offering real-time insights with pending job counts
                        and wage statistics,
                        enhancing transparency. Additionally, it aids skill development with badges awarded upon exam
                        completion, empowering users for expert-level niche preparation."</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <!-- col-12 col-md-4 -->
                <div class="col-5 motivation_content ">
                    <h4>MOTIVATION</h4>
                    <h6 class="font">"Empower India's vibrant youth, even as young as 13, to dive into the tech-savvy
                        world of gig
                        economy through Connect In. Fuel their passion early, as they contribute to India's
                        technological
                        revolution while shaping their careers with flexibility and innovation."</h6>

                </div>
                <div class="col-5 aim_content ">
                    <div>
                        <img src="https://res.cloudinary.com/ds7dqfb1n/image/upload/v1711998268/aim_xvvnu9.png"
                            width="100px" height="100px" class="aim_image" alt="aim image">
                    </div>
                    <h4>AIM</h4>
                    <h6 class="font">The aim of CONNECT IN is to seamlessly connect individuals seeking part-time
                        employment with a
                        diverse
                        range of job opportunities, fostering efficient communication and facilitating smoother hiring
                        processes
                        in today's dynamic job market.</h6>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="number_equations">
                <h3>Numbers/equations</h3>
                <div class="d-flex flex-row justify-content-center">
                    <div>
                        <div class="d-flex flex-row justify-content-center circle">
                            <p class="number">56</p>
                        </div>
                        <p class="d-flex flex-column">Current Students</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                    </div>
                    <div>
                        <div class="d-flex flex-row justify-content-center circle">
                            <p class="number">56</p>
                        </div>
                        <p>Current Employee</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                    </div>
                    <div>
                        <div class="d-flex flex-row justify-content-center circle">
                            <p class="number">56</p>
                        </div>
                        <p>Current Unemployment</p>
                    </div>
                    <div>
                        <img src="https://res.cloudinary.com/ds7dqfb1n/image/upload/v1712814478/notequal_kstsri.png"
                            alt="not equal" class="not_equal">
                    </div>
                    <div>
                        <div class="d-flex flex-row justify-content-center circle">
                            <p class="number">56</p>
                        </div>
                        <p>Current Employability</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="goal">
                <h2>Goal</h2>
                <div class=" d-flex flex-row justify-content-center">
                    <div>
                        <p class="goal_content">Let's make above equation BALANCE,
                            join now to be the part of balanced equations
                        </p>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary join_now" data-toggle="button"
                            aria-pressed="false">
                            Join now
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-row justify-content-center flowchart ">
                    <!-- change over here -->
                    <img src="https://res.cloudinary.com/ds7dqfb1n/image/upload/v1714930185/Untitled_design_nvexzi.png" class="flowchart_image">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="video_space">
                <h4>How to use CONNECT-IN</h4>
                <!-- <div class="d-flex flex-row"> -->
                <!-- <div class="col-6">
                        <h4 class="video_content">"Explore Connect In's tutorial video: Effortlessly navigate, search,
                            and
                            connect with part-time
                            job opportunities and candidates. Start now!"</h4>
                    </div> -->
                <div class="col-12 d-flex flex-row justify-content-center ">
                    <iframe width="350" height="250"
                        src="https://www.youtube.com/embed/SWnQ6ye9dzQ?si=ZBjehRyQerMmf6jy&amp;start=2"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- </div> -->
            </div>
        </div>
        <div class="container">
            <div class="d-flex flex-row motivation_aim">
                <div class=" col-12">
                    <div class="d-flex flex-row justify-content-center heading">
                        <h3>Views on C@NNECT->IN</h3>
                    </div>
                    <div class="col-md-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class=" d-flex flex-row">
                                        <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713290717/uday_ctob0g.jpg"
                                            width="200" height="200" class="personimage" alt="...">
                                        <div class="d-flex flex-column justify-content-center view ">
                                            <p class="feedback">"CONNECT IN offers a seamless platform for both
                                                employers and job
                                                seekers, bridging the gap betweenthose seeking part-time work and
                                                those in need of online or offline services."</p>
                                        </div>
                                    </div>

                                    <!-- offline/online -->
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex flex-row">
                                        <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713290686/dhana_ecfti3.jpg"
                                            width="200" height="200" class="personimage" alt="...">
                                        <div class="d-flex flex-column justify-content-center view ">
                                            <p class="feedback">"Whether you're a student looking to earn extra cash, a
                                                freelancer
                                                seeking short-term gigs, or a homeowner in need of household assistance,
                                                CONNECT IN caters to all your part-time job needs."</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex flex-row">
                                        <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713290703/raj_aazat7.jpg"
                                            width="200" height="200" class="personimage" alt="...">
                                        <div class="d-flex flex-column justify-content-center view ">
                                            <p class="feedback">"CONNECT IN is revolutionizing the way we approach
                                                part-time
                                                employment.
                                                Its innovative approach and user-friendly interface make it a
                                                game-changer
                                                in the gig economy landscape."</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex flex-row">
                                        <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713290751/uma_hecpkq.jpg"
                                            width="200" height="200" class="personimage" alt="...">
                                        <div class="d-flex flex-column justify-content-center view ">
                                            <p class="feedback">"I've found some of the most reliable and talented
                                                freelancers
                                                through CONNECT
                                                IN.
                                                It's refreshing to see a platform that values quality and
                                                professionalism in the
                                                gig economy."</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive-container-block outer-container">
            <div class="responsive-container-block inner-container">
                <p class="text-blk section-head-text">
                    Team Behind C@NNECT->IN
                </p>
                <!-- link cloudinary -->
                <div class="responsive-container-block">
                    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                        <div class="team-card">
                            <div class="img-wrapper">
                                <img class="team-img"
                                    src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713290717/uday_ctob0g.jpg">
                            </div>
                            <p class="text-blk name">
                                Uday Kiran M
                            </p>
                            <p class="text-blk position">
                                COO
                            </p>
                            <div class="social-media-links">
                                <a href="https://www.linkedin.com/in/uday-kiran-makineni/" target="_blank">
                                    <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1712816366/LINK_IN_ztg777.png"
                                        width="30">
                                </a>
                                <a href="https://www.instagram.com/makineni_uday/" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                                </a>
                                <a href="https://mail.google.com/mail/u/0/#search/makineni.uday%40gmail.com"
                                    target="_blank">
                                    <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1712816800/google-mail-gmail-icon-logo-symbol-free-png_c8epzx.webp"
                                        width="30">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                        <div class="team-card">
                            <div class="img-wrapper">
                                <img class="team-img"
                                    src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713290703/raj_aazat7.jpg">
                            </div>
                            <p class="text-blk name">
                                Raj Kumar A
                            </p>
                            <p class="text-blk position">
                                CEO
                            </p>
                            <div class="social-media-links">
                                <a href="https://www.linkedin.com/in/ayilvar-raj-kumar/" target="_blank">
                                    <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1712816366/LINK_IN_ztg777.png"
                                        width="30">
                                </a>
                                <a href="https://www.instagram.com/ayilvar_raj_kumar/" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                                </a>
                                <a href="https://mail.google.com/mail/u/0/#search/ayilvarrajkumar%40gmail.com"
                                    target="_blank">
                                    <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1712816800/google-mail-gmail-icon-logo-symbol-free-png_c8epzx.webp"
                                        width="30">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                        <div class="team-card">
                            <div class="img-wrapper">
                                <img class="team-img"
                                    src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713290686/dhana_ecfti3.jpg">
                            </div>
                            <p class="text-blk name">
                                Dhana Lakshmi S
                            </p>
                            <p class="text-blk position">
                                CFO
                            </p>
                            <div class="social-media-links">
                                <a href="https://www.linkedin.com/in/samudrala-sai-dhana-lakshmi/" target="_blank">
                                    <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1712816366/LINK_IN_ztg777.png"
                                        width="30">
                                </a>
                                <a href="https://www.instagram.com/_dhana_samudrala/" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                                </a>
                                <a href="https://mail.google.com/mail/u/0/#search/saidhanalakshmi30112003%40gmail.com"
                                    target="_blank">
                                    <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1712816800/google-mail-gmail-icon-logo-symbol-free-png_c8epzx.webp"
                                        width="30">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
                        <div class="team-card">
                            <div class="img-wrapper">
                                <img class="team-img"
                                    src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713290751/uma_hecpkq.jpg">
                            </div>
                            <p class="text-blk name">
                                Uma Pravalika M
                            </p>
                            <p class="text-blk position">
                                CTO
                            </p>
                            <div class="social-media-links">
                                <a href="https://www.linkedin.com/in/maroju-uma-pravalika/" target="_blank">
                                    <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1712816366/LINK_IN_ztg777.png"
                                        width="30">
                                </a>
                                <a href="https://www.instagram.com/uma_maroju7316/" target="_blank">
                                    <img
                                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg">
                                </a>
                                <a href="https://mail.google.com/mail/u/0/#search/maroju.uma7316%40gmail.com"
                                    target="_blank">
                                    <img src="https://res.cloudinary.com/do6twjc6g/image/upload/v1712816800/google-mail-gmail-icon-logo-symbol-free-png_c8epzx.webp"
                                        width="30">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/"
                        aria-label="Bootstrap">
                        <img class="fs-4"
                            src="https://res.cloudinary.com/do6twjc6g/image/upload/v1713801800/logo-aruk_mslbcd.png">
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Designed and built by ARUK community</li>
                        <div class="d-flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-c-circle" viewBox="0 0 16 16">
                                <path
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512" />
                            </svg>
                            <p>2024 ARUK community. All Rights Reserved</p>
                        </div>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/">Home</a></li>
                        <li class="mb-2"><a href="/docs/5.3/">Workflow</a></li>
                        <li class="mb-2"><a href="/docs/5.3/examples/">Team</a></li>
                        <li class="mb-2"><a href="https://icons.getbootstrap.com/">Collaborations</a></li>
                        <li class="mb-2"><a href="https://themes.getbootstrap.com/">Terms & Condition</a></li>
                        <li class="mb-2"><a href="https://blog.getbootstrap.com/">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Domains</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/docs/5.3/getting-started/">Employee</a></li>
                        <li class="mb-2"><a href="/docs/5.3/examples/starter-template/">Employer</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/webpack/">Students</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/parcel/">Online jobs</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/vite/">Offline jobs </a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Access</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap" target="_blank"
                                rel="noopener">Login</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev" target="_blank"
                                rel="noopener">Signin</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/icons" target="_blank"
                                rel="noopener">Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="section2_0">
        <div class="login_page">
            <div class="d-flex flex-row justify-content-center">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h2 class="login">Login</h2>
                            <p>Fill your login details below</p>
                        </div>
                        <input type="email" id="form3Example3c" class="form-control gap_placeholder"
                            placeholder="Your email" />
                        <input type="email" id="form3Example3c" class="form-control gap_placeholder"
                            placeholder="Password" />
                    </div>
                    <div class="d-flex justify-content-center button1">
                        <button class="btn1">Login</button>
                    </div>
                    <div class="d-flex flex-row">
                        <p class="account">Don't have an account?</p>
                        <div onclick="display('section2_1')">
                            <p class="RegisteBtn RegiBtn">Sign up</p>
                        </div> -->
                        <!-- <p class="RegisteBtn RegiBtn"><a href="./signup.html">sign up</a></p> -->
                    <!-- </div>
                </div>
            </div>
            <div onclick="display('section2_2')">
                <div class="d-flex flex-row justify-content-center">
                    <p class="RegisteBtn RegiBtn">Forgot Your Password ?</p> -->
                    <!-- <a href="./resetpassword.html" class="link">forgot your password ?</a></p> -->
                <!-- </div>
            </div>
        </div>
    </div> -->

    <!-- <div id="section2_1">
        <div class="login_page">
            <div class="d-flex flex-row justify-content-center">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-center">
                            <h2>Sign up</h2>
                        </div>
                        <div>
                            <input type="text" id="form3Example1c" class="form-control gap_placeholder"
                                placeholder="Your Name" />
                            <input type="email" id="form3Example3c" class="form-control gap_placeholder"
                                placeholder="Your Email" />
                            <input type="email" id="form3Example3c" class="form-control gap_placeholder"
                                placeholder="Password" />
                        </div>
                    </div>
                    <div class="card-body1">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                        <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                        </label>
                    </div>
                    <div class="d-flex justify-content-center button1">
                        <button class="btn1">Sign up</button>
                    </div>
                    <div class="d-flex flex-row">
                        <p class="account">Already have an account?</p>
                        <div onclick="display('section2_0')">
                            <p class="RegisteBtn RegiBtn">Login</p>
                        </div> -->
                        <!-- <p class="RegisteBtn RegiBtn"><a href="./login.html">login</a></p> -->
                    <!-- </div>
                </div>
            </div>
        </div> -->
    <!-- </div> -->

    <!-- <div id="section2_2">
        <div class="login_page">
            <div class="d-flex justify-content-center logo_name">
                <h3>connect in</h3>

            </div>
            <div class="d-flex flex-row justify-content-center">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h2 class="login">Reset Password</h2>
                            <p>Enter your email and we will send you a password reset link</p>
                        </div>
                        <input type="email" id="form3Example3c" class="form-control gap_placeholder"
                            placeholder="Your email" />
                    </div>
                    <div class="d-flex justify-content-center button1">
                        <button class="btn1">Send Reset Email</button>
                    </div>
                </div>
            </div>
            <div onclick="display('section2_0')">
                <div class="d-flex flex-row justify-content-center">
                    <p class="RegisteBtn RegiBtn"> Return to Login</p> -->
                    <!-- <a href="./login.html" class="link">Return to Login</a> -->
                <!-- </div>
            </div>
        </div>
    </div> -->
    <script type="text/javascript"
        src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
</body>

</html>