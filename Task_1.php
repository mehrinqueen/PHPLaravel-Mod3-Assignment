<?php
$text = "The quick brown fox jumps over the lazy dog.";
function stringManipulation($text){
    $text = strtr($text,[
        "brown" => "red",
    ]);
    return strtolower($text);
    
}

echo stringManipulation($text);