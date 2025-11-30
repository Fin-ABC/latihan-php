<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP - Soal 5</title>
</head>

<body>
    <?php
    $hasil = 0;
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 1) {
            $hasil += $i;
        }
    }
    ?>
    <h1>
        Jumlah angka ganjil dari 1 sampai 100 adalah: <?php echo $hasil; ?>
    </h1>
</body>

</html>