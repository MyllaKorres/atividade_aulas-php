<?php 
    session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>FORMUL�RIO DE INSCRI��O</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<!--

     AULA - FORMUL�RIOS COM CONDICIONAIS E SESS�ES COM PHP
     
     CRIE UM FORMUL�RIO PARA QUE O USU�RIO POSSA ATRAV�S DE UMA P�GINA WEB PREENCHER O NOME E A
     IDADE DOS COMPETIDORES. ESSES DADOS DEVER�O SER UTILIZADOS PARA EXIBIR EM QUAL CATEGORIA O
     COMPETIDOR SE ENCAIXA (INFANTIL, ADOLESCENTE OU ADULTO).
 
 -->

	<p>FORMUL�RIO PARA COMPETI��O DE COMPETIDORES</p>
	<form action="script.php" method="post">
	
		<?php 
            // isset() verifica se a vari�vel foi iniciada
            
		    $error = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
		    if(!empty($error))
		    {
		      echo $error;
		    }
		    
		    $success = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
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