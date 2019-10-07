<html>
	<body>	
<?php	
	
	$numLinks=$_GET['numLinks'];
		
		for($i=1;$i<=$numLinks;$i++){
			echo "<a href='pagina.php?pag=$i' > Pagina $i </a>" ;
		}

?>


</body>	
</html>
