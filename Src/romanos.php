<?php
    print "Programa para pasar números a notación romana\n Ingrese un números\n";
    $numero = 2000;
    $m = 0;
    $c = 0;
    $d = 0;
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
    0  => '',
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
    $decimales = [
    0  => '',
    1  => 'X',	
    2  => 'XX',
    3  => 'XXX',
    4  => 'XL',
    5  => 'L',
    6  => 'LX',
    7  => 'LXX',
    8  => 'LXXX',
    9  => 'XC'
    ];
    $centenas = [
    0  => '',
    1  => 'C',
    2  => 'CC',
    3  => 'CCC',
    4  => 'CD',
    5  => 'D',
    6  => 'DC',
    7  => 'DCC',
    8  => 'DCCC',
    9  => 'CM'
    ];
    $miles = [
    0  => '',
    1  => 'M',
    2  => 'MM',
    3  => 'MMM'
    ];
    $unidades = $miles[$m]. $centenas[$c] . $decimales[$d] . $unidades[$numero];
    print $unidades;
?>
