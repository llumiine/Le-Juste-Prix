<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php

    $a = random_int(1,100);


    ?>
    <div class="jeu-form">


        <div class="container">
            <div class="row">

                <div class="col-8">

                    <form class="form" action="jeu_100copy.php" method="POST">
                        <h1 class="text-center"> Devinez le nombre entre 0 à 100 <h1>
                                <style>
                                    h1 {
                                        font-size: 2.2em;
                                    }
                                </style>
                                <label for="exampleInputEmail1" class="form-label">

                                </label>
                                <input type="number" class="form-control" name="nb">
                                <br>
                                <div class="mb-2">
                                    <input type="hidden" value="<?php echo $a ?>" name="nb_magique">
                                    <input type="submit" value="Let's go" class="btn btn-primary">
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .jeu-form {
            width: 900px;
            margin: 70px auto;

        }

        .jeu-form form {
            margin-bottom: 15px;
            background: #A397F0;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;

        }

        .jeu-form h2 {
            margin: 0 0 15px;

        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
            background: #2D2289;
        }
    </style>
</body>

</html>


</body>

</html>