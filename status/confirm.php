<?php

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRPO</title>
    <style>
        body {
            background-image: url('../chris-brignola-X2CxUXFqKcM-unsplash.jpg');
            background-size: cover;
        }
    </style>
</head>
<body>
<form action="../templates/teachers/table_teachers.php" method="post" style="margin-left: auto;
            margin-right: auto; width: 22em;
    margin-top: 23%;">
    <label>
        <input style="display: none" name="user"
               id="user"
               type="text"
               value="root">
    </label>
    <label>
        <input style="display: none" name="password"
               id="password"
               type="password"
               value="root">
    </label>
    <button type="submit"
            id="sub"
            class="elementor-size-md elementor-button"
            name="wp-submit" style="
            cursor: pointer;
    line-height: 1;
    background-color: #4abb57;
    font-size: 15px;
    padding: 12px 24px;
    border-radius: 3px;
    color: #fff;
    fill: #fff;
    text-align: center;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;">
        <span class="elementor-button-text" style="text-transform: uppercase">Операция успешно выполнена!</span>
    </button>
</form>
</body>
</html>
