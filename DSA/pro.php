<?php
function Count($rupee){
    static $count=0;
    if($rupee==0){
        return $count;
    }
    else if($rupee>=10){
        $count+=$rupee/10;
        Count($rupee/10);
    }
    else if ($rupee>=5){
        $count++;
        Count($rupee/5);
    }
    else if($rupee>=2){
        $count+=$rupee/2;
        Count($rupee/2);
    }
    else if($rupee>=1){
        $count++;
        $rupee--;
    }
}
?>