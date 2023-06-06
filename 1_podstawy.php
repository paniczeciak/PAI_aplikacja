<?php
	$firstName = "Janusz";
	$lastName = "Nowak";
	echo "Imię i nazwisko: $firstName $lastName<br>";
	echo 'Imię i nazwisko: $firstName $lastName<br>';

//heredoc
	echo <<< DATA
		Imię: $firstName<br>
		Nazwisko: $lastName
		<hr>
DATA;

	$data = <<< DATA
		Imię: $firstName<br>
		Nazwisko: $lastName
		<hr>
DATA;
	echo $data;
//nowdoc
	echo <<< 'DATA'
		Imię: $firstName<br>
		Nazwisko: $lastName
		<hr>
DATA;
	$bin = 0b1011;
	echo $bin; //11
//$oct = 0o12;
	$oct = 01011;
	echo $oct; //10
	$hex = 0x1A;
	echo $hex; //26
?>

