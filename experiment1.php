<?php
//Function to calculate the area of rectangle 
		function calculateArea($length,$width) {
			return $length * $width;
		}
		//user inputfor length and width
		$length = 10;
		$width = 5;
		$area = calculateArea($length,$width);

		echo "The area of the rectangle is:".$area."Square units.\n";
		if($area>50) {
			echo "this area is greater.\n";
		} else {
			echo "this area is less than 50.\n";
		}?>