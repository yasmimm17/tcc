<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
						Aluno cadastrado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>';
			break;
		case 2:
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
						Aluno atualizado com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  			</div>';
			break;
		case 3:
			echo '	<div class="alert alert-warning alert-dismissible fade show" role="alert">
						Aluno excluído com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		case 4:
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Erro durante acesso a Base de dados! Contate o administrador.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		case 5:
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Você tentou acessar uma página de tratamento de dados e foi redirecionado para a página inicial.
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';
			break;
	}
	$msg = 0;
}
?>
