<?php
    print "Programa para pasar números a notación romana\n Ingrese un números\n";

    $numero = 4165;

   	if($numero > 1000)
   	{
    $m=floor($numero/1000);
   	}
   	$numero = $numero - $m*1000;
   	if($numero > 100)
   	{
    $c=floor($numero/100);
   	}
   	$numero=$numero - $c*100;
   	if($numero > 10)
   	{
    $d=floor($numero/10);
   	}
   	$numero = $numero - $d*10;
    $unidades = [
   	1  => 'I',
    2  => 'II',
    3  => 'III',
    4  => 'IV',
    5  => 'V',
    6  => 'VI',
    7  => 'VII',
    8  => 'VIII',
    9  => 'IX'
    ];
    
?>