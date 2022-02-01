<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="1,./update_app.php?den=8/">
        <title>Версия мобильного приложения</title>
    </head>
    <body>
<?php

if(isset($_POST['status']))
{
    require_once '../../connect/.htconnect';
    $stat = $_POST['status'];
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "UPDATE `status_update` SET `status` = '".$stat."' WHERE `status_update`.`id` = 1;";
    $result = mysqli_query($link, $query);
    if($result == 'true') 
    {
        echo "Операция прошла успешно";
    } 
    else 
    {
        echo "Что то пошло не так";      
    }  
    mysqli_close($link);

}
?>
    </body>
</html>