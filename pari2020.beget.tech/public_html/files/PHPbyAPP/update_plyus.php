<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>


<?php

$id='248029072';//166139160

    $message = urldecode($_POST['message']);
    
    require_once '../connect/.htconnect';
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT * FROM `plyus` ORDER BY `id` ASC";
    $result_1 = mysqli_query($link, $query);
    
    while($res = mysqli_fetch_assoc($result_1))
    {
        $messages .= datas($res['data'])."<br>".$res['id']." ".$res['name']." ".$res['status']."<br><br>";
    }

    echo $messages;
    function datas ($dat)
    {
        $data = substr($dat, 10, 15);
        $chas = substr($data, 0, 3)+2;
        $min = substr($data, 6, 6);
        $data = $chas.$min;
        return $data;
    }

    

    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
        'user_id' => $id,    // Кому отправляем
        'message' => $messages,   // Что отправляем
        'access_token' => 'c2f8df403b6c7b3e648bd1234b492234c971cb8a19c4ffe9611fec5348fea6c281043de5f385a8453892c',  // access_token можно вбить хардкодом, если работа будет идти из под одного юзера
        'v' => '5.37',
    );

    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($params)
        )
    )));

    if($result)
    {
        $query_1 = "UPDATE `presence` SET `status` = ' ' ";
        mysqli_query($link ,$query_1);
        mysqli_close($link);
    }


?>
</body>
</html>
















