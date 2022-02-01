<?php require_once './security.php' ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Расшифровка</title>
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
/*if(isset($_POST['hesh']))
{
    require_once ('./.hthesh');
    
    $hesh = $_POST['hesh'];
    $light = strlen($hesh);
        
    $hesh = preg_replace('/[^0-9+]/','',$hesh);
    for ($i=1; $i<$light*3; $i+=3)
    {
        $hesh1 .= $hesh{$i};
    }
    
    echo "<br>";
    echo "<input type='text' class='w' value='$hesh1'>";

}*/

require_once ('./.hthesh');
require_once ('../connect/.htconnect');

function foo($he)
{
    $hesh = $he;
    $light = strlen($hesh);
        
    $hesh = preg_replace('/[^0-9+]/','',$hesh);
    for ($i=1; $i<$light*3; $i+=3)
    {
        $hesh1 .= $hesh{$i};
    }
    
    echo "<br>";
    echo "<input type='text' class='w' value='$hesh1'>";
}


$link = mysqli_connect($host, $user, $password, $database);
$query = "SELECT * FROM `information` ORDER BY `id`";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row['phone'];
}

for($i=0; $i<31; $i++)
{
    foo($data[$i]);
}


?>
</body>
</html>