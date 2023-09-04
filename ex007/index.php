<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas em PHP</title>
</head>
<body>
    <h1>Funções aritméticas em PHP</h1>
    <?php 
        echo "<h2>Valor absoluto</h2>";
        $r = abs(-2000); //valor absoulto = valor sem o sinal
        print("A resposta é $r");

        echo "<h2>Conversão de bases</h2>";
        $r = base_convert(1011, 2, 10); //10 = decimal, 8 = octal, 16 = hexa, 2 = binário
        print("A resposta é $r");
    
        echo "<h2>Divisão inteira</h2>";
        $r = intdiv(5, 2); 
        print("A resposta é $r");

        echo "<h2>Valor mínimo e máximo de uma sequência</h2>";
        $r = min(5, 2, 6, 8, 9, 1, 7); //min =  mínimo, max = máximo
        print("A resposta é $r");

        echo "<h2>Valor de Pi</h2>";
        $r = M_PI; //ou pi()
        print("A resposta é $r");

        echo "<h2>Potência</h2>";
        $r = pow (5, 2); 
        print("A resposta é $r");

        echo "<h2>Raiz quadrada</h2>";
        $r = sqrt(81); //ou 81 ** (1/2)
        print("A resposta é $r");
    ?>
</body>
</html>