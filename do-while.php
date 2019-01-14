
<?php
// primeiro executa o DO caso não atenda a condição DO então será executado o WHILE
// OBS: CUIDADO COM O LOOP INF na CAMADA CONDIÇÃO.

$num = 1
//Sera executado pelo menos 1 vez mesmo sendo FALSE ou TRUE
do{
	echo 'teste:'.$num;
	$num = $num + 1;
	//BREAK;
	//CONTINUE;

} while ($num < 10 ); {
	# code...
	//Se pode atribuir demais condição a ser incluida em segundao plano.
}

?>

