<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

            /*$cor=¨amarelo¨;//$ é a variavel
            $cor= ¨vermelho¨;
            echo $cor;//sem aspas pq la em cima já declarei*/
      
            /*$cor=¨vermelho¨;
            var_dump($cor);//mostra o conteudo da variavel, qual seu tipo; texto, numero, etc); e quantos caracteres tem.*/
      
           /*$nome=¨Julia¨;
           echo ¨Olá¨.$nome*/
      
           /*$a= 3;
           $b= 5;
           //$resultado=$a+$b;//
           //$resultado=$a-$b;//
           //$resultado=$a*$b;//
           //$resultado=$a/$b;//
           //$resultado=$a%$b;//
           echo $resultado;*/
        
           /*$a = 2;
           $b = 4;
           
           if ($a > $b) {
              echo "a é maior que b"; 
           }
        else if ($a == $b) {
              echo "a é igual a b";
           } 
           else {
              echo "b é maior que a";
           }*/
      
      /*$i=1;
      while($i < 10) {
        $i = $i+1;
        echo $i . "<br>";*/
      
      /*$i = 1;
        while($i < 10)  {
          $i = $i+1;
          
          if ($i%2 == 0) {
          echo "o valor de $i é par <br>";
          }
          else {
            echo "o valor de $i é impar <br>"; 
          }*/
     
         /*for ($i = 1; $i <10; Si++){
         echo "o valor de i é $i"<br>};*/
      
      /*$nome = "Julia";
        switch ($nome) {
          case "Julia";
            echo "Ola Julia";
              break;
         
              case "Pedro";
              echo "ola Pedro";
                break;
            
          default;
            echo "nao sei quem voce é";
        }*/
      
      /*function soma($a, $b) {
        $resultado = $a + $b;
        return $resultado;
        }
      
       $numero1 = 10.2;
       $numero2 = 6;
      
      $resultadoFuncao = soma($numero1, $numero2);
        echo $resultadoFuncao;*/
      
      /*$cores = array("vermelho","azul");
             echo $cores[0];*/
      
      /*$pessoa = ["nome" => "ana","idade" => 23];
      echo $pessoa["nome"];*/
      
      /*$numeros = [1,2,3];
      array_push($numeros, 4);
      echo $numeros[3];*/
      
      /*$frutas = ["uva","laranja","morango"];
        foreach($frutas as $fruta) {
          echo "a fruta é $fruta<br>";
        }*/
      
      $comidas = [pizza,abobora,arroz];
      // array_push ($comidas, "sopa de cebola");//
       array_pop ($comidas);
      
       foreach($comidas as $comida) {
         echo "a comida é " .$comida. "<br>";
         
         
       }
      
      
        
             

        ?>

    </body>
</html>