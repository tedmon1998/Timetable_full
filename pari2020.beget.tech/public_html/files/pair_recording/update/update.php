<html>
    <head>
        <meta charset="utf-8">
        <title>Сохранение</title>
    </head>
    <body>
    <?php

        require_once '../../connect/.htconnect';
        
        if(isset($_POST[n_p_1]) && isset($_POST[n_p_2]) && isset($_POST[n_p_3]) && isset($_POST[n_p_4])
         && isset($_POST[prepod_1]) && isset($_POST[prepod_2]) && isset($_POST[prepod_3]) && isset($_POST[prepod_4])
         && isset($_POST[aud_1]) && isset($_POST[aud_2]) && isset($_POST[aud_3]) && isset($_POST[aud_4]))
        {
            $den = $_POST[den];
            
            $para = $_POST[para];
            
            $n_k = $_POST[n_k];
            
            $k_n = $_POST[k_n];
            
            $n_p_1 = $_POST[n_p_1];
            $n_p_2 = $_POST[n_p_2];
            $n_p_3 = $_POST[n_p_3];
            $n_p_4 = $_POST[n_p_4];
            $n_p_5 = $_POST[n_p_5];
            $n_p_6 = $_POST[n_p_6];
            
            $aud_1 = $_POST[aud_1];
            $aud_2 = $_POST[aud_2];
            $aud_3 = $_POST[aud_3];
            $aud_4 = $_POST[aud_4];
            $aud_5 = $_POST[aud_5];
            $aud_6 = $_POST[aud_6];
            
            $prepod_1 = $_POST[prepod_1];
            $prepod_2 = $_POST[prepod_2];
            $prepod_3 = $_POST[prepod_3];
            $prepod_4 = $_POST[prepod_4];
            $prepod_5 = $_POST[prepod_5];
            $prepod_6 = $_POST[prepod_6];
            
            $link = mysqli_connect($host, $user, $password, $database);
            
            $url_1 = $_POST[url_1];
            $url_2 = $_POST[url_2];
            $url_3 = $_POST[url_3];
            $url_4 = $_POST[url_4];
            $url_5 = $_POST[url_5];
            $url_6 = $_POST[url_6];

            if($_POST[check] == 0)
            {
                $query_1 = "UPDATE `$den` SET `n_k` = '—', `k_n` = '—', `n_p` = '—', `aud` = '—', `prepod` = '—', `url` = NULL, `divisions` = '1' where `№` = ".$para."1";
                $result_1 = mysqli_query($link, $query_1);
                for($i=2; $i<7; $i++)
                {
                    $query = "UPDATE `$den` SET `n_k` = NULL, `k_n` = NULL, `n_p` = NULL, `aud` = NULL, `prepod` = NULL, `url` = NULL, `divisions` = '1' where `№` = ".$para.$i."";
                    $result = mysqli_query($link, $query);
                }
            }

            if($n_p_1 != null && $aud_1 != null && $prepod_1 != null && $url_1 == null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_1."', `aud` = '".$aud_1."', `prepod` = '".$prepod_1."', `url` = NULL where `№` = ".$para."1";
                $result = mysqli_query($link, $query);
                $divisions = 1;
            }
            else if($n_p_1 != null && $aud_1 != null && $prepod_1 != null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_1."', `aud` = '".$aud_1."', `prepod` = '".$prepod_1."', `url` = '".$url_1."' where `№` = ".$para."1";
                $result = mysqli_query($link, $query);
                $divisions = 1;
            }
            else 
            {
                $query = "UPDATE `$den` SET `n_k` = '—', `k_n` = '—', `n_p` = '—', `aud` = '—', `prepod` = '—' where, `url` = NULL `№` = ".$para."1";
                $result = mysqli_query($link, $query);
            }
            
            if($n_p_2 != null && $aud_2 != null && $prepod_2 != null && $url_2 == null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_2."', `aud` = '".$aud_2."', `prepod` = '".$prepod_2."', `url` = NULL where `№` = ".$para."2";
                $result = mysqli_query($link, $query);
                $divisions = 2;
            }
            else if($n_p_2 != null && $aud_2 != null && $prepod_2 != null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_2."', `aud` = '".$aud_2."', `prepod` = '".$prepod_2."', `url` = '".$url_2."' where `№` = ".$para."2";
                $result = mysqli_query($link, $query);
                $divisions = 2;
            }
            else 
            {
                $query = "UPDATE `$den` SET `n_k` = '—', `k_n` = '—', `n_p` = NULL, `aud` = NULL, `prepod` = NULL, `url` = NULL where `№` = ".$para."2";
                $result = mysqli_query($link, $query);
            }
            
            if($n_p_3 != null && $aud_3 != null && $prepod_3 != null && $url_3 == null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_3."', `aud` = '".$aud_3."', `prepod` = '".$prepod_3."', `url` = NULL where `№` = ".$para."3";
                $result = mysqli_query($link, $query);
                $divisions = 3;
            }
            else if($n_p_3 != null && $aud_3 != null && $prepod_3 != null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_3."', `aud` = '".$aud_3."', `prepod` = '".$prepod_3."', `url` = '".$url_3."' where `№` = ".$para."3";
                $result = mysqli_query($link, $query);
                $divisions = 3;
            }
            else 
            {
                $query = "UPDATE `$den` SET `n_k` = '—', `k_n` = '—', `n_p` = NULL, `aud` = NULL, `prepod` = NULL, `url` = NULL where `№` = ".$para."3";
                $result = mysqli_query($link, $query);
            }
            
            if($n_p_4 != null && $aud_4 != null && $prepod_4 != null && $url_4 == null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_4."', `aud` = '".$aud_4."', `prepod` = '".$prepod_4."', `url` = NULL where `№` = ".$para."4";
                $result = mysqli_query($link, $query);
            }
            else if($n_p_4 != null && $aud_4 != null && $prepod_4 != null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_4."', `aud` = '".$aud_4."', `prepod` = '".$prepod_4."', `url` = '".$url_4."' where `№` = ".$para."4";
                $result = mysqli_query($link, $query);
            }
            else 
            {
                $query = "UPDATE `$den` SET `n_k` = '—', `k_n` = '—', `n_p` = NULL, `aud` = NULL, `prepod` = NULL, `url` = NULL where `№` = ".$para."4";
                $result = mysqli_query($link, $query);
            }
            
            if($n_p_5 != null && $aud_5 != null && $prepod_5 != null && $url_5 == null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_5."', `aud` = '".$aud_5."', `prepod` = '".$prepod_5."', `url` = NULL where `№` = ".$para."5";
                $result = mysqli_query($link, $query);
            }
            else if($n_p_5 != null && $aud_5 != null && $prepod_5 != null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_5."', `aud` = '".$aud_5."', `prepod` = '".$prepod_5."', `url` = '".$url_5."' where `№` = ".$para."5";
                $result = mysqli_query($link, $query);
            }
            else 
            {
                $query = "UPDATE `$den` SET `n_k` = '—', `k_n` = '—', `n_p` = NULL, `aud` = NULL, `prepod` = NULL, `url` = NULL where `№` = ".$para."5";
                $result = mysqli_query($link, $query);
            }
            
            if($n_p_6 != null && $aud_6 != null && $prepod_6 != null && $url_6 == null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_6."', `aud` = '".$aud_6."', `prepod` = '".$prepod_6."', `url` = NULL where `№` = ".$para."6";
                $result = mysqli_query($link, $query);
            }
            else if($n_p_6 != null && $aud_6 != null && $prepod_6 != null)
            {
                $query = "UPDATE `$den` SET `n_k` = '".$n_k."', `k_n` = '".$k_n."', `n_p` = '".$n_p_6."', `aud` = '".$aud_6."', `prepod` = '".$prepod_6."', `url` = '".$url_6."' where `№` = ".$para."6";
                $result = mysqli_query($link, $query);
            }
            else 
            {
                $query = "UPDATE `$den` SET `n_k` = '—', `k_n` = '—', `n_p` = NULL, `aud` = NULL, `prepod` = NULL, `url` = NULL where `№` = ".$para."6";
                $result = mysqli_query($link, $query);
            }
            
            $divisions = $_POST[check];
            
            if($divisions != 0)
            { 
                for($i=1; $i<7; $i++)
                {
                    $№ = $para.$i;
                    $query = "UPDATE `$den` SET `divisions` = '".$divisions."' where `№` = '".$№."' ";
                    $result = mysqli_query($link, $query);
                }
            }

            
        if($result == 'true') 
        {
            require_once './ro.php';
            echo "Операция прошла успешно
            <script>location.href = './den.php?den=$or';</script>";
            
        } 
        else 
        {
            echo "Что то пошло не так";      
        }  
            mysqli_close($link);
            
        }
        
    ?>  
    
    <?php
    
    if(isset($_GET['den']) == 7 || isset($_GET['den']) == 8)
    {
        $den = $_GET['den'];
        if($den == 7)
        {
            echo
                "<script type='text/javascript'>
                    location.href = '/files/pair_recording/information/information.php/';
                </script>";
        }
        elseif($den == 8)
        {
            echo
                "<script type='text/javascript'>
                    location.href = '/files/pair_recording/update_app/update_app.php/';
                </script>";
        }
    }

?>
    
    </body>
</html>