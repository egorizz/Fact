<?php
for($i=1; $i<51; $i++){
    if($i % 3 == 0 and $i % 5 != 0)
        echo "<i>".$i."</i><br>";
    elseif($i % 3 == 0 and $i % 5 == 0)
        echo "<i><strong>".$i."</strong></i><br>";
    else
        echo $i."<br>";
}