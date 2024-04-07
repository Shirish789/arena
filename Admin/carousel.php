<?php
require("inc/essentials.php");
admin_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Carousel</title>
    <?php require("inc/links.php"); ?>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require("inc/header.php"); ?>

    <div class="container-fluid" id="main_content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <h3 class="mb-4">CAROUSEL</h3>

                <!-- Carousel section -->
                <div class="card border-0 shadow-sm mb-4 ">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Carousel Images</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s">
                                <i class="bi bi-plus-square-fill me-2"></i> ADD
                            </button>
                        </div>
                        <div class="row" id="carousel-data">
                            <!-- Member Data are fetch here using Ajaz and javascript using id "team-data" -->
                        </div>
                    </div>
                </div>

                <!--Carousel Modal -->
                <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <form id="carousel_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Image</h1>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input name="carousel_picture" accept=".jpg, .png, .webp, .jpeg" id="carousel_picture_inp" type="file" class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary border-0" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn btn-dark">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <?php require("inc/script.php"); ?>
        <script src="scripts/carousel.js"></script>
</body>

</html>