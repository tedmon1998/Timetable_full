<?php require_once '../security/security.php' ?>
<?php
require_once '../print_timetable.php';
$den = date("W")+1;
if($den%2==0)
{
    print_timetable(1);
}
else
{
    print_timetable(0);
}

?>