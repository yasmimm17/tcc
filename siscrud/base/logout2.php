<?php
	session_start(); // Inicia a sessão
	session_destroy(); // Destrói a sessão limpando todos os valores salvos
	header("location: land.php"); exit; // Redireciona o visitante
?>