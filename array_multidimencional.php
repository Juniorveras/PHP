
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">

		<title>Arrays Multidimencional</title>

	</head>

	<body>
		
		<?php
        //Arrays Multidimencional é nada mais que ARRAYS com ARRAYS em conjunto em função mas na verdade se compara como uma MATRIZ(TIPO TABULEIRO DE XADREZ)//
        //exemplos://
        
        $tabuleiro[8]['a'] = 'torre preta';
        $tabuleiro[8]['b'] = 'bispo preto';
        $tabuleiro[8]['c'] = 'cavalo preto';
        $tabuleiro[8]['d'] = 'rainha preta';
        $tabuleiro[8]['e'] = 'rei preto';
        $tabuleiro[8]['f'] = 'bispo preto';
        $tabuleiro[8]['g'] = 'cavalo preto';
        $tabuleiro[8]['h'] = 'torre preta';

        $tabuleiro[7]['a'] = 'peão preto';
        $tabuleiro[7]['b'] = 'peão preto';
        $tabuleiro[7]['c'] = 'peão preto';
        $tabuleiro[7]['d'] = 'peão preto';
        $tabuleiro[7]['e'] = 'peão preto';
        $tabuleiro[7]['f'] = 'peão preto';
        $tabuleiro[7]['g'] = 'peão preto';
        $tabuleiro[7]['h'] = 'peão preto';

        $tabuleiro[6]['a'] = 'vazio';
        $tabuleiro[5]['a'] = 'vazio';
        $tabuleiro[4]['a'] = 'vazio';
        $tabuleiro[3]['a'] = 'vazio';

        $tabuleiro[2]['a'] = 'torre preta';
        $tabuleiro[2]['b'] = 'bispo preto';
        $tabuleiro[2]['c'] = 'cavalo preto';
        $tabuleiro[2]['d'] = 'rainha preta';
        $tabuleiro[2]['e'] = 'rei preto';
        $tabuleiro[2]['f'] = 'bispo preto';
        $tabuleiro[2]['g'] = 'cavalo preto';
        $tabuleiro[2]['h'] = 'torre preta';

        $tabuleiro[1]['a'] = 'peão preto';
        $tabuleiro[1]['b'] = 'peão preto';
        $tabuleiro[1]['c'] = 'peão preto';
        $tabuleiro[1]['d'] = 'peão preto';
        $tabuleiro[1]['e'] = 'peão preto';
        $tabuleiro[1]['f'] = 'peão preto';
        $tabuleiro[1]['g'] = 'peão preto';
        $tabuleiro[1]['h'] = 'peão preto';

        print_r($tabuleiro);
        echo '<br>';

        print_r($tabuleiro[8]['b'] =' Bispo preto 8, B');
        echo '<br>';

        print_r($tabuleiro[7]['a']);
        echo '<br>';


		?>
        

	</body>
</html>

