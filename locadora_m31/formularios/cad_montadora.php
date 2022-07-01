<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Locadora</title>
	<meta http-equiv="X-UA-Compatible" content="IE+edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">
</head>
<body>
	<h1>Cadastro de montadora</h1>
	<div class="flex-container">
		<div id="box">
			<fieldset>
				<form method="POST" action="../controle/inserir_montadora.php">
					<label>Digite o nome da montadora:</label>
					<input type="text" name="txt_montadora"/>
					<input type="submit" value="Cadastrar">
			</form>
			</fieldset>
		</div>
	</div>
</body>
</html>