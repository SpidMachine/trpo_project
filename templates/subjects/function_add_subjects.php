<?php
session_start();

require_once "../../connect.php";

$insert_data_subject_name = $_POST['insert_data_subject_name'];
$insert_data_subject_speciality = $_POST['insert_data_subject_speciality'];
$insert_data_subject_hours = $_POST['insert_data_subject_hours'];

if ($insert_data_subject_name == null || $insert_data_subject_speciality == null || $insert_data_subject_hours == null) {
    header("Location: http://trpo/status_disciplina/canceled.php");
} else {
    $updated_data = mysqli_query($link, "INSERT INTO `disciplina` (`name`, `speciality`, `hours`) VALUES ('$insert_data_subject_name', '$insert_data_subject_speciality', '$insert_data_subject_hours')");
    header("Location: http://trpo/status_disciplina/confirm.php");
}



