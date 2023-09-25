<?php
$nivel_necessario = 2;
include "base/testa_nivel.php";
?>
<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Localidades</h2>
		</div>

		<div class="col-md-2">
			<!-- Chama o Formulário para adicionar localidade -->
			<a href="?page=fcad_local" class="btn btn-primary pull-right h2"><i class='bx bx-plus-medical'></i>Localidade</a> 
		</div>
	</div>
	<div>	<?php include "mensagens.php"; ?>	</div>
	<!--top - Lista dos Campos-->
	<hr/>
	<div id="bloco-list-pag">	
		<div id="list" class="row">
			<div class="table-responsive col-xs-12">
				<?php
					$quantidade = 5;

					$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					$inicio = ($quantidade * $pagina) - $quantidade;

					$data_all = mysqli_query($con, "select * from localidade order by cep asc limit $inicio, $quantidade;") or die(mysqli_error());

					echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
					echo "<thead><tr>";
					echo "<td><strong>Cep</strong></td>"; 
					echo "<td><strong>Cidade</strong></td>";
					echo "<td><strong>UF</strong></td>";
					echo "<td><strong>Ativo</strong></td>";
					echo "<td class='actions'><strong>Ações</strong></td>"; 
					echo "</tr></thead><tbody>";

					while($info = mysqli_fetch_array($data_all)){ 
						echo "<tr>";
						echo "<td>".$info['cep']."</td>";
						echo "<td>".$info['cidade']."</td>";
						echo "<td>".$info['uf']."</td>";
						if($info['ativo'] == 1){
							echo "<td>SIM</td>";
						}else if($info['ativo'] == 0){
							echo "<td>NÃO</td>";
						}
						echo "<td><div class='btn-group btn-group-xs'>";
						echo "<a class='btn btn-outline-info btn-xs' href=?page=view_local&cep=".$info['cep']."> <i class='bx bxs-user-detail'></i> </a>";
						echo "<a class='btn btn-outline-warning btn-xs' href=?page=fedit_local&cep=".$info['cep']."> <i class='bx bxs-edit-alt'></i> </a>";
						if($info['ativo'] == 1){
							echo "<a class='btn btn-outline-danger btn-xs'  href=?page=block_local&cep=".$info['cep']."> <i class='bx bx-block'></i> </a>";
						}else if($info['ativo'] == 0){
							echo "<a class='btn btn-outline-success btn-xs'  href=?page=ativa_local&cep=".$info['cep']."><i class='bx bx-lock-open'></i></a></div></td>";
						}
					}
					echo "</tr></tbody></table>";
				?>				
			</div><!-- Div Table -->
		</div><!--list-->

		<!-- PAGINAÇÃO -->
		<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select cep from localidade;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_local&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_local&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_local&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_local&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_local&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_local&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
		</div><!--bottom-->
	</div>
</div><!--main-->