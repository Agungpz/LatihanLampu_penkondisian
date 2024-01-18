<?php

function laluLintas($nolintas, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6,$kt7,$kt8, $kt9,$kt10){
    for ($nolintas; $nolintas <= $kondisiTerminasi; $nolintas++){
        if($nolintas == $kt3 || $nolintas == $kt5 || $nolintas == $kt7 || $nolintas == $kt8){
            echo "Lampu lalu lintas no $nolintas Tidak berfungsi <br/>";
        } elseif($nolintas == $kt1 || $nolintas == $kt2 || $nolintas == $kt7 || $nolintas == $kt10){
            echo "Lampu lalu lintas no $nolintas Tidak lancar <br/>";
        } elseif (   $nolintas == $kt9){
            echo "Lampu lalu lintas no $nolintas Sedang diperbaiki<br/>";
        }
        else {
            echo "Lampu lalu lintas no $nolintas Lancar <br/>";
     }
    }
}
echo laluLintas(1,20,2,4,5,10,11,12,13,14,16,18)
/////////////////////////////////////////////////




?>