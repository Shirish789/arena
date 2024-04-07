<?php
require("inc/essentials.php");
require("inc/db_config.php");

admin_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Cards</title>
    <?php require("inc/links.php"); ?>

</head>

<body>
    <?php require("inc/header.php"); ?>


    <div class="container-fluid" id="main_content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

                <h3 class="mb-4">PRODUCT - CARD</h3>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm mb-4 ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h5 class="card-title m-0">Product Cards</h5>
                                        <button type="button" class="btn btn-dark shadow-none btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#card-s">
                                            <i class="bi bi-plus-square-fill me-2"></i> ADD
                                        </button>
                                    </div>

                                    <div class="table-responsive-md" style="height: 250px; overflow-y: scroll;">
                                        <table class="table border table-hover">
                                            <thead class="sticky-top text-center" style="z-index: 5;">
                                                <tr class="table-dark">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="card_data" class="text-center">
                                                <!-- card data will appear here     -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--card Modal -->
        <div class="modal fade" id="card-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">

                <form id="card_s_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Card</h1>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input name="card_name" id="card_name_inp" type="text"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">price</label>
                                        <input name="card_price" id="card_price_inp" type="number"
                                            class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Quantity</label>
                                        <input name="card_qty" id="card_qty_inp" type="number"
                                            class="form-control shadow-none" required>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-bold">Brands</label>
                                    <div class="row">

                                        <?php
                                        $res = selectAll('brand');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                            <div class='col-md-3 mb-3'>
                                            <label>
                                            <input type='checkbox' name='brand' value='$opt[id]' class='form-check-input shadow-none'>
                                            $opt[name]
                                            </label>
                                            </div>
                                        ";
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-bold">Sizes</label>
                                    <div class="row">

                                        <?php
                                        $res = selectAll('size');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                            <div class='col-md-3 mb-3'>
                                            <label>
                                            <input type='checkbox' name='size' value='$opt[id]' class='form-check-input shadow-none'>
                                            $opt[name]
                                            </label>
                                            </div>
                                        ";
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <label class="form-label fw-bold">Materials</label>
                                    <div class="row">

                                        <?php
                                        $res = selectAll('materials');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                            <div class='col-md-3 mb-5'>
                                            <label>
                                            <input type='checkbox' name='material' value='$opt[id]' class='form-check-input shadow-none'>
                                            $opt[material]
                                            </label>
                                            </div>
                                        ";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea name="desc" class="form-control shadow-none" required rows="4"
                                            placeholder="Leave a comment here" id="card_description"
                                            style="height: 100px"></textarea>
                                        <label for="description">Description</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn text-secondary border-0"
                                data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" id="card-sm" class="btn btn-dark">SUBMIT</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <!--card Edit Modal -->
    <div class="modal fade" id="card-edit-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <form id="edit_card_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Card</h1>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Name</label>
                                    <input name="edit_name" id="edit_name_inp" type="text"
                                        class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">price</label>
                                    <input name="edit_price" id="edit_price_inp" type="number"
                                        class="form-control shadow-none" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Quantity</label>
                                    <input name="edit_qty" id="edit_qty_inp" type="number"
                                        class="form-control shadow-none" required>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-bold">Brands</label>
                                <div class="row">

                                    <?php
                                        $res = selectAll('brand');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                            <div class='col-md-3 mb-3'>
                                            <label>
                                            <input type='checkbox' name='brand' value='$opt[id]' class='form-check-input shadow-none'>
                                            $opt[name]
                                            </label>
                                            </div>
                                        ";
                                        }
                                        ?>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-bold">Sizes</label>
                                <div class="row">

                                    <?php
                                        $res = selectAll('size');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                            <div class='col-md-3 mb-3'>
                                            <label>
                                            <input type='checkbox' name='size' value='$opt[id]' class='form-check-input shadow-none'>
                                            $opt[name]
                                            </label>
                                            </div>
                                        ";
                                        }
                                        ?>

                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <label class="form-label fw-bold">Materials</label>
                                <div class="row">

                                    <?php
                                        $res = selectAll('materials');
                                        while ($opt = mysqli_fetch_assoc($res)) {
                                            echo "
                                            <div class='col-md-3 mb-5'>
                                            <label>
                                            <input type='checkbox' name='material' value='$opt[id]' class='form-check-input shadow-none'>
                                            $opt[material]
                                            </label>
                                            </div>
                                        ";
                                        }
                                        ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="desc" class="form-control shadow-none" required rows="4"
                                        placeholder="Leave a comment here" id="edit_description"
                                        style="height: 100px"></textarea>
                                    <label for="description">Description</label>
                                </div>
                            </div>
                            <input type="hidden" name="edit_id">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn text-secondary border-0"
                                data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" id="edit-sm" class="btn btn-dark">SUBMIT</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <script>
        card_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            add_card();
        })
        edit_card_form.addEventListener('submit', function (e) {
            e.preventDefault();
            submit_edit_card();
        })
        function submit_edit_card() {

            let data = new FormData();
            data.append('edit_card', '');
            data.append('edit_id', edit_card_form.elements['edit_id'].value);
            data.append('edit_name', edit_name_inp.value);
            data.append('edit_price', edit_price_inp.value);
            data.append('edit_quantity', edit_qty_inp.value);
            data.append('edit_description', edit_description.value);
            let brand = [];
            let size = [];
            let material = [];
            document.forms.edit_card_form['brand'].forEach(el => {
                if (el.checked) {
                    brand.push(el.value);
                }
            })
            document.forms.edit_card_form['size'].forEach(el => {
                if (el.checked) {
                    size.push(el.value);
                }
            })
            document.forms.edit_card_form['material'].forEach(el => {
                if (el.checked) {
                    material.push(el.value);
                }
            })

            data.append('brand', JSON.stringify(brand));
            data.append('size', JSON.stringify(size));
            data.append('material', JSON.stringify(material));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/cards_crud.php", true);

            xhr.onload = function () {
                var myModal = document.getElementById('card-edit-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Card Edited ');
                    edit_card_form.reset();
                    get_all_cards();

                }
                else {
                    alert('error', "Server down");
                }
            };
            xhr.send(data);

        }

        function add_card() {

            let data = new FormData();
            data.append('add_card', '');
            data.append('name', card_name_inp.value);
            data.append('price', card_price_inp.value);
            data.append('quantity', card_qty_inp.value);
            data.append('description', card_description.value);
            let brand = [];
            let size = [];
            let material = [];
            document.forms.card_s_form['brand'].forEach(el => {
                if (el.checked) {
                    brand.push(el.value);
                }
            })
            document.forms.card_s_form['size'].forEach(el => {
                if (el.checked) {
                    size.push(el.value);
                }
            })
            document.forms.card_s_form['material'].forEach(el => {
                if (el.checked) {
                    material.push(el.value);
                }
            })

            data.append('brand', JSON.stringify(brand));
            data.append('size', JSON.stringify(size));
            data.append('material', JSON.stringify(material));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/cards_crud.php", true);

            xhr.onload = function () {
                var myModal = document.getElementById('card-s');
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'New Card Added');
                    card_s_form.reset();
                    get_all_cards();

                }
                else {
                    alert('error', "Server down");
                }
            };
            xhr.send(data);

        }

        function get_all_cards() {


            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/cards_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function () {
                document.getElementById('card_data').innerHTML = this.responseText;
            };
            xhr.send('get_all_cards');
        }

        function edit_details(id) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/cards_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function () {
                let data = JSON.parse(this.responseText);
                edit_card_form.elements['edit_name'].value = data.card_data.name;
                edit_card_form.elements['edit_price'].value = data.card_data.price;
                edit_card_form.elements['edit_qty'].value = data.card_data.quantity;
                edit_card_form.elements['edit_id'].value = data.card_data.id;
                edit_card_form.elements['edit_description'].value = data.card_data.description;

                edit_card_form.elements['brand'].forEach(el => {
                    if (data.brand.includes(Number(el.value))) {
                        el.checked = true;
                    }
                });
                edit_card_form.elements['size'].forEach(el => {
                    if (data.size.includes(Number(el.value))) {
                        el.checked = true;
                    }
                });
                edit_card_form.elements['material'].forEach(el => {
                    if (data.material.includes(Number(el.value))) {
                        el.checked = true;
                    }
                });
            }
            xhr.send('get_card=' + id);
        }




        function toggle_status(id, val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/cards_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function () {
                console.log(this.responseText);
                if (this.responseText == 1) {
                    alert('success', "Status Toggle");
                    get_all_cards();
                } else {
                    alert('error', "Server Down");
                }
            };
            xhr.send('toggle_status=' + id + '&value=' + val);
        }

        window.onload = function () {
            get_all_cards();
        }


    </script>

    <?php require("inc/script.php"); ?>
</body>

</html>