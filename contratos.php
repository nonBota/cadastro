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
         $id_contratos = mysqli_real_escape_string($mysqli, $_REQUEST['id_contratos']);
         $dat_pagamento = mysqli_real_escape_string($mysqli, $_REQUEST['dat_pagamento']);
         $obs_pagamento= mysqli_real_escape_string($mysqli, $_REQUEST['obs_pagamento']);
         $vlr_pagamento= mysqli_real_escape_string($mysqli, $_REQUEST['vlr_pagamento']);
      
        $sql = "INSERT INTO pgto_contratos(
                 `id_contratos`,
                 `dat_pagamento`,
                 `obs_pagamento`,
                 `vlr_pagamento`
            )
      VALUES(
                    '".$id_contratos."',
                    '".$dat_pagamento."', 
                    '".$obs_pagamento."', 
                    '".$vlr_pagamento."'  
            )";

if(mysqli_query($mysqli, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

// $var = "<script>javascript:history.back(-2)</script>";
// echo $var;
?>