<?php
session_start();
require_once "connect.php";

$login = filter_var(trim($_POST['user']));
$password = filter_var(trim($_POST['password']));

$result = $link->query("SELECT * FROM `users` WHERE `Login` = '$login' AND `Password` = '$password'");
$user = $result->fetch_assoc();

$user_access = $link->query("SELECT * FROM `teachers` WHERE `login` = '$login' AND `password` = '$password'");
$user_access_arr = $user_access->fetch_assoc();

if ($user['Login'] == $login && $user['Password'] == $password) {
    $sql = $link->query("SELECT * FROM `teachers`");
} else if ($user_access_arr['login'] == $login && $user_access_arr['password'] == $password) {
    $userID = $user_access_arr['id'];
    $_SESSION['userid'] = $userID;
    header("Location: /templates/userInfo/user_info.php?id='$userID'");
} else {
    $_SESSION['message'] = "Неверный логин или пароль!";
    header("Location: http://trpo/mainIndex.php");
}

setcookie('user', $user['Login'], time() + 60, "/");

$link->close();
?>