<?php
$word = "thei";
$mystring = "The quick brown fox jumps over the lazy dog";
 
// Test if string contains the word 
if(strpos($mystring, $word) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}
?>