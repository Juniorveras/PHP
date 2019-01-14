<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">

		<title>Variaveis PHP</title>

	</head>

	<body>
		
        <?php
				
		//int
        $valor_inteiro = 1 * 4;
        echo $valor_inteiro;

        echo "<br>";

        $valor_inteiro = $valor_inteiro * 3;
        echo $valor_inteiro;

        echo "<br>";

		//float
        $valor_fracionado = 10.7;
        echo $valor_fracionado;

        echo "<br>";

		//boolean
        $estado = true; //false
        
        echo $estado;

        echo "<br>";

		//string
        $texto = "PHP teste";
        echo $texto;

        echo "<br>";

		//arrays
        
        //$msg_divertida[1]= 'E ai cuzão, ta ligado viado, aqui é Tiago Ventura';
        //$msg_divertida[2]= 'Se é loko tio, quebrada é loka, Tiago Ventura manda muito no Stand-up';
        //$msg_divertida[3]= 'Não levem a serio as msgs acima por favor so é teste e curto muito o Tiago Ventura';

        $texto = 'TEXTO TESTE TIPO STRING';

        $msg_divertida = array('J' => 1 ,
         'u' => 7.5 ,
         'n' => true ,
         'i' => $texto ,
         'o' => 0 ,'r' => 1, 
         1 => 'TESTE TEXTO MEU TIPO STRING' );

        var_dump($msg_divertida);
        echo '<br>';

        //print_r($msg_divertida);
        //echo '<br>';
        //echo $msg_divertida[2];
        //echo '<br>';
        //print $msg_divertida[3];
		?>

		

	</body>
</html>