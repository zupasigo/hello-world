<?php

class Abcd
{
    public function getMe()
    {
        
        $sum = 0;
        for ($i = 0; $i < 10; $i++) {
            $sum = $sum + $i;
        }
        
        $tmp = "sum = $sum \n";

        return $sum;
    }
}

$abc = new Abcd();

echo $abc->getMe();
