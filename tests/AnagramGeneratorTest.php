<?php

    require_once "src/Anagram.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_checkChars()
        {
            // Arrange
            $test_AnagramGeneratorTest = new AnagramGeneratorTest;
            $input = "tale";

            // Act
            $result = $test_AnagramGeneratorTest->count_chars($input, 1);

            // Result
            $this->assertEquals(4);
        }
    }


?>
