<?php
    $arr_partite = [
        [
            'casa' =>
                [
                    'nome' => 'Bulls',
                    'punteggio' => 120
                ],
                
            'ospite' => 
                [
                    'nome' => 'Warriors',
                    'punteggio' => 108
                ]
            
        ],
        [
            'casa' => 
                [
                    'nome' => 'Celtics',
                    'punteggio' => 101
                ],
                
            'ospite' => 
                [
                    'nome' => 'Magic',
                    'punteggio' => 111
                ]
            
        ],
        [
            'casa' => 
                [
                    'nome' => 'Lakers',
                    'punteggio' => 100
                ],
                
            'ospite' => 
                [
                    'nome' => 'Nuggets',
                    'punteggio' => 99
                ]
                
        ],
        [
            'casa' => 
                [
                    'nome' => 'Pistons',
                    'punteggio' => 109
                ],
                
            'ospite' => 
                [
                    'nome' => 'Knicks',
                    'punteggio' => 117
                ]
                
        ],
        [
            'casa' => 
                [
                    'nome' => 'Hornets',
                    'punteggio' => 142
                ],
                
            'ospite' => 
                [
                    'nome' => 'Heat',
                    'punteggio' => 101
                ]
                
        ],
        [
            'casa' => 
                [
                    'nome' => 'Clippers',
                    'punteggio' => 132
                ],
                
            'ospite' => 
                [
                    'nome' => 'Pellicans',
                    'punteggio' => 91
                ]
                
        ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA calendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="match-tab">
        <div class="header">
            <h1>NBA</h1>
        </div>
        <div class="match-container">
            <?php
                for ($i = 0; $i < count($arr_partite); $i++) {?>
                    <div class="match-info">
                        <div class="teams-info">
                            <span><?= $arr_partite[$i]['casa']['nome'] ?></span>
                            <span><?= $arr_partite[$i]['ospite']['nome'] ?></span>
                        </div>
                        <div class="result">
                            <span><?= $arr_partite[$i]['casa']['punteggio'] ?></span>
                            <span><?= $arr_partite[$i]['ospite']['punteggio'] ?></span>
                        </div>
                    </div><?php
                }?>

        </div>
    </div>
</body>
</html>