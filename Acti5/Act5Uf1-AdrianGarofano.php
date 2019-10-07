<html>
<body>
	
<?php
$dia=date('w');
	
$hora24=date('H');
	
	
	if($dia==0){
		echo "Avui la pàgina no és accessible";
	}else{
		if($dia==1&&$hora24>=8){
		echo "Hola,benvinguts";
		}else{
			if($dia==2&&$hora24>=8){
			echo "Hola,benvinguts";
			}else{
				if($dia==3&&$hora24>=8){
				echo"Hola,benvinguts";				
				}else{
					if($dia==4&&$hora24>=8){
					echo "Hola,benvinguts";	
					}else{
						if($dia==5&&$hora24>=8){
							echo "Hola,benvinguts";							
							}else {
								if($dia==6&&$hora24>=8){
									echo "Avui la pàgina no és accessible";			
								}else{
									echo "La pagina sera disponilbe a les 08:00";
								}
							}					
						}
					}			
			}
		}
	
	}

?>
</body>
</html>
