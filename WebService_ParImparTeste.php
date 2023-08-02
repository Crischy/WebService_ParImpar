<HTML>
    <HEAD>
        <TITLE>WebService: Consumindo</TITLE>
    </HEAD>
    <BODY>
        
<?php

    /* WebService - RESPONSE */

    $numero = "15";
    
    // simplexml_load_file()
    // Faz a conexão do atual arquivo ao WebService parametrizado
    // passando/capturando o valor pretendido
    $xml = simplexml_load_file (  
                                 "http://localhost/WebService_ParImpar/" . 
                                 "WebService_ParImparService.php?numero=" . $numero
                               );

    if (isset($xml->informacao)) {

        if($xml->informacao == "PAR"){
            echo "O número é par.";
        } else if($xml->informacao == "ÍMPAR"){
            echo "O número é ímpar.";
        } else {
            echo "Retorno inválido.";
        }

    } else {
        echo "Falha na comunicação com o web service.";
    }

?>
    
    </BODY>
</HTML>