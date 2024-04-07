<?php
require("../inc/db_config.php");
require("../inc/essentials.php");
admin_login();


// Brand $_POST _REQUEST

if (isset($_POST['add_brand'])) {
    $frm_data = filteration($_POST);

    $q = "INSERT INTO `brand` (`name`) VALUES (?)";
    $values = [$frm_data['name']];
    $res = insert($q, $values, 's');
    echo $res;
}

if (isset($_POST['get_brand'])) {
    $res = selectAll('brand');
    $i = 1;
    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
                <tr>
                <td>$i</td>
                <td>$row[name]</td>
                <td>
                <button type="button" onclick="rem_brand($row[id])" class="btn btn-dark btn-sm shadow-none">
                <i class="bi bi-trash"></i> DELETE
                </button>
                </td>
                </tr>
        data;
        $i++;
    }
}
if (isset($_POST['rem_brand'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_brand']];

    // echo $frm_data['rem_brand'];
    $check_q = select("SELECT * FROM `card_brand` WHERE `brand_id`=?", [$frm_data['rem_brand']], "i");

    if (mysqli_num_rows($check_q) == 0) {

        $q = "DELETE FROM `brand` WHERE `id`=?";
        $res = deletes($q, $values, 'i');
        echo $res;
    } else {
        echo 'card added';
    }
}

// Sizes $_POST _REQUEST
// ------------------------------------------------------------------------------

if (isset($_POST['add_size'])) {
    $frm_data = filteration($_POST);

    $q = "INSERT INTO `size` (`name`) VALUES (?)";
    $values = [$frm_data['name']];
    $res = insert($q, $values, 's');
    echo $res;
}

if (isset($_POST['get_size'])) {
    $res = selectAll('size');
    $i = 1;
    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
                <tr>
                <td>$i</td>
                <td>$row[name]</td>
                <td>
                <button type="button" onclick="rem_size($row[id])" class="btn btn-dark btn-sm shadow-none">
                <i class="bi bi-trash"></i> DELETE
                </button>
                </td>
                </tr>
        data;
        $i++;
    }
}
if (isset($_POST['rem_size'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_size']];

    $check_q = select("SELECT * FROM `card_size` WHERE `size_id`=?", [$frm_data['rem_size']], "i");

    if (mysqli_num_rows($check_q) == 0) {
        $q = "DELETE FROM `size` WHERE `id`=?";
        $res = deletes($q, $values, 'i');
        echo $res;
    } else {
        echo 'Size added';
    }
}


// Prices $_POST _REQUEST
// ------------------------------------------------------------------------------

if (isset($_POST['add_price'])) {
    $frm_data = filteration($_POST);

    $q = "INSERT INTO `prices` (`price`) VALUES (?)";
    $values = [$frm_data['price']];
    $res = insert($q, $values, 'i');
    echo $res;
}

if (isset($_POST['get_price'])) {
    $res = selectAll('prices');
    $i = 1;
    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
                <tr>
                <td>$i</td>
                <td>₹ $row[price]</td>
                <td>
                <button type="button" onclick="rem_price($row[id])" class="btn btn-dark btn-sm shadow-none">
                <i class="bi bi-trash"></i> DELETE
                </button>
                </td>
                </tr>
        data;
        $i++;
    }
}
if (isset($_POST['rem_price'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_price']];
    $q = "DELETE FROM `prices` WHERE `id`=?";
    $res = deletes($q, $values, 'i');
    echo $res;
}


// Material $_POST _REQUEST
// ------------------------------------------------------------------------------

if (isset($_POST['add_material'])) {
    $frm_data = filteration($_POST);

    $q = "INSERT INTO `materials` (`material`) VALUES (?)";
    $values = [$frm_data['material']];
    $res = insert($q, $values, 's');
    echo $res;
}

if (isset($_POST['get_material'])) {
    $res = selectAll('materials');
    $i = 1;
    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
                <tr>
                <td>$i</td>
                <td>$row[material]</td>
                <td>
                <button type="button" onclick="rem_material($row[id])" class="btn btn-dark btn-sm shadow-none">
                <i class="bi bi-trash"></i> DELETE
                </button>
                </td>
                </tr>
        data;
        $i++;
    }
}
if (isset($_POST['rem_material'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_material']];

    $check_q = select("SELECT * FROM `card_material` WHERE `material_id`=?", [$frm_data['rem_material']], "i");

    if (mysqli_num_rows($check_q) == 0) {
        $q = "DELETE FROM `materials` WHERE `id`=?";
        $res = deletes($q, $values, 'i');
        echo $res;
    } else {
        echo 'Material added';
    }
}
