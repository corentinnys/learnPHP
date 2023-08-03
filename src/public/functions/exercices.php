<?php
// exercice 1

function firstCapitalizeLetter($name)
{
   return ucfirst($name) ;
}
 echo firstCapitalizeLetter('corentin');

// exercice 2
echo date("Y");
// exercice 3
echo date("Y-m-d H:i:s");

// exercice 4
function sum($number1,$number2)
{
    return $number1+$number2;
}
echo sum(10, 10);
// exercice 5
function createAcronym($string)
{

    $words = explode(' ',$string);

    $acronym ='';

    foreach ($words as $word)
    {
        $acronym .= $word[0];
    }
    return $acronym;
}

 echo createAcronym("In code we trust!");
// exercice 6
echo "<br/>";
function  replaceAWithAE($string)
{
    $search = array('a','e');
    $replace = 'æ';
    return str_replace($search,$replace,$string);
}

echo replaceAWithAE('caecotrophie');
echo "<br/>";
// exercice 7

function feedback($string,$class)
{
    return "<div class=$class>$class:$string</div>";
}
echo feedback("Incorrect email address", "error");

// exercice 8

function generate_random_word($min_len,$max_len)
{
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $word_len = rand($min_len,$max_len);
    $word ='';
    for ($i = 0; $i < $word_len; $i++) {
        $random_char = $letters[rand(0, strlen($letters) - 1)];
        $word .= $random_char;
    }
    return $word;
}


    $word1 = generate_random_word(1, 5);

    $word2 = generate_random_word(7, 15);
echo $word1;
echo $word2;

// exercice 9
function calculate_one_volume($ray,$height)
{
   return $ray * $ray * 3.14 *$height*(1/3);
}

echo calculate_one_volume(5,2);