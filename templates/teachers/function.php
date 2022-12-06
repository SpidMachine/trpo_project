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
$insert_data_zakrep_disciplina = $_POST['insert_zakrep_disciplina'];

if ($insert_data_FIO == null || $insert_data_position == null || $insert_data_speciality == null || $insert_data_category == null || $insert_data_experience == null || $insert_data_login == null || $insert_data_password == null) {
    header("Location: http://trpo/status/canceled.php");
} else {
    if (!empty($_FILES['file'])) {
        $file = $_FILES['file'];
        $name = $file['name'];
        $pathFile = __DIR__ ."../../../images/".$name;

        $updated_data = mysqli_query($link, "INSERT INTO `teachers` (`FIO`, `position`, `speciality`, `category`, `experience`, `login`, `password`, `path_image`, `zakrep_disciplina`) VALUES ('$insert_data_FIO', '$insert_data_position', '$insert_data_speciality', '$insert_data_category', '$insert_data_experience', '$insert_data_login', '$insert_data_password', '$name', '$insert_data_zakrep_disciplina')");

    } else {
        $pathFile = __DIR__."../../../images/56842259.png";
        header("Location: http://trpo/status/canceled.php");
    }

    header("Location: http://trpo/status/confirm.php");
}



