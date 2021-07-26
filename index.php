<?php 
    session_start();
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

	<p>FORMULÁRIO PARA COMPETIÇÃO DE COMPETIDORES</p>
	<form action="script.php" method="post">
	
		<?php 
            // isset() verifica se a variável foi iniciada
            
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