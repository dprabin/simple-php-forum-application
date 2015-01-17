<?php

//Helper Functions for Formatting

//URL FORMAT
function urlFormat($str){
    //Strip out all whitespaces
    $str=preg_replace('/\s*/',$str);
    //Convert the string to lowercase
    $str = strtolower($str);
    //URL Encode
    $str = urlencode ($str);
    return $str;
}

?>