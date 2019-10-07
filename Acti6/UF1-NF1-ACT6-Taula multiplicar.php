<?php



	$numero=$_GET["numero"];
	$N=$_GET["N"];
	$total=0;
	if(isset($_GET["numero"])){
	for($i=0;$i<=$N;$i++){
		$total=$numero*$i;
		echo $i."*".$numero." = ".
	$total."<br>";
	}
	
	}else echo "Intordueix un numero per a fer les opracions";
	

?>
