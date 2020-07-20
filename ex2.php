<?php

$tipo=$_POST['tipo'];
$sueldo=$_POST['sueldo'];
$total=0;
  
switch ($tipo) {
			case 'a':
				echo "Su salario final es de: $".$total = $sueldo*(15/100)+($total+$sueldo);
				break;
        
				case 'b': 
				echo "Su salario final es de: $".$total = $sueldo*(10/100)+($total+$sueldo);
				break;
        
				case 'c': 
				echo "Su salario final es de: $".$total = $sueldo*(8/100)+($total+$sueldo); 
				break;
        
                case 'd': 
				echo "Su salario final es de: $".$total = $sueldo*(7/100)+($total+$sueldo);
				break;
        
				default: 
				echo "error";
				break;
			}



?>