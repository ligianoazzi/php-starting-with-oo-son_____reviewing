<?php

$input = array(22, 34, 17, 18, 14, 13, 22, 25);

$filter = function(int $age){
	return ($age >= 18);
};

$output = array_filter($input, $filter);

print_r($output);