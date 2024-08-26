<?php 

	//Exercício 2 - Dupla:
	//Nome: Davi Nunes de Brito
	//Nome: Filippie Amaral
	


	//================================================================

	$mesa=0; //Escolha uma mesa de 1 a 40.
	$lugares=0; //Você pode escolher até 6 lugares pra cada mesa.

	//================================================================





	$m1=6;
	$m2=4;
	$m3=0;
	$m4=0;
	$m5=0;
	$m6=0;
	$m7=0;
	$m8=6;
	$m9=2;
	$m10=0;
	$m11=6;
	$m12=6;
	$m13=1;
	$m14=3;
	$m15=6;
	$m16=4;
	$m17=5;
	$m18=6;
	$m19=6;
	$m20=6;
	$m21=0;
	$m22=5;
	$m23=0;
	$m24=6;
	$m25=4;
	$m26=6;
	$m27=0;
	$m28=6;
	$m29=3;
	$m30=6;
	$m31=0;
	$m32=0;
	$m33=2;
	$m34=6;
	$m35=3;
	$m36=6;
	$m37=6;
	$m38=6;
	$m39=6;
	$m40=6;
	$t1="Você escolheu a mesa";
	$t2="Quantos lugares você quer? (Máximo de 6)";


	if ($mesa >= 1 && $mesa <= 40) {
		if ($lugares > 0 && $lugares < 7) {

			switch ($mesa) {
				case 1:
					if ($lugares <= $m1) {
						echo "$t1 1 e reservou $lugares lugares.";
						$m1=$m1-$lugares;
					}else{
						echo "Essa mesa não está disponível.";
					}
					break;
				case 2:
					if ($lugares <= $m2) {
						echo "$t1 2 e reservou $lugares lugares.";
						$m2=$m2-$lugares;
					}else{
						echo "Essa mesa não está disponível.";
					}
					break;
				case 3:
					if ($lugares <= $m3) {
						echo "$t1 3 e reservou $lugares lugares.";
						$m3=$m3-$lugares;
					}else{
						echo "Essa mesa não está disponível.";
					}
					break;
				case 4:
					if ($lugares <= $m4) {
						echo "$t1 4 e reservou $lugares lugares.";
						$m4=$m4-$lugares;
					}else{
						echo "Essa mesa não está disponível.";
					}
					break;
				case 5:
					if ($lugares <= $m5) {
						echo "$t1 1 e reservou $lugares lugares.";
						$m1=$m1-$lugares;
					}else{
						echo "Essa mesa não está disponível.";
					}
					break;
				case 6:
					if ($lugares <= $m6) {
						echo "$t1 1 e reservou $lugares lugares.";
						$m6=$m6-$lugares;
					}else{
						echo "Essa mesa não está disponível.";
					}
					break;
				case 7:
					if ($lugares <= $m7) {
						echo "$t1 1 e reservou $lugares lugares.";
						$m7=$m7-$lugares;
					}else{
						echo "Essa mesa não está disponível.";
					}
					break;
				case 8:
			        if ($lugares <= $m8) {
			            echo "$t1 8 e reservou $lugares lugares.";
			            $m8 = $m8 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 9:
			        if ($lugares <= $m9) {
			            echo "$t1 9 e reservou $lugares lugares.";
			            $m9 = $m9 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 10:
			        if ($lugares <= $m10) {
			            echo "$t1 10 e reservou $lugares lugares.";
			            $m10 = $m10 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 11:
			        if ($lugares <= $m11) {
			            echo "$t1 11 e reservou $lugares lugares.";
			            $m11 = $m11 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 12:
			        if ($lugares <= $m12) {
			            echo "$t1 12 e reservou $lugares lugares.";
			            $m12 = $m12 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 13:
			        if ($lugares <= $m13) {
			            echo "$t1 13 e reservou $lugares lugares.";
			            $m13 = $m13 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 14:
			        if ($lugares <= $m14) {
			            echo "$t1 14 e reservou $lugares lugares.";
			            $m14 = $m14 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 15:
			        if ($lugares <= $m15) {
			            echo "$t1 15 e reservou $lugares lugares.";
			            $m15 = $m15 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 16:
			        if ($lugares <= $m16) {
			            echo "$t1 16 e reservou $lugares lugares.";
			            $m16 = $m16 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 17:
			        if ($lugares <= $m17) {
			            echo "$t1 17 e reservou $lugares lugares.";
			            $m17 = $m17 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 18:
			        if ($lugares <= $m18) {
			            echo "$t1 18 e reservou $lugares lugares.";
			            $m18 = $m18 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 19:
			        if ($lugares <= $m19) {
			            echo "$t1 19 e reservou $lugares lugares.";
			            $m19 = $m19 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 20:
			        if ($lugares <= $m20) {
			            echo "$t1 20 e reservou $lugares lugares.";
			            $m20 = $m20 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 21:
			        if ($lugares <= $m21) {
			            echo "$t1 21 e reservou $lugares lugares.";
			            $m21 = $m21 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 22:
			        if ($lugares <= $m22) {
			            echo "$t1 22 e reservou $lugares lugares.";
			            $m22 = $m22 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 23:
			        if ($lugares <= $m23) {
			            echo "$t1 23 e reservou $lugares lugares.";
			            $m23 = $m23 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 24:
			        if ($lugares <= $m24) {
			            echo "$t1 24 e reservou $lugares lugares.";
			            $m24 = $m24 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 25:
			        if ($lugares <= $m25) {
			            echo "$t1 25 e reservou $lugares lugares.";
			            $m25 = $m25 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 26:
			        if ($lugares <= $m26) {
			            echo "$t1 26 e reservou $lugares lugares.";
			            $m26 = $m26 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 27:
			        if ($lugares <= $m27) {
			            echo "$t1 27 e reservou $lugares lugares.";
			            $m27 = $m27 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 28:
			        if ($lugares <= $m28) {
			            echo "$t1 28 e reservou $lugares lugares.";
			            $m28 = $m28 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 29:
			        if ($lugares <= $m29) {
			            echo "$t1 29 e reservou $lugares lugares.";
			            $m29 = $m29 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 30:
			        if ($lugares <= $m30) {
			            echo "$t1 30 e reservou $lugares lugares.";
			            $m30 = $m30 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 31:
			        if ($lugares <= $m31) {
			            echo "$t1 31 e reservou $lugares lugares.";
			            $m31 = $m31 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 32:
			        if ($lugares <= $m32) {
			            echo "$t1 32 e reservou $lugares lugares.";
			            $m32 = $m32 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 33:
			        if ($lugares <= $m33) {
			            echo "$t1 33 e reservou $lugares lugares.";
			            $m33 = $m33 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 34:
			        if ($lugares <= $m34) {
			            echo "$t1 34 e reservou $lugares lugares.";
			            $m34 = $m34 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 35:
			        if ($lugares <= $m35) {
			            echo "$t1 35 e reservou $lugares lugares.";
			            $m35 = $m35 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 36:
			        if ($lugares <= $m36) {
			            echo "$t1 36 e reservou $lugares lugares.";
			            $m36 = $m36 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 37:
			        if ($lugares <= $m37) {
			            echo "$t1 37 e reservou $lugares lugares.";
			            $m37 = $m37 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 38:
			        if ($lugares <= $m38) {
			            echo "$t1 38 e reservou $lugares lugares.";
			            $m38 = $m38 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 39:
			        if ($lugares <= $m39) {
			            echo "$t1 39 e reservou $lugares lugares.";
			            $m39 = $m39 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    case 40:
			        if ($lugares <= $m40) {
			            echo "$t1 40 e reservou $lugares lugares.";
			            $m40 = $m40 - $lugares;
			        } else {
			            echo "Essa mesa não está disponível.";
			        }
			        break;
			    default:
			        echo "Número da mesa inválido.";
			        break;
			}
		}else if($lugares == 0){
			echo "Como você digitou que quer 0 lugares, vamos encerrar o programa.";
		}else{
			echo "Insira uma quantidade de lugares válida, entre 1 a 6 lugares.";
		}
	}else if($mesa == 0){
		echo "Como você digitou que quer 0 mesas, vamos encerrar o programa.";
	}else{
		echo "Insira o número de uma mesa válida, entre a mesa 1 e a 40.";
	}


 ?>