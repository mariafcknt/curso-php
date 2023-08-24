<?php 
    $nome = "Aria"; //variável
    $sobrenome = "Stark"; //atribuição -> sobrenome recebe o valor Stark

    //contanstes não mudam de valor
    const PAIS = "Westeros"; //constantes não tem $

    #PAIS = "Essos" -> não é permitido mudar o valor de uma constante

    echo "Muito prazer, $nome $sobrenome! Você mora em" . PAIS;
?>