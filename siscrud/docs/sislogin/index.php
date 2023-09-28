<!DOCTYPE html>

<html>
	<head>
	  <meta charset="utf-8" />
	  <title> Hello!</title>
	</head>
	<body>
		<form action="validacao.php" method="post">
			<fieldset>
			<legend>Dados de Login</legend>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" maxlength="50" />
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha" />

				<input type="submit" value="Entrar" />
			</fieldset>
		</form>
	</body>
</html>
