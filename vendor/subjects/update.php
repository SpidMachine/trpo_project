<?php

require_once "../../connect.php";

$insert_data_subject_name = $_POST['insert_data_subject_name'];
$insert_data_subject_speciality = $_POST['insert_data_subject_speciality'];
$insert_data_subject_hours = $_POST['insert_data_subject_hours'];
$id = $_POST['id'];

if (empty($insert_data_subject_name)) {
    $insert_data_subject_name = mysqli_query($link, "UPDATE `disciplina` SET `name` = '000' WHERE `disciplina`.`id` = '$id'");
}
if (empty($insert_data_subject_speciality)) {
    $insert_data_subject_speciality = mysqli_query($link, "UPDATE `disciplina` SET `speciality` = '000' WHERE `disciplina`.`id` = '$id'");
}
if (empty($insert_data_subject_hours)) {
    $insert_data_subject_hours = mysqli_query($link, "UPDATE `disciplina` SET `hours` = '000' WHERE `disciplina`.`id` = '$id'");
}

mysqli_query($link, "UPDATE `disciplina` SET `name` = '$insert_data_subject_name', `speciality` = '$insert_data_subject_speciality', `hours` = '$insert_data_subject_hours' WHERE `disciplina`.`id` = '$id'");


header("Location: ../../status/confirm.php");