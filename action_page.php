<?php

{
    $txt= $_POST['firstname'].' - '.$_POST['lastname'] . PHP_EOL; 
    file_put_contents('fields.txt', $txt, FILE_APPEND);
}
?>