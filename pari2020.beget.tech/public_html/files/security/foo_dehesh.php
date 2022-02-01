<?php

function foo($he)
{
    $hesh = $he;
    $light = strlen($hesh);
        
    $hesh = preg_replace('/[^0-9+]/','',$hesh);
    for ($i=1; $i<$light*3; $i+=3)
    {
        $hesh1 .= $hesh{$i};
    }
    
    return $hesh1;
}
?>