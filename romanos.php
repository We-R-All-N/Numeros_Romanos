<?php
    print "Programa para pasar números a notación romana\n Ingrese un números\n";

    $numero = 4000;

   	if($numero > 1000)
   	{
    $m=floor($numero/1000);
   	}
   	if($numero > 100)
   	{
    $c=floor($numero/100);
   	}
   	if($numero > 10)
   	{
    $d=floor($numero/10);
   	}
   	
?>