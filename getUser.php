<?php
$q=intval($_GET['q']);
//$con=mysqli_connect('localhost,",",'my_db');
$con=mysql_connect('localhost','root',"");
if (!$con) {
	die('Cukd not connect:'.mysql_error($con));

	# code...
}
mysql_select_db("customerdb",$con);
$sql="SELECT * FROM customertb WHERE id=".$q."";
$result=mysql_query($sql,$con);
echo "<table border='1'>;
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Job</th>
</tr>";
while($row=mysql_fetch_array($result)){
	echo"<tr>";
		echo"<td>".$row['FirstName']."</td>";
		echo"<td>".$row['LastName']."</td>";
		echo"<td>".$row['Age']."</td>";
		echo"<td>".$row['Hometown']."</td>";
		echo"<td>".$row['Job']."</td>";
		echo"<tr>";

}
echo "</table>";
mysql_close();
?>