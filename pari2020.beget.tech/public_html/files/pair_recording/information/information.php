<?php require_once '../../security/security.php' ?>
<?php require_once '../logout/logout.php' ?>
<?php require_once '../../header/hosts.php'?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href='../../../css/styles.css'>

	<style>
	    input
	    {
	        text-align: center;
	        font-size: 100%;
	        width: 100%
	    }
	    .tops 
	    {
	        margin-top: 4%;
	        font-size: 150%;
	        width: 100%
	    }
	</style>
	<title>Справочник</title>
</head>
<body>
    
<table class="tops">
    <th style="width: 4%;">№</th>
    <th style="width: 33%;">Имя</th>
    <th style="width: 33%;">дата</th>
    <th style="width: 33%;">Номер телефона</th>
    <th colspan="2" style="width: 20%;">Действие</th>
<?php
        echo '
            <form method="post">
                <p><select size="1" name="den" onchange="this.form.submit()" id="vibor">
                <option selected disabled>-Справочник-</option>
                <option value="1" name="den" id="pon">Понедельник</option>
                <option value="2" name="den">Вторник</option>
                <option value="3" name="den">Среда</option>
                <option value="4" name="den">Четверг</option>
                <option value="5" name="den">Пятница</option>
                <option value="6" name="den">Суббота</option>
                <option value="8" name="den">-Версия мобильного приложения-</option>
                </select></p>
            </form>  ';
        
    require_once '../../security/foo_dehesh.php';
    require_once '../../connect/.htconnect';
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT * FROM `information` ORDER BY `id` ASC";
    $result = mysqli_query ($link, $query);
    
    while($row = mysqli_fetch_assoc($result))
    {   
        echo"
        <form method='post' action='/files/pair_recording/information/update.php'>
        <input type='hidden' name='key_id'    value='".$row[key_id]."'>
            <tr align=center>
                <td><input type='text' name='id'    value='".$row[id]."'></td>
                <td><input type='text' name='name'  value='".$row[name]."'></td>
                <td><input type='text' name='data'  value='".$row[data]."'></td>
                <td><input type='text' name='phone' value='".foo($row[phone])."'></td>
                <td><input type='submit' name='update' value='Изменить' align='center'></td>
                <td><input type='submit' name='delete' value='Удалить' align='center'></td>
            </tr>
        </form>
        ";
    }
    echo"
    <form method='post' action='../update.php'>
        <td align='center'><input type='text'   name='id'    placeholder='id'></td>
        <td align='center'><input type='text'   name='name'  placeholder='Отчество Имя'></td>
        <td align='center'><input type='text'   name='data'  placeholder='Дата рождения'></td>
        <td align='center'><input type='text'   name='phone' placeholder='Телефон'></td>
        <td colspan='2' align='center'><input type='submit' name='insert' value='+' ></td>
    </form>
    ";
    
    
?>
</table>




<?php
if(isset($_POST[den]) == 1 || isset($_POST[den]) == 2|| isset($_POST[den]) == 3 || isset($_POST[den]) == 4
|| isset($_POST[den]) == 5 || isset($_POST[den]) == 6) echo "<script>location.href = '../update/den.php?den=$_POST[den]';</script>";
if(isset($_POST[den]) == 8) echo "<script>location.href = '../update_app/update_app.php?den=$_POST[den]';</script>";
?>



</body>
</html>