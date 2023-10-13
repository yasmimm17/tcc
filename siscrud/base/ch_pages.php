<?php
    if(isset($_GET['page'])){

        switch ($_GET['page']) {
            case 'home':
                include 'base/home.php';
                break;
            case 'logout':
                include 'base/logout.php';
                break;
            case 'msgtratapag':
                header("Location: msgtratapag.php");
                break;
            // ---- INVENTÁRIO ----///
            case 'lista_invent':
                include "sis/inventario/lista_invent.php";
                break;
            
            case 'fcad_invent':
                include "sis/inventario/fcad_invent.php";
                break;
            
            case 'insere_invent':
                include "sis/inventario/insere_invent.php";
                break;
            
            case 'fedit_invent':
                include "sis/inventario/fedit_invent.php";
                break;
                
            case 'view_invent':
                include "sis/inventario/view_invent.php";
                break;
            
            case 'excluir_invent':
                include "sis/inventario/excluir_invent.php";
                break;
            
            case 'atualiza_invent':
                include "sis/inventario/atualiza_invent.php";
                break;
            // ---- USUÁRIOS ----///
            case 'lista_usu':
                include "sis/usuario/lista_usu.php";
                break;
            
            case 'fcad_usu':
                include "sis/usuario/fcad_usu.php";
                break;
            
            case 'insere_usu':
                include "sis/usuario/insere_usu.php";
                break;
            
            case 'fedit_usu':
                include "sis/usuario/fedit_usu.php";
                break;
                
            case 'view_usu':
                include "sis/usuario/view_usu.php";
                break;
            
            case 'atualiza_usu':
                include "sis/usuario/atualiza_usu.php";
                break;
            
            case 'block_usu':
                include "sis/usuario/block_usu.php";
                break;
            
            case 'ativa_usu':
                include "sis/usuario/ativa_usu.php";
                break;
                       
            default:
                include "base/home.php";
                break;
            // ---- LOCALIDADE ----///
            case 'lista_local':
                include "sis/localidade/lista_local.php";
                break;
            
            case 'fcad_local':
                include "sis/localidade/fcad_local.php";
                break;
            
            case 'insere_local':
                include "sis/localidade/insere_local.php";
                break;
            
            case 'fedit_local':
                include "sis/localidade/fedit_local.php";
                break;
                
            case 'view_local':
                include "sis/localidade/view_local.php";
                break;

            case 'atualiza_local':
                include "sis/localidade/atualiza_local.php";
            
            case 'block_local':
                include "sis/localidade/block_local.php";
                break;
                
            case 'ativa_local':
                include "sis/localidade/ativa_local.php";
                break;

            // ---- MARCA DA REDE ----///
            case 'lista_marca':
                include "sis/marca_rede/lista_marca.php";
                break;
            
            case 'fcad_marca':
                include "sis/marca_rede/fcad_marca.php";
                break;
            
            case 'insere_marca':
                include "sis/marca_rede/insere_marca.php";
                break;
            
            case 'fedit_marca':
                include "sis/marca_rede/fedit_marca.php";
                break;
                
            case 'view_marca':
                include "sis/marca_rede/view_marca.php";
                break;
            
            case 'excluir_marca':
                include "sis/marca_rede/excluir_marca.php";
                break;
            
            case 'atualiza_marca':
                include "sis/marca_rede/atualiza_marca.php";
                break;

            // ---- RESERVA DEMANDA ----///
            case 'lista_demand':
                include "sis/reserva_demanda/lista_demand.php";
                break;
            
            case 'fcad_demand':
                include "sis/reserva_demanda/fcad_demand.php";
                break;
            
            case 'insere_demand':
                include "sis/reserva_demanda/insere_demand.php";
                break;
            
            case 'fedit_demand':
                include "sis/reserva_demanda/fedit_demand.php";
                break;
                
            case 'view_demand':
                include "sis/reserva_demanda/view_demand.php";
                break;
            
            case 'excluir_demand':
                include "sis/reserva_demanda/excluir_demand.php";
                break;
            
            case 'atualiza_demand':
                include "sis/reserva_demanda/atualiza_demand.php";
                break;

            // ---- RESERVA FIXA ----///
            case 'lista_fixa':
                include "sis/reserva_fixa/lista_fixa.php";
                break;
            
            case 'fcad_fixa':
                include "sis/reserva_fixa/fcad_fixa.php";
                break;
            
            case 'insere_fixa':
                include "sis/reserva_fixa/insere_fixa.php";
                break;
            
            case 'fedit_fixa':
                include "sis/reserva_fixa/fedit_fixa.php";
                break;
                
            case 'view_fixa':
                include "sis/reserva_fixa/view_fixa.php";
                break;
            
            case 'excluir_fixa':
                include "sis/reserva_fixa/excluir_fixa.php";
                break;
            
            case 'atualiza_fixa':
                include "sis/reserva_fixa/atualiza_fixa.php";
                break;

            // ---- RESTAURANTE ----///
            case 'lista_res':
                include "sis/restaurante/lista_res.php";
                break;
            
            case 'fcad_res':
                include "sis/restaurante/fcad_res.php";
                break;
            
            case 'insere_res':
                include "sis/restaurante/insere_res.php";
                break;
            
            case 'fedit_res':
                include "sis/restaurante/fedit_res.php";
                break;
                
            case 'view_res':
                include "sis/restaurante/view_res.php";
                break;

            case 'atualiza_res':
                include "sis/restaurante/atualiza_res.php";
                break;
            
            case 'block_res':
                include "sis/restaurante/block_res.php";
                break;
                
            case 'ativa_res':
                include "sis/restaurante/ativa_res.php";
                break;

            // ---- MESA ----///
            case 'lista_mesa':
                include "sis/tipo_mesa/lista_mesa.php";
                break;
            
            case 'fcad_mesa':
                include "sis/tipo_mesa/fcad_mesa.php";
                break;
            
            case 'insere_mesa':
                include "sis/tipo_mesa/insere_mesa.php";
                break;
            
            case 'fedit_mesa':
                include "sis/tipo_mesa/fedit_mesa.php";
                break;
                
            case 'view_mesa':
                include "sis/tipo_mesa/view_mesa.php";
                break;
            
            case 'excluir_mesa':
                include "sis/tipo_mesa/excluir_mesa.php";
                break;
            
            case 'atualiza_mesa':
                include "sis/tipo_mesa/atualiza_mesa.php";
                break;
        }
    }
    else {
        header("location: index2.php");
    }
?>