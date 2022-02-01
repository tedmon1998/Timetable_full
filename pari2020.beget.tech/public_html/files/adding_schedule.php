<?php

// функция определяющая номер пары
function foo_pair($i)
{
    if($i==0 || $i==0+9 || $i==0+9*2) $N_pair = 1;
    elseif($i==2 || $i==2+9 || $i==2+9*2) $N_pair = 2;
    elseif($i==4 || $i==4+9 || $i==4+9*2) $N_pair = 3;
    elseif($i==6 || $i==6+9 || $i==6+9*2) $N_pair = 4;
    return $N_pair;

}

// функция определяющая день недели
function foo_week_day($i, $j)
{
    if($i == 0 && $j == 0) $day = 0;
    elseif($i == 9 && $j == 0) $day = 1;
    elseif($i == 18 && $j == 0) $day = 2;
    elseif($i == 0 && $j == 9) $day = 3;
    elseif($i == 9 && $j == 9) $day = 4;
    elseif($i == 18 && $j == 9) $day = 5;
    return $day;
}

// функция определяющая кличество занятых клеток в excel
function foo_j_list($devision)
{
    if($devision==12 || $devision==11 || $devision==10 || $devision==14
    || $devision==9 || $devision==8 || $devision==13 || $devision==3)
    {
        $j_list = [0, 2, 4];
    }
    elseif($devision==4 || $devision==5 || $devision==6 || $devision==7)
    {
        $j_list = [0, 3];
    }
    elseif($devision==1 || $devision==2)
    {
        $j_list = [0];
    }
    return $j_list;
}

// функция создания таблицы для группы
function foo_create_table($group_excel)
{
    // начало работы c БД
    require('connect/.htconnect');
    $link = mysqli_connect($host, $user, $password, $database);

    $arr_dey = ['pon', 'vtor', 'sred', 'chet', 'pyat', 'sub'];
    
    for($i=0; $i<count($arr_dey); $i++)
    {
        $name_group = $group_excel.'_'.$arr_dey[$i];

        $query_test = ("SELECT * FROM $name_group LIMIT 1");
        $result_test = mysqli_query($link, $query_test);
        // броверка существования БД
        if(!empty($result_test))
        {
            $query_drop = ("DROP TABLE IF EXISTS $name_group;");
            mysqli_query($link, $query_drop);
        }

        $query_create = "
        CREATE TABLE $name_group (
        `id_key` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `id` int(11) DEFAULT NULL,
        `№` int(11) NOT NULL,
        `n_k` text,
        `k_n` text,
        `n_p` text,
        `d_z` varchar(50) DEFAULT NULL,
        `aud` varchar(50) DEFAULT NULL,
        `url` varchar(80) NOT NULL,
        `prepod` varchar(50) DEFAULT NULL,
        `divisions` int(11) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        mysqli_query($link, $query_create);
    }
    // конец работы c БД
    mysqli_close($link);
    return TRUE;
}

// функция для пустых строк
function foo_empty_string($id, $N, $n_k, $k_n, $devision, $name_group)
{
    $result = "INSERT INTO `$name_group` (
            `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
        ('$id', '$N', '$n_k', '$k_n', '—', NULL, '—', '', '—', '$devision'); ";
    return $result;
}

// функция заполнения таблиц
function test($group_excel, $devision, $den, $para, $list_timetable, $N_pair, $id)
{
    $arr_dey = ['pon', 'vtor', 'sred', 'chet', 'pyat', 'sub'];
    $arr_n_k = ['08:00', '09:40', '11:20', '13:20', '15:00', '16:40', '18:20', '20:00'];
    $arr_k_n = ['09:30', '11:10', '12:50', '14:50', '16:30', '18:10', '19:50', '21:30'];

    $query_insert = "";

    $name_group = $group_excel.'_'.$arr_dey[$den];

    // начало работы c БД
    require('connect/.htconnect');
    $link = mysqli_connect($host, $user, $password, $database);

    $n_k = $arr_n_k[$para-1];
    $k_n = $arr_k_n[$para-1];

    for($div = 1; $div < 7; $div++) {
        $n_p = $list_timetable["pair_".$den."_".$N_pair."_".$div];
        $N = $N_pair.$div;
        if(!empty($n_p)) 
        { 
            $aud = $list_timetable["aud_".$den."_".$N_pair."_".$div];
            $prepod = $list_timetable["teacher_".$den."_".$N_pair."_".$div];
            $query_insert .= "INSERT INTO `$name_group` (
                `id`, `№`, `n_k`, `k_n`, `n_p`, `d_z`, `aud`, `url`, `prepod`, `divisions`) VALUES
                ('$id', '$N', '$n_k', '$k_n', '$n_p', NULL, '$aud', '', '$prepod', '$devision'); ";
        }
        else $query_insert .= foo_empty_string($id, $N, $n_k, $k_n, $devision, $name_group);
        $id++;
    }

    mysqli_multi_query($link, $query_insert);
    mysqli_close($link);

    return $id;
}

function foo_create_listTimetable($dataArray, $devision, $den, $N_pair, $temp_i, $temp_j)
{
    $list_timetable = [];
    $j_list = foo_j_list($devision);
    $div = 1;

    for ($i=0; $i < 2; $i++) { 
        foreach ((array) $j_list as $j) 
        { 
            if(!empty($dataArray[$i+$temp_i][$j+$temp_j]))
            {
                $position=0;
                for (; $position < mb_strlen($dataArray[$i+$temp_i][$j+$temp_j]); $position++) {

                    $ch = mb_substr($dataArray[$i+$temp_i][$j+$temp_j], $position, 1); 
                    if($ch == ',')
                    {
                        break;
                    }
                }
                $pair = mb_substr($dataArray[$i+$temp_i][$j+$temp_j], 0, $position);
                $aud = mb_substr($dataArray[$i+$temp_i][$j+$temp_j], $position+2, 5);
                $teacher = mb_substr($dataArray[$i+$temp_i][$j+$temp_j], $position+7, mb_strlen($dataArray[$i+$temp_i][$j+$temp_j]));

                $list_timetable += [
                    "pair"."_".$den."_".$N_pair."_".$div => $pair,
                    "aud"."_".$den."_".$N_pair."_".$div => $aud,
                    "teacher"."_".$den."_".$N_pair."_".$div => $teacher,
                ];
            }
            $div++;
        }
    }
    return $list_timetable;
}

// функция определяющая подгруппу
function foo_subgroup($dataArray, $timeArray, $group_excel)
{
    foo_create_table($group_excel);
    $counter_for_id = 0;
    $N_pair = 0;
    $id = 1;
    $den = 0;

    for($j=0; $j<14; $j+=9)
    {
        $devision = 0;
        $sum = 0;      

        for($i=0; $i<count($dataArray); $i+=2)
        {

            if($sum == 4)
            {
                $i ++;
                $sum = 0;
            }

            $N_pair = foo_pair($i);

            if(!empty($dataArray[$i][$j+2]) || !empty($dataArray[$i][$j+4]))
            {
                // echo " <br> -------------------------- <br> 3 подгруппы  <br>";
                if(!empty($dataArray[$i+1][$j]) && !empty($dataArray[$i+1][$j+2]) && !empty($dataArray[$i+1][$j+4]))
                {
                    // четное/нечетно для всех;
                    $devision = 14;
                }
                elseif(empty($dataArray[$i+1][$j]) && !empty($dataArray[$i+1][$j+2]) && !empty($dataArray[$i+1][$j+4]))
                {
                    // четное/нечетно только для 2,3 подгруппы;
                    $devision = 12;
                }
                elseif(!empty($dataArray[$i+1][$j]) && empty($dataArray[$i+1][$j+2]) && !empty($dataArray[$i+1][$j+4]))
                {
                    // четное/нечетно только для 1,3 подгруппы;
                    $devision = 13;
                }
                elseif(!empty($dataArray[$i+1][$j]) && !empty($dataArray[$i+1][$j+2]) && empty($dataArray[$i+1][$j+4]))
                {
                    // четное/нечетно только для 1,2 подгруппы;
                    $devision = 11;
                }
                elseif(!empty($dataArray[$i+1][$j]) && empty($dataArray[$i+1][$j+2]) && empty($dataArray[$i+1][$j+4]))
                {
                    // четное/нечетно только для 1 подгруппы;
                    $devision = 8;
                }
                elseif(empty($dataArray[$i+1][$j]) && !empty($dataArray[$i+1][$j+2]) && empty($dataArray[$i+1][$j+4]))
                {
                    // четное/нечетно только для 2 подгруппы;
                    $devision = 9;
                }
                elseif(empty($dataArray[$i+1][$j]) && empty($dataArray[$i+1][$j+2]) && !empty($dataArray[$i+1][$j+4]))
                {
                    // четное/нечетно только для 3 подгруппы;
                    $devision = 10;
                }
                else
                {
                    // все идут каждую неделю;
                    $devision = 3;
                }
            }
            elseif(!empty($dataArray[$i][$j+3]))
            {
                // echo " <br> -------------------------- <br> 2 подгруппы <br> ";
                if(!empty($dataArray[$i+1][$j]) && !empty($dataArray[$i+1][$j+3]))
                {
                    // четное/нечетно для всех;
                    $devision = 7;
                }
                elseif(empty($dataArray[$i+1][$j]) && !empty($dataArray[$i+1][$j+3]))
                {
                    // четное/нечетно только для 2 подгруппы;
                    $devision = 5;
                }
                elseif(!empty($dataArray[$i+1][$j]) && empty($dataArray[$i+1][$j+3]))
                {
                    // четное/нечетно только для 1 подгруппы;
                    $devision = 6;
                }
                else
                {
                    // все идут каждую неделю;
                    $devision = 4;
                }
            }
            elseif (!empty($dataArray[$i][$j]))
            {
                // echo " <br> -------------------------- <br> 1 подгруппа <br>";
                if (!empty($dataArray[$i+1][$j]))
                {
                    // четно/нечетно';
                    $devision = 2;
                }
                else 
                {
                    // каждую неделю';
                    $devision = 1;
                }
            }
            else
            {
                $devision = "—";
            }

            if(!empty(foo_week_day($i, $j))) $den = foo_week_day($i, $j);

            $list_timetable = foo_create_listTimetable($dataArray, $devision, $den, $N_pair, $i, $j);

            $id = test($group_excel, $devision, $den, $timeArray[$i][$j], $list_timetable, $N_pair, $id);

            $sum++;
            $counter_for_id++;
        }
    }
}


require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(!empty($_FILES["upload_file"]))
    {
        $path = $_FILES["upload_file"]["name"];
        $extension_position = mb_strrpos($path, '.');
        $file_extension = mb_substr($path, $extension_position + 1);
        $file_name = mb_substr($path, 0, $extension_position+1);

        if($file_extension == "xlsm" || $file_extension == "xls" || $file_extension == "xlsx")
        {
            if(move_uploaded_file($_FILES["upload_file"]["tmp_name"], '../uploads/'.$path))
            {
                $inputFileName = '../uploads/'.$path;
                $spreadsheet = new Spreadsheet();
                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
                $sheet = $spreadsheet->getActiveSheet();

                $dataArray = $spreadsheet->getActiveSheet()
                    ->rangeToArray(
                        'C4:Q29',     // The worksheet range that we want to retrieve
                        NULL,        // Value that should be returned for empty cells
                        FALSE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
                        FALSE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
                        FALSE         // Should the array be indexed by cell row and cell column
                    );

                for($j=0; $j<14; $j+=9)
                {
                    $sum = 0;

                    for($i=0; $i<count($dataArray); $i+=2)
                    {
                        if($sum == 4)
                        {
                            $i ++;
                            $sum = 0;
                        }
                        $timeArray = $spreadsheet->getActiveSheet()
                        ->rangeToArray(
                        'B4:K29',     // The worksheet range that we want to retrieve
                        NULL,        // Value that should be returned for empty cells
                        FALSE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
                        FALSE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
                        FALSE         // Should the array be indexed by cell row and cell column
                        );
                        $sum++;
                    }
                }

                // получаем и преобразуем в формат группу пример: 60791
                $group_excel = $spreadsheet->getActiveSheet()->getCell('C2')->getValue();
                $group_excel = mb_substr($group_excel, -6, 7);
                $group_excel = mb_substr($group_excel, 0, 3).mb_substr($group_excel, -2, 2);

                foo_subgroup($dataArray, $timeArray, $group_excel);
            }
        }
        else echo "error $file_extension";
    }        
}

?>