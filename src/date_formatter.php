<?php

function date_formatter($ymd) {
	var_dump($ymd);
	if (date_create($ymd) && $ymd ==! NULL) {
	 	$date = date_create($ymd);
	 	var_dump($date);
	 	$test = date_format($date, "l, F jS Y");
		return $test;
	 }	else {
	 	return "WHOOPS!!!";
	 }
}


// $test = date_format($date, 'l-F-d-Y');
// var_dump($test);
// }

echo date_formatter(NULL);
//year-month-day format.