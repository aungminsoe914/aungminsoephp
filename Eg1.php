<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript" language="javascript">
		<!--
			//Browser Support Code
			function ajaxFunction(){
				var ajaxRequest;//The variable that makes Ajax possible!
				try{
					//Opera 8.0+,Firefox,Safari
					ajaxRequest=new XMLHttpRequest();

				}catch (e){
					//Internet Explorer Browsers
					try{1
						ajaxRequest=new ActiveXObject("Msxml12.XMLHTTP");

					}catch(e){
						//Something went wrong
						alert("Your browser broke!");
						return false;
					}
				}
			}
			//Create a function that will receive data
			//sent form the server and will update
			//div section in the same page.

			ajaxRequest.onreadystatechange=function(){
				if(ajaxRequest.readyState==4){
					var ajaxDisplay=document.getElementById('ajaxDiv');
					ajaxDispaly.innerHTML=ajaxRequest.responseText;
				}
			}
			//Now get the value from user and pass it to
			//server script.
			var age=document.getElementById('age').value;
			var wpm=document.getElementById('wpm').value;
			var sex=document.getElementById('sex').value;
			var queryString="?age="+age;
			queryString+="&wpm="+wpm+"&sex="+sex;
			ajaxRequest.open("GET","ajax-example.php"+querystring,true);
			ajaxRequest.send(null);

		// -->
	</script>
		<form name='myForm'>
		Max Age:<input type='text' id='age'/><br>
		Max WPM:<input type='text' id='wpm'/><br>
		Sex:<select id='sex'>
		<option value="m" >m</option>
		<option value="f">f</option>
		</select><input type='button' onclick='ajaxFunction()' value='Query MySQL'/>
		</form>
		<div id='ajaxDiv'>Your result will dispaly here</div>


</body>
</html>