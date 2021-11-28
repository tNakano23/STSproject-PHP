<?php
for($t=2; $t<10000 ;$t++){
    $judge = true;
    for($i=2;$i<$t;$i++) {
        if($t%$i == 0) {
        $judge = false;
        break;
        }
    }

    if ($judge) {
    echo $t;
    echo '<br>';
    }
}