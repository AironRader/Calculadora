 <?php
        $num1 = isset($_POST["numero1"])?$_POST["numero1"]:"";
        $num2 = isset($_POST["numero2"])?$_POST["numero2"]:"";
        $som = isset($_POST["Somar"])? $_POST["Somar"]:"";
        $sub = isset($_POST["Subtrair"])? $_POST["Subtrair"]:"";
        $mult = isset($_POST["Multiplicar"])? $_POST["Multiplicar"]:"";
        $div = isset($_POST["Dividir"])? $_POST["Dividir"]:"";
        
        function somar($num1,$num2){
            $total = $num1 + $num2;
            echo "Resultado: $total";
        }
        function subtrair($num1,$num2){
            $total = $num1 - $num2;
            echo "Resultado: $total";  
        }
        function multiplicar($num1,$num2){
            $total = $num1 * $num2;
            echo "Resultado: $total";
        }
        function dividir($num1,$num2){
            $total = $num1 /$num2;
            echo "Resultado: $total";
        }

        if ($som){
            somar($num1,$num2);
        }else if($sub){
           subtrair($num1,$num2);
        }else if($mult){
            multiplicar($num1,$num2);
        }else if ($div){
            dividir($num1,$num2);
        }
?>
<br/><html><a href = "Calculadora.html">Voltar</a></html>