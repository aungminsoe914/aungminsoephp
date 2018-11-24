<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>

</head>
<body onload="viewinfo()">
	<form method="post" name="f">
		<table>
			<tr>
				<td>
					<div id="res"></div>
				</td>
			</tr>

		</table>
	</form>

</body>
</html>

function getXMLHttpRequestObject()

{
	var req;
	if(window.XMLHttpRequest)
	{
		req=new XMLRequest();

	}
	else
	{
		req=new ActiveXObject("Microsoft.XMLHttp");

	}
	return req;

}
function viewinfo()
{
	request=getXMLHttpRequestObject();
	request.onreadystatechange=function(){
	if(request.readyState==4 && request.status==200)
	{
		if(request.responseXML){
		document.getElementByld("res").innerHTML=view_list(request.responseXML);
		//alert(request.responseText);

	}
	}
}
	request.open("GET","viewquery.php",true);
	request.send();

}
function view_list(XML)
{
	var info;
	var elements;
	elements=XML.documentElement.getElementsByTagName('student');
	info="<table width=100% cellpadding=5  border=1>";
		info+="<tr>";
		info+="<th>Rollnumber</th>"
		info+="<th>Student Name</th>"
		info+="<th>Gender</th>"
		info+="<th>Address</th>"
		info+="<th>Phone Number</th>"
		info+="</tr>"
		for(i=0;i < elements.length;i++)
		{
			srno=elements[i].getElementsByTagName('Studentrno');
			name=elements[i].getElementsByTagName('Stuname');
			gender=elements[i].getElementsByTagName('Sex');
			add=elements[i].getElementsByTagName('Address');
			phone=elements[i].getElementsByTagName('Mobilephone');
			info+="<tr>";
		info+="<td>"+srno[0].firstChild.nodeValue+"</td>";
		info+="<td>"+sname[0].firstChild.nodeValue+"</td>";
		info+="<td>"+gender[0].firstChild.nodeValue+"</td>";
		info+="<td>"+add[0].firstChild.nodeValue+"</td>";
		info+="<td>"+phone[0].firstChild.nodeValue+"</td>";
		info+="</tr>"
		
		}
	info+="</table>";
	return info;
	}