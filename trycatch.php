<?php
	$file="himine.txt";

	try {
		if(file_exists($file))
			{echo "file exist";}
		else
			throw new Exception("File not found");
			
		
	} catch (Exception $e) {
		echo $e->getMessage();
		
	}






?>