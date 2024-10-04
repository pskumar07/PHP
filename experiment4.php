<?php
function getDayName($dayNumber){
	switch($dayNumber){
		case 1:
		return "Monday";
		case 2:
		return "Tuesday";
		case 3:
		return "Wednesday";
		case 4:
		return "Thursday";
		case 5:
		return "Friday";
		case 6:
		return "Saturday";
		case 7:
		return "Sunday";
		default:
		return "Invalid day number.Please enter a number beetween 1 and 7";
	}
}

$dayNumber = 4;
echo "Today is " .getDayName($dayNumber)."\n";