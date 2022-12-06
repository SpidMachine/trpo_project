<?php

require_once "../../connect.php";

$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `disciplina` WHERE `disciplina`.`id` = '$id'");

header("Location: ../../status_disciplina/confirm.php");