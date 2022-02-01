<?php require_once './security.php' ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Шифровка</title>
        <style>
            .w
            {
                width: 100%;
            }
           .right
           {
               top: 1%;
               right: 1%;
               position: absolute;
           }
        </style>
    </head>
<body>
<form method="post">
<input type="text" name="hesh" placeholder="текст для шифровки">
</form>

<a href="?log=logout" class="right"><button>Выход</button></a>

<?php
if(isset($_POST['hesh']))
{
    
    $hesh = $_POST['hesh'];
    
    $length = strlen($hesh);
    
    $hesh = preg_replace('/[^0-9+]/','',$hesh);
    for ($i=1; $i<$length*3; $i+=3)
    {
        $hesh1 .= $hesh{$i};
    }
    
    echo "<br>";
    echo "<input type='text' class='w' value='$hesh1'>";

}

?>
</body>
</html>