<html>
    <head>
        <meta charset="utf-8">
        <title>Сохранение</title>
    </head>    
<body>    

<?php
if(isset($_POST['key_id']) && isset($_POST['update']))
{
    require_once '../../connect/.htconnect';
    require_once './hesh.php';
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $data = $_POST['data'];
    $key_id = $_POST['key_id'];
    $phone = foo($_POST['phone']);
    
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "UPDATE `information` SET `name` = '".$name."', `data` = '".$data."', `phone` = '".$phone."', `id` = '".$id."' where `key_id`='".$key_id."' ";
    $result = mysqli_query($link, $query);
    if($result == 'true') 
    {
        echo "Операция прошла успешно";
        echo "<script>location.href='./information.php/'</script>";
    } 
    else 
    {
        echo "Что то пошло не так";      
    }  
    mysqli_close($link);
}

if(isset($_POST['id']) && isset($_POST['delete']))
{

    require_once '../../connect/.htconnect';
    
    $id = $_POST['id'];
    
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "DELETE FROM `information` where `id`='".$id."' ";
    $result = mysqli_query($link, $query);
    if($result == 'true') 
    {
        echo "Операция прошла успешно
        <script>location.href = './information.php/';</script>";
    } 
    else 
    {
        echo "Что то пошло не так";      
    }  
    mysqli_close($link);
}

?>


<?php

if(isset($_POST['id']) && isset($_POST['insert']))
{

    require_once '../../connect/.htconnect';
    require_once './hesh.php';
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $data = $_POST['data'];
    $phone = foo($_POST['phone']);
    
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "INSERT INTO `information` (`id`, `name`, `data`, `phone`) VALUES ('".$id."', '".$name."', '".$data."', '".$phone."') ";
    $result = mysqli_query($link, $query);
    if($result == 'true') 
    {
        echo "Операция прошла успешно
            <script>location.href = './information.php/';</script>";
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