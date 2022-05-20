<?php
$teste = [10,'oi',1.6,true];
 //ou
//$teste - array(10,'oi',1.6,true);
//que é a mesma coisa
$qntd = count($teste);

echo "Num de elementos nno vetor: $qntd";
echo "<hr>";
for($i=0;$i<=4;$i++){
    echo "Valor do i = $i";
    echo "<br>";
}
echo "<hr>";
$numero_qualquer = (rand(1,10))/10;
//resultado = $numero_qulquer/10;
echo "Um número qualquer: $numero_qualquer";
echo "<hr>";
$vetor = [1,5,8,10];
$n = count ($vetor);
$soma = 0;
for ($a=0;$a<$n;$a++){
    $soma = $soma + $vetor[$a];
}
echo $soma;
?>