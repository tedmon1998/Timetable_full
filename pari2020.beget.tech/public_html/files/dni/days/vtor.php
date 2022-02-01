<?php
if(isset($_GET["group"]) && isset($_GET["division_2"]) && isset($_GET["division_3"]) && isset($_GET["even_odd"]))
{
    require_once 'foo.php';
    
    foo(1, $_GET["division_2"], $_GET["division_3"], $_GET["even_odd"], $_GET["group"]); 
}
?>
