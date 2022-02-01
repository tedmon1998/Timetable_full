<?php
$n = date("n");
if ($n==1){
    $nn = " Января ";
}
elseif ($n==2){
    $nn = " Февраля ";
}
elseif ($n==3){
    $nn = " Марта ";
}
elseif ($n==4){
    $nn = " Апреля ";
}
elseif ($n==5){
    $nn = " Мая ";
}
elseif ($n==6){
    $nn = " Июня ";
}
elseif ($n==7){
    $nn = " Июля ";
}
elseif ($n==8){
    $nn = " Августа ";
}
elseif ($n==9){
    $nn = " Сентября ";
}
elseif ($n==10){
    $nn = " Октября ";
}
elseif ($n==11){
    $nn = " Ноября ";
}
elseif ($n==12){
    $nn = " Декабря ";
}

 $dd = date("d");
 $data = ($dd.$nn);
    $d = date("N");
    if ($d == 1){
        $or = "Пон.";
    }
    elseif ($d == 2){
        $or = "Втор.";
    }
    elseif ($d == 3){
        $or = "Ср.";
    }
    elseif ($d == 4){
        $or = "Чет.";
    }
    elseif ($d == 5){
        $or = "Пят.";
    }
    if ($d == 6){
        $or = "Суб.";
    }
    if ($d == 7){
        $or = "Воскр.";
    }
    
    $dni["datas"] = $data;
    $dni["dni"] = $or;
    $dni["tt"] = 1;
    $den["den"] = array();

    array_push($den["den"], $dni);
    echo json_encode($den);
?>
