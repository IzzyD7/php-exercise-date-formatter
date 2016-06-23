<?php

function date_formatter($ymd) {

	var_dump($ymd);
	if (date_create($ymd) && date_create_from_format("Y-m-d", $ymd) && $ymd ==! NULL) {
	 	$date = date_create($ymd);
		 	if (date_format($date, 'L') === 1) {
		 		return "";
		 	} else{
		 	var_dump($date);
		 	$test = date_format($date, "l, F jS Y");
			return $test;
		 	}
	 }	else {
	 	return "";
	 }
}


// $test = date_format($date, 'l-F-d-Y');
// var_dump($test);
// }

echo date_formatter("2015-02-29");
//year-month-day format.