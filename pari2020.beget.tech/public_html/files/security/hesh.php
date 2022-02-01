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
    require_once ('./.hthesh');

    $hesh = $_POST['hesh'];
    
    $light = strlen($hesh);
        
    for($i=0; $i<$light; $i++)
    {
        $hesh1 .= $d{$i}.$hesh{$i}.$a{$i};
    }

    for($i=0; $i<$light*3; $i++)
    {
        for($t=0; $t<rand(0,3); $t++)
        {
            $num = rand(0,92);
            $sol_1 .= $sol{$num};
        }
        $hesh2 .= $hesh1{$i}.$sol_1;
        $sol_1=null;
    }
    
    
    echo "<br>";
    echo "<input type='text' class='w' value='".$hesh2."'>";


}

?>





</body>
</html>