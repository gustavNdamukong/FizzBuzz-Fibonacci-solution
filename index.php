<?php

    function fizzBuzz()
    {
        $count = 1;
        while ($count <= 20)
        {
            if (($count % 3 == 0) && ($count % 5 == 0))
            {
                echo 'FizzBuzz <br>';
            }
            elseif (($count % 3 == 0) && ($count % 5 != 0))
            {
                echo 'Fizz <br>';
            }
            elseif (($count % 5 == 0) && ($count % 3 != 0))
            {
                echo 'Buzz <br>';
            }
            else
            {
                echo $count.'<br>';
            }

            $count++;
        }
    }



    fizzBuzz();






    function Fibonacci($num)
    {

        if($num == 0) {
            return 0;
        }
        elseif($num == 1)
        {
            return 1;
        }

        return(Fibonacci($num -1) + Fibonacci( $num -2));
    }



    $num =10;
    for($counter = 0; $counter < $num; $counter++)
    {
        echo Fibonacci($counter).' ';
    }
