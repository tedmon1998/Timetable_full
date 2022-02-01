<?php
if(isset($_GET["group"]) && isset($_GET["division_2"]) && isset($_GET["division_3"]) && isset($_GET["even_odd"]))
{
    require_once 'foo.php';
    
    /*день подгруппа_при_делении_на_2_и_на_3 номер_в_журнале*/
    foo(0, $_GET["division_2"], $_GET["division_3"], $_GET["even_odd"], $_GET["group"]); 
}
?>