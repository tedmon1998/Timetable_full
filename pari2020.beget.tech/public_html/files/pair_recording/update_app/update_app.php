<?php require_once '../../security/security.php' ?>
<?php require_once '../logout/logout.php' ?>
<?php require_once '../../header/hosts.php'?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Версия мобильного приложения</title>
    </head>
    <body>
        <form method="post">
            <p><select size="1" name="den" onchange="this.form.submit()" id="vibor">
            <option selected disabled>-Версия мобильного приложения-</option>
            <option value="1" name="den" id="pon">Понедельник</option>
            <option value="2" name="den">Вторник</option>
            <option value="3" name="den">Среда</option>
            <option value="4" name="den">Четверг</option>
            <option value="5" name="den">Пятница</option>
            <option value="6" name="den">Суббота</option>
            <option value="7" name="den">-Справочник-</option>
            </select></p>
        </form>
        
<?php
if(isset($_GET['den']) == 8)
{
    require_once '../../connect/.htconnect';
    $link = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT * FROM `status_update` ORDER BY `id` ASC";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        $stat[] = $row["status"];
    }
    mysqli_close($link);
    echo "
    <form method='post' action='/files/pair_recording/update_app/update.php'>
        <input type='text' placeholder='Введите версию мобильного приложения' value='".$stat[0]."' name='status' style='width: 22%;'>
    </form>
    ";
}
?>
        

<?php
if(isset($_POST[den]) == 1 || isset($_POST[den]) == 2|| isset($_POST[den]) == 3 || isset($_POST[den]) == 4
|| isset($_POST[den]) == 5 || isset($_POST[den]) == 6) echo "<script>location.href = '../update/den.php?den=$_POST[den]';</script>";
if(isset($_POST[den]) == 8) echo "<script>location.href = '../update_app/update_app.php?den=$_POST[den]';</script>";
?>
    </body>
</html>