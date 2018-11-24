<?php

$num=20000;
$city="Mandalay";
$country="Myanmar";
$val=50.5;
/*printf*/
//printf(format);
printf("There are %u of people in %s %s.",$num,$city,$country);
/*  %u is num.%s is string*/
/* %b = binary0010101
%% return % eg 50%....ect....
	%o=octa
*/
echo "<br> There are $num of people in $city $country";
/*End of peintf*/
///////////////////////////////////////////////////////////////////////
$file="mine1.txt";//If you run this file,file can work........
//fopen(filename,mode);
$handler=fopen($file,'w');
//fprintf(handle, format)

fprintf($handler,"There are %u of people in %s %s.Double value is %f.",$num,$city,$country,$val);
/* %f is float .......*//////////////////////////////////////////////
/*End of fprintf*///////////////////////////////////////////////////
?>





































