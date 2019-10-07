<?php
    
    $servidor = 'redmine.senailondrina.com';

    $usuario = 'istldn';

    $senha = 'txjXj7F6d5Frzeyvpatg';

    $banco = 'ISTLDN';

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

    if($mysqli === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $cod_contrato = mysqli_real_escape_string($mysqli, $_REQUEST['cod_contrato']);
    $tip_faturamento = mysqli_real_escape_string($mysqli, $_REQUEST['tip_faturamento']);
    $crm_proposta = mysqli_real_escape_string($mysqli, $_REQUEST['crm_proposta']);
    $cnpj_contratante = mysqli_real_escape_string($mysqli, $_REQUEST['cnpj_contratante']);
    $raz_contratante = mysqli_real_escape_string($mysqli, $_REQUEST['raz_contratante']);
    $emp_atendida = mysqli_real_escape_string($mysqli, $_REQUEST['emp_atendida']);
    $num_servico = mysqli_real_escape_string($mysqli, $_REQUEST['num_servico']);
    $cod_modalidade = mysqli_real_escape_string($mysqli, $_REQUEST['cod_modalidade']);
    $cod_reduzido = mysqli_real_escape_string($mysqli, $_REQUEST['cod_reduzido']);
    $des_servico =  mysqli_real_escape_string($mysqli, $_REQUEST['des_servico']);
    $cod_consultor =  mysqli_real_escape_string($mysqli, $_REQUEST['cod_consultor']);
    $hor_servico = mysqli_real_escape_string($mysqli, $_REQUEST['hor_servico']);
    $dat_inicio = mysqli_real_escape_string($mysqli, $_REQUEST['dat_inicio']);
    $dat_termino = mysqli_real_escape_string($mysqli, $_REQUEST['dat_termino']);
    $sts_contrato = mysqli_real_escape_string($mysqli, $_REQUEST['sts_contrato']);
    $vlr_contrato = mysqli_real_escape_string($mysqli, $_REQUEST['vlr_contrato']);


    $sql = "INSERT INTO contratos(
              `cod_contrato`, 
              `tip_faturamento`, 
              `crm_proposta`, 
              `cnpj_contratante`, 
              `raz_contratante`, 
              `emp_atendida`, 
              `num_servico`, 
              `cod_modalidade`, 
              `cod_reduzido`, 
              `des_servico`, 
              `cod_consultor`, 
              `hor_servico`,  
              `dat_inicio`, 
              `dat_termino`, 
              `sts_contrato`, 
              `vlr_contrato`
            )
     VALUES (
             '".$cod_contrato."', 
             '".$tip_faturamento."', 
             '".$crm_proposta."', 
             '".$cnpj_contratante."', 
             '".$raz_contratante."', 
             '".$emp_atendida."', 
             '".$num_servico."', 
             '".$cod_modalidade."', 
             '".$cod_reduzido."',   
             '".$des_servico."', 
             '".$cod_consultor."', 
             '".$hor_servico."',
             '".$dat_inicio."', 
             '".$dat_termino."', 
             '".$sts_contrato."', 
             '".$vlr_contrato."'
      )";

    if(mysqli_query($mysqli, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
    }

 $var = "<script>javascript:history.back(-2)</script>";
 echo $var;
?>