<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema del ebrio</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdn.plot.ly/plotly-2.6.3.min.js"></script>
</head>
<body>

    <?php

    $N = $_GET['N'];
    $Y = $_GET['Y'];
    $X = $_GET['X'];
    $probabilidad = $_GET['Probabilidad'];

    switch ($probabilidad) {
        case '1':
            $Y++;
            break;
        
        case '2':
            $Y--;
            break;
        
        case '3':
            $X++;
            break;
        
        case '4':
            $X--;
            break;
        
        default:
            echo 'error';
            break;
        }

        $N++;

        $probabilidad = rand(1, 4);

        ?>

        <div class="container">
            <form class="col s12" action="<?php echo 'calculos2.php?N='.$N.'&Y='.$Y.'&X='.$X.'&Probabilidad='.$probabilidad.''; ?>" method="post">
                <div class="card-panel">
                    Problema del ebrio: <br><br>
                    Un ebrio está parado en una esquina, cuando decide caminar para que le pase el efecto. 
                    Supongamos que existe una probabilidad igual de que se dirija al norte, sur, este u oeste al llegar a cada esquina. 
                    Si camina 10 calles, ¿Cuál es la probabilidad de que termine su recorrido a dos calles de donde lo empezó?<br><br>
                    Se genera aleatoriamente un número del 1 al 4, los cuales tienen cada uno asignado una dirección:<br><br>
                    1. Norte<br>
                    2. Sur<br>
                    3. Este<br>
                    4. Oeste<br><br>
                    Obtener probabilidad:
                </div>

                <div class="col s12 m6 l3">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Probar</button>
                </div>
            </form>
        </div>}

        <?php

        echo '<div class="container">
            <div class="card-panel">
                Número aleatorio de posición: '. $probabilidad .' <br>
                Cuadras caminadas: '. $N .'<br>
                Posición del ebrio (X, Y): ('.$X.', '.$Y.') 
            </div>
        </div>';
        ?>

    <!--SCRIPT-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                duration: 500,
                indicators: true,
                fullWidth: true
            });
        });

    </script>
</body>
</html>