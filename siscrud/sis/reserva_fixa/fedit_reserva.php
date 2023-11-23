<form action="updt_reserva.php" method="post" class="row g-3" name='form' id="form">
            <div class="col-md-2">
                <label for="id_cli" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="id_cli" name="id_cli">
            </div>
            <div class="col-md-2">
                <label for="id_res" class="form-label">Restaurante</label>
                <input type="text" class="form-control" id="id_res" name="id_res">
            </div>
            <div class="col-md-2">
                <label for="qtde_pessoas" class="form-label">Quantidade de pessoas</label>
                <input type="number" min="1" class="form-control" id="qtde_pessoas" name="qtde_pessoas">
            </div>
            <div class="col-md-2">
                <label for="cel_contato" class="form-label">Telefone/Celular</label>
                <input type="tel" class="form-control" id="cel_contato" name="cel_contato" onkeypress="mascara_tel(this)" onkeydown="return somente_numero(event)" maxlength="15" placeholder="+55 (xx) xxxxx-xxxx" >
            </div>
            <div class="col-md-2">
                <label for="horario" class="form-label">Horário da reserva</label>
                <input type="datetime-local" class="form-control" id="horario" name="horario">
            </div>
            <div class="col-5">
                <label for="obs" class="form-label">Observação</label>
                <input type="text" class="form-control" id="obs" name="obs" placeholder="Ex: uma cadeira para bebês">
            </div>
            <div class="col-12">
                <button type="reset" class="btn" id="reset">Cancelar</button>
                <button type="submit" class="btn" id="button">Atualizar</button>
            </div>
</form>