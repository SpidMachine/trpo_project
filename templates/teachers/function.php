<link rel="stylesheet" href="../../styles/mainStyle.css">
<?php
session_start();

require_once "../../connect.php";

$insert_data_FIO = $_POST['insert_data_FIO'];
$insert_data_position = $_POST['insert_data_position'];
$insert_data_speciality = $_POST['insert_data_speciality'];
$insert_data_category = $_POST['insert_data_category'];
$insert_data_experience = $_POST['insert_data_experience'];
$insert_data_login = $_POST['insert_data_login'];
$insert_data_password = $_POST['insert_data_password'];

if ($insert_data_FIO == null || $insert_data_position == null) {
    header("Location: http://trpo/status/canceled.php");
} else {
    mysqli_query($link, "INSERT INTO `teachers` (`FIO`, `position`, `speciality`, `category`, `experience`, `login`, `password`) VALUES ('$insert_data_FIO', '$insert_data_position', '$insert_data_speciality', '$insert_data_category', '$insert_data_experience', '$insert_data_login', '$insert_data_password')");
    header("Location: http://trpo/status/confirm.php");
}



