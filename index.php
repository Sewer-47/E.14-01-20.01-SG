<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl8.css">
	<title>Nasz sklep komputerowy</title>
</head>
<body>
	<header>
		<div id="menu" class="header">
			<nav>
				<a href="index.php">Główna</a>
				<a href="procesory.html">Procesory</a>
				<a href="ram.html">RAM</a>
				<a href="grafika.html">Grafika</a>
			</nav>
		</div>
		<div id="logo" class="header">
			<h2>Podzespoły komputerowe</h2>
		</div>
	</header>

	<main>
		<h1>Dzisiejsze promocje</h1>
		<table>
			<thead>
				<tr>
					<th>NUMER</th>
					<th>NAZWA PODZESPOŁU</th>
					<th>OPIS</th>
					<th>CENA</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require_once 'connection.php';
					fillTable();
				?>
			</tbody>
		</table>
	</main>

	<footer>
		<div id="firstFooter" class="footer">
			<img src="scalak.jpg" alt="promocje na procesory">
		</div>
		<div id="secondSecondFooter" class="footer">
			<h4>Nasz sklep komputerowu</h4>
			<p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
		</div>
		<div id="thirdFooter" class="footer">
			<p>zadzwoń: 601 602 603</p>
		</div>
		<div id="fourthSecondFooter" class="footer">
			<p>Stronę wykonał: Seweryn</p>
		</div>
	</footer>
</body>
</html>