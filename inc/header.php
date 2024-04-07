<?php
require("admin/inc/essentials.php");
require("admin/inc/db_config.php");

$contact_q="SELECT * FROM `contact` WHERE `Sr.no`=?";
$values=[1];
$contact_r=mysqli_fetch_assoc(select($contact_q,$values,'i'));


$settings_q="SELECT * FROM `settings` WHERE `Sr.no`=?";
$values=[1];
$settings_r=mysqli_fetch_assoc(select($settings_q,$values,'i'));

