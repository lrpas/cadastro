<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";
$conn = new mysqli($servername,$username,$password,$dbname);

$modo= "";
if(isset($_POST['modo'])){
	$modo = $_POST['modo'];
}

$nome=""; 
if(isset($_POST['nome'])){ //se tiver alguma coisa ele iguala o que tem com login
	$nome = $_POST['nome'];
}
$senha="";
if(isset($_POST['senha'])){
	$senha = $_POST['senha'];
}


if($modo=='inserir'){
		$sql = "INSERT INTO usuario (nome,senha) VALUES ('".$nome."','".$senha."')";
	if($conn->query($sql)){
	echo "<script> alert('inseriu'); 
	header('Location:index.php'); 
	window.location = 'cadastro.php'; </script>";
	//header Redireciona para especificada no location --
}

}

/*$sql = "INSERT INTO usuario (nome,senha) VALUES ('".$nome."','".$senha."')";
if($conn->query($sql)){
	echo "<script> alert('inseriu'); </script>";
}*/






/*if(isset($_GET['nome'])){
	echo $_GET['nome'];
}

if(isset($_GET['senha'])){
	echo $_GET['senha'];
	//issete retorna booleano
}
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
	<style type="text/css">
		
		.flex{
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
		}



		.caixa{
			border:1px solid black;
			background-color:#F5FFFA;
			width: 200px;
			height: 100px;
		}
		/*placeholder*/

		.estilo{
			border-radius: 10px;

		}

	</style>
</head>
<body>
	<form method="post" action="cadastro.php" class="flex">
		
		<div class="caixa estilo">
		<label>Nome:</label>
		<div><input type="text" name="nome" placeholder="digite seu nome" class="estilo"></div>
		<label>Senha:</label>
		<div><input type="password" name="senha" placeholder="digite sua senha" class="estilo" req></div>
		<input type="hidden" name="modo" id="modo" value="inserir">
		<input type="submit" value="login" class="estilo" >
	
</div>

	</form>


</body>
</html>