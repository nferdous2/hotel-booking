<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hide Way</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="bg-white p-0" id="home">
        <!-- Header Start -->
        <div class="container-fluid  px-0 navbar-dark">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase"><span style="color:#1a626e">H</span>ide <span
                                style="color:#1a626e">way</span></h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="#home" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about-section" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#Service" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    session_start();
                                    if (isset($_SESSION['email'])) {
                                        echo '<li class="nav-item">
                                        <a href="../Database/logout.php" class="dropdown-item">Logout</a>
                                                  </li>';
                                        echo '<li class="nav-item">
                                                  <a class="dropdown-item" href="#team">Our team</a>
                                                    </li>';
                                        echo '<li class="nav-item">
                                                    <a class="dropdown-item" href="../Database/mybooking.php">My Booking</a>
                                                      </li>';
                                    } else {
                                        echo '<li class="nav-item">
                                         <a href="login.php" class="dropdown-item">Login</a>
                                           </li>';
                                        echo '<li class="nav-item">
                                   <a class="dropdown-item" href="#team">Our team</a>
                                     </li>';
                                    }
                                    ?>


                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#footer" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Header End -->
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="../img/C-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class=" text-white text-uppercase mb-3">Live your life</h6>
                                <h1 class="display-3 text-white mb-4">A Luxurious Hotel </h1>
                                <a role="button" href="#rooms"
                                    style="background-color:#1a626e;color:aliceblue"
                                    class="btn py-md-3 px-md-5 me-3">Our Rooms</a>
                                <a>
                                    <?php
                                    if (isset($_SESSION['email'])) {
                                        echo '   <a role="button" href="../Components/Booking.php"
                                        class="btn btn-light py-md-3 px-md-5">Book A Room</a>';

                                    } else {
                                        echo '   <a role="button" href="../Components/Login.php"
                                        class="btn btn-light py-md-3 px-md-5">Book A Room</a>';

                                    }
                                    ?>
                                </a>


                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../img/C-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class=" text-white text-uppercase mb-3">Luxury Living</h6>
                                <h1 class="display-3 text-white mb-4">A beautiful Hotel</h1>
                                <a role="button" href="#rooms"
                                    style="background-color:#1a626e;color:aliceblue"
                                    class="btn py-md-3 px-md-5 me-3">Our Rooms</a>
                                <a>
                                    <?php
                                    if (isset($_SESSION['email'])) {
                                        echo '   <a role="button" href="../Components/Booking.php"
                                        class="btn btn-light py-md-3 px-md-5">Book A Room</a>';

                                    } else {
                                        echo '   <a role="button" href="../Components/Login.php"
                                        class="btn btn-light py-md-3 px-md-5">Book A Room</a>';

                                    }
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container py-5" id="about-section">
            <div class="row g-5 align-items-center">
                <div class="col-12 col-md-6">
                    <h6 class=" text-start  text-uppercase">About Us</h6>
                    <h1 class="mb-4">Welcome to <span style="color:#1a626e" class="text-uppercase">Hide
                            Way</span></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="row g-3 pb-4">
                        <div class="col-12 col-sm-4">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">

                                    <i class="fa fa-hotel fa-2x" style="color:#1a626e"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Rooms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x" style="color:#1a626e"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Staffs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x" style="color:#1a626e"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button style="background-color:#1a626e ;color:aliceblue"
                        class="btn py-3 px-5 mt-2">Explore More</button>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class=" rounded w-75 " src="../img/ab-2.jpeg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class=" rounded w-100 " src="../img/about-2.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class=" rounded w-50 " src="../img/ab-3.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class=" rounded w-75 " src="../img/ab-4.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5" id="rooms">
            <div class="container">
                <div class="text-center">
                    <h1 class="mb-5 text-uppercase">Explore Our <span style="color:#1a626e ">Rooms</span></h1>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="position-relative">
                                <img src="../img/room-2.jpg" class="card-img-top h-100" alt="">
                                <small style="background-color:#1a626e"
                                    class="position-absolute translate-middle-y text-white rounded py-1 px-3 top-100 start-0">$100/Night</small>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="card-title mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                        <small class="fa fa-star "></small>
                                        <small class="fa fa-star "></small>
                                        <small class="fa fa-star "></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small style="color:#1a626e" class="border-end me-3 pe-3"><i
                                            class="fa fa-bed me-2"></i>3 Bed</small>
                                    <small style="color:#1a626e" class="border-end me-3 pe-3"><i
                                            class="fa fa-bath me-2"></i>2 Bath</small>
                                    <small style="color:#1a626e"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                </div>
                                <p class="card-text flex-grow-1">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="mt-auto d-flex justify-content-between">
                                    <button style="background-color:#1a626e;color:aliceblue"
                                        class="btn btn-sm rounded py-2 px-4">View Detail</button>
                                    <?php if (isset($_SESSION['email'])): ?>
                                        <a role="button" href="../Components/Booking.php"
                                            class="btn btn-sm btn-dark rounded py-2 px-4">Book A Room</a>
                                    <?php else: ?>
                                        <a role="button" href="../Components/Login.php"
                                            class="btn btn-sm btn-dark rounded py-2 px-4">Book A Room</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100">
                            <div class="position-relative">
                                <img src="../img/room-1.jpg" class="card-img-top h-100" alt="">
                                <small style="background-color:#1a626e"
                                    class="position-absolute translate-middle-y text-white rounded py-1 px-3 top-100 start-0">$100/Night</small>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="card-title mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                        <small class="fa fa-star "></small>
                                        <small class="fa fa-star "></small>
                                        <small class="fa fa-star "></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small style="color:#1a626e" class="border-end me-3 pe-3"><i
                                            class="fa fa-bed me-2"></i>3 Bed</small>
                                    <small style="color:#1a626e" class="border-end me-3 pe-3"><i
                                            class="fa fa-bath me-2"></i>2 Bath</small>
                                    <small style="color:#1a626e"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                </div>
                                <p class="card-text flex-grow-1">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="mt-auto d-flex justify-content-between">
                                    <button style="background-color:#1a626e;color:aliceblue"
                                        class="btn btn-sm rounded py-2 px-4">View Detail</button>
                                    <?php if (isset($_SESSION['email'])): ?>
                                        <a role="button" href="../Components/Booking.php"
                                            class="btn btn-sm btn-dark rounded py-2 px-4">Book A Room</a>
                                    <?php else: ?>
                                        <a role="button" href="../Components/Login.php"
                                            class="btn btn-sm btn-dark rounded py-2 px-4">Book A Room</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="position-relative">
                                <img src="../img/room-4.jpg" class="card-img-top h-100" alt="">
                                <small style="background-color:#1a626e"
                                    class="position-absolute translate-middle-y text-white rounded py-1 px-3 top-100 start-0">$100/Night</small>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="card-title mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                        <small class="fa fa-star " style="color:255, 51, 255"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small style="color:#1a626e" class="border-end me-3 pe-3"><i
                                            class="fa fa-bed me-2"></i>3 Bed</small>
                                    <small style="color:#1a626e" class="border-end me-3 pe-3"><i
                                            class="fa fa-bath me-2"></i>2 Bath</small>
                                    <small style="color:#1a626e"><i class="fa fa-wifi me-2"></i>Wifi</small>
                                </div>
                                <p class="card-text flex-grow-1">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="mt-auto d-flex justify-content-between">
                                    <button style="background-color:#1a626e;color:aliceblue"
                                        class="btn btn-sm rounded py-2 px-4">View Detail</button>
                                    <?php if (isset($_SESSION['email'])): ?>
                                        <a role="button" href="../Components/Booking.php"
                                            class="btn btn-sm btn-dark rounded py-2 px-4">Book A Room</a>
                                    <?php else: ?>
                                        <a role="button" href="../Components/Login.php"
                                            class="btn btn-sm btn-dark rounded py-2 px-4">Book A Room</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!-- Room End -->


            <!-- Service Start -->
            <section class="services py-5 text-decoration-none" id="Service">
                <div class="container">
                    <div class="text-center">
                        <h1 class="mb-5">Explore Our <span style="color:#1a626e">Services</span></h1>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-4 gy-5" >
                        <div class="col">
                            <div class="service-item"  >

                                <i class="service-icon p-3 fa fa-hotel fa-2x" style="color:#1a626e"></i>

                                <h5 class="my-3">Rooms & Apartments</h5>
                                <p class="text-muted mb-3">Choose from our range of luxurious rooms and
                                    apartments to
                                    make
                                    your stay as comfortable as possible. Whether you're here for business or
                                    leisure,
                                    our
                                    accommodation is the perfect retreat from the hustle and bustle of city
                                    life.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-item">

                                <i class="service-icon p-3 fa fa-utensils fa-2x" style="color:#1a626e"></i>

                                <h5 class="my-3">Food & Restaurant</h5>
                                <p class="text-muted mb-3">Indulge in our delectable cuisine at our in-house
                                    restaurant.
                                    From traditional local dishes to international favorites, our menu is sure
                                    to
                                    satisfy
                                    your palate. We also offer room service for those who prefer to dine in the
                                    comfort
                                    of
                                    their own room.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-item">

                                <i class="service-icon p-3 fa fa-spa fa-2x" style="color:#1a626e"></i>

                                <h5 class="my-3">Spa & Fitness</h5>
                                <p class="text-muted mb-3">Relax and rejuvenate at our spa and fitness center.
                                    Our
                                    skilled
                                    therapists offer a range of treatments to help you unwind, while our
                                    state-of-the-art
                                    gym has everything you need for a complete workout. Come and experience the
                                    ultimate
                                    in
                                    pampering and wellness.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-item">

                                <i class="service-icon p-3 fa fa-swimmer fa-2x" style="color:#1a626e"></i>

                                <h5 class="my-3">Sports & Gaming</h5>
                                <p class="text-muted mb-3">Stay active and have fun with our sports and gaming
                                    facilities.
                                    Whether you're into swimming, tennis, or table tennis, we have something for
                                    everyone.
                                    We also have a game room with a variety of games for all ages to enjoy.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-item">

                                <i class="service-icon p-3 fa fa-glass-cheers fa-2x"
                                    style="color:#1a626e"></i>

                                <h5 class="my-3">Event & Party</h5>
                                <p class="text-muted mb-3">Celebrate your special occasions with us. Our event
                                    and party
                                    services are perfect for weddings, birthdays, anniversaries, and more. We
                                    offer
                                    personalized menus, decorations, and music to make your event unforgettable.
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="service-item">

                                <i class="service-icon p-3 fa fa-dumbbell fa-2x" style="color:#1a626e"></i>

                                <h5 class="my-3">GYM & Yoga</h5>
                                <p class="text-muted mb-3">Stay fit and healthy at our fully-equipped gym and
                                    yoga
                                    studio.
                                    We offer a range of fitness classes led by certified trainers, including
                                    yoga,
                                    pilates,
                                    and aerobics. Our gym has modern equipment and facilities for all your
                                    workout
                                    needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Service End -->
            <!-- Team Start -->
            <div class="container py-5" id="team">
                <div class="text-center mb-5">
                    <h1 class="mb-3 text-uppercase">Explore <span style="color:#1a626e">Our</span>
                        Staffs</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
                    <div class="col">
                        <div class="card rounded shadow overflow-hidden">
                            <img class="card-img-top " src="../img/team-1.jpg" alt="">
                            <div class="card-body text-center p-4">
                                <h5 class="fw-bold mb-0">Sarah Johnson </h5>
                                <p class="small mb-0">General Manager</p>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-facebook-f"></i></button>
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-twitter"></i></button>
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded shadow overflow-hidden">
                            <img class="card-img-top " src="../img/team-2.jpg" alt="">
                            <div class="card-body text-center p-4">
                                <h5 class="fw-bold mb-0">David Lee</h5>
                                <p class="small mb-0">Front Desk Manager </p>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-facebook-f"></i></button>
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-twitter"></i></button>
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-wow-delay="0.5s">
                        <div class="card rounded shadow overflow-hidden">
                            <img class="card-img-top " src="../img/team-3.jpg" alt="">
                            <div class="card-body text-center p-4">
                                <h5 class="fw-bold mb-0">Rachel Patel </h5>
                                <p class="small mb-0">Food and Beverage Manager</p>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-facebook-f"></i></button>
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-twitter"></i></button>
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-wow-delay="0.7s">
                        <div class="card rounded shadow overflow-hidden">
                            <img class="card-img-top " src="../img/team-4.jpg" alt="">
                            <div class="card-body text-center p-4">
                                <h5 class="fw-bold mb-0">Thomas Nguyen</h5>
                                <p class="small mb-0"> Housekeeping Manager</p>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-facebook-f"></i></button>
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-twitter"></i></button>
                                <button class="btn mx-1" style="background-color:#1a626e;color:aliceblue"><i
                                        class="fab fa-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team End -->


            <!-- Newsletter Start -->
            <div class="container mt-5 ">
                <div class="row justify-content-center">
                    <div class="col-lg-10 border rounded p-1">
                        <div class="border rounded text-center p-1">
                            <div class="bg-white rounded text-center p-5">
                                <h4 class="mb-4">Subscribe Our <span class=" text-uppercase">Newsletter</span>
                                </h4>
                                <div class="position-relative mx-auto" style="max-width: 400px;">
                                    <input class="form-control w-100 py-3 ps-4 pe-5" type="text"
                                        placeholder="Enter your email">
                                    <button type="button" style="background-color:#1a626e;color:aliceblue"
                                        class="btn  py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter Start -->


            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer" id="footer">
                <div class="container pb-5 mt-3">
                    <div class="row g-5">
                        <div class="col-md-3">
                            <h6 class="text-start text-uppercase mb-4" style="color:#1a626e">Contact
                            </h6>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3" style="color:#1a626e"></i>
                                Sylhet,Bangladesh</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3" style="color:#1a626e"></i>+880 0120374
                                67890</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"
                                    style="color:#1a626e"></i>hideway@example.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <h6 class="text-start text-uppercase mb-4" style="color:#1a626e">Company
                            </h6>
                            <p>About Us</p>
                            <p>Contact Us</p>
                            <p>Privacy Policy</p>
                            <p>Terms & Condition</p>
                            <p>Support</p>
                        </div>

                        <div class="col-md-3">
                            <h6 class="text-start text-uppercase mb-4" style="color:#1a626e">Services
                            </h6>
                            <p>Food & Restaurant</p>
                            <p>Spa & Fitness</p>
                            <p>Sports & Gaming</p>
                            <p>Event & Party</p>
                            <p>GYM & Yoga</p>
                        </div>


                        <div class="col-md-3">
                            <h6 class="text-start text-uppercase mb-4" style="color:#1a626e">Follow Us
                            </h6>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>

                        <div class="col-md-12 text-center mt-5">
                            <p>@2023 All Right Reserved</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer End -->


            <!-- JavaScript Libraries -->
            <script src="https://kit.fontawesome.com/f04ae5f181.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

</body>

</html>