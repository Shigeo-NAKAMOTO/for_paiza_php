<?php

$first_line_input = trim(fgets(STDIN));
$first_line_input = str_replace(array("\r\n","\r","\n"), '', $first_line_input);
$array_first_line = explode(" ", $first_line_input);

$array_below_lines = [];

for ( $i = 0; $i < $array_first_line[0]; $i++) {
    $below_line = trim(fgets(STDIN));
    $below_line = str_replace(array("\r\n","\r","\n"), '', $below_line);
    $below_line = explode(" ", $below_line);
    array_push($array_below_lines, $below_line);
}

var_dump($array_below_lines);
