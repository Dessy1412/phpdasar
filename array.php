
<?php

$_fruits = ["apple", "orange", "manggo"];

echo 'elemen buah index ke-2'. $_fruits[2];

echo '<br/>Jumlah Buah : ' . count($_fruits);






?>

<h3>Daftar Buah</h3>
<ol>
    <?php
     $jumlah = count($_fruits);
     for($i = 0 ; $i < $jumlah ; $i++){
         echo '<li>'.$_fruits[$i].'</li>';
      }
    ?>
</ol>

<!-- array associative -->
<!-- associative itu ada q value  -->
<?php
    $umur = ['ahmad'=>20, 'dewi'=>19, 'dessy'=>21];
    foreach($umur as $k => $v){
        echo'<br?>'.$k.'usianya :'.$v;
    }
?>


<!-- array multi dimensi -->
<?php
    $_jus = [
        ['buah'=>'mangga','harga'=>8000],
        ['buah'=>'alpukat','harga'=>6000],
        ['buah'=>'melon','harga'=>9000],

    ];
?>
<ol>
    <?php
        foreach($_jus as $jus){
            echo'<li>Jus'.$jus.['buah'].'harga :'.$jus['harga'].'</li>';
        }
    ?>
</ol>