<?php require_once '../../security/security.php' ?>
<?php require_once '../logout/logout.php' ?>
<?php require_once '../../header/hosts.php'?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href='/files/css/style_pair_recording.css'>
    <title>Редактирование понедельник</title>
    <style type="text/css">
   TABLE {
    width: 300px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
    .lox{
        disabled
    }
</style>

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/color_input.js"></script>
<script src="/js/ctrl_i.js"></script>

</head>
<body>

<?php
if(isset($_GET["den"]))
{
    $den = $_GET["den"];
    echo '
        <form method="get">
            <p><select size="1" name="den" onchange="this.form.submit()">';
         if($den == 1) echo '<option selected disabled>Понедельник</option>';
    else if($den == 2) echo '<option selected disabled>Вторник</option>';
    else if($den == 3) echo '<option selected disabled>Среда</option>';
    else if($den == 4) echo '<option selected disabled>Четверг</option>';
    else if($den == 5) echo '<option selected disabled>Пятница</option>';
    else if($den == 6) echo '<option selected disabled>Суббота</option>';
    else if($den == 7) echo "<script>location.href = '../information/information.php?den=$_GET[den]';</script>";
    else if($den == 8) echo "<script>location.href = '../update_app/update_app.php?den=$_GET[den]';</script>";
    else          echo '<option selected disabled>Выберите день недели</option>';
    echo '      <option value="1">Понедельник</option>';
    echo '      <option value="2">Вторник</option>';
    echo '      <option value="3">Среда</option>';
    echo '      <option value="4">Четверг</option>';
    echo '      <option value="5">Пятница</option>';
    echo '      <option value="6">Суббота</option>';
    echo '      <option value="7">-Справочник-</option>';
    echo '      <option value="8">-Версия мобильного приложения-</option>';
    echo '      </select></p>
        </form>  ';
    require_once '../../connect/.htconnect';
    require_once './or.php';
        
        $link = mysqli_connect($host, $user, $password, $database);
        $query = "SELECT * FROM `$or` ORDER BY `$or`.`id` ASC";
        $result = mysqli_query ($link, $query);
        
while($row = mysqli_fetch_array($result)){
    $divisions_arr[] = $row["divisions"];
    $n_k_arr[] = $row["n_k"];
    $k_n_arr[] = $row["k_n"];
    $n_p_arr[] = $row["n_p"];
    $aud_arr[] = $row["aud"];
    $url[] = $row["url"];
    $prepod_arr[] = $row["prepod"];
    }
            
        if($divisions_arr[0] > 0 && 15 > $divisions_arr[0])
        {
                echo'
                <form method="post" action="./update.php">
                <input type="hidden" name="den" value="'.$or.'">
                <input type="hidden" name="check" value="'.$divisions_arr[0].'">
                <input type="hidden" name="para" value="1">
                <table>
                   <tr>';
     if(mb_strlen($n_k_arr[0])!=0) echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[0].'" placeholder="начало"></td>';
else if(mb_strlen($n_k_arr[1])!=0 && mb_strlen($n_k_arr[0])==0) echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[1].'" placeholder="начало"></td>';
else if(mb_strlen($n_k_arr[2])!=0 && mb_strlen($n_k_arr[1])==0 && mb_strlen($n_k_arr[0])==0) 
                    echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[2].'" placeholder="начало"></td>';
                    echo'<td rowspan="3"><h3 align=center>1</h3></label></td>
                        <td><input type="text" name="n_p_1" id="n_p_1" value="'.$n_p_arr[0].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>2</h3></label></td>
                        <td><input type="text" name="n_p_2" id="n_p_2" value="'.$n_p_arr[1].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>3</h3></label></td>
                        <td><input type="text" name="n_p_3" id="n_p_3" value="'.$n_p_arr[2].'" placeholder="название предмета"></td>
                        <td rowspan="7"><div align="center"><button class="button_OK">ОК</button></div></td>
                   </tr>
                   <tr>
                        <td align="center"><select size="1" name="check" style="width: 100%;">
                        ';
                        if($divisions_arr[0] == 1) echo "<option selected disabled>[ ]</option>";
                        else if($divisions_arr[0] == 2) echo "<option selected disabled>[/]</option>";
                        else if($divisions_arr[0] == 3) echo "<option selected disabled>[ | | ]</option>";
                        else if($divisions_arr[0] == 4) echo "<option selected disabled>[ | ]</option>";
                        else if($divisions_arr[0] == 5) echo "<option selected disabled>[ |/]</option>";
                        else if($divisions_arr[0] == 6) echo "<option selected disabled>[/| ]</option>";
                        else if($divisions_arr[0] == 7) echo "<option selected disabled>[/|/]</option>";
                        else if($divisions_arr[0] == 8) echo "<option selected disabled>[/| | ]</option>";
                        else if($divisions_arr[0] == 9) echo "<option selected disabled>[ |/| ]</option>";
                        else if($divisions_arr[0] == 10) echo "<option selected disabled>[ | |/]</option>";
                        else if($divisions_arr[0] == 11) echo "<option selected disabled>[/|/| ]</option>";
                        else if($divisions_arr[0] == 12) echo "<option selected disabled>[ |/|/]</option>";
                        else if($divisions_arr[0] == 13) echo "<option selected disabled>[/| |/]</option>";
                        else if($divisions_arr[0] == 14) echo "<option selected disabled>[/|/|/]</option>";
                        else                echo "<option selected disabled>?</option>"; echo'
                        <option value="0">NULL</option><option value="1">[ ]</option><option value="2">[/]</option>
                        <option value="4">[ | ]</option><option value="5">[ |/]</option>
                        <option value="6">[/| ]</option><option value="7">[/|/]</option>
                        <option value="3">[ | | ]</option><option value="8">[/| | ]</option>
                        <option value="9">[ |/| ]</option><option value="10">[ | |/]</option>
                        <option value="12">[ |/|/]</option><option value="11">[/|/| ]</option>
                        <option value="13">[/| |/]</option><option value="14">[/|/|/]</option>
                        </select></td>
                        <td><input type="text" name="prepod_1" id="prepod_1" value="'.$prepod_arr[0].'" placeholder="препод"><br><br>
                        <input type="text" name="url_1" id="url_1" value="'.$url[0].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_2" id="prepod_2" value="'.$prepod_arr[1].'" placeholder="препод"><br><br>
                        <input type="text" name="url_2" id="url_2" value="'.$url[1].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_3" id="prepod_3" value="'.$prepod_arr[2].'" placeholder="препод"><br><br>
                        <input type="text" name="url_3" id="url_3" value="'.$url[2].'"                  placeholder="Ссылка"></td>
                   </tr>
                   <tr>';
if(mb_strlen($k_n_arr[0])!=0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[0].'" placeholder="начало"></td>';
if(mb_strlen($k_n_arr[1])!=0 && mb_strlen($k_n_arr[0])==0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[1].'" placeholder="начало"></td>';
if(mb_strlen($k_n_arr[2])!=0 && mb_strlen($k_n_arr[1])==0  && mb_strlen($k_n_arr[0])==0)
                   echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[2].'" placeholder="начало"></td>';
                   echo'<td><input type="text" name="aud_1" id="aud_1" value="'.$aud_arr[0].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_2" id="aud_2" value="'.$aud_arr[1].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_3" id="aud_3" value="'.$aud_arr[2].'" placeholder="ауд"></td>
                   </tr>
                   <tr><td colspan="7"><br></td></tr>
                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 
                   <tr>  
                        <td></td>
                        <td rowspan="3"><h3 align=center>1</h3></label></td>
                        <td><input type="text" name="n_p_4" id="n_p_4" value="'.$n_p_arr[3].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>2</h3></label></td>
                        <td><input type="text" name="n_p_5" id="n_p_5" value="'.$n_p_arr[4].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>3</h3></label></td>
                        <td><input type="text" name="n_p_6" id="n_p_6" value="'.$n_p_arr[5].'" placeholder="название предмета"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <!-- //////////////////////////////////////////////////////// --> 
                        <td><input type="text" name="prepod_4" id="prepod_4" value="'.$prepod_arr[3].'" placeholder="препод"><br><br>
                        <input type="text" name="url_4" id="url_4" value="'.$url[3].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_5" id="prepod_5" value="'.$prepod_arr[4].'" placeholder="препод"><br><br>
                        <input type="text" name="url_5" id="url_5" value="'.$url[4].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_6" id="prepod_6" value="'.$prepod_arr[5].'" placeholder="препод"><br><br>
                        <input type="text" name="url_6" id="url_6" value="'.$url[5].'"                  placeholder="Ссылка"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <td><input type="text" name="aud_4" id="aud_4" value="'.$aud_arr[3].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_5" id="aud_5" value="'.$aud_arr[4].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_6" id="aud_6" value="'.$aud_arr[5].'" placeholder="ауд"></td>
                   </tr>
                </table>
                </form>';
        }
        
        
        
        
        if($divisions_arr[6] > 0 && 15 > $divisions_arr[6])
        {
                echo'
                <form method="post" action="./update.php">
                <input type="hidden" name="den" value="'.$or.'">
                <input type="hidden" name="check" value="'.$divisions_arr[6].'">
                <input type="hidden" name="para" value="2">
                <table>
                   <tr>';
     if(mb_strlen($n_k_arr[6])!=0) echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[6].'" placeholder="начало"></td>';
else if(mb_strlen($n_k_arr[7])!=0 && mb_strlen($n_k_arr[6])==0) echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[7].'" placeholder="начало"></td>';
else if(mb_strlen($n_k_arr[8])!=0 && mb_strlen($n_k_arr[7])==0 && mb_strlen($n_k_arr[6])==0) 
                    echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[8].'" placeholder="начало"></td>';
                    echo'<td rowspan="3"><h3 align=center>1</h3></label></td>
                        <td><input type="text" name="n_p_1" id="n_p_2_1" value="'.$n_p_arr[6].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>2</h3></label></td>
                        <td><input type="text" name="n_p_2" id="n_p_2_2" value="'.$n_p_arr[7].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>3</h3></label></td>
                        <td><input type="text" name="n_p_3" id="n_p_2_3" value="'.$n_p_arr[8].'" placeholder="название предмета"></td>
                        <td rowspan="7"><div align="center"><button class="button_OK">ОК</button></div></td>
                   </tr>
                   <tr>
                        <td align="center"><select size="1" name="check" style="width: 100%;">
                        ';
                        if($divisions_arr[6] == 1) echo "<option selected disabled>[ ]</option>";
                        else if($divisions_arr[6] == 2) echo "<option selected disabled>[/]</option>";
                        else if($divisions_arr[6] == 3) echo "<option selected disabled>[ | | ]</option>";
                        else if($divisions_arr[6] == 4) echo "<option selected disabled>[ | ]</option>";
                        else if($divisions_arr[6] == 5) echo "<option selected disabled>[ |/]</option>";
                        else if($divisions_arr[6] == 6) echo "<option selected disabled>[/| ]</option>";
                        else if($divisions_arr[6] == 7) echo "<option selected disabled>[/|/]</option>";
                        else if($divisions_arr[6] == 8) echo "<option selected disabled>[/| | ]</option>";
                        else if($divisions_arr[6] == 9) echo "<option selected disabled>[ |/| ]</option>";
                        else if($divisions_arr[6] == 10) echo "<option selected disabled>[ | |/]</option>";
                        else if($divisions_arr[6] == 11) echo "<option selected disabled>[/|/| ]</option>";
                        else if($divisions_arr[6] == 12) echo "<option selected disabled>[ |/|/]</option>";
                        else if($divisions_arr[6] == 13) echo "<option selected disabled>[/| |/]</option>";
                        else if($divisions_arr[6] == 14) echo "<option selected disabled>[/|/|/]</option>";
                        else                echo "<option selected disabled>?</option>"; echo'
                        <option value="0">NULL</option><option value="1">[ ]</option><option value="2">[/]</option>
                        <option value="4">[ | ]</option><option value="5">[ |/]</option>
                        <option value="6">[/| ]</option><option value="7">[/|/]</option>
                        <option value="3">[ | | ]</option><option value="8">[/| | ]</option>
                        <option value="9">[ |/| ]</option><option value="10">[ | |/]</option>
                        <option value="12">[ |/|/]</option><option value="11">[/|/| ]</option>
                        <option value="13">[/| |/]</option><option value="14">[/|/|/]</option>
                        </select></td>
                        <td><input type="text" name="prepod_1" id="prepod_2_1" value="'.$prepod_arr[6].'" placeholder="препод"><br><br>
                        <input type="text" name="url_1" id="url_1" value="'.$url[6].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_2" id="prepod_2_2" value="'.$prepod_arr[7].'" placeholder="препод"><br><br>
                        <input type="text" name="url_2" id="url_2" value="'.$url[7].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_3" id="prepod_2_3" value="'.$prepod_arr[8].'" placeholder="препод"><br><br>
                        <input type="text" name="url_3" id="url_3" value="'.$url[8].'"                  placeholder="Ссылка"></td>
                   </tr>
                   <tr>';
if(mb_strlen($k_n_arr[6])!=0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[6].'" placeholder="начало"></td>';
if(mb_strlen($k_n_arr[7])!=0 && mb_strlen($k_n_arr[6])==0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[7].'" placeholder="начало"></td>';
if(mb_strlen($k_n_arr[8])!=0 && mb_strlen($k_n_arr[7])==0 && mb_strlen($k_n_arr[6])==0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[8].'" placeholder="начало"></td>';
                   echo'<td><input type="text" name="aud_1" id="aud_2_1" value="'.$aud_arr[6].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_2" id="aud_2_2" value="'.$aud_arr[7].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_3" id="aud_2_3" value="'.$aud_arr[8].'" placeholder="ауд"></td>
                   </tr>
                   <tr><td colspan="7"><br></td></tr>
                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 
                   <tr>  
                        <td></td>
                        <td rowspan="3"><h3 align=center>1</h3></label></td>
                        <td><input type="text" name="n_p_4" id="n_p_2_4" value="'.$n_p_arr[9].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>2</h3></label></td>
                        <td><input type="text" name="n_p_5" id="n_p_2_5" value="'.$n_p_arr[10].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>3</h3></label></td>
                        <td><input type="text" name="n_p_6" id="n_p_2_6" value="'.$n_p_arr[11].'" placeholder="название предмета"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <!-- //////////////////////////////////////////////////////// --> 
                        <td><input type="text" name="prepod_4" id="prepod_2_4" value="'.$prepod_arr[9].'" placeholder="препод"><br><br>
                        <input type="text" name="url_4" id="url_4" value="'.$url[9].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_5" id="prepod_2_5" value="'.$prepod_arr[10].'" placeholder="препод"><br><br>
                        <input type="text" name="url_5" id="url_5" value="'.$url[10].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_6" id="prepod_2_6" value="'.$prepod_arr[11].'" placeholder="препод"><br><br>
                        <input type="text" name="url_6" id="url_6" value="'.$url[11].'"                  placeholder="Ссылка"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <td><input type="text" name="aud_4" id="aud_2_4" value="'.$aud_arr[9].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_5" id="aud_2_5" value="'.$aud_arr[10].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_6" id="aud_2_6" value="'.$aud_arr[11].'" placeholder="ауд"></td>
                   </tr>
                </table>
                </form>';
        }
        
        
        if($divisions_arr[12] > 0 && 15 > $divisions_arr[12])
        {
                echo'
                <form method="post" action="./update.php">
                <input type="hidden" name="den" value="'.$or.'">
                <input type="hidden" name="check" value="'.$divisions_arr[12].'">
                <input type="hidden" name="para" value="3">
                <table>
                   <tr>';
     if(mb_strlen($n_k_arr[12])!=0) echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[12].'" placeholder="начало"></td>';
else if(mb_strlen($n_k_arr[13])!=0 && mb_strlen($n_k_arr[12])==0) echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[13].'" placeholder="начало"></td>';
else if(mb_strlen($n_k_arr[14])!=0 && mb_strlen($n_k_arr[13])==0 && mb_strlen($n_k_arr[14])==0) 
                   echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[14].'" placeholder="начало"></td>';
                   echo'<td rowspan="3"><h3 align=center>1</h3></label></td>
                        <td><input type="text" name="n_p_1" id="n_p_3_1" value="'.$n_p_arr[12].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>2</h3></label></td>
                        <td><input type="text" name="n_p_2" id="n_p_3_2" value="'.$n_p_arr[13].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>3</h3></label></td>
                        <td><input type="text" name="n_p_3" id="n_p_3_3" value="'.$n_p_arr[14].'" placeholder="название предмета"></td>
                        <td rowspan="7"><div align="center"><button class="button_OK">ОК</button></div></td>
                   </tr>
                   <tr>
                        <td align="center"><select size="1" name="check" style="width: 100%;">
                        ';
                        if($divisions_arr[12] == 1) echo "<option selected disabled>[ ]</option>";
                        else if($divisions_arr[12] == 2) echo "<option selected disabled>[/]</option>";
                        else if($divisions_arr[12] == 3) echo "<option selected disabled>[ | | ]</option>";
                        else if($divisions_arr[12] == 4) echo "<option selected disabled>[ | ]</option>";
                        else if($divisions_arr[12] == 5) echo "<option selected disabled>[ |/]</option>";
                        else if($divisions_arr[12] == 6) echo "<option selected disabled>[/| ]</option>";
                        else if($divisions_arr[12] == 7) echo "<option selected disabled>[/|/]</option>";
                        else if($divisions_arr[12] == 8) echo "<option selected disabled>[/| | ]</option>";
                        else if($divisions_arr[12] == 9) echo "<option selected disabled>[ |/| ]</option>";
                        else if($divisions_arr[12] == 10) echo "<option selected disabled>[ | |/]</option>";
                        else if($divisions_arr[12] == 11) echo "<option selected disabled>[/|/| ]</option>";
                        else if($divisions_arr[12] == 12) echo "<option selected disabled>[ |/|/]</option>";
                        else if($divisions_arr[12] == 13) echo "<option selected disabled>[/| |/]</option>";
                        else if($divisions_arr[12] == 14) echo "<option selected disabled>[/|/|/]</option>";
                        else                echo "<option selected disabled>?</option>"; echo'
                        <option value="0">NULL</option><option value="1">[ ]</option><option value="2">[/]</option>
                        <option value="4">[ | ]</option><option value="5">[ |/]</option>
                        <option value="6">[/| ]</option><option value="7">[/|/]</option>
                        <option value="3">[ | | ]</option><option value="8">[/| | ]</option>
                        <option value="9">[ |/| ]</option><option value="10">[ | |/]</option>
                        <option value="12">[ |/|/]</option><option value="11">[/|/| ]</option>
                        <option value="13">[/| |/]</option><option value="14">[/|/|/]</option>
                        </select></td>
                        <td><input type="text" name="prepod_1" id="prepod_3_1" value="'.$prepod_arr[12].'" placeholder="препод"><br><br>
                        <input type="text" name="url_1" id="url_1" value="'.$url[12].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_2" id="prepod_3_2" value="'.$prepod_arr[13].'" placeholder="препод"><br><br>
                        <input type="text" name="url_2" id="url_2" value="'.$url[13].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_3" id="prepod_3_3" value="'.$prepod_arr[14].'" placeholder="препод"><br><br>
                        <input type="text" name="url_3" id="url_3" value="'.$url[14].'"                  placeholder="Ссылка"></td>
                   </tr>
                   <tr>';
if(mb_strlen($k_n_arr[12])!=0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[12].'" placeholder="начало"></td>';
if(mb_strlen($k_n_arr[13])!=0 && mb_strlen($k_n_arr[12])==0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[13].'" placeholder="начало"></td>';
if(mb_strlen($k_n_arr[14])!=0 && mb_strlen($k_n_arr[13])==0 && mb_strlen($k_n_arr[12])==0)
                   echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[14].'" placeholder="начало"></td>';
                   echo'<td><input type="text" name="aud_1" id="aud_3_1" value="'.$aud_arr[12].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_2" id="aud_3_2" value="'.$aud_arr[13].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_3" id="aud_3_3" value="'.$aud_arr[14].'" placeholder="ауд"></td>
                   </tr>
                   <tr><td colspan="7"><br></td></tr>
                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 
                   <tr>  
                        <td></td>
                        <td rowspan="3"><h3 align=center>1</h3></label></td>
                        <td><input type="text" name="n_p_4" id="n_p_3_4" value="'.$n_p_arr[15].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>2</h3></label></td>
                        <td><input type="text" name="n_p_5" id="n_p_3_5" value="'.$n_p_arr[16].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>3</h3></label></td>
                        <td><input type="text" name="n_p_6" id="n_p_3_6" value="'.$n_p_arr[17].'" placeholder="название предмета"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <!-- //////////////////////////////////////////////////////// --> 
                        <td><input type="text" name="prepod_4" id="prepod_3_4" value="'.$prepod_arr[15].'" placeholder="препод"><br><br>
                        <input type="text" name="url_4" id="url_4" value="'.$url[15].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_5" id="prepod_3_5" value="'.$prepod_arr[16].'" placeholder="препод"><br><br>
                        <input type="text" name="url_5" id="url_5" value="'.$url[16].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_6" id="prepod_3_6" value="'.$prepod_arr[17].'" placeholder="препод"><br><br>
                        <input type="text" name="url_6" id="url_6" value="'.$url[17].'"                  placeholder="Ссылка"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <td><input type="text" name="aud_4" id="aud_3_4" value="'.$aud_arr[15].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_5" id="aud_3_5" value="'.$aud_arr[16].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_6" id="aud_3_6" value="'.$aud_arr[17].'" placeholder="ауд"></td>
                   </tr>
                </table>
                </form>';
        }
                
        
        if($divisions_arr[18] > 0 && 15 > $divisions_arr[18])
        {
                echo'
                <form method="post" action="./update.php">
                <input type="hidden" name="den" value="'.$or.'">
                <input type="hidden" name="check" value="'.$divisions_arr[18].'">
                <input type="hidden" name="para" value="4">
                <table>
                   <tr>';
     if(mb_strlen($n_k_arr[18])!=0) echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[18].'" placeholder="начало"></td>';
else if(mb_strlen($n_k_arr[19])!=0 && mb_strlen($n_k_arr[18])==0) echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[19].'" placeholder="начало"></td>';
else if(mb_strlen($n_k_arr[20])!=0 && mb_strlen($n_k_arr[19])==0 && mb_strlen($n_k_arr[18])==0) 
                   echo '<td><input type="time" name="n_k"    value="'.$n_k_arr[20].'" placeholder="начало"></td>';
                   echo'<td rowspan="3"><h3 align=center>1</h3></label></td>
                        <td><input type="text" name="n_p_1" id="n_p_4_1" value="'.$n_p_arr[18].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>2</h3></label></td>
                        <td><input type="text" name="n_p_2" id="n_p_4_2" value="'.$n_p_arr[19].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>3</h3></label></td>
                        <td><input type="text" name="n_p_3" id="n_p_4_3" value="'.$n_p_arr[20].'" placeholder="название предмета"></td>
                        <td rowspan="7"><div align="center"><button class="button_OK">ОК</button></div></td>
                   </tr>
                   <tr>
                        <td align="center"><select size="1" name="check" style="width: 100%;">
                        ';
                        if($divisions_arr[18] == 1) echo "<option selected disabled>[ ]</option>";
                        else if($divisions_arr[18] == 2) echo "<option selected disabled>[/]</option>";
                        else if($divisions_arr[18] == 3) echo "<option selected disabled>[ | | ]</option>";
                        else if($divisions_arr[18] == 4) echo "<option selected disabled>[ | ]</option>";
                        else if($divisions_arr[18] == 5) echo "<option selected disabled>[ |/]</option>";
                        else if($divisions_arr[18] == 6) echo "<option selected disabled>[/| ]</option>";
                        else if($divisions_arr[18] == 7) echo "<option selected disabled>[/|/]</option>";
                        else if($divisions_arr[18] == 8) echo "<option selected disabled>[/| | ]</option>";
                        else if($divisions_arr[18] == 9) echo "<option selected disabled>[ |/| ]</option>";
                        else if($divisions_arr[18] == 10) echo "<option selected disabled>[ | |/]</option>";
                        else if($divisions_arr[18] == 11) echo "<option selected disabled>[/|/| ]</option>";
                        else if($divisions_arr[18] == 12) echo "<option selected disabled>[ |/|/]</option>";
                        else if($divisions_arr[18] == 13) echo "<option selected disabled>[/| |/]</option>";
                        else if($divisions_arr[18] == 14) echo "<option selected disabled>[/|/|/]</option>";
                        else                echo "<option selected disabled>?</option>"; echo'
                        <option value="0">NULL</option><option value="1">[ ]</option><option value="2">[/]</option>
                        <option value="4">[ | ]</option><option value="5">[ |/]</option>
                        <option value="6">[/| ]</option><option value="7">[/|/]</option>
                        <option value="3">[ | | ]</option><option value="8">[/| | ]</option>
                        <option value="9">[ |/| ]</option><option value="10">[ | |/]</option>
                        <option value="12">[ |/|/]</option><option value="11">[/|/| ]</option>
                        <option value="13">[/| |/]</option><option value="14">[/|/|/]</option>
                        </select></td>
                        <td><input type="text" name="prepod_1" id="prepod_4_1" value="'.$prepod_arr[18].'" placeholder="препод"><br><br>
                        <input type="text" name="url_1" id="url_1" value="'.$url[18].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_2" id="prepod_4_2" value="'.$prepod_arr[19].'" placeholder="препод"><br><br>
                        <input type="text" name="url_2" id="url_2" value="'.$url[19].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_3" id="prepod_4_3" value="'.$prepod_arr[20].'" placeholder="препод"><br><br>
                        <input type="text" name="url_3" id="url_3" value="'.$url[20].'"                  placeholder="Ссылка"></td>
                   </tr>
                   <tr>';
if(mb_strlen($k_n_arr[18])!=0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[18].'" placeholder="начало"></td>';
if(mb_strlen($k_n_arr[19])!=0 && mb_strlen($k_n_arr[18])==0)echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[19].'" placeholder="начало"></td>';
if(mb_strlen($k_n_arr[20])!=0 && mb_strlen($k_n_arr[19])==0 && mb_strlen($k_n_arr[18])==0)
                   echo '<td><input type="time" name="k_n"    value="'.$k_n_arr[20].'" placeholder="начало"></td>';
                   echo'<td><input type="text" name="aud_1" id="aud_4_1" value="'.$aud_arr[18].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_2" id="aud_4_2" value="'.$aud_arr[19].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_3" id="aud_4_3" value="'.$aud_arr[20].'" placeholder="ауд"></td>
                   </tr>
                   <tr><td colspan="7"><br></td></tr>
                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 
                   <tr>  
                        <td></td>
                        <td rowspan="3"><h3 align=center>1</h3></label></td>
                        <td><input type="text" name="n_p_4" id="n_p_4_4" value="'.$n_p_arr[21].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>2</h3></label></td>
                        <td><input type="text" name="n_p_5" id="n_p_4_5" value="'.$n_p_arr[22].'" placeholder="название предмета"></td>
                        <td rowspan="3"><h3 align=center>3</h3></label></td>
                        <td><input type="text" name="n_p_6" id="n_p_4_6" value="'.$n_p_arr[23].'" placeholder="название предмета"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <!-- //////////////////////////////////////////////////////// --> 
                        <td><input type="text" name="prepod_4" id="prepod_4_4" value="'.$prepod_arr[21].'" placeholder="препод"><br><br>
                        <input type="text" name="url_4" id="url_4" value="'.$url[21].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_5" id="prepod_4_5" value="'.$prepod_arr[22].'" placeholder="препод"><br><br>
                        <input type="text" name="url_5" id="url_5" value="'.$url[22].'"                  placeholder="Ссылка"></td>
                        <td><input type="text" name="prepod_6" id="prepod_4_6" value="'.$prepod_arr[23].'" placeholder="препод"><br><br>
                        <input type="text" name="url_6" id="url_6" value="'.$url[23].'"                  placeholder="Ссылка"></td>
                   </tr>
                   <tr>
                        <td></td>
                        <td><input type="text" name="aud_4" id="aud_4_4" value="'.$aud_arr[21].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_5" id="aud_4_5" value="'.$aud_arr[22].'" placeholder="ауд"></td>
                        <td><input type="text" name="aud_6" id="aud_4_6" value="'.$aud_arr[23].'" placeholder="ауд"></td>
                   </tr>
                </table>
                </form>';
        }
    if($result)mysqli_close($link);
} 
?>
<?php require_once ''.$hosts.'/js/help.php' ?>  
</body>
</html>