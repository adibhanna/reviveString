<?php

namespace App;

class Substring
{
    /**
     * Return an array of all substrings of a given string.
     *
     * @param $string
     * @param $string_length
     * @return array
     */
    public function generate($string, $string_length) : array
    {
        $result = [];
        // Starting point
        for ($length = 1; $length <= $string_length; $length++)
        {
            // Ending point
            for ($i = 0; $i <= $string_length - $length; $i++) {
                $s = null;

                $j = $i + $length - 1;

                for ($k = $i; $k <= $j; $k++) {
                    $s .= $string[$k];
                }

                array_push($result, $s);
            }
        }

        return $result;
    }
}
