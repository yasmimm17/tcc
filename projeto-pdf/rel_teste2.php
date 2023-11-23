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
				<tr>
					<td width='10%'><strong>ID</strong></td>
					<td width='10%'><strong>CLIENTE</strong></td>
					<td width='30%'><strong>RESERVA</strong></td>
					<td width='20%'><strong>DIA</strong></td>
					<td width='20%'><strong>HORÁRIO</strong></td>
				</tr>
	"; 

	$cont = 1; 
	while($cont <= 100){ 
		if($cont % 2 == 0){ 
			$html1 .= "
				<tr style='background:#eee;'>
					<td>".$cont."</td>
					<td>Bruno Coelho</td>
					<td> Outback Shopping Bangu </td>
					<td> 10/12/2023 </td>
					<td> ".date('H:i:s')." </td>
				</tr>
			";
		}else{ 
			$html1 .= "
				<tr>
					<td>".$cont."</td>
					<td>Cláudio da Silva</td>
					<td>Parmê Top Shopping</td>
					<td> 27/10/2023 </td>
					<td> ".date('H:i:s')." </td>
				</tr>
			";
		} 
		$cont++; 
	} 

	$html1 .= "</table></div><br>"; 

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