<?php

//funcion calcular la edad de una persona

function calcularEdad($nacimiento,$actual){
$edad=$actual-$nacimiento;
echo("<br> si usted nacio en el 1991 su edad es: ".$edad. "años");
}

function calcularEdad2($nacimiento,$actual){
    $edad=$actual-$nacimiento;
    echo("<br> si usted nacio en el 1995 su edad es: ".$edad ."años");
}


function calcularEdad3($nacimiento,$actual){
    $edad=$actual-$nacimiento;
    echo("<br> si usted nacio en el 1987 su edad es: ".$edad. "años");
}



function calcularEstatura($estatura){
    if($estatura < 1.70){
        echo("Para la estatura " . $estatura . " el Biotipo es: Biotipo Bajo");
        
    }
    elseif($estatura <=1.70 || $estatura < 1.80 ){
        echo("Para la estatura " . $estatura . " el Biotipo es: Biotipo Promedio");

    }
    elseif($estatura >= 1.80){
        echo("Para la estatura " . $estatura . " el Biotipo es: Biotipo Superior");

    }

        
    
}

?>