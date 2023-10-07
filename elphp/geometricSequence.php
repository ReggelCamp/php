<?php
function GeometricSeq($Fterm, $CommonR, $NumofTerm) {
    $curr_term = $Fterm;
    $seq = array("");
    echo "Geometric Sequence:";
    for ($i = 0; $i < $NumofTerm; $i++) {
      	 echo $seq[$i] = $curr_term;
     	 $curr_term *= $CommonR;
      
       echo "\n";
    }
    //echo "\n";
}
$Fterm = 1;
$CommonR = 2;
$NumofTerm = 6;
GeometricSeq ($Fterm, $CommonR, $NumofTerm);
?>