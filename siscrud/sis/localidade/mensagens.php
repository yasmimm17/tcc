<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
			echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
             			Localidade cadastrada com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  				</div>';
			break;
		
		case 2:
			echo '	<div class="alert alert-info alert-dismissible fade show" role="alert">
						Localidade atualizada com sucesso!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 3:
			echo '	<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Localidade bloqueada com sucesso! Esta localidade agora está INATIVA!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 4:
			echo '	<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Localidade desbloqueada  com sucesso! Esta localidade agora está ATIVA!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
		
		case 5:
			echo '	<div class="alert alert-primary alert-dismissible fade show" role="alert">
						Erro ao acessar a Base de dados! Contate o administrdor!
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
			break;
	}
	$msg = 0;
}
?>