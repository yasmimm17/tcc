<style>
    form{
        border: solid #005A09;
        border-radius: 2em;
        padding: 2em;
        width:75em;
        position: absolute;
        display: inline-block;
        top: 40%;
        left: 15%
    }

</style>

<!--bootstrap css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<?php
    include "../../base/config.php";
	$id_reserva = $_GET['id_reserva'];
    $sql = "SELECT * FROM reserva_fixa ri, usuario u, restaurante r WHERE ri.id_cli = u.id_cli AND ri.id_res = r.id_res and id_reserva = '".$id_reserva."';";
    //echo $sql;exit;
	$data = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($data);
?>

<div>
    <form action="updt_reserva.php" method="post" class="row g-3" name='form' id="form">
        <h1>Edite os seus dados</h1>
                <input type="hidden" name="id_reserva" id="id_reserva" value="<?php echo $row['id_reserva'] ?>">
                <div class="col-md-2">
                    <label for="id_cli" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome_cli" name="nome_cli" value="<?php echo $row['nome'] ?>">
                    <input type="hidden" name="id_cli" value="<?php echo $row['id_cli'] ?>">
                </div>
                <div class="col-md-2">
                    <label for="id_res" class="form-label">Restaurante</label>
                    <input type="text" class="form-control" id="nome_res" name="nome_res" value="<?php echo $row['nome_res'] ?>">
                    <input type="hidden" name="id_res" value="<?php echo $row['id_res'] ?>">
                </div>
                <div class="col-md-2">
                    <label for="qtde_pessoas" class="form-label">Quantidade de pessoas</label>
                    <input type="number" min="1" class="form-control" id="qtde_pessoas" name="qtde_pessoas" value="<?php echo $row['qtde_pessoas'] ?>">
                </div>
                <div class="col-md-2">
                    <label for="cel_contato" class="form-label">Telefone/Celular</label>
                    <input type="tel" class="form-control" id="cel_contato" name="cel_contato" value="<?php echo $row['cel_contato'] ?>" onkeypress="mascara_tel(this)" onkeydown="return somente_numero(event)" maxlength="15" placeholder="+55 (xx) xxxxx-xxxx" >
                </div>
                <div class="col-md-2">
                    <label for="horario" class="form-label">Horário da reserva</label>
                    <input type="datetime-local" class="form-control" id="horario" name="horario" value="<?php echo $row['horario'] ?>">
                </div>
                <div class="col-5">
                    <label for="obs" class="form-label">Observação</label>
                    <input type="text" class="form-control" id="obs" name="obs" placeholder="Ex: uma cadeira para bebês" value="<?php echo $row['obs'] ?>">
                </div>
                <div class="col-12">
                    <button type="reset" class="btn btn-danger" id="reset">Cancelar</button>
                    <button type="submit" class="btn btn-success" id="button">Atualizar</button>
                </div>
    </form>
</div>

<script>
        function mascara_tel(obj) {
            if(obj.value.length == 0) {
                obj.value += "("
            }
            if(obj.value.length == 3) {
                obj.value += ")"
            }
            if(obj.value.length == 4) {
                obj.value += " "
            }
            if(obj.value.length == 10) {
                obj.value += "-"
            }
        }
    </script>