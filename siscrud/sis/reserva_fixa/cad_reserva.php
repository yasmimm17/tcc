<link rel="stylesheet" href="../../css/style3.css">
<!--bootstrap css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    #reset{
            background-color: rgb(115, 184, 115);
        }

    #button{
        background-color: rgb(10, 112, 10);
    }
</style>
<body>
    <?php
        if(!isset($_SESSION)) session_start();
        //include "../../base/config.php";
        $con = mysqli_connect('localhost', 'root', '', 'keepit');
        $sql = "select * from restaurante;";
        $rs = mysqli_query($con, $sql);
        //var_dump($rs);exit;
    ?>

    <div style="position: absolute; padding-left: 2em; padding-top: 1em">
        <h1 style="color: #005A09;">Preencha sua reserva</h1>

        <form action="../sis/reserva_fixa/inserir_fixa.php" method="post" class="row g-3" name='form' id="form">
            <input type="hidden" name="id_cli" value='<?php echo $_SESSION['UsuarioID'];?>'>
            <div class="form-group col-md-3">
				<label class="form-label" for="restaurante">Restaurante</label>
                    <select class="form-control" name="id_res" id="restaurante">
                        <option value='0'>Restaurantes</option>
                        <?php while($dados = mysqli_fetch_array($rs)): ?>
                            <option value="<?php echo $dados['id_res']; ?>"><?php echo $dados['nome_res']; ?></option>
                        <?php endwhile; ?>
                    </select>
            </div>
            <div class="col-md-3">
                <label for="qtde_pessoas" class="form-label">Quantidade de pessoas</label>
                <input type="number" min="1" class="form-control" id="qtde_pessoas" name="qtde_pessoas">
            </div>
            <div class="col-md-3">
                <label for="cel_contato" class="form-label">Telefone/Celular</label>
                <input type="tel" class="form-control" id="cel_contato" name="cel_contato" onkeypress="mascara_tel(this)" onkeydown="return somente_numero(event)" maxlength="15" placeholder="+55 (xx) xxxxx-xxxx" >
            </div>
            <div class="col-md-3">
                <label for="horario" class="form-label">Horário da reserva</label>
                <input type="datetime-local" class="form-control" id="horario" name="horario">
            </div>
            <div class="col-12">
                <label for="obs" class="form-label">Observação</label>
                <input type="text" class="form-control" id="obs" name="obs" placeholder="Ex: uma cadeira para bebês">
            </div>
            <div class="col-12">
                <button type="reset" class="btn" id="reset">Cancelar</button>
                <button type="submit" class="btn" id="button">Reservar</button>
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

</body>