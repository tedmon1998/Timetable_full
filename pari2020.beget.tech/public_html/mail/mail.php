<?php
header("Content-type: text/html; charset=UTF-8");
?>
<html>
<!-- <body>
    
<?php
//Load Composer's autoloader
require_once "../lib/PHPMailer/src/PHPMailer.php";
require_once "../lib/PHPMailer/src/SMTP.php";
require_once "../lib/PHPMailer/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_GET['key']) && isset($_GET['mail'])) {
    function clear_data($val) {
        $val = trim($val);
        $val = stripslashes($val);
        $val = htmlspecialchars($val);
        return $val;
    }
    
    $to = clear_data($_GET['mail']);
    $from = 'support@surgusa.ru';
    
    $key = $_GET['key'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();
    
    $mail->isSMTP();
    $mail->Host       = "smtp.beget.com";
    $mail->SMTPAuth   = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port       = "2525";
    $mail->Username   = $from;
    $mail->Password   = 'S648178!';
    /*$mail->Username   = "edmon.tunyan.2015@mail.ru";
    $mail->Password   = "m648178!";*/
    
    $mail->Subject = 'BIO: Проверочный код для регистрации';
    $mail->setFrom($from);
    $mail->isHTML(true);
    $mail->Body = "
    <html>
    
    <head>
    </head>
    
    <body style='
        display: flex;
        /* justify-content: center; */
        /* align-items: flex-start; */
        margin: 0;
        left: 0;
        top: 0;
        width: 100%;'>
        <div class='wrapper' style=' width: 600px; height: 280px; background: #6c6a69; margin: 20px auto;'>
            <div class='container' style='margin: 0px; padding: 0px 20px;'>
                <div class='header' style='height: 100px; display: flex;
                justify-content: space-between; align-items: center;'>
                    <div class='header__icon'>
                        <img src='http://pari2020.beget.tech/mail/bio.png' alt='bio' class='header__img'
                            style='height: 5vh; object-fit: contain;'>
                    </div>
                    <div class='header__text'>
                        <h5 style='color: #528743; text-transform: uppercase;'>приложение будущего</h5>
                    </div>
                </div>
                <div class='content' style='background: #363535;
                padding: 20px; display: flex; flex-direction: column; justify-content: center;
                    align-items: center; color: #d1d1d1;'>
                    <div class='content__title'>
                        <h3 style='margin: 7px 0;'>Приветствуем вас!</h3>
                    </div>
                    <div class='content__text'>
                        <h4 style='margin: 7px 0;'>ваш код авторизации:</h4>
                    </div>
                    <div class='content__key'>
                        <h2 style='margin: 7px 0;
                    text-shadow: #a31313 1.5px 1px;'>$key</h2>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>
    ";
    $mail->addAddress($to);
    $mail->CharSet       = 'UTF-8';
    
    if($mail->Send()) echo true;
    else echo false;
    $mail->smtpClose();
}
?>

</body> -->
</html><!--  -->