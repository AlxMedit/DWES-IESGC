<?php
/** 
 * 2. Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch
 * @author Alex Abad
 * @date 26/09/2024
 */

 // Asignación de variables
$month = 9;
$year = 2024;
$nDays = 31;

// Comprobar
switch ($month){
    case 2:
        $nDays = 28;
        if ($year % 4 == 0 and $year % 100 != 0 or $year % 400 == 0) {
            $nDays++;
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $nDays = 30;
        break;
    case ($month == 2 and $leap == FALSE):
        $nDays = 28;
        break;
}
// VISTA

echo "El mes " . $month . " del año " . $year . " tiene " . $nDays . " dias";