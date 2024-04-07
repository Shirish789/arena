<?php 
require("inc/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena_Womens</title>
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
    <style>
        /* Style The Dropdown Button */
        .dropbtn {

            background-color: #A9A9A5;
            color: black;
            padding: 16px;
            font-size: 12px;
            border-radius: 3px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #e7e7e4;
            min-width: 180px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #DCDCDA;
        }
    </style>

</head>

<body class="bg-light">
    <!-- Just an image -->
    <div class="sticky-top">

        <div class=" container-fluid  " style=" background-color: rgb(236, 233, 233);">
            <div class="row">
                <div class="col-lg-4  d-flex justify-content-center  me-auto">
                    <a class="text-decoration-none justify-content-start " href="index.php">
                        <h4 class="pt-3 mb-lg-0">Arena Clothing</h4>
                    </a>
                    <h4 class="nav-link mt-4  mx-5 ">Womens Section</h4>
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
    </div>
    <!-- Navbar ends -->
    <!-- Subnav for womens
    <div class="container-fluid" style="position:fixed; z-index: 2; background: #94938E;">
        <div class="dropdown">
            <button class="dropbtn mx-3">TOPWEAR</button>
            <div class="dropdown-content">
                <a href="#">Shirts</a>
                <a href="#">Tops</a>
                <a href="#">T-shirts</a>
                <a href="#">Dresses</a>
                <a href="#">Hoodies & Jackets</a>
                <a href="#">Sweatshirts & Sweaters</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn mx-3">BOTTOM WEAR</button>
            <div class="dropdown-content">
                <a href="#">Jeans</a>
                <a href="#">Cargos & Joggers</a>
                <a href="#">Shorts</a>
                <a href="#">Freestyle leggings</a>
                <a href="#">pajamas</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn mx-3">ACCESSORIES</button>
            <div class="dropdown-content">
                <a href="#">Shoes</a>
                <a href="#">Shocks</a>
                <a href="#">Backpacks</a>
                <a href="#">Perfumes</a>
                <a href="#">Caps</a>
            </div>
        </div>
    </div> -->

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

    <!-- Body Of women Shirt -->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-9">
                <div class="row mt-3">
                    <div class="col-8 col-sm-6">
                        <div data-v-6962874a="" class="newbread"><a data-v-6962874a="" href="index.php"
                                class="">Home</a>
                            <!---->
                            / <span data-v-6962874a="">Womens's shirt</span> <!---->
                            <h4 data-v-6962874a="" class="list-header mt-1">Women's Shirts
                                <span style="color: rgb(135, 139, 148);">
                                    - 247 items
                                </span>
                            </h4>
                        </div>
                    </div>

                    <div class="col-5 col-sm-6" style="border: none;">
                        <select class=" dropdown reset col-md-12 col-12" style="border: none;">
                            <option class="dropdown-content">Select Sorting Options</option>
                            <option class="dropdown-content">A to Z</option>
                            <option class="dropdown-content">Price-High to Low</option>
                            <option class="dropdown-content">Price-Low to High</option>
                            <option class="dropdown-content">Newest</option>
                            <option class="dropdown-content">Popularity</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">

                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterdropdown" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-3 align-items-start"  id="filterdropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5>Brand</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Zara">
                                    <label class="form-check-label" for="Zara">
                                        Zara
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="H&M"
                                        >
                                    <label class="form-check-label" for="H&M">
                                        H&M
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Forever"
                                        >
                                    <label class="form-check-label" for="Forever">
                                        Forever New
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse flex-column mt-3 align-items-start"  id="filterdropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5>Size</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="size" value="" id="Small">
                                    <label class="form-check-label" for="Small">
                                        Small
                                    </label>
                                </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="size" value="" id="Medium">
                                        <label class="form-check-label" for="Medium">
                                            Medium
                                        </label>
                                    </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="size" value="" id="Large">
                                    <label class="form-check-label" for="Large">
                                        Large
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="size" value="" id="Extra_Large">
                                    <label class="form-check-label" for="Extra_Large">
                                        Extra Large
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="collapse navbar-collapse flex-column mt-3 align-items-start"  id="filterdropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5>Prize</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="low">
                                    <label class="form-check-label" for="low">
                                        Rs. 419 To Rs. 628
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="affordable">
                                    <label class="form-check-label" for="affordable">
                                        Rs. 629 To Rs. 838
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Expensive">
                                    <label class="form-check-label" for="Expensive">
                                        Rs. 839 To Rs. 1049
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center me-2 mb-3">
                            <a href="#" class="dropdown btn btn-sm btn-outline-dark rounded ">Look</a>
                        </div>
                    </div>
                </nav>

            </div>

            <div class="col-9">
                <div class="container">
                    <div class="row">
                        <div class="col-3 mb-3">
                            <!-- Cards -->
                            <div class="card border-0 shadow " style="max-width: 350px; margin: auto; ">
                                <a href=""><img src="Images/Womens/shirts.webp" class="card-img-top" alt="...">
                                    <div class="card-body d-flex w-100">
                                        <u class="" style="font-size: x-small;">Discription of product</u>
                                        <br>
                                    </div>
                                    <div style="margin-top: -15px;">
                                        <h5 class="d-flex justify-content-start mx-3 mb-4" style="font-size: medium;">
                                            Type</h5>
                                    </div>
                                    <div style="margin-top: -15px;">
                                        <h5 class="d-flex justify-content-start mx-3 mb-3 ">&#8377 1599</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            <a href="#" class="dropdown btn btn-sm btn-outline-dark rounded ">Load more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Strat -->
    <hr>
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
</body>

</html>