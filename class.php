<?php

class Abcd
{
    public function getMe()
    {
        $tmp = "abc";
        $sum = 0;
        for ($i = 0; $i < 10; $i++) {
            $sum = $sum + $i;
        }

        return $sum;
    }
}

$abc = new Abcd();

echo $abc->getMe();
