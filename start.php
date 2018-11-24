<!DOCTYPE html>
<html>
<head>
	<title>User interface for Ajax,PHP,MySQL demo</title>
	<meta name="description" content="HTML code for user interface for Ajax,PHP and MySQL demo.">
	<link rel="stylesheet" href="../includes/bootstrap.css">
	<style type="text/css">
		body{padding-top: 40px;padding-left: 25%}
		li{list-style: none;margin:5px 0 5px 0; collor:#FF0000;}
	</style>
</head>
<body>
	<form class="well-home span6 form-horizontal" name="ajax-demo" id="ajax-demo">
		<div>
			<label for="book">Book</label>
			<div id="controls">
				<input type="text" id="book" onkeyup="book_suggestion()">
				<div id="suggestion"></div>
			</div>
		</div>
		<div>
			<div id="controls">
				<button type="submit">Submit</button>
			</div>
		</div>
	</form>
<script>
	function book_suggestion()
	{
		var book=document.getElementById("book").value;
		var xhr;
		if(window.XMLHttpRequest)
		{
			//Moxilla,Safari,...
			xhr=new XMLHttpRequest();
		}
		elseif(window.ActiveXObject){//IE 8 and older
			xhr=new ActiveXObject("Microsoft.XMLHTTP");
		}
		var data="book_name="+book;
			xhr.open("POST","book-suggestion.php",true);
			xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			xhr.send(data);
			xhr.onreadystatechange=display_data;
			function display_data(){
				if(xhr.readyState==4){
					if(xhr.status==200){
						//alert(xhr.responseText);
						document.getElementById("suggestion").innerHTML=xhr.responseText;
					}else{
						alert('There was a problem with the request.');
						
					}
				}
			}

	}
</script>
</body>
</html>