<?php

$single_line_input = trim(fgets(STDIN));
$single_line_input = str_replace(array("\r\n","\r","\n"), '', $single_line_input);
$array = explode(" ", $single_line_input);

var_dump($array);

