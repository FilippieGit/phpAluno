<?php 

	function soma(){ #hashtag

		$num1= 10;
		$num2= 20;
		$resp= $num1+$num2;

		echo "$resp<br><br>"; 
	}

	soma();

	function somar($num1, $num2){

		$resp=$num1+$num2;

		echo "$resp <br><br>";

	}

	function somar2($num1, $num2){

		return($num1+$num2);

	}

	function mult($num1, $num2){

		$resp=$num1*$num2;

		echo "$resp <br><br>";

	}

	function mult2($num1, $num2){

		return($num1*$num2);

	}


	#Executando função
	somar(10,20);

	mult(30,40);

	somar(10,20) + mult(30,40);

	echo somar2(10,50);

	echo "<br><br>";

	echo somar2(10,20)+mult2(30,40);


 ?>