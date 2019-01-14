
<?php

$num = 1

//nesta condição abaixo teremos um LOOP infinito 
while ( $num < 10) {
	# code...
	
    // Aqui podemos interromper o laço e pular uma condição
    //condição
    $num = $num + 1;
    //comando
    if ($num == 3) {
    	# code...
    	//aqui ira entrar em laço de repetição se não houver a condição acima, onde ira pular o comando de igualdade 3 e executar os demais comandos.
    	continue;
    }

	echo $num;
	echo '<br>';
	//com esta condiçao abaixo baramos o LOOP infinito
#	$num = $num + 1;
    
    //adicionando nova condição com BREAK.
 #   if ($num == 5) {
 #   	break;
 #   }
    
}

?>


