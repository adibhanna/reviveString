<?php

use App\Substring;
use PHPUnit\Framework\TestCase;

class SubStringsTest extends TestCase
{
    /**
     * @test
     * @dataProvider strings
     */
    function it_calculates_all_unique_substrings_of_a_given_string($string, $expected)
    {
        $subString = new Substring;

        $this->assertEquals(
            $expected, $subString->generate($string, strlen($string))
        );
    }

    public function strings()
    {
        return [
            [ "ab", [ "a", "b", "ab" ] ],
            [ "abc", [ "a", "b", "c", "ab", "bc", "abc" ] ],
            [ "kbm", [ "k", "b", "m", "kb", "bm", "kbm" ] ],
            [ "abcd", [ "a", "b", "c", "d", "ab", "bc", "cd", "abc", "bcd", "abcd" ] ],
            [ "dbac", [ "d", "b", "a", "c", "db", "ba", "ac", "dba", "bac", "dbac" ] ],
            [ "ertk", [ "e", "r", "t", "k", "er", "rt", "tk", "ert", "rtk", "ertk" ] ],
            [
                "abcde",
                [ "a", "b", "c", "d", "e", "ab", "bc", "cd", "de", "abc", "bcd", "cde", "abcd", "bcde", "abcde" ],
            ],
        ];
    }
}
