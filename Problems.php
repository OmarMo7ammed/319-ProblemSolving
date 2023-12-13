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
    ///////////////////////////////////////////////////
    // 11- Remove the word (by) from the string and print the string with and without (by)
    $sentence = "EraaSoft Learn by practice";
    $length = strlen("by");
    $pos = strpos($sentence,"by");
    $without = str_replace("by"," ",$sentence);
    echo "With by : " . $sentence . '<br>';
    echo "Without by : " . $without . '<br>';
    /////////////////////////////////////////////////
    // 12- Make a new variable called (Full_string) that concatenate string_one and string_two
    $string_one = "Eraa";
    $string_two = "Soft";
    $full_string = $string_one.$string_two;
    echo $full_string . '<br>';
    /////////////////////////////////////////////////
    // 13- Compare the full_string and this string (EraaSoft).
    if ($full_string === "EraaSoft"){
        echo "The full string matches 'EraaSoft' <br>";
    }else {
        echo "The full string does not matche 'EraaSoft' <br>";
    }
    ///////////////////////////////////////////////////
    // 14- Write a PHP script to split the following string.
    // Sample string: 'ErraSoft' 
    // Expected Output: Er/ra/So/ft
    $string = 'ErraSoft';
    $characters = str_split($string,2);
    $split_string = implode("/",$characters);
    echo "Sample String : 'ErraSoft' <br>";
    echo "Expected Output : $split_string <br>";
    //////////////////////////////////////////////////
    // 15- Write a PHP script that stores the number as a variable and checks if it is odd or even.
    $num = 12;
    if($num % 2 == 0){
        echo "$num is Even Number <br>";
    }else{
        echo "$num is  Odd Number <br>";
    }
    //////////////////////////////////////////////////
    // 16- Write a PHP script that stores the string as a variable and checks if the length is odd or even.
    $str = "Omar Mohammed";
    if(strlen($str) % 2 == 0){
        echo "$str is Even Number <br>";
    }else {
        echo "$str is Odd Number <br>";
    }
    //////////////////////////////////////////////////
    // 17- Check from this string o If the string has “gain” Print ( success word ) o
    //  If the string has ( peen ) Print ( success word )  Else ( wrong word )
    $description = "no pain , no gain ";
    if (str_contains($description,"gain") || str_contains($description,"peen")){
        echo "Success Word <br>";
    }else {
        echo "Wrong Word <br>";
    }
    //////////////////////////////////////////////////
    // 18- A Boolean is a data type that has only two values true or false. 
    // These values often correspond to 1 (true) or 0 (false). When a 1 or a 0 is used,
    //  it's called an int Boolean. Write a PHP script that stores an int Boolean and outputs 
    //  its opposite (1 becomes 0 and 0 becomes 1).
    $booleanValue = 0;
    if ($booleanValue == 1){
        echo "Original Value : $booleanValue <br>";
    }elseif($oppositeValue = !$booleanValue){
        echo "Opposite Value : $oppositeValue <br>";
    }
    ////////////////////////////////////////////////////
    // 19- Write a PHP script that stores a word and determines Is the Word is 
    // Singular or Plural? (A plural word is one that ends in "s".)
    $wordd = "Omar";
    if(substr($wordd,-1) === 's'){
        echo "$worrd is Singular Value <br>";
    }else{
        echo "$wordd is Plural Value <br>";
    }
    /////////////////////////////////////////////////////
    // 20- Make a calculator with these operations using if and else if
    // o Submission 
    // o Subtraction 
    // o Multiplication 
    // o Division 
    // o Power 
    // o Modulus
    $num1 = 4;
    $num2 = 2;
    function submission($num1,$num2){
        return $num1 + $num2;  // 6
    }
    function subtraction($num1,$num2){
        return $num1 - $num2;  // 2
    }
    function multiplication($num1,$num2){
        return $num1 * $num2;  // 8
    }
    function division($num1,$num2){
        if($num2 != 0){
            return $num1 / $num2; // 2
        }else{
            return "Cannot Divide by Zero";
        }
    }
    function power($num1,$num2){
        return pow($num1,$num2);  // 16
    }
    function modulus($num1,$num2){
        if($num2 != 0){
            return $num1 % $num2;
        }else{
            return "Cannot find modulus with zero";
        }
    }

    echo "Addition: ".submission($num1,$num2).'<br>';
    echo "Subtraction: ".subtraction($num1,$num2).'<br>';
    echo "Multiplication: ".multiplication($num1,$num2).'<br>';
    echo "Division: ".division($num1,$num2).'<br>';
    echo "Power: ".power($num1,$num2).'<br>';
    echo "Modulus: ".modulus($num1,$num2).'<br>';

 

    
    
    









    












?>