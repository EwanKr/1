<?php
    function calcu($a , $b , $mode='som')
    {
        if ($mode == 'plus') {
            return $a + $b;
        }
        elseif($mode =='min')
        {
            return $a - $b;
        }
        elseif($mode == 'div')
            {
            return $a / $b;
        }

        else{
            return false;
        }
    }

    echo calcu(55, 48 , 'plus');
?>

