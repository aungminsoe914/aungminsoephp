<?php
header('Content-Type:text/xml;charset=utf-8');
$db = mysql_pconnect("loclhost","root","") or die("Couldn't connet to database");
mysql_select_db("studentdb");
$sql="SELECT * FROM studentdb";
$result=mysql_query($sql);
$num_row=mysql_num_rows($result);
	//echo "number of roll".$num_row;
if($num_row==0)
	return "NO data";
$doc=new DOMDocument();
$doc->formatOutput=true;
$root=$doc->createElement("studentdata");
$doc->appendChild($root);
	for($i=0;$i<$num_row;$i++)
	{
		$row=mysql_fetch_assoc($result);
		extract($row);
		$node=$doc->createElement("student");

		$stname=$doc->createElement("Stuname");
		$stname->appendChild($doc->createTextNode($Studentname));
		$node->appendChild($stname);

		$logrno=$doc->createElement("Studentrno");
		$logrno->appendChild($doc->cteateTextNode($Rno));
		$node->appendChild($logrno);

		$sex=$doc->createElement("Sex");
		$sex->appendChild($doc->createTextNode($Gender));
		$node->appendChild($sex);

		$add=$doc->createElement("Address");
		$add->appendChild($doc->createTextNode($Address));
		$node->appendChild($add);


		$phone=$doc->createElement("Mobilephone");
		$phone->appendChild($doc->createTextNode($phone));
		$node->appendChild($node);
	}

	mysql_close($db);
	echo $doc->saveXML();
	return;


?>