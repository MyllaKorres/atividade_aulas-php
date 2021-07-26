<?php 
    include "serviços/session_message.php";
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>FORMULÁRIO DE INSCRIÇÃO</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<!--

     AULA - FORMULÁRIOS COM CONDICIONAIS E SESSÕES COM PHP
     
     CRIE UM FORMULÁRIO PARA QUE O USUÁRIO POSSA ATRAVÉS DE UMA PÁGINA WEB PREENCHER O NOME E A
     IDADE DOS COMPETIDORES. ESSES DADOS DEVERÃO SER UTILIZADOS PARA EXIBIR EM QUAL CATEGORIA O
     COMPETIDOR SE ENCAIXA (INFANTIL, ADOLESCENTE OU ADULTO).
 
 -->

	<h3>FORMULÁRIO PARA COMPETIÇÃO DE NATAÇÃO</h3>
	<form action="script.php" method="post">
	
		<?php 
            // isset() verifica se a variável foi iniciada
            
		    $error = get_error();
		    if(!empty($error))
		    {
		      echo $error;
		    }
		    
		    $success = get_success();
		    if(!empty($success))
		    {
		        echo $success;
		    }
		?>
		
		<p>Nome: <input type="text" name="nome" /></p>
		<p>Idade: <input type="text" name="idade" /></p>
		<p><input type="submit" value="Enviar dados do competidor" style="margin-left:45px"/></p>
	</form>
</body>

</html>