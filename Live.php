<!DOCTYPE html>
<html>
<head>
	<script >
		function showResult(str){
			if(str.lenght==0){
				document.getElementById("livesearch").innerHTML="";
				document.getElementById("livesearch").style.border="0px";
				return;
			}
			if(window.XMLHttpRequest){
				//code for IE7+,Firefox,Chrome,Opera,Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				//code for IE6,IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHttp");
			}
			xmlhttp.onreadystatechange=function(){
				if(mlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
					document.getElementById("livesearch").style.border="1px solid #A5ACB2";
				}
			}
			xmlhttp.open("GET","livesearch.php?="+str,true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
<form>
	<input type="text" size="30" onkeyup="showResult(this.value)">
	<div id="livesearch"></div>
</form>
</body>
</html>