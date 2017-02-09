<?php
  $total=10+20/4;
  echo $total;
?>

<?php
$soma=0;
     for($i=0;$i<=1000;$i++){
      $soma=$soma+$i;
    }
    echo $soma;
?>

<?php
$resultado = 1;
$fat=5;
	for($i = $fat; $i > 1; $i--){
		$resultado *= $fat;
		$fat--;
	}
  echo $resultado;
?>

<?php

function fibonacci ($n)
{
  if ($n == 1 || $n == 2)
  {
    return 1;
  }
  else
  {
    return fibonacci( $n - 1)+fibonacci( $n - 2 );
  }
}
echo fibonacci(10);
?>
