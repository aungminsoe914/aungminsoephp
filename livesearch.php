<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("link.xml")
$x=$xmlDoc->getElementsByTagName('link');
//get the q parmeter form URL
$q=$_GET["q"];
//lookup all link from the xml file if length of q>0
if(strlen($q)>0){
	$hint="";
	for($i=0;$i<($x->length);$i++){
		$y=$x->item($i)->getElementsByTagName('title');
		$z=$x->item($i)->getElementsByTagName('title');
		if($y->item(0)->nodeType==1){
			//find alink matching the search text
			if(stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)){
				if($hit==""){
					$hit="<a href=".$z->item(0)->childNodes->item(0)->nodeValue."'target='_blank>".
					$y->item(0)->childNodes->item(0)->nodeValue."</a>";

				}
				else
				{
					$hint=$hint."<br><a href=".
					$x->item(0)->childNodes->item(0)->nodeValue."'target='_blank>".
					$y->item(0)->childNodes->item(0)->nodeValue."</a>";
				}
			}
		}

	}

}