<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revisão PHP</title>
</head>
<body>
    <h1>Revisando alguns conceitos de programação</h1>
    <main class="container">
        <section id="condicionais">
            <h1>Condicionais</h1>
            <p>Crie uma função que verifique se uma pessoa tem voto facultativo ou obrigatório</p>
            <?php
                //Com IF
               // function podeVotarIf($idade){
                   
                    // if(($idade >= 16 and $idade < 18) or $idade > 60){
                    //     echo "Voto facultativo";
                    // }
                    // else if($idade >= 18){
                    //     echo "Voto obrigatório";
                    // }
                    // else{
                    //     echo "Não vota";

                    // }
                    
                //}
                //Com Switch
                function podeVotarSwitch($idade){
                    switch ($idade) {
                        case $idade >= 16 and $idade < 18 or $idade > 60:
                            echo "Devido você possuir $idade anos, seu voto é facultativo";
                        break;
                        case $idade >= 18:
                            echo "Devido você possuir $idade anos, seu voto é obrigatório";
                        break;
                        default:
                            echo "Devido você possuir $idade anos, você não vota";
                        break;
                    }    
                }    

   
            ?>
            <p>Resposta : <?php echo podeVotarSwitch(56);?></p>
        </section>
        <section id="estruturas-de-repeticao">
            <h1>Estruturas de Repetição</h1>
            <p>Crie uma função que implemente a tabuada do 2 utilizando FOR</p>
            <?php
                function tabuadaDo2(){
                    $resultado = 0;
                    for ($i=1; $i <= 10; $i++) { 
                        # code...
                        $resultado = $i * 2;
                        echo "$i x 2 = $resultado <br>";
                    }
                }
            ?>
            <p>Resposta : <br>
             <?php tabuadaDo2();?></p>

            <p>Crie um array associativo relacionado com usuário e percorrer usando foreach.</p>

                <?php

                    $usuarios = [
                         "nome" => "Abirosvaldo",
                                  "sobrenome" => "De Souza",
                                  "email" => "abira@gmail.com"
                             
                   
                    ];

                ?>
                <p>Resposta:<br>
                <?php foreach($usuarios as $key => $value){
                        echo "$key => $value <br>";
                    }
                ?></p>
        </section>
        <section id="arrays">
            <h1>Arrays</h1>
            <p>Crie um array que contenha cores</p>
            <?php
              $cores = ["amarelo", "branco","marrom", "preto", "azul"];       
            ?>
            <p>Resposta com var_dump : <br>
             <?php var_dump($cores);?></p>

            <p>Resposta com print_r : <br>
             <?php print_r($cores);?></p>

            <p>Crie um array associativo relacionado com usuário.</p>

            <?php

                $usuario = [
                    "nome" => "Abirosvaldo",
                    "sobrenome" => "De Souza",
                    "email" => "abira@gmail.com"
                ];

            ?>
            <p>Resposta utilizando var_dump:<br>
            <?php var_dump($usuario);?></p>

        </section>
        
    </main>
    
</body>
</html>