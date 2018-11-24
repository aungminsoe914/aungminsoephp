<html>
	<head>
		<title></title>
	</head>
	<body>
		<table border="10px">
			<?php
				for($i=1;$i<=8;$i++)
					{
						echo "<tr>";
							for($j=1;$j<=8;$j++)
								{
									$f=$i+$j;
									if($f%2==0)
										{
										echo "<td height=30px width=30px bgcolor=#FFFFFF>**</td>";
										}
									else
										{
											echo "<td height=30px width=30px bgcolor=#000000></td>";
										}

								}
								echo "</tr>";

							}

				?>
		</table>
	</body>	
</html>

					