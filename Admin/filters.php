<?php
require("inc/essentials.php");
admin_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Filters</title>
    <?php require("inc/links.php"); ?>

</head>

<body>
    <?php require("inc/header.php"); ?>


    <div class="container-fluid" id="main_content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <h3 class="mb-4">FILTERS</h3>

                <div class="container-fluid bg-dark p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <!-- BRAND section -->
                                <div class="card border-0 shadow-sm mb-4 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="card-title m-0">Brand Section</h5>
                                            <button type="button" class="btn btn-dark shadow-none btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#brand-s">
                                                <i class="bi bi-plus-square-fill me-2"></i> ADD
                                            </button>
                                        </div>

                                        <div class="table-responsive-md" style="height: 250px; overflow-y: scroll;">
                                            <table class="table border table-hover">
                                                <thead class="sticky-top text-center" style="z-index: 5;">
                                                    <tr class="table-dark">
                                                        <th scope="col" width=20%>#</th>
                                                        <th scope="col" width=50%>Name</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="brand_data" class="text-center">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <!-- PRICES section -->
                                <div class="card border-0 shadow-sm mb-4 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="card-title m-0">Prices Section</h5>
                                            <button type="button" class="btn btn-dark shadow-none btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#price-s">
                                                <i class="bi bi-plus-square-fill me-2"></i> ADD
                                            </button>
                                        </div>

                                        <div class="table-responsive-md" style="height: 250px; overflow-y: scroll;">
                                            <table class="table border table-hover">
                                                <thead class="sticky-top text-center" style="z-index: 5;">
                                                    <tr class="table-dark">
                                                        <th scope="col" width=20%>#</th>
                                                        <th scope="col" width=50%>Prices</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="price_data" class="text-center">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <!-- SIZES section -->
                                <div class="card border-0 shadow-sm mb-4 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="card-title m-0">Sizes Section</h5>
                                            <button type="button" class="btn btn-dark shadow-none btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#size-s">
                                                <i class="bi bi-plus-square-fill me-2"></i> ADD
                                            </button>
                                        </div>

                                        <div class="table-responsive-md" style="height: 250px; overflow-y: scroll;">
                                            <table class="table border table-hover">
                                                <thead class="sticky-top text-center" style="z-index: 5;">
                                                    <tr class="table-dark">
                                                        <th scope="col" width=20%>#</th>
                                                        <th scope="col" width=50%>Size's</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="size_data" class="text-center">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                 <!-- Material section -->
                                 <div class="card border-0 shadow-sm mb-4 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="card-title m-0">Materials Section</h5>
                                            <button type="button" class="btn btn-dark shadow-none btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#material-s">
                                                <i class="bi bi-plus-square-fill me-2"></i> ADD
                                            </button>
                                        </div>

                                        <div class="table-responsive-md" style="height: 250px; overflow-y: scroll;">
                                            <table class="table border table-hover">
                                                <thead class="sticky-top text-center" style="z-index: 5;">
                                                    <tr class="table-dark">
                                                        <th scope="col" width=20%>#</th>
                                                        <th scope="col" width=50%>Name</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="material_data" class="text-center">

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!-- Descprition section -->
                            <div class="card border-0 shadow-sm mb-4 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="card-title m-0">Descprition Section</h5>
                                            <button type="button" class="btn btn-dark shadow-none btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#disc-s">
                                                <i class="bi bi-plus-square-fill me-2"></i> ADD
                                            </button>
                                        </div>

                                        <!-- <div class="table-responsive-md" style="height: 250px; overflow-y: scroll;">
                                            <table class="table border table-hover">
                                                <thead class="sticky-top text-center" style="z-index: 5;">
                                                    <tr class="table-dark">
                                                        <th scope="col" width=20%>#</th>
                                                        <th scope="col" width=50%>Name</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="brand_data" class="text-center">

                                                </tbody>
                                            </table>
                                        </div> -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>



                <!--BRAND Modal -->
                <div class="modal fade" id="brand-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <form id="brand_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Brand</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input name="brand_name" id="brand_name_inp" type="text"
                                            class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary border-0"
                                        data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" id="brand-sm" class="btn btn-dark">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


                <!--SIZES Modal -->
                <div class="modal fade" id="size-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <form id="size_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Sizes</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Size</label>
                                        <input name="size_name" id="size_name_inp" type="text"
                                            class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary border-0"
                                        data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" id="size-sm" class="btn btn-dark">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


                <!--MATERIAL Modal -->
                <div class="modal fade" id="material-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <form id="material_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Materials</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Material</label>
                                        <input name="material_name" id="material_name_inp" type="text"
                                            class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary border-0"
                                        data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" id="material-sm" class="btn btn-dark">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


                <!--priceS Modal -->
                <div class="modal fade" id="price-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <form id="price_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add prices</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">price</label>
                                        <input name="price_name" id="price_name_inp" type="number"
                                            class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary border-0"
                                        data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" id="price-sm" class="btn btn-dark">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <!--------------------------------------------------------------------------- -->



            </div>
        </div>
    </div>
    <script src="scripts/filters.js"></script>


    <?php require("inc/script.php"); ?>
</body>

</html>