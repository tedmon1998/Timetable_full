<?php require_once '../security/security.php' ?>
<?php require_once './logout/logout.php' ?>
<?php require_once '../header/hosts.php'?>
<html>
<head>
	<meta charset="utf-8">
	<title>Редактирование</title>
	
	<style type="text/css">
   TABLE {
    width: 300px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }

</style>
<script src="../../js/jquery-3.4.1.min.js"></script>
<script src="../../js/ctrl_i.js"></script>

</head>

<body>
    <form method="post">
        <p><select size="1" name="den" onchange="this.form.submit()" id="vibor">
        <option selected disabled>Выберите день недели</option>
        <option value="1">Понедельник</option>
        <option value="2">Вторник</option>
        <option value="3">Среда</option>
        <option value="4">Четверг</option>
        <option value="5">Пятница</option>
        <option value="6">Суббота</option>
        <option value="7">-Справочник-</option>
        <option value="8">-Версия мобильного приложения-</option>
        </select></p>
    </form>
    
<?php
if(isset($_POST["den"]) == 1 || isset($_POST["den"]) == 2|| isset($_POST["den"]) == 3 || isset($_POST["den"]) == 4
|| isset($_POST["den"]) == 5 || isset($_POST["den"]) == 6) 
{
    $den = $_POST["den"];
    echo "<script>location.href = './update/den.php?den=$den';</script>";
}
if(isset($_POST["den"]) == 7)
{
    $den = $_POST["den"];
    echo "<script>location.href = './information/information.php?den=$den';</script>";
}
if(isset($_POST["den"]) == 8)
{
    $den = $_POST["den"];
    echo "<script>location.href = './update_app/update_app.php?den=$den';</script>";
}
?>
    
<?php 
require_once ''.$hosts.'/js/help.php' ?>
</body>
</html>