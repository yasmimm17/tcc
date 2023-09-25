<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Você tentou acessar uma página de tratamento de dados e foi redirecionado para a página inicial.
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';
			break;
	}
	$msg = 0;
}
?>