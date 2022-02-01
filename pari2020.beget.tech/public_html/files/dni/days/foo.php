<?php
function foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod)
{
    echo "<div class='line'></div>";
    echo "<p>";
    echo "<div class='wrapper'>";
    echo "<div class='num'>$u.</div>";
    if ($aud[$i] == "—" && $n_p[$i] == "—" && $prepod[$i] == "—") {
        echo "<div class='inf'><img width='30px' height='30px' src='https://surgusa.ru/images/minus.png'></div>";
    } else {
        echo "<div class='inf'>$n_k[$i] - $k_n[$i] (";
        echo $aud[$i];
        echo ")<br>";

        if (mb_strlen($url[$i]) != 0) echo "<a class='a' href=$url[$i]>$n_p[$i] ($prepod[$i]</a>";
        else echo "$n_p[$i] ($prepod[$i]";
        echo ")</div>";
    }
    echo "</div>";
    echo "</p>";
    echo "<div class='line'></div>";
}


function group($y, $den, $i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod, $nomera_2, $nomera_3, $divisions)
{
    if ($divisions[$i] == 2) {
        if ($den % 2 == 0) {
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
        } else {
            $i++;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i--;
        }
    } else if ($divisions[$i] == 3) {
        // если первая подгрупппа при разделение на три подгруппы
        if ($nomera_3 == 1) {
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
        }
        // если вторая подгруппа при разделение на три подгруппы
        else if ($nomera_3 == 2) {
            $i++;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i--;
        }
        // если третья подгруппа при разделение на три подгруппы
        else if ($nomera_3 == 3) {
            $i += 2;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i -= 2;
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 4) {
        // если первая под подгруппа при разделение на две подгруппы
        if ($nomera_2 == 1) {
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
        }
        // если вторая под подгруппа при разделение на две подгруппы
        else if ($nomera_2 == 2) {
            $i += 3;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i -= 3;
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 5) {
        if ($nomera_2 == 1) {
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
        } else if ($nomera_2 == 2) {
            if ($den % 2 == 0) {
                $i += 4;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 4;
            } else {
                $i++;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i--;
            }
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 6) {
        if ($nomera_2 == 1) {
            if ($den % 2 == 0) {
                $i += 3;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 3;
            } else {
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            }
        } else if ($nomera_2 == 2) {
            $i++;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i--;
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 7) {
        if ($nomera_2 == 1) {
            if ($den % 2 == 0) {
                $i += 3;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 3;
            } else {
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            }
        } else if ($nomera_2 == 2) {
            if ($den % 2 == 0) {
                $i += 4;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 4;
            } else {
                $i++;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i--;
            }
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 8) {

        if ($nomera_3 == 1) {
            if ($den % 2 == 0) {
                $i += 3;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 3;
            } else {
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            }
        } else if ($nomera_3 == 2) {
            $i++;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i--;
        } else if ($nomera_3 == 3) {
            $i += 2;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i -= 2;
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 9) {

        if ($nomera_3 == 1) {
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
        } else if ($nomera_3 == 2) {
            if ($den % 2 == 0) {
                $i += 4;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 4;
            } else {
                $i++;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i--;
            }
        } else if ($nomera_3 == 3) {
            $i += 2;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i -= 2;
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 10) {

        if ($nomera_3 == 1) {
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
        } else if ($nomera_3 == 2) {
            $i++;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i--;
        } else if ($nomera_3 == 3) {
            if ($den % 2 == 0) {
                $i += 5;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 5;
            } else {
                $i += 2;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 2;
            }
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 11) {

        if ($nomera_3 == 1) {
            if ($den % 2 == 0) {
                $i += 3;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 3;
            } else {
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            }
        } else if ($nomera_3 == 2) {
            if ($den % 2 == 0) {
                $i += 4;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 4;
            } else {
                $i++;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i--;
            }
        } else if ($nomera_3 == 3) {
            $i += 2;
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            $i -= 2;
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 12) {

        if ($nomera_3 == 1) {
            foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
        } else if ($nomera_3 == 2) {
            if ($den % 2 == 0) {
                $i += 4;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 4;
            } else {
                $i++;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i--;
            }
        } else if ($nomera_3 == 3) {
            if ($den % 2 == 0) {
                $i += 5;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 5;
            } else {
                $i += 2;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 2;
            }
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 13) {

        if ($nomera_3 == 1) {
            if ($den % 2 == 0) {
                $i += 3;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 3;
            } else {
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            }
        } else if ($nomera_3 == 2) {
            if ($nomera_3 > 0 && $nomera_3 <= $group_3) {
                $i++;
                echo "<div class='frame'>";
                echo "<div class='line'></div>";
                echo "<p>";
                echo "<div class='wrapper'>";
                echo "<div class='num'>$u.</div>";
                echo "<div class='inf'>$n_k[$i] - $k_n[$i] (";
                echo "$n_p[$i] ($prepod[$i])</div>";
                echo            "<td>$dz[$i]</td>";
                if (mb_strlen($url[$i]) != 0)
                    echo "<td><a class='a' href=$url[$i]>$aud[$i]</td>";
                else
                    echo "<td>$aud[$i]</td>";
                echo            "<td>$prepod[$i]</td>";
                echo        "</tr>";
                $i--;
            }
        } else if ($nomera_3 == 3) {
            if ($den % 2 == 0) {
                $i += 5;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 5;
            } else {
                $i += 2;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 2;
            }
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else if ($divisions[$i] == 14) {

        if ($nomera_3 == 1) {
            if ($den % 2 == 0) {
                $i += 3;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 3;
            } else {
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
            }
        } else if ($nomera_3 == 2) {
            if ($den % 2 == 0) {
                $i += 4;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 4;
            } else {
                $i++;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i--;
            }
        } else if ($nomera_3 == 3) {
            if ($den % 2 == 0) {
                $i += 5;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 5;
            } else {
                $i += 2;
                foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
                $i -= 2;
            }
        } else {
            echo 'alert("укажите пожалуйста в настройках ваш номер по журналу")';
        }
    } else {
        foo_print($i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod);
    }
}

/*день группа номер*/
function foo($y, $nomera_2, $nomera_3, $even_odd = 0, $group)
{
    $y = htmlentities($y);
    $nomera_2 = htmlentities($nomera_2);
    $nomera_3 = htmlentities($nomera_3);
    $even_odd = htmlentities($even_odd);
    $group = htmlentities($group);
    $days_arr = ["pon", "vtor", "sred", "chet", "pyat", "sub", "voskr"];
    $days_print_arr = ["ПОНЕДЕЛЬНИК", "ВТОРНИК", "СРЕДА", "ЧЕТВЕРГ", "ПЯТНИЦА", "СУББОТА", "ВОСКРЕСЕНЬЕ"];

    echo "<div class='block'>";

    echo "<a name='monday'></a>";
    echo $days_print_arr[$y];
    echo "<div class='frame'>";

    require_once '../../connect/.htconnect';

    $link = mysqli_connect($host, $user, $password, $database);
    $query = "SELECT * FROM `" . $group . "_" . $days_arr[$y] . "` ORDER BY `" . $group . "_" . $days_arr[$y] . "`.`id`";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $divisions[] = $row["divisions"];
        $n_k[] = $row["n_k"];
        $k_n[] = $row["k_n"];
        $n_p[] = $row["n_p"];
        $dz[] = $row["dz"];
        $aud[] = $row["aud"];
        $url[] = $row["url"];
        $prepod[] = $row["prepod"];
    }
    /* очищаем результирующий набор */
    mysqli_free_result($result);
    mysqli_next_result($link);
    $den = date("W") + 1 + $even_odd;
    $u = 0;

    for ($i = 0; $i < 20; $i += 6) {
        if ($i == 0) $u = 1;
        else if ($i == 6) $u = 2;
        else if ($i == 12) $u = 3;
        else $u = 4;
        group($y, $den, $i, $u, $n_k, $k_n, $url, $aud, $n_p, $prepod, $nomera_2, $nomera_3, $divisions);
    }
    echo "</div>";
    echo "</div>";
    mysqli_close($query);
}
