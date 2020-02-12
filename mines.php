<?php
$slice = array_slice($argv,1);
$levelMine = $slice[0];
$operandProdParH = pow(1.1, $levelMine);
$prodParH = 2*30*$levelMine*$operandProdParH;
$prodParJ = 24*$prodParH;
$levelMine2 = $levelMine-1;
//pour le metal
$coutMetal = 60*pow(1.5, $levelMine2);
$coutCrystal = 30*pow(1.5, $levelMine2);
$coutRelatif = $coutMetal + $coutCrystal*2;
$prodParH2 = 2*30*$levelMine2*$operandProdParH;
$prodRelatifParH = $prodParH-$prodParH2;
$prodRelatifParJ = $prodRelatifParH*24;
$renta = $coutRelatif / $prodRelatifParJ;
$renta2 = $coutRelatif / $prodRelatifParH;
// message a afficher
echo "La production par heure est de : ".$prodParH. PHP_EOL . 
     "La production par jour est de : " .$prodParJ. PHP_EOL .
     "Le retour sur investissement intervient au bout de : " . $renta. " jours soit ".$renta2." heures". PHP_EOL;
?>