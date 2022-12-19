<?php
    $n_randoms = 15;
    $min = 20;
    $max = 999;
    $arr_randoms = [];

    while (count($arr_randoms) < $n_randoms) {
        $random_num = rand($min, $max);
        if (!in_array($random_num, $arr_randoms)) {
            $arr_randoms[] = $random_num;
        }
    }

    // var_dump($arr_randoms);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($i = 0; $i < count($arr_randoms); $i++) {
            $num_random = $arr_randoms[$i];?>

            <li><?= $num_random ?> </li><?php
        }?>
    </ul>
</body>
</html>