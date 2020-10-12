<?php

 function replace(){
    $p = "python is hard languege, but i have to learn python";
    $replace_string = str_replace("python","php", $p);
    echo $replace_string;
}

replace();
?>
