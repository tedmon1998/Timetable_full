<?php
session_start();
?>

<html lang="ru">
<head>
    <!-- кодировка сайта -->
    <meta charset="UTF-8">
</head>
<body>
<?php 
if(isset($_POST['surname']) && isset($_POST['name']) && isset($_POST['patronymic']) && 
isset($_POST['group']) && isset($_POST['pas_1']) && isset($_POST['pas_2']) && 
isset($_POST['email']) && isset($_POST['radio_2']) && isset($_POST['radio_3']))
{
    $surname = htmlentities($_POST['surname']);
    $name = htmlentities($_POST['name']);
    $patronymic = htmlentities($_POST['patronymic']);
    $group = htmlentities($_POST['group']);
    $pas_1 = htmlentities($_POST['pas_1']);
    $pas_2 = htmlentities($_POST['pas_2']);
    $email = htmlentities($_POST['email']);
    $radio_2 = htmlentities($_POST['radio_2']);
    $radio_3 = htmlentities($_POST['radio_3']);
    $login = $group."_".mb_strtolower($surname[0].$name[0].$patronymic[0]);
    $pass = password_hash($pas_1, PASSWORD_DEFAULT);

    if($pas_1 == $pas_2)
    {
        // подключаемся к БД
        require_once '../connect/.htconnect';
        $link = mysqli_connect($host, $user, $password, $database);
        // формируем запрос на получение 
        $query_1 = ("INSERT INTO `security` (`login`, `password`, `level`) VALUES ('".$login."', '".$pass."', '1')");
        $query_2 = ("INSERT INTO `student` (`login`, `surname`, `name`, `patronymic`, `group`, `division_2`, `division_3`, `email`) 
        VALUES ('".$login."', '".$surname."', '".$name."', '".$patronymic."', '".$group."', '".$radio_2."', '".$radio_3."', '".$email."')");
        $result_1 = mysqli_query($link, $query_1);
        $result_2 = mysqli_query($link, $query_2);
        
        $query_login = ("SELECT * FROM `security` WHERE login='$login'");
        $result_login = mysqli_query($link, $query);
        $data_login = mysqli_fetch_assoc($result_login);
        
        
        if($result_1 == 'true' && $result_2 == 'true')
        {
            // конце работы c БД
            mysqli_close($link);
            $level = $data_login['level'];
            $_SESSION['security'] = $level;
            $_SESSION['login'] = $login;
            require_once './level.php';
            foo_level();
        }
        else
        {
            // конце работы c БД
            mysqli_close($link);
            echo "<script type='text/javascript'>alert('что-то пошло не так');</script>";
            exit("<meta http-equiv='refresh' content='0; url = /index.php'>");
        }

        
    }
    else
    {
        echo "<script type='text/javascript'>alert('пароли не совпадают!');</script>";
        exit("<meta http-equiv='refresh' content='0; url = /index.php'>");
    }
}
else
{
    exit("<meta http-equiv='refresh' content='0; url = /index.php'>");
}

?>
</body>
</html>
