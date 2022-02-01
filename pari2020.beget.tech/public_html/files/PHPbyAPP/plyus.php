<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>
    
    <form method="post">
        <input type="text" name="message" placeholder="id">
        <input type="submit">
    </form>
    
    
<?php
 
if (isset($_POST['message'])) 
 {
    $message = urldecode($_POST['message']);
    
    if ($message != 0){
        require_once '../connect/.htconnect';
        $link = mysqli_connect($host, $user, $password, $database);
        $quer_1 = "UPDATE `presence` SET `status` = '+' where `id` = '".$message."' ";
        mysqli_query($link, $quer_1);
        $messages=$name[$ids].$message." +";
        mysqli_close($link);
    }
    
}

?>
</body>
</html>