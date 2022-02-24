<?php

    function Factorial($input){
        $factorial = 1;
            for($i=$input; $i>=1; $i--)
            {
                $factorial = $factorial * $i;  
            } 
        echo "INPUT : $input";
        echo "<br>";
        echo "OUTPUT $factorial";
        echo "<br><br>";
        }

Factorial(4);
Factorial(8);

?>
