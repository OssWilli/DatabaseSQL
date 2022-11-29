<?php
 
function greet($name) {
    echo 'Hello '.$name.'!';
    echo 'Your name as '.strlen($name).' letters.';
}
 
greet('Andrew');
// Hello Andrew!
// Your name as 6 letters.
 
 
greet('Adam');
// Hello Adam!
// Your name as 4 letters.
?>