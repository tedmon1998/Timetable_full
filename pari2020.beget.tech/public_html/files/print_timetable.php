<?php
function print_timetable($even_odd=0)
{
    // начало работы c БД
    $session = $_SESSION['login'];
    require_once('connect/.htconnect');
    $link = mysqli_connect($host, $user, $password, $database);
    $query = ("SELECT `group`, `division_2`, `division_3` FROM `student` 
    WHERE `login` = '".$session."'; ");
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
    // конец работы c БД
    mysqli_close($link);
    echo "
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#pon').load('dni/days/pon.php/?group=".$data["group"]."&division_2=".$data["division_2"]."&division_3=".$data["division_3"]."&even_odd=".$even_odd."');
            $('#vtor').load('dni/days/vtor.php/?group=".$data["group"]."&division_2=".$data["division_2"]."&division_3=".$data["division_3"]."&even_odd=".$even_odd."');
            $('#sred').load('dni/days/sred.php/?group=".$data["group"]."&division_2=".$data["division_2"]."&division_3=".$data["division_3"]."&even_odd=".$even_odd."');
            $('#chet').load('dni/days/chet.php/?group=".$data["group"]."&division_2=".$data["division_2"]."&division_3=".$data["division_3"]."&even_odd=".$even_odd."');
            $('#pyat').load('dni/days/pyat.php/?group=".$data["group"]."&division_2=".$data["division_2"]."&division_3=".$data["division_3"]."&even_odd=".$even_odd."');
            $('#sub').load('dni/days/sub.php/?group=".$data["group"]."&division_2=".$data["division_2"]."&division_3=".$data["division_3"]."&even_odd=".$even_odd."');
        });
    </script>
    ";
}
?>