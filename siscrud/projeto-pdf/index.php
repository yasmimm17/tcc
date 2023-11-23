<?php
	require_once __DIR__ . '/vendor/autoload.php';


	$rec = '5454';
	$nomeforn = 'DISTRIBUIDORA DE GÊNEROS CAMPEÃO Ltda.';

	$h = "<div style='text-align:right;'>Página {PAGENO} de {nbpg}</div>";

	$html1 = "
	<fieldset>
		<div class='cabecalho'>
			<div class='imgcab'><img src='img/logo.png'></div>
			<div class='titcab'>
				SCL — Sistema de Controle de reserva
			</div>
		</div>
	"; 

	$html1 .= "
		<h2>
			<div class='titulorel'>Relatório de Reservas em Restaurantes</div>
		</h2>
	"; 

	$html1 .= "
		<div class='referencia'>
			<h4>
				<div class='ref1'>Recibo: ".$rec." </div>
			</h4>
		</div>
		<hr /> 
	";

	$html1 .= "
		<div class='dados'>
			<table class='fontedados' cellspacing='2' cellpadding='2' width='100%'>
			<thead><tr>
			<td><strong>ID</strong></td> 
			<td><strong>Nome</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Nível</strong></td>
			<td><strong>Ativo</strong></td> 
			</tr></thead>
		</div>";

	include "../base/config.php"; 

	$sql = "select * from usuario order by id_cli";
	$data = mysqli_query($con, $sql) or die(mysqli_error($con));

	while($info = mysqli_fetch_array($data)){ 
		$html1 .= "<tr>
		<td>".$info['id_cli']."</td>
		<td>".$info['nome']."</td>
		<td>".$info['email']."</td>
		<td>".$info['nivel']."</td>";

		if($info['ativo'] == 1){
			$html1 .= "<td> SIM </td>";
		}else if($info['ativo'] == 0){
			$html1 .= "<td>NÃO</td>";
		}
	}
	$html1 .= "</tr></tbody></table>"; 

	$htmlfooter = "
		<hr>
		<div class='rodape'>Emissão: ".date('d/m/Y - H:i:s')." </div>
	</fieldset>
	"; 

	$mpdf = new \Mpdf\Mpdf([
		'mode' => 'utf-8',
		'format' => [190, 236],
		'orientation' => 'L'
	]); 
	$mpdf->SetDisplayMode('fullpage'); 
	$css = file_get_contents('css/stylerel.css'); 
	$mpdf->WriteHTML($css,1);
	$mpdf->SetHTMLHeader($h);
	$mpdf->SetHTMLFooter($htmlfooter);
	$mpdf->WriteHTML($html1); 
	$mpdf->Output(); 

	exit; 
?>