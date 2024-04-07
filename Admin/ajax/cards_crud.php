<?php
require("../inc/db_config.php");
require("../inc/essentials.php");
admin_login();


// Brand $_POST _REQUEST

if (isset($_POST['add_card'])) {
    $brand = filteration(json_decode($_POST['brand']));
    $size = filteration(json_decode($_POST['size']));
    $material = filteration(json_decode($_POST['material']));
    $frm_data = filteration($_POST);
    $flag = 0;
    $q = "INSERT INTO `card`(`name`, `quantity`, `price`, `description`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'], $frm_data['quantity'], $frm_data['price'], $frm_data['description'],];

    if ($res = insert($q, $values, 'siis')) {
        $flag = 1;
    }
    $card_id = mysqli_insert_id($con);

    $q2 = "INSERT INTO `card_brand`(`card_id`, `brand_id`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($con, $q2)) {
        foreach ($brand as $b) {
            mysqli_stmt_bind_param($stmt, "ii", $card_id, $b);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die("Query cannot be peapared- insert");
    }


    $q3 = "INSERT INTO `card_material`(`card_id`, `material_id`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($con, $q3)) {
        foreach ($material as $m) {
            mysqli_stmt_bind_param($stmt, "ii", $card_id, $m);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die("Query cannot be peapared- insert");
    }

    $q4 = "INSERT INTO `card_size`(`card_id`, `size_id`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($con, $q4)) {
        foreach ($size as $s) {
            mysqli_stmt_bind_param($stmt, "ii", $card_id, $s);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $flag = 0;
        die("Query cannot be peapared- insert");
    }

    if ($flag) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['edit_card'])) {
    $brand = filteration(json_decode($_POST['brand']));
    $size = filteration(json_decode($_POST['size']));
    $material = filteration(json_decode($_POST['material']));
    $frm_data = filteration($_POST);
    $flag = 0;


    $q = "UPDATE `card` SET `name`=?,`quantity`=?,`price`=?,`description`=? WHERE `id`=?";
    $values = [$frm_data['edit_name'], $frm_data['edit_quantity'], $frm_data['edit_price'], $frm_data['edit_description'], $frm_data['edit_id']];

    if ($res = update($q, $values, 'siisi')) {
        $flag = 1;
    }

    $del_brand = deletes("DELETE FROM `card_brand` WHERE `card_id` = ?", [$frm_data['edit_id']], 'i');
    $del_size = deletes("DELETE FROM `card_size` WHERE `card_id` = ?", [$frm_data['edit_id']], 'i');
    $del_material = deletes("DELETE FROM `card_material` WHERE `card_id` = ?", [$frm_data['edit_id']], 'i');


    if (!($del_brand&&$del_size)&&$del_material) {
        $flag= 0;
    }


                    $q2 = "INSERT INTO `card_brand`(`card_id`, `brand_id`) VALUES (?,?)";

                    if ($stmt = mysqli_prepare($con, $q2)) {
                        foreach ($brand as $b) {
                            mysqli_stmt_bind_param($stmt, "ii", $frm_data['edit_id'], $b);
                            mysqli_stmt_execute($stmt);
                        }
                        mysqli_stmt_close($stmt);
                        $flag = 1;
                    } else {
                        $flag = 0;
                        die("Query cannot be peapared- insert");
                    }

                    $q3 = "INSERT INTO `card_material`(`card_id`, `material_id`) VALUES (?,?)";

                    if ($stmt = mysqli_prepare($con, $q3)) {
                        foreach ($material as $m) {
                            mysqli_stmt_bind_param($stmt, "ii",$frm_data['edit_id'], $m);
                            mysqli_stmt_execute($stmt);
                        }
                        mysqli_stmt_close($stmt);
                        $flag = 1;
                    } else {
                        $flag = 0;
                        die("Query cannot be peapared- insert");
                    }

                    $q4 = "INSERT INTO `card_size`(`card_id`, `size_id`) VALUES (?,?)";

                    if ($stmt = mysqli_prepare($con, $q4)) {
                        foreach ($size as $s) {
                            mysqli_stmt_bind_param($stmt, "ii", $frm_data['edit_id'], $s);
                            mysqli_stmt_execute($stmt);
                        }
                        mysqli_stmt_close($stmt);
                        $flag = 1;
                    } else {
                        $flag = 0;
                        die("Query cannot be peapared- insert");
                    }

    if ($flag) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['get_all_cards'])) {
    $res = selectAll('card');
    $data = "";
    $i = 1;
    while ($row = mysqli_fetch_assoc($res)) {

        if ($row["status"] == 1) {
            $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-sm btn-dark shadow-none'>Active</button>";
        } else {
            $status = "<button onclick='toggle_status($row[id],1)' class='btn btn-sm btn-warning shadow-none'>InActive</button>";
        }

        $data .= "
                <tr>
                <td>$i</td>
                <td>$row[name]</td>
                <td>₹ $row[price]</td>
                <td>$row[quantity]</td>
                <td>$status</td>
                <td>
                <button type='button' onclick='edit_details($row[id])' class='btn btn-dark shadow-none btn-sm' data-bs-toggle='modal' data-bs-target='#card-edit-s'>
                <i class='bi bi-pencil-fill'></i>
                </button>
                </td>
                </tr>
                ";
        $i++;
    }
    echo $data;
}

if (isset($_POST['get_card'])) {
    $frm_data = filteration($_POST);

    $res1 = select("SELECT * FROM `card` WHERE `id`=?", [$frm_data["get_card"]], "i");
    $res2 = select("SELECT * FROM `card_brand` WHERE `card_id`=?", [$frm_data["get_card"]], "i");
    $res3 = select("SELECT * FROM `card_size` WHERE `card_id`=?", [$frm_data["get_card"]], "i");
    $res4 = select("SELECT * FROM `card_material` WHERE `card_id`=?", [$frm_data["get_card"]], "i");

    $card_data = mysqli_fetch_assoc($res1);
    $brand = [];
    $size = [];
    $material = [];

    if (mysqli_num_rows($res2) > 0) {
        while ($row = mysqli_fetch_assoc($res2)) {
            array_push($brand, $row['brand_id']);
        }
    }

    if (mysqli_num_rows($res3) > 0) {
        while ($row = mysqli_fetch_assoc($res3)) {
            array_push($size, $row['size_id']);
        }
    }

    if (mysqli_num_rows($res4) > 0) {
        while ($row = mysqli_fetch_assoc($res4)) {
            array_push($material, $row['material_id']);
        }
    }

    $data = ["card_data" => $card_data, "brand" => $brand, "size" => $size, "material" => $material];
    $data = json_encode($data);

    echo $data;
}

if (isset($_POST['toggle_status'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `card` SET `status`=? WHERE `id`=?";
    $values = [$frm_data['value'], $frm_data['toggle_status']];
    if (update($q, $values, "ii")) {
        echo 1;
    } else {
        echo 0;
    }
}

if (isset($_POST['rem_brand'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_brand']];
    $q = "DELETE FROM `brand` WHERE `id`=?";
    $res = deletes($q, $values, 'i');
    echo $res;
}
