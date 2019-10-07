<?php
 $Temperatures = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83

);
$valor=$_GET['tipus'];
$t=0; 
$l=count($Temperatures); 
$str = "&deg";

if($_GET['tipus']==caluros){

foreach($Temperatures as $v) { $t += $v; }
echo "Temperatures màximes<br>";
$avg= $t/$l; echo "La temperatura màxima mitjana del mes ha estat de : ".$avg." ".$str."F"."<br><br> ";
echo "Major temperaturas :<br>";
 $m[0]= max($Temperatures);
for($i=1; $i <5 ; $i++) { $m[$i]=max(array_diff($Temperatures,$m)); }
 	foreach ($m as $key => $value) 
	{ echo " ".$value." ".$str."F"."<br>"; }

  
}
if($_GET['tipus']==fredes){
 
echo "Menor temperaturas : <br>"; $mi[0]= min($Temperatures); 
for($i=1; $i <5 ; $i++) { $mi[$i]=min(array_diff($Temperatures,$mi)); } 
foreach ($mi as $key => $value) 
{ echo " ".$value." ".$str."F"."<br>"; } 
}

?> 
