<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">

		<title>Mensagens divertidas</title>

	</head>

	<body>
		<?php 
        echo 'teste tag padrão';  
		?>
		<?= 
        'teste tag impressão';
		?>
		<? 
        echo 'teste tag curta';
		?>
		<% 
        echo 'Asp tag não é usada nas versões mais recentes apartir da versão 5.6.15';
		%>

	</body>
</html>