<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //Tipos escalares
        // 0x = hexadecimal; 0b = binário; 0 = octal
        // $num = 0x1A; -> 26 em hexadecimal
        // $num = 0b1011; -> 11 em binário
        // $num = 010 -> 8 em octal
        // echo "O valor da variável é $num";

        // $v = true;
        // var_dump($v); //função que dá informações sobre a variável

        // $num = (integer) 3e2; -> 3 x 10^2 coerção
        // //echo "O valor é $num";
        // var_dump($num); -> o tipo do resultado de potências é float

        // $num = (float)"950";
        // var_dump($num);

        // true = 1; false = vazio
        // $casado = true;
        // var_dump($casado);
        // print "O valor para casado $casado";

        //Tipos compostos
        // $vet = [6, 2.5, "Maria", false, 9, 3, 5];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>