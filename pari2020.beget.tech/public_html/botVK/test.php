<?php
$user_text = "+3";
 
    for($i=0; $i<31; $i++)
    {
        $nomer_1[$i] = $i."+";
        $nomer_2[$i] = "+".$i;
        
        if( !strcmp($nomer_1[$i], $user_text) || !strcmp($nomer_2[$i], $user_text) ) 
        {
            echo "ok";
        }
        else echo $user_text;
    }
    
?>