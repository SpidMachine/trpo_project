<?php

require_once "../../connect.php";

$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `teachers` WHERE `teachers`.`id` = '$id'");

header("Location: ../../status/confirm.php");