<html>
<head>
    <title>Alex Takii</title>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body style="text-align: center;">

    <h2> Trabalho Alex Takii </h2>

    <form action="index.php" method="post">
        <div class="pergunta">
            <label> 1.A Conferência ""Rio+20", realizada na cidade do Rio de Janeiro, teve como tema gerador dos debates: </label><br>
            <input type="radio" name="resposta1" value="r1"> as relações comerciais internacionais
            <input type="radio" name="resposta1" value="r2"> o futuro d educação na América Latina 
            <input type="radio" name="resposta1" value="r3"> o combate ao terrorismo no mundo
            <input type="radio" name="resposta1" value="r4"> o incremento do turismo internacional 
            <input type="radio" name="resposta1" value="r5"> o desenvolvimento sustentável
        </div>
        <div class="pergunta">
            <label> 2.Acordo relacionado com a convenção sobre Diversidade Biológica, com o objetivo de garantir a proteção e a segurança no manejo, uso e movimento transfronteiriço de organismos vivos modificados. A qual acordo internacional se refere? 
 </label><br>
            <input type="radio" name="resposta2" value="r1"> Protocolo de Cartagena
            <input type="radio" name="resposta2" value="r2"> Protocolo de Genebra 
            <input type="radio" name="resposta2" value="r3"> Protocolo de Kyoto
            <input type="radio" name="resposta2" value="r4"> Protocolo de Montreal
        </div>
        <div class="pergunta">
            <label> 3.O Acordo de Paris aconteceu no ano de 2015 na cidade de Paris, na Franca, e tem como temo central:  </label><br>
            <input type="radio" name="resposta3" value="r1"> Diminuição da geração de resíduos sólidos
            <input type="radio" name="resposta3" value="r2"> Redução de emissão de gases de efeito estufa
            <input type="radio" name="resposta3" value="r3"> Diversidade biológica
            <input type="radio" name="resposta3" value="r4"> Saneamento básico para todos
            <input type="radio" name="resposta3" value="r5"> recuperação de áreas degradadas
        </div>
        <div class="pergunta">
            <label> 4.Aquele que apresentar estudos ambientais com informações incorretas estará sujeito a sanções:  </label><br>
            <input type="radio" name="resposta4" value="r1"> Civis e administrativas, exceto as penais
            <input type="radio" name="resposta4" value="r2"> Civis, administrativas e tributarias
            <input type="radio" name="resposta4" value="r3"> Apenas civis
            <input type="radio" name="resposta4" value="r4"> Civis, penais e administrativas
        </div>
        <div class="pergunta">
            <label> 5.Qual é artigo da CF 88 dedicado exclusivamente ao assunto meio ambiente?  </label><br>
            <input type="radio" name="resposta5" value="r1"> Art. 160 
            <input type="radio" name="resposta5" value="r2"> Art. 5 
            <input type="radio" name="resposta5" value="r3"> Art. 225
            <input type="radio" name="resposta5" value="r4"> Art. 261
        </div>
        <div class="pergunta">
            <label> 6.O q é o SISNAMA?  </label><br>
            <input type="radio" name="resposta6" value="r1"> Sistema Nacional de Meio Ambiente
            <input type="radio" name="resposta6" value="r2"> Sistema Nacional de Águas e Meio Ambiente
            <input type="radio" name="resposta6" value="r3"> Sistema Nacional de Saneamento e Meio Ambiente
            <input type="radio" name="resposta6" value="r4"> Sistema Nacional de Ar, Águas e Meio Ambiente
           </div>
        <div class="pergunta">
            <label> 7.Quem é o responsável pela implementação da Política Nacional do Meio Ambiente? 
 </label><br>
            <input type="radio" name="resposta7" value="r1"> Conselho Estadual de Meio Ambiente
            <input type="radio" name="resposta7" value="r2"> Órgãos integrantes do SISNAMA
            <input type="radio" name="resposta7" value="r3"> Secretarias Municipais de Meio Ambiente
            <input type="radio" name="resposta7" value="r4"> Ministério do Meio Ambiente
        </div>
        <input class="teste" type="submit" value="Enviar">
    </form>

<?php
    #print_r($_POST);

    $respostasCertas = array("r5","r1","r2","r4","r3","r1","r2");

    #print_r($respostasCertas);

    # conta quantas respostas correspondem a certas
    $cont = 0;
    if(count($_POST) == count($respostasCertas)){
        for($i = 0; $i < count($respostasCertas); $i++){
            if($respostasCertas[$i] == $_POST["resposta".($i+1)]){
                $cont++;

            } else {
                echo "<p style='color: red;'>Reposta " . $i+1 . " errada</p>";
            }
        }
    } else {
        echo "<h3 style='color: red;'>Falta respostas para serem enviadas!</h3>";
    }

    /*
    foreach($_POST as $key => $value){
        print_r($value);
        echo "<hr>";
        print_r($respostasCertas[$cont]);
        echo "<hr>";
        print_r($cont);
        if($value == $respostasCertas[$cont]){
            $cont++;
        }
    }
    */
    # changes the color of the text
    if($cont == 0){
        echo "<h1 style='color: red;'>". $cont . "/" . count($respostasCertas) ."</h1>";
    }else if($cont >= 1 && $cont <= 6){
        echo "<h1 style='color: orange;'>" . $cont . "/" . count($respostasCertas) ."</h1>";
    }else if($cont == 7){
        echo "<h1 style='color: green;'>". $cont . "/" . count($respostasCertas) ."</h1>";
    }
    ?>
</body>
</html>