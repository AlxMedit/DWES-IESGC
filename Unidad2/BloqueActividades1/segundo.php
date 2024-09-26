<?php
/** 
 * 2. Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch
 * @author Alex Abad
 * @date 26/09/2024
 */

 // Asignación de variables
$mes = 8;
$ano = 2024;

 // Ajuste del switch
switch ($mes){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "El mes $mes tiene 31 días";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "El mes $mes tiene 30 días";
        break;
    case 2:
        // Comprobar si el año es bisiesto o no
        if ($ano%4==0 and ($ano%100!=0 or $ano%400==0)){
            echo "Febrero en $ano tiene 28 días segun el año";
        } else {
            echo "Febrero en $ano tiene 28 días segun el año";
        }
    default: 
        echo "¿Qué mes es ese?";
    }