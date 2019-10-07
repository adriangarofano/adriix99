<?php
	$valor=$_GET['pais'];

$eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
 "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

	
	foreach($eu as $index=>$capital){
		echo "La capital de ".$index." es ".$capital."<br>";	
	
		
	};

	if(isset($_GET['pais'])){
			echo "<br>";
			echo "La capital de ".$_GET['pais']." es: ".$eu[$_GET['pais']]."<br>";	
		
	
	}














?>
