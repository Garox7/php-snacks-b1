<?php
    $firstname = $_GET['firstname'] ?? '';
    $email = $_GET['email'] ?? '';
    $age = $_GET['age'] ?? '';

    $position_at = strpos($email, '@');
    $position_dot = strpos($email, '.', $position_at);

    if (strlen($firstname) > 3 && is_numeric($age) && $position_at !== false && $position_dot !== false) {
        $message = 'Accesso riuscito';
    } else {
        $message = 'Accesso negato';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Sign In</h1>
        <form action="" method="get">
            <input type="text" name="firstname" placeholder="inserisci il tuo nome">

            <input type="text" name="email" placeholder="inserisci la tua E-mail">

            <input type="text" name="age" placeholder="inserisci la tua età">

            <button>Invia</button>
        </form>
        <h3><?php echo $message ?></h3>
    </div>
</body>
</html>