<?php
    if(isset($_GET['page'])){

        switch ($_GET['page']) {
            case 'home':
                include 'base/home.php';
                break;
            // ----CLIENTES ----///
            case 'lista_cli':
                include "sis/cliente/lista_cli.php";
                break;
            
            case 'fcad_cli':
                include "sis/cliente/fcad_cli.php";
                break;
            
            case 'insere_cli':
                include "sis/cliente/insere_cli.php";
                break;
            
            case 'fedit_cli':
                include "sis/cliente/fedit_cli.php";
                break;
                
            case 'view_cli':
                include "sis/cliente/view_cli.php";
                break;
            
            case 'excluir_cli':
                include "sis/cliente/excluir_cli.php";
                break;
            
            case 'atualiza_cli':
                include "sis/cliente/atualiza_cli.php";
                break;

            case 'block_cli':
                include "sis/cliente/block_cli.php";
                break;

            case 'ativa_cli':
                include "sis/cliente/ativa_cli.php";
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
            
            case 'atualiza_invent':
                include "sis/inventario/atualiza_invent.php";
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
            
            case 'excluir_local':
                include "sis/localidade/excluir_local.php";
                break;
            
            case 'atualiza_local':
                include "sis/localidade/atualiza_local.php";
                break;

            // ---- MARCA REDE ----///
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
            
            case 'excluir_res':
                include "sis/restaurante/excluir_res.php";
                break;
            
            case 'atualiza_res':
                include "sis/restaurante/atualiza_res.php";
                break;

            // ---- MESA ----///
            case 'lista_mesa':
                include "sis/restaurante/lista_mesa.php";
                break;
            
            case 'fcad_mesa':
                include "sis/restaurante/fcad_mesa.php";
                break;
            
            case 'insere_mesa':
                include "sis/restaurante/insere_mesa.php";
                break;
            
            case 'fedit_mesa':
                include "sis/restaurante/fedit_mesa.php";
                break;
                
            case 'view_mesa':
                include "sis/restaurante/view_mesa.php";
                break;
            
            case 'excluir_mesa':
                include "sis/restaurante/excluir_mesa.php";
                break;
            
            case 'atualiza_mesa':
                include "sis/restaurante/atualiza_mesa.php";
                break;
            default:
                include "base/home.php";
                break;
        }
    }
?>