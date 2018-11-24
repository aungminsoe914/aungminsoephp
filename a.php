<?php
	for($i=1;$i<=7;$i++)
		{
			if($i==1)
				echo "&nbsp;"."&nbsp;".'**'."<br>";
			elseif($i==2 || $i<=7 && $i!=4)
				echo '*'."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;".'*'."<br>";
			elseif ($i==4)
				echo '****'."<br>"; 
		}



?>
<br><br>


<?php
	for ($j=1; $j <=7 ; $j++) 
	{
		if ($j==1 || $j==7) 
		 	echo '****'."<br>";
		
		elseif ($j==4) 
		 	echo '****'."&nbsp;"."<br>";
		 elseif ($j==2 || $j<=7 && $i!=4) 
		 	echo '*'."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;".'*'."<br>";

	}

  ?>