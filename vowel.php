<?php
	$alp=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	
	$b=$_POST["num1"];
	


		
		for($i=0;$i<26;$i++)
		
			if($b==$alp[$i])
			
				switch($b)
				{
					case "a":echo "This is vowel";break;
					case "e":echo "This is vowel";break;
					case "i":echo "This is vowel";break;
					case "o":echo "This is vowel";break;
					case "u":echo "This is vowel";break;
					default: echo "This is alphabet";break;


				}

				
			
		
			else
				echo " ";
		
?>