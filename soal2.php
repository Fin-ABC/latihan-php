<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP - Soal 2</title>
</head>

<body>
    <?php
    $nilai = 74;
    ?>

    <h1>Nilai kamu adalah: <?php echo $nilai ?></h1>
    <h1>Status:
        <?php
        if ($nilai >= 75) {
            echo "Lulus";
        } else {
            echo "Tidak Lulus";
        }
        ?>
    </h1>
</body>

</html>