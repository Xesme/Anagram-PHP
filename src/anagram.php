<?php

    class Anagram
    {


        function checkCharacters()
         {
            $a = "tale";
            $b = "crib";


            $countA = count_chars($a, 1);
            $countB = count_chars($b, 1);

        if ($countA == $countB)
        {
        	echo "These words match $a and $b ";
        } else {
        	echo "There is not a match";
        }
        }
    }

?>
