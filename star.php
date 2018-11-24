<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<table cellspacing="0px" >
	 	<?php

	 			for($i=1;$i<=5;$i++)
	 				{
	 					echo "<tr>";

	 					for($j=1;$j<=5;$j++)
	 					{
	 						if($j<=1 or $i>=5)
	 						echo "<td>*</td>";
	 						else
	 							echo "    ";
	 					}
	 					echo "</tr>";
	 				}
	 	?>
	 </body>
</html>