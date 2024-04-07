<?php
require("inc/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena</title>
    <?php require("inc/links.php"); ?>
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        .h-font {
            font-family: "Merienda", cursive;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Just an image -->
    <div class="sticky-top">

        <div class=" container-fluid " style=" background-color: rgb(236, 233, 233);">
            <div class="row">
                <div class="col-lg-4  d-flex justify-content-center me-auto">
                    <a class="text-decoration-none" href="index.php">
                        <h4 class="pt-3 mb-lg-0">
                            <?php echo $settings_r['site_title'] ?>
                        </h4>
                    </a>
                </div>
                <div class="col-lg-8 d-flex justify-content-end ">
                    <button class="bi btn me-2 bi-suit-heart-fill user-hover fs-3 me-2"></button>
                    <button class="bi btn me-2 bi-cart user-hover fs-3"></button>
                    <span class="dropdown  mt-sm-1">
                        <button class=" btn btn-white user-hover bi-person-fill mb-1 fs-2"
                            class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-mdb-toggle="dropdown" aria-expanded="false" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        </button>
                        <ul class="dropdown-menu border-0 shadow-sm p-3 mb-5 bg-white rounded">
                            <li><a class="dropdown-item bi btn bi-person-fill-gear fs-6" data-bs-toggle="modal"
                                    data-bs-target="#loginmodal" href="#"> User Login</a></li>
                            <li><a class="dropdown-item bi btn me-2 bi-list-columns-reverse fs-6" data-bs-toggle="modal"
                                    data-bs-target="#registermodal" href="#"> Registration</a></li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
        <!-- Navbar start -->
        <div class="container-fluid bg-light">
            <nav id="nav-bar" class="navbar navbar-expand-lg">
                <div class="container ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " style="justify-content: space-around;"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav mb-5  mb-lg-0">
                            <li class="nav-item mx-3">
                                <a class="nav-link" aria-current="page" href="womens.php">Womens</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link " aria-current="page" href="mens.php">Mens</a>
                            </li>
                        </ul>
                        <div>
                            <form class="d-flex me-2">
                                <input class="form-control shadow-none mr-sm-2 me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline my-2 my-sm-0 border " type="reset">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar ends -->

    <!-- login Modal -->
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control shadow-none" placeholder="Enter email">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1">password</label>
                            <input type="password" class="form-control shadow-none" placeholder="password">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button class="btn btn-dark shadow-none reset">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forgot
                                Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label for="exampleInputEmail1" class="mb-1">Name</label>
                                    <input type="text" class="form-control shadow-none me-2">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label for="exampleInputEmail1" class="mb-1">Email</label>
                                    <input type="email" class="form-control shadow-none me-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label for="exampleInputEmail1" class="mb-1">Contact number</label>
                                    <input type="number" class="form-control shadow-none me-2">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label for="exampleInputEmail1" class="mb-2">Gender</label>
                                    <div>
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label mx-1" for="inlineRadio1">male</label>
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label mx-1" for="inlineRadio2">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 p-0 mb-3">
                                    <label for="exampleInputEmail1" class="mb-1">Address</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label for="exampleInputEmail1" class="mb-1">Pincode</label>
                                    <input type="number" class="form-control shadow-none me-2">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label for="exampleInputEmail1" class="mb-1">Email</label>
                                    <input type="date" class="form-control shadow-none me-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-4">
                                    <label for="exampleInputEmail1" class="mb-1">password</label>
                                    <input type="password" class="form-control shadow-none me-2">
                                </div>
                                <div class="col-md-6 p-0 mb-4">
                                    <label for="exampleInputEmail1" class="mb-1">Confirm password</label>
                                    <input type="password" class="form-control shadow-none me-2">
                                </div>
                            </div>
                            <div class="text-center my-1">
                                <button class="btn btn-dark shadow-none reset">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- carousel Strat -->
    <div class="container-fluid px-lg-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">

            <?php
            $carousel_r = selectAll('carousel');
            $path = CAROUSEL_IMG_PATH;
            while ($row = mysqli_fetch_assoc($carousel_r)) {
                echo <<<data
                <div class="swiper-slide">
                    <img src="$path$row[image]" class="w-100 d-block" alt="">
                </div>
                data;
            }
            ?>
            
            </div>
        </div>
    </div>

    <!-- Body on index page -->
    <div class="row mt-3 p-3">
        <div class="col-3">
            <img class="w-100" src="Images/cateogeris_images/img1.jpg" alt="">
        </div>
        <div class="col-3">
            <img class="w-100" src="Images/cateogeris_images/img2.jpg" alt="">
        </div>
        <div class="col-3">
            <img class="w-100" src="Images/cateogeris_images/img3.jpg" alt="">
        </div>
        <div class="col-3">
            <img class="w-100" src="Images/cateogeris_images/img5.jpg" alt="">
        </div>
    </div>
    <div class="row mt-3 p-5">
        <div class="col-4">
            <img class="w-100 " src="Images/cateogeris_images/img4.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="Images/cateogeris_images/img7.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="Images/cateogeris_images/img6.jpg" alt="">
        </div>
    </div>
    <!-- Body on index page end -->


    <!-- Footer Strat -->
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 border-bottom">
                <h3 class="text-center bg-light lh-lg">Over 5.5 Million Happy Customers</h3>
            </div>
        </div>


        <!-- Google map embed -->
        <div class="row justify-content-between ">

            <div class="col-lg-8 col-md-8 col-sd-3 p-4 mb-3 bg-white rounded">
                <iframe src="<?php echo $contact_r['iframe'] ?>" width="100%" height="400" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4  p-4 mb-3 bg-white rounded">
                <div class="bg-white mb-3">
                    <h5>Address</h5>
                    <p>
                        <?php echo $contact_r['address'] ?>
                    </p>
                </div>
                <div class="bg-white mb-3">
                    <h5>Email</h5>
                    <a class="text-decoration-none text-dark" href="">
                        <?php echo $contact_r['email'] ?>
                    </a>
                </div>
                <div class="bg-white mb-2">
                    <h5>Call us</h5>
                    <div>
                        <i class="bi bi-telephone-fill"></i>
                        <a href="tel: +918454988557" class="d-inline-block mb-2 text-decoration-none text-dark">+
                            <?php echo $contact_r['pn1'] ?>
                        </a>
                    </div>
                    <div>
                        <i class="bi bi-telephone-fill"></i>
                        <a href="tel: +918454988557" class="d-inline-block mb-2 text-decoration-none text-dark">+
                            <?php echo $contact_r['pn2'] ?>
                        </a>
                    </div>
                </div>
                <div class="bg-white">
                    <h5>About Us</h5>
                    <i class="bi bi-file-person fs-4"></i>
                    <?php echo $settings_r['site_about'] ?></a>
                </div>
            </div>

        </div>
    </div>

    <!-- management section -->

    <div class="container" style="min-height: 220px; ">
        <div class="row text-center">
            <?php
            $team_r = selectAll('team_details');
            $path = ABOUT_IMG_PATH;
            while ($row = mysqli_fetch_assoc($team_r)) {
                echo <<<data
                <div class="col-lg-4">
                <img src="$path$row[picture]" alt="">
                <h5 class="mt-2">$row[name]</h5>
                </div>
                data;
            }
            ?>
            <h4 class="fw-bold">Management Team</h4>
            <hr>
        </div>
    </div>

    <?php require('inc/footer.php') ?>
    <!-- Footer Ends -->


    <!-- Bootstart sript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Bootstart sript ends -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            }
        });
    </script>
    <!-- Swiper JS ends -->

    <script>
        function setActive() {
            let navbar = document.getElementById('nav-bar');
            let a_tags = navbar.getElementsByTagName('a');
            
            for (let i = 0; i < a_tags.length; i++) {
                let file = a_tags[i].href.split("/").pop();
                let file_name = file.split('.')[0];
                if (document.location.href.indexOf(file_name) >= 0) {
                    a_tags[i].classList.add('active');

                }
            }
        }
        setActive();
    </script>
</body>

</html>