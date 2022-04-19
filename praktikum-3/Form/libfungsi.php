<?php
function kelulusan($total) {
    if($total > 55) {
        echo '<br>Status Kelulusan : ' . '<a style="color:green; font-weight:bold;">Lulus</a>';
    }
    else {echo '<br>Status Kelulusan : ' . '<a style="color:red; font-weight:bold;">Tidak Lulus</a>';}
}

function grade($total) {
    if($total >= 0 && $total < 36) {
        $grade = 'E';
        echo '<br>Grade Nilai : ' . '<a style="color:red; font-weight:bold;">E</a>';
    }
    elseif($total >= 36 && $total < 56) {
        $grade = 'D';
        echo '<br>Grade Nilai : ' . '<a style="color:orange; font-weight:bold;">D</a>';
    }
    elseif($total >= 56 && $total < 70) {
        $grade = 'C';
        echo '<br>Grade Nilai : ' . '<a style="color:orange; font-weight:bold;">C</a>';
    }
    elseif($total >= 70 && $total < 85) {
        $grade = 'B';
        echo '<br>Grade Nilai : ' . '<a style="color:green; font-weight:bold;">B</a>';
    }
    elseif($total >= 85 && $total <= 100) {
        $grade = 'A';
        echo '<br>Grade Nilai : ' . '<a style="color:green; font-weight:bold;">A</a>';
    }
    else {
        $grade = 'I';
        echo '<br>Grade Nilai : ' . '<a style="color:grey; font-weight:bold;">I</a>';
    }
}

function predikat($total) {
    switch(true) {
        case ($total >= 0 && $total < 36);
            echo '<br>Predikat: Sangat Kurang';
            break;
        case ($total >= 36 && $total < 56);
            echo '<br>Predikat: Kurang';
            break;
        case ($total >= 56 && $total < 70);
            echo '<br>Predikat: Cukup';
            break;
        case ($total >= 70 && $total < 85);
            echo '<br>Predikat: Memuaskan';
            break;
        case ($total >= 85 && $total <= 100);
            echo '<br>Predikat: Sangat Memuaskan';
            break;
        default:
            echo '<br>Tidak Ada';       
    }
}
?>