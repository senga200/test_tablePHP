<?php 

echo '<table border> 
<tr>
<th>nombre</th>
<th>carré</th>
<th>racine</th>
</tr>';

for($i=1;$i<11;$i++){
	echo '<tr>
			<td>'. $i.'</td>
			<td>'. $i*$i.'</td>
			<td>'.sqrt($i).'</td>
		  </tr>';  
};

echo '</table>';


echo '</br>';

function racine($a, $b, $c){
$delta = $b*$b - (4*$a*$c);
echo 'la valeur de delta est :'. $delta. '</br>';
if ($a == 0){
	echo 'equation invalide, on ne peut pas diviser par 0 !';
	return;
}
else {
	if ($delta == 0 ){
		echo 'une seule solution : '. -$b/(2*$a);
	  } 	else if ($delta > 0) {
		$racineA = (-$b -sqrt($delta))/(2*$a);
		$racineB = (-$b +sqrt($delta))/(2*$a);
		echo 'deux solutions : '.$racineA .' et ' .$racineB;
	  } else if($delta < 0) {
		echo 'pas de solution';
	  }
	}	
}

racine (1,2,1);
