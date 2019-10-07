<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>


</head>

<body>
    <style>
        input {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            z-index: auto;
            width: auto;
            height: auto;
            position: static;
            cursor: default;
            opacity: 1;
            margin: 0;
            padding: 10px 20px;
            overflow: visible;
            border: 1px solid #b7b7b7;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            font: normal 12px/normal Arial, Helvetica, sans-serif;
            -o-text-overflow: clip;
            text-overflow: clip;
            -webkit-transform-origin: 50% 50% 0;
            transform-origin: 50% 50% 0;
        }

        label {
            display: inline-block;
            width: 100%;
        }

        table {
            width: 100%;
            color: #467aa7;
            font-family: Arial;
        }
    </style>

    <h2>Cadastro</h2>
    <div>
        <form class="table border" action="conn.php" metrod="POST">
            <table>
                <tr>
                    <td>
                        <label for="cod_contrato">Código do Contrato:</label>
                        <input value="1" type="text" id="cod_contrato" name="cod_contrato">
                    </td>
                    <td>
                        <label for="tip_faturamento">Tipo faturamento:</label>
                        <input value="2" type="number" id="tip_faturamento" name="tip_faturamento">
                    </td>
                    <td>
                        <label for="crm_proposta">Crm proposta:</label>
                        <input value="3" type="text" id="crm_proposta" name="crm_proposta">
                    </td>
                    <td>
                        <label for="cnpj_contratante">CNPJ:</label>
                        <input value="4" type="text" id="cnpj_contratante" name="cnpj_contratante">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="raz_contratante">Razão:</label>
                        <input value="5" type="text" id="raz_contratante" name="raz_contratante">
                    </td>
                    <td>
                        <label for="emp_atendida">Empresa:</label>
                        <input value="6" type="text" id="emp_atendida" name="emp_atendida">
                    </td>
                    <td>
                        <label for="num_servico">Número de Servico:</label>
                        <input value="7" type="number" id="num_servico" name="num_servico">
                    </td>
                    <td>
                        <label for="cod_modalidade">Código da Modalidade:</label>
                        <input value="8" type="number" id="cod_modalidade" name="cod_modalidade">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cod_reduzido">Código Reduzido:</label>
                        <input value="9" type="number" id="cod_reduzido" name="cod_reduzido">
                    </td>
                    <td>
                        <label for="des_servico">Descrição do Servico:</label>
                        <input value="10" type="text" id="des_servico" name="des_servico">
                    </td>
                    <td>
                        <label for="cod_consultor">Código do(a) Colsultor(a):</label>
                        <input value="11" type="number" id="cod_consultor" name="cod_consultor">
                    </td>
                    <td>
                        <label for="hor_servico">Horario de Serviço:</label>
                        <input value="12.12" type="text" id="hor_servico" name="hor_servico">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dat_inicio">Data de Inicio:</label>
                        <input value="2019-09-23" type="date" id="dat_inicio" name="dat_inicio">
                    </td>
                    <td>
                        <label for="dat_termino">Data de Término:</label>
                        <input value="2019-09-23" type="date" id="dat_termino" name="dat_termino">
                    </td>
                    <td>
                        <label for="sts_contrato">Sts contrato:</label>
                        <input value="15" type="number" id="sts_contrato" name="sts_contrato">
                    </td>
                    <td>
                        <label for="vlr_contrato">Valor do Contrato:</label>
                        <input value="16.16" type="text" id="vlr_contrato" name="vlr_contrato">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>

 <hr></hr>   

    <h2> Parcelas </h2>
    <forms class="table border" action="contratos.php" metrod="POST" >
        <tr>
            <td>
                <label for="id_contratos">id do Contrato:</label>
                <input value="1" type="number" id="id_contratos" name="id_contratos">
            </td>
            <td>
                <label for="dat_pagamento">Data faturamento:</label>
                <input value="2019-09-23" type="date" id="dat_pagamento" name="dat_pagamento">
            </td>
            <td>
                <label for="obs_pagamento">Obs proposta:</label>
                <input value="3" type="text" id="obs_pagamento" name="obs_pagamento">
            </td>
            <td>
                <label for="vlr_pagamento">Valor:</label>
                <input value="4" type="number" id="vlr_pagamento" name="vlr_pagamento">
            </td>
            <td>
                <input type="submit">
            </td>
        </tr>
    </forms>


    <?php
    // include "conn.php";
    include "contratos.php";
    if (!$mysqli) {
        die('Não foi possível conectar: ' . mysql_error());
    }
    echo 'Conexão bem sucedida';
    mysql_close($mysqli);


    ?>
</body>

</html>