<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'arena';


$con = mysqli_connect($hname, $uname, $pass, $db);
if (!$con) {
    die('cannot connect to database ' . mysqli_connect_error());
}

function filteration($data)
{
    foreach ($data as $key => $value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value= htmlspecialchars($value);
         $data[$key]=$value;
    }
    return $data;
}

function selectAll($table)
{
    $con = $GLOBALS['con'];
    $res = mysqli_query($con,"SELECT * FROM $table");
    return $res;
}

function select($sql, $values, $datatypes)
{

    $con = $GLOBALS['con'];
    if ($stmt = $con->prepare($sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if ($stmt->execute()) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die('Query cannot be executed - Select');
        }
    } else {
        die('Query cannot be prepared - Select');
    }
}

function update($sql, $values, $datatypes)
{

    $con = $GLOBALS['con'];
    if ($stmt = $con->prepare($sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if ($stmt->execute()) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die('Query cannot be executed - Update');
        }
    } else {
        die('Query cannot be prepared - Update');
    }
}

function deletes($sql, $values, $datatypes)
{

    $con = $GLOBALS['con'];
    if ($stmt = $con->prepare($sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if ($stmt->execute()) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die('Query cannot be executed - Delete');
        }
    } else {
        die('Query cannot be prepared - Delete');
    }
}
function insert($sql, $values, $datatypes)
{

    $con = $GLOBALS['con'];
    if ($stmt = $con->prepare($sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if ($stmt->execute()) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die('Query cannot be executed - Insert');
        }
    } else {
        die('Query cannot be prepared - Insert');
    }
}