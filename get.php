<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <form action="get.php" method="get">
        <label for="">Nama Mahasiswa</label>
        <input type="text" name="nama" value="">
        
        <label for="">nilai uts</label>
        <input type="text" name="nilai_uts" value="">

        <label for="">nilai UAS</label>
        <input type="text" name="nilai_uas" value="">
        
        <label for="">nilai tugas</label>
        <input type="text" name="nilai_tugas" value="">

        <input type="submit" value="simpan" name="simpan">
    </form>
    <?php
        $nama = $_GET['nama'];
        $nilai_uts = $_GET['nilai_uts'];
        $nilai_uas = $_GET['nilai_uas'];
        $nilai_tugas = $_GET['nilai_tugas'];

        $simpan = $_GET['simpan'];

        $total = $nilai_uts + $nilai_uas + $nilai_tugas;

        if(isset($_GET['nama'])
         AND isset($_GET['nilai_uts'])
         AND isset($_GET['nilai_uas'])
         AND isset($_GET['nilai_tugas'])){

        }else{
            echo "diisi dulu bang";
        }

        echo $nama;
        echo "<br>";
        echo $nilai_uts;
        echo "<br>";
        echo $nilai_uas;
        echo "<br>";
        echo $nilai_tugas;

    ?>

    <p>Nama : <?php echo $nama ?></p>
    <p>Nilai Uts : <?php echo $nilai_uts ?></p>
    <P>Nilai Uas : <?php echo $nilai_uas ?></P>
    <p>Nilai Tugas : <?php echo $nilai_tugas ?></p>

    <p>Nama : <?= $nama ?></p>
    <p>Nilai Uts : <?= $nilai_uts ?></p>
    <P>Nilai Uas : <?= $nilai_uas ?></P>
    <p>Nilai Tugas : <?= $nilai_tugas ?></p>
    <p>Total Nilai :<?= $total ?></p>
</body>
</html>