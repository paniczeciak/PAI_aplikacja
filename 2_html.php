<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Lista</title>
</head>
<body>
	<h4>Lista</h4>
	<ul>
		<li>Poznań</li>
		<li>Gniezno</li>
		<li>Września</li>
	</ul>
	<?php
		$city = "Jarocin";
		echo <<< LIST
			<ul>
				<li>Poznań</li>
				<li>Gniezno</li>
				<li>Września</li>
				<li>$city</li>
			</ul>
LIST;
	?>
	<h4>Lista numerowana</h4>
	<?php
    //include, include_once, require, require_once
    @include "./scripts/script1.php";
    include_once "./scripts/script.php";
    //@require "./scripts/script1.php";
	?>
    <h3>Dane po wywołaniu skryptu</h3>

    <ol>
        <li>Rozdział 1
            <ul>
                <li>Poznań</li>
                <li>Gniezno</li>
                <li>Jarocin</li>
            </ul>
        </li>
        <li>Rozdział 2</li>
        <li>Rozdział 3</li>
    </ol>
</body>
</html>
