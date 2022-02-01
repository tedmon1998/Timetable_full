<?php
mb_internal_encoding("UTF-8");
//Строка для подтверждения адреса сервера из настроек Callback API
$confirmation_token = '5bb3379c';

//Ключ доступа сообщества
$token = 'c2f8df403b6c7b3e648bd1234b492234c971cb8a19c4ffe9611fec5348fea6c281043de5f385a8453892c';

//Получаем и декодируем уведомление
$data = json_decode(file_get_contents('php://input'));

//Проверяем, что находится в поле "type"
switch ($data->type) {
//Если это уведомление для подтверждения адреса...
case 'confirmation':
//...отправляем строку для подтверждения
echo $confirmation_token;
break;

//Если это уведомление о новом сообщении...
case 'message_new':

//получем текст сообщения
$user_text = $data->object->message->text;



    for($i=0; $i<31; $i++)
    {
        $nomer_1[$i] = $i."+";
        $nomer_2[$i] = "+".$i;
        
        if( !strcmp($nomer_1[$i], $user_text) || !strcmp($nomer_2[$i], $user_text) ) 
        {
            $url = 'http://pari2020.beget.tech/files/PHPbyAPP/plyus.php';
            $params = array(
                'message' => $user_text, // в http://pari2020.beget.tech/files/PHPbyAPP/plyus.php это будет $_POST['message'] == '24+'
            );
            $result = file_get_contents($url, false, stream_context_create(array(
                'http' => array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'content' => http_build_query($params)
                )
            )));
        }
    }





//Возвращаем "ok" серверу Callback API

echo('ok');

break;

}
?>