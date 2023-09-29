<?php
	$nivel_necessario = 2;
	include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Produtos</h2>
		</div>

		<div class="col-md-2">
			<!-- Chama o Formulário para adicionar restaurantes -->
			<a href="?page=fcad_res" class="btn btn-primary pull-right h2"><i class='bx bx-plus-medical'></i> Restaurante
			
			</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
				$quantidade = 5;

				$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
				$inicio = ($quantidade * $pagina) - $quantidade;

				$data = mysqli_query($con, "select * from restaurante order by id_res asc limit $inicio, $quantidade;") or die(mysqli_error("ERRO: ".$con));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Nome do Restaurante</strong></td>"; 
				echo "<td><strong>Número</strong></td>"; 
				echo "<td><strong>Complemento</strong></td>";
				echo "<td><strong>Sede</strong></td>";
                    echo "<td><strong>Cep</strong></td>";
                    echo "<td><strong>ID da Marca</strong></td>";
                    echo "<td><strong>Ativo</strong></td>";
				echo "<td class='actions justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_res']."</td>";
					echo "<td>".$info['nome_res']."</td>";
					echo "<td>".$info['nr_res']."</td>";
					echo "<td>".$info['comp_res']." </td>";
					if($info['tipo_sede_res'] == 1){
                        echo "<td>PRÓPRIA</td>";
                    }else if($info['tipo_sede_res'] == 0){
                        echo "<td>FILIAL</td>";
                    }
                    echo "<td>".$info['cep']." </td>";
            		echo "<td>".$info['id_marca']." </td>";
                    if($info['ativo'] == 1){
                        echo "<td>SIM</td>";
                    }else if($info['ativo'] == 0){
                        echo "<td>NÃO</td>";
                    }
					echo "<td><div class='btn-group btn-group-xs'>";
						echo "<a class='btn btn-outline-info btn-xs' href=?page=view_res&id_res=".$info['id_res']."> <i class='bx bxs-user-detail'></i> </a>";
						echo "<a class='btn btn-outline-warning btn-xs' href=?page=fedit_res&id_res=".$info['id_res']."> <i class='bx bxs-edit-alt'></i> </a>";
						if($info['ativo'] == 1){
							echo "<a class='btn btn-outline-danger btn-xs'  href=?page=block_res&id_res=".$info['id_res']."> <i class='bx bx-block'></i> </a>";
						}else if($info['ativo'] == 0){
							echo "<a class='btn btn-outline-success btn-xs'  href=?page=ativa_res&id_res=".$info['id_res']."><i class='bx bx-lock-open'></i></a></div></td>";
						}
					}
					echo "</tr></tbody></table>";
			?>				
		</div>
	</div>
	<!-- PAGINAÇÃO -->
	<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select id_res from restaurante;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_res&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_res&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_res&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_res&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_res&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_res&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
	</div>
</div>
