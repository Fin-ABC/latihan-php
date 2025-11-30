<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP - Soal 1</title>
</head>
<body>
    <?php 
    $angka1 = 8;
    $angka2 = 4;
    $hasilTambah = $angka1 + $angka2;
    $hasilKurang = $angka1 - $angka2;
    $hasilKali = $angka1 * $angka2;
    $hasilBagi = $angka1 / $angka2;
    ?>

    <h1>Hasil dari <?php echo"$angka1 + $angka2 = $hasilTambah"?></h1>
    <h1>Hasil dari <?php echo"$angka1 - $angka2 = $hasilKurang"?></h1>
    <h1>Hasil dari <?php echo"$angka1 * $angka2 = $hasilKali"?></h1>
    <h1>Hasil dari <?php echo"$angka1 / $angka2 = $hasilBagi"?></h1>
</body>
</html>