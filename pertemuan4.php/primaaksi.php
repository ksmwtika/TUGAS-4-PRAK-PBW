<?php
    $bilangan = $_POST['bil'];
    $n = $bilangan;
    $status = "PRIMA";
    for ($i = 2; $i <= $n-1; $i++) {
        if ($n % $i == 0)
    {
        $status = "BUKAN PRIMA";
        break; 
    }
    }
    
    echo "Bilangan \n" . $n . "\n adalah : " . $status;
?>