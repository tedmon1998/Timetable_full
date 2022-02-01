<?php

    function foo_level()
    {
        if($_SESSION['security'] == 3)
        {
            exit("<meta http-equiv='refresh' content='0; url = ../Timetable_of_classes.php'>");
        }
        elseif($_SESSION['security'] == 2)
        {
            exit("<meta http-equiv='refresh' content='0; url = ../Timetable_of_classes.php'>");
        }
        else
        {
            exit("<meta http-equiv='refresh' content='0; url = ../Timetable_of_classes.php'>");
        }
    }

?>