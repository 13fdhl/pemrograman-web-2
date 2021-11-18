<?php

    for ($x=1;$x<101;$x++)
    {
        if ($x % 2 == 0)
        {
            echo "Perulangan ke - $x <br>";
        }
        else 
        {
            echo "Perulangan ke - $x <br>";
        }
    }
        $data = array();
        for ($y=1;$y<101;$y++)
        {
            array_push($data, rand(1,100));
        }
        echo "Nilai Array : ";
        foreach ($data as $key => $value)
        {
            if ($value % 2 == 0)
            {
                echo $value.",";
            }
        }
?>