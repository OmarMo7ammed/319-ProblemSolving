<?php
    // 1- Write a PHP script that records 3 digits and prints the total of the first two digits 
    // multiplied by the third digit.
    function get_Digits($number1,$number2,$number3){
        return ($number1 + $number2) * $number3;
    }
    echo get_Digits(1,2,3) . "<br>";
    /////////////////////////////////////////////////
    // 2- A program that calculates the size of a box whose length and width are fixed
    //  with a value of 5 and 10 and the height is variable (size = length x width x height)
    function getSize($height){
        $length = 5;
        $width = 10;
        $size = $length * $width * $height;
        return "Box Size is : $size <br>";
    };
    echo getSize(2);
    //////////////////////////////////////////////
    // 3- Write a PHP script that takes a number integer representing the hours and
    //  converts it to seconds.
    function convertTo_Seconds($hours){
        $minutes = 60;
        $seconds = 60;
        $hour = $hours * $minutes * $seconds;
        return $hour .' Seconds';
    };
    echo convertTo_Seconds(1).'<br>';
    ////////////////////////////////////////////////
    // 4- Write a PHP script that calculates the Area of a Triangle
    //  store the base and height Print the area
    function calcArea($base,$height){
        $Triangle_Area = (1/2) * $base * $height;
        return "The Area Is : $Triangle_Area";
    };
    echo calcArea(10,2).'<br>';
    ////////////////////////////////////////////////
    // 5- Write a PHP script that takes the age in years and prints the age in days.
    function getDayes($age){
        $dayes_In_year = 365;
        $day = $age * $dayes_In_year;
        return "$day Days";
    };
    echo getDayes(22).'<br>';
    ////////////////////////////////////////(/////////
    // 6- Get the length of this sentence. (EraaSoft Learn by practice)
    $sentence = "EraaSoft Learn by practice";
    echo "The Length is : ".strlen($sentence).'<br>';
    /////////////////////////////////////////////////
    // 7- Get the length of this sentence without spaces           (str_replace())
    $sentence = "EraaSoft Learn by practice";
    $sentence_Without_Spaces = str_replace(" ","",$sentence);
    echo "The Length Without Spaces : ".strlen($sentence_Without_Spaces).'<br>';
    /////////////////////////////////////////////////
    // 8- Get the number of words in this sentence.                (str_word_count())
    $sentence = "EraaSoft Learn by practice";
    echo "Number Of Words Is : ".str_word_count($sentence).'<br>';
    ////////////////////////////////////////////////
    // 9- Check if this word (by) exists in the string or not.     (str_contains())
    $sentence = "EraaSoft Learn by practice";
    echo "The Word Exists : ".str_contains($sentence,"by").'<br>';
    ////////////////////////////////////////////////
    // 10 -Get the word (EraaSoft) from the string and print it.   (substr())
    $sentence = "EraaSoft Learn by practice";
    $position = strpos($sentence,"EraaSoft");
    echo "The Word : ". substr($sentence, $position, strlen("EraaSoft")) . '<br>';
    
    // if ($position !== false) {
    //     $foundWord = substr($sentence, $position, strlen('EraaSoft'));
    //     echo "Found the word: $foundWord";
    // } else {
    //     echo "Word not found";
    // }
    ///////////////////////////////////////////////////







    












?>