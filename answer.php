<?php
	$name = trim(fgets(STDIN)); // reads name
	$num = rand(6,15); //generats random number between 6 and 15
	echo $name." ".$num; // prints result
?>