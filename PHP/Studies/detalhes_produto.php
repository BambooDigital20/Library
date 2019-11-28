<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Catálogo de produtos</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>


<div class="container">
<div class="row">
<h1>Detalhes de produtos</h1>
</div>

<div class="row">
<div class="col-md-4">
	<?php

	$id_produto = $_GET['id_produto'];

	$detalhes[1] ="Detalhes das Cadeiras";
	$detalhes[2] ="Detalhes dos Fogões";
	$detalhes[3] ="Detalhes dos Roteadores";
	$detalhes[4] ="Detalhes das TV'S";

	echo $detalhes[$id_produto];

	?>
</div>
</div>
</div>

	

</body>
</html>