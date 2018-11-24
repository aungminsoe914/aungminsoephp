<?php
		function mysetcookies()
		{
				//setcookie(name,value,expire)
				setcookie('Test','Hello Cookies Testing',time()+3600,'/','',0);
		}
		//mysetcookies();



		function myGetCookies()
		{
			if (isset($_COOKIE['Test'])) {
				echo $_COOKIE['Test'];
				# code...
			}
			else
				echo "There id no Cookies";
			
		}
		myGetCookies();


		function myDeleteCookies()
		{
			//setcookie(name,value,expire,path,domain,security);
			setcookie('Test','Hello cookie Testing',time()-3600,'/','',0);

		}
		//myDeleteCookies();
?>