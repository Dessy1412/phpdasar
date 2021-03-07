<?php

    $mahasiswa = ['dessy', 'fitri', 'yani', 'dewi'];

    echo $mahasiswa[3];
    echo "<br>";
    echo $mahasiswa[0];
    
    echo "<ol>";
    foreach($mahasiswa as $nama){
        echo '<li>'.$nama.'</li>';
    }
    echo "</ol>";
?>