
<?php

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacion = $_POST['operacion'];

    function calcular($valor1,$valor2,$operacion){
        if(($valor1>=0)&&($valor2>=0)){
            $resultado=0;
            switch ($operacion) {
                case '+':
                    $resultado=$valor1+$valor2;
                    echo "$valor1 $operacion $valor2 = $resultado";
                    break;
                case '-':
                    $resultado=$valor1-$valor2;
                    echo "$valor1 $operacion $valor2 = $resultado";
                    break;
                case '*':
                    $resultado=$valor1*$valor2;
                    echo "$valor1 $operacion $valor2 = $resultado";
                    break;
                case '/':
                    if($valor2!=0){
                        $resultado=$valor1/$valor2;
                        echo "$valor1 $operacion $valor2 = $resultado";
                        break;
                    }else{
                        echo "No se puede dividir en cero";
                    }

                default:
                    break;
            }
        }else{
            echo "valor incorrectos";
        }
    }

    calcular($valor1,$valor2,$operacion);

?>