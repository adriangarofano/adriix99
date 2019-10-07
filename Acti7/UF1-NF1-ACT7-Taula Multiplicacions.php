<?php

	$numero=$_GET["numero"];
	$total=	0;
		
		
		echo"<table>";
		
		
		for($j=1;$j<=$numero;$j++){
			echo "<tr>";
			
			for($i=1;$i<=$numero;$i++){
			echo "<td>";
	
				$total=$i*$j;
				echo $total." ";
				
		}
			
		
		}
		echo "</td>";		
		echo "</tr>";	
		echo"</table>";
		



?>
