<?php
    
    /* WebService - REQUEST */

    // Para dizer p'ro cabeçalho da resposta da requisição
    // que os dados a serem trafegados são do tipo XML
    header("content-type: text/xml");
    
    // Recebendo o valor via requisição
    $numero = $_REQUEST["numero"]; // Ex.: [?numero=x]
    
    if (is_numeric($numero)) {
        // Short if | Para determinar se é par ou Ímpar
        $informacao = ($numero % 2 == 0) ? "PAR" : "ÍMPAR";
    } else {
        $informacao = "Não é um número";
    }
    
    // Criação e formatação do documento
    $dom = new DOMDocument("1.0", "UTF-8");
    $dom->preserveWhiteSpace = FALSE;
    $dom->formatOutput = TRUE;
    
    // NÓS: reposta->informação = PAR/ÍMPAR 
    $elementoInformacao = $dom->createElement("informacao", $informacao);
    $elementoRoot = $dom->createElement("resposta");
    $elementoRoot->appendChild($elementoInformacao);
    $dom->appendChild($elementoRoot);

    // Exibe o objeto da classe usada...
    echo $dom->saveXML();

?>