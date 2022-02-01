<?php
session_start();

$host = $_SERVER['SCRIPT_NAME'];

if($_GET['log'] == "logout")
{
    unset($_SESSION['security']);
    session_destroy();
}

if(!(isset($_SESSION['security'])))
{
    exit("<meta http-equiv='refresh' content='0; url = https://surgusa.ru/'>");
}

?>