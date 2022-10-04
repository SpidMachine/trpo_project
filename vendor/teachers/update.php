<?php

require_once "../../connect.php";

$insert_data_FIO = $_POST['insert_data_FIO'];
$insert_data_position = $_POST['insert_data_position'];
$insert_data_speciality = $_POST['insert_data_speciality'];
$insert_data_category = $_POST['insert_data_category'];
$insert_data_experience = $_POST['insert_data_experience'];
$id = $_POST['id'];

if (empty($insert_data_FIO)) {
    $insert_data_FIO = mysqli_query($link,"UPDATE `teachers` SET `FIO` = '<blank>' WHERE `teachers`.`id` = '$id'");
} if (empty($insert_data_position)) {
    $insert_data_position = mysqli_query($link,"UPDATE `teachers` SET `position` = '<blank>' WHERE `teachers`.`id` = '$id'");
} if (empty($insert_data_speciality)) {
    $insert_data_speciality = mysqli_query($link,"UPDATE `teachers` SET `speciality` = '<blank>' WHERE `teachers`.`id` = '$id'");
} if (empty($insert_data_category)) {
    $insert_data_category = mysqli_query($link,"UPDATE `teachers` SET `category` = '<blank>' WHERE `teachers`.`id` = '$id'");
} if (empty($insert_data_experience)) {
    $insert_data_experience = mysqli_query($link,"UPDATE `teachers` SET `experience` = '<blank>' WHERE `teachers`.`id` = '$id'");
}

if (!empty($_FILES['file'])) {
    $file = $_FILES['file'];
    $name = $file['name'];
    $pathFile = __DIR__ ."../../../images/".$name;
    move_uploaded_file($file['tmp_name'], $pathFile);

    mysqli_query($link, "UPDATE `teachers` SET `FIO` = '$insert_data_FIO', `position` = '$insert_data_position', `speciality` = '$insert_data_speciality', `category` = '$insert_data_category', `experience` = '$insert_data_experience', `path_image` = '$name' WHERE `teachers`.`id` = '$id'");

}


header("Location: ../../status/confirm.php");