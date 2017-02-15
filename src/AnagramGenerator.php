<?php

    class Anagram
    {
        private $input1;
        private $input2;



        function checkCharacters()
         {
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
