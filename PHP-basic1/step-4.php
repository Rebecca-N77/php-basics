<?php
$name = "Rebecca";
$position = "tech consultant";
$github_URL = "https://github.com/Rebecca-N77";

echo " Hello, I'm , " . $name . "I'm a " . $position ."please check my github link" . $github_URL;
$final = '';
$final .= "Hello, I'm, " . $name;
$final .= "I'm a ";
$final .= $position;
$final .=  " please check my github link ";
$final .= $github_URL;
echo $final;

echo 'Hello, I\'m ,  ' . $name . 'I\'m a ' . $position .'please check my github link' . $github_URL;
echo " Hello, I'm , {$name} I'm a {$position} please check my github link {$github_URL}";
?>