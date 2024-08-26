<?php 


	//Exercício 01 - Dupla:
	//Nome: Davi Nunes de Brito
	//Nome: Filippie Amaral


	$exame = 0;
	$aprovado = 0;
	$reprovado = 0;

	//aluno 01:

	$alunA = 0;
	$notaA1 = 6;
	$notaA2 = 6;
	$media = 0;


	$media= ($notaA1 + $notaA2)/2;

	echo "<b>Aluno 01:</b><br> Média: $media<br>";

	if ($media>=7) {
		echo"Aprovado";
		$aprovado++;
	}elseif ($media>=3) {
		echo"Exame";
		$exame++;
	}else{
		echo"Reprovado";
		$reprovado++;
	}

	echo "<br>====================<br>";

	//aluno 02:

	$alunB = 0;
	$notaB1 = 3;
	$notaB2 = 9;
	$media = 0;


	$media= ($notaB1 + $notaB2)/2;

	echo "<b>Aluno 02:</b><br>Média: $media<br>";

	if ($media>=7) {
		echo"Aprovado";
		$aprovado++;
	}elseif ($media>=3) {
		echo"Exame";
		$exame++;
	}else{
		echo"Reprovado";
		$reprovado++;
	}

	echo "<br>====================<br>";

	//aluno 03:

	$alunC = 0;
	$notaC1 = 10;
	$notaC2 = 4;
	$media = 0;


	$media= ($notaC1 + $notaC2)/2;

	echo "<b>Aluno 03:</b><br>Média: $media<br>";

	if ($media>=7) {
		echo"Aprovado";
		$aprovado++;
	}elseif ($media>=3) {
		echo"Exame";
		$exame++;
	}else{
		echo"Reprovado";
		$reprovado++;
	}

	echo "<br>====================<br>";

	//aluno 04:

	$alunD = 0;
	$notaD1 = 2;
	$notaD2 = 3;
	$media = 0;


	$media= ($notaD1 + $notaD2)/2;

	echo "<b>Aluno 04:</b><br>Média: $media<br>";

	if ($media>=7) {
		echo"Aprovado";
		$aprovado++;
	}elseif ($media>=3) {
		echo"Exame";
		$exame++;
	}else{
		echo"Reprovado";
		$reprovado++;
	}

	echo "<br>====================<br>";

	//aluno 05:

	$alunE = 0;
	$notaE1 = 6;
	$notaE2 = 5;
	$media = 0;


	$media= ($notaE1 + $notaE2)/2;

	echo "<b>Aluno 05:</b><br>Média: $media<br>";

	if ($media>=7) {
		echo"Aprovado";
		$aprovado++;
	}elseif ($media>=3) {
		echo"Exame";
		$exame++;
	}else{
		echo"Reprovado";
		$reprovado++;
	}

	echo "<br>====================<br>";

	//aluno 06:

	$alunF = 0;
	$notaF1 = 9;
	$notaF2 = 7;
	$media = 0;


	$media= ($notaF1 + $notaF2)/2;

	echo "<b>Aluno 06:</b><br>Média: $media<br>";

	if ($media>=7) {
		echo"Aprovado";
		$aprovado++;
	}elseif ($media>=3) {
		echo"Exame";
		$exame++;
	}else{
		echo"Reprovado";
		$reprovado++;
	}
	echo "<br>====================<br>";

	echo "Número de <b>aprovados</b>: $aprovado<br>";
	echo "Número de <b>exames</b>: $exame<br>";
	echo "Número de <b>reprovados: $reprovado</b><br>";
	$media = ($notaA1+$notaA2+$notaB1+$notaB2+$notaD2+$notaD1+$notaC2+$notaC1+$notaE1+$notaE2+$notaF1+$notaF2)/12;
	echo "====================<br>";
	echo "A média da <b>turma</b> é: $media";

?>