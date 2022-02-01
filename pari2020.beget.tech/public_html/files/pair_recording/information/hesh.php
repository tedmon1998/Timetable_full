<?php

    function foo($hesh)
    {
        require_once ('../../security/.hthesh');
        
        $light = strlen($hesh);
            
        for($i=0; $i<$light; $i++)
        {
            $hesh1 .= $d{$i}.$hesh{$i}.$a{$i};
        }
    
        for($i=0; $i<$light*3; $i++)
        {
            for($t=0; $t<rand(0,3); $t++)
            {
                $num = rand(0,92);
                $sol_1 .= $sol{$num};
            }
            $hesh2 .= $hesh1{$i}.$sol_1;
            $sol_1=null;
        }
        
        return $hesh2;
    }
?>    
    