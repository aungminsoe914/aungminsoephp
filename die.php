<?php
$file="minehk.txt";
	if(file_exists($file))
		echo "File exist";
	else
		die("File does not exist") ;

	//die //exit////// will use for terminate a program....
$handler=fopen($file, 'r');





?>