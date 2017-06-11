<?php

namespace MaestroRandomer;

/**
 * Contains useful random generation of characters.
 *
 * @package MaestroRandomer
 */
class Randomer
{
    private $characters = ["a", "b", "c", "d", "e", "f", "g", "h",
        "i", "j", "k", "l", "m", "n", "o", "p",
        "q", "r", "s", "t", "u", "v", "w", "x",
        "y", "z", "A", "B", "C", "D", "E", "F",
        "G", "H", "I", "J", "K", "L", "M", "N",
        "O", "P", "Q", "R", "S", "T", "U", "V",
        "W", "X", "Y", "Z", "1", "2", "3", "4",
        "5", "6", "7", "8", "9", "0"];

    /**
     * Returns a randomly generated alphanumeric number.
     *
     * @param int $length               the length of the new string
     * @param bool $includeUpperCase    optional parameter to determine if random string is upper case
     * @return string                   the new random string
     */
    public function generateRandomString($length, $includeUpperCase = true)
    {
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $randomNum = rand(0, count($this->characters));
            $str .= $this->characters[$randomNum];
        }
        if (!$includeUpperCase) {
            $str = strtolower($str);
        }
        return $str;
    }
}