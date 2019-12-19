<?php

use PHPUnit\Framework\TestCase;

class LexicographicSortingTest extends TestCase
{
    /** @test */
    function it_sorts_an_array_of_strings_lexicographically()
    {
        $substrings = [ "e", "r", "t", "k", "er", "rt", "tk", "ert", "rtk", "ertk" ];
        natcasesort($substrings);
        $this->assertEquals([
            0 => "e",
            4 => "er",
            7 => "ert",
            9 => "ertk",
            3 => "k",
            1 => "r",
            5 => "rt",
            8 => "rtk",
            2 => "t",
            6 => "tk",
        ], $substrings);

        // check if the concatination is working.
        $this->assertEquals('eerertertkkrrtrtkttk', implode($substrings));
    }
}
