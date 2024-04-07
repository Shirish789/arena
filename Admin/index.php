<?php
require("inc/essentials.php");
require("inc/db_config.php");
    
    session_start();
    if (isset($_SESSION["admin_login"]) && $_SESSION["admin_login"] == true) {
       redirect("dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena_admin</title>
    <?php require("inc/links.php"); ?>
</head>
<style>
    div.login_form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }
</style>

<body>

    <div class="login_form text-center rounded bg-white shadow  overflow-none">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">

                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin email">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="password">
                </div>
                <button name="login" class="btn btn-dark shadow-none">LOGIN</button>

            </div>
        </form>
    </div>
    <?php
    if (isset($_POST["login"])) {
        $frm_data = filteration($_POST);

        $query = "SELECT * FROM  `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data["admin_name"], $frm_data["admin_pass"]];

        $res = select($query, $values, "ss");
        if (mysqli_num_rows($res) > 0) {

            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['admin_login'] = true;
            $_SESSION['admin_id'] = $row['sr.no'];
            redirect('dashboard.php');
        } else {
            alert("error", "Login failed - Invalid Credentials");
        }
    }

    ?>

    <?php require("inc/script.php"); ?>
</body>

</html>