<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_checkCharacters()
        {
            // Arrange
            $test_AnagramGeneratorTest = new AnagramGeneratorTest;
            $a = "tale";
            $b = "late";

            // Act
            $result = $test_AnagramGeneratorTest->checkCharacters($a);

            // Result
            $this->assertEquals($result);
        }
    }


?>
