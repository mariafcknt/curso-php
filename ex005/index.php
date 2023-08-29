<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings em PHP</title>
</head>
<body>
    <h1>Manipulação de strings em PHP</h1>
    <?php 
        /*$nome = 'Gustavo';
        $sobrenome = "Guanabara \u{1F596}";
        echo "$nome $sobrenome";

        const ESTADO = "RJ";
        print "Moro no " . ESTADO;

        const CANAL = "Curso em Vídeo \u{1F499}";
        echo 'Eu adoro o ' . CANAL;

        //echo "Estado no ano de "  . date('Y');

        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo "$nom \"Minotauro\" $snom"; 


        //String Nowdoc
        $canal = 'Curso em Vídeo';
        $ano = date('Y');
        echo <<< 'TESTE'
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraços! \u{1F596}
        TESTE;
        */

        //String Heredoc
        $canal = 'Curso em Vídeo';
        $ano = date('Y');
        echo <<< TESTE
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraços! \u{1F596}
        TESTE;

        ?>
</body>
</html>