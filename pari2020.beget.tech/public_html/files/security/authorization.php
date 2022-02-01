<?php
session_start();

if (isset($_SESSION['security'])) {
    require_once './level.php';
    foo_level();
}

?>

<html lang="ru">

<head>
    <!-- кодировка сайта -->
    <meta charset="UTF-8">
</head>

<body>

    <?php
    function transformation($str)
    {
        function processing($str)
        {
            if (mb_strlen($str[0]) == 3) {
                $text = $str[0];
                $group = $str[1];
                if (mb_strlen($group) > 5) $group = preg_replace('~\D+~', '', $group);
            } else {
                $text = $str[1];
                $group = $str[0];
                if (mb_strlen($group) > 5) $group = preg_replace('~\D+~', '', $group);
            }
            return $group.'_'.$text;
        }
        if (stristr($str, " ")) $str = explode(" ", $str);
        elseif (stristr($str, "_"))  $str = explode("_", $str);
        elseif (stristr($str, "-"))  $str = explode("-", $str);

        if (count($str) == 2) $proc_login = processing($str);
        else {
            if (mb_strlen($str[1]) == 2) {
                $temp[0] = $str[0] . $str[1];
                $temp[1] = $str[2];
                $proc_login = processing($temp);
            } elseif (mb_strlen($str[2]) == 2) {
                $temp[0] = $str[0];
                $temp[1] = $str[1] . $str[2];
                $proc_login = processing($temp);
            } else {
                echo "<script>alert('Логин введён в неверном формате');</script>";
            }
        }
        return $proc_login;
    }
    ?>

    <?php

    // если получен логин и пароль
    if (isset($_POST["login"]) && isset($_POST["password"])) {

        $login = htmlentities($_POST["login"]);
        $login = transformation($login);
        $pass = htmlentities($_POST["password"]);
        // подключаемся к БД
        require_once('../connect/.htconnect');
        $link = mysqli_connect($host, $user, $password, $database);
        // формируем запрос на получение 
        $query = ("SELECT * FROM `security` WHERE login='$login'");
        $result = mysqli_query($link, $query);
        $data = mysqli_fetch_assoc($result);
        // конец работы c БД
        mysqli_close($link);

        $hesh = $data['password'];

        if (password_verify($pass, $hesh)) {
            $level = $data['level'];
            $_SESSION['security'] = $level;
            $_SESSION['login'] = $login;
            require_once './level.php';
            foo_level();
        } else {
            echo "<script type='text/javascript'>alert('введен неверный логин или пароль');</script>";
            exit("<meta http-equiv='refresh' content='0; url = /index.php'>");
        }
    }

    ?>

</body>

</html>