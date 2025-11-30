<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP - Soal 4</title>
</head>
<body>
    <h1>
        <?php 
        for($i = 1; $i <= 20; $i++){
            if($i % 3 == 0 && $i % 5 == 0){
                echo "FizzBuzz"; ?> <br>
            <?php } elseif($i % 5 == 0){
                echo "Buzz"; ?> <br>
            <?php } elseif($i % 3 == 0){
                echo "Fizz"; ?> <br>
            <?php } else{
                echo $i; ?> <br>
            <?php }
        }
        ?>
    </h1>
</body>
</html>