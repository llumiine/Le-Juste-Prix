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



    <div class="jeu-form">
        
            <form class="form" action="jeu_500copy.php" method="POST">
        <?php

        $nb = $_POST['nb'];
        $nb_magique = $_POST["nb_magique"];


        if ($nb < $nb_magique) {

            echo " <h1>C'est trop petit -_- </h1>";
        ?>
                <label for="exampleInputEmail1" class="form-label" FONT size="10pt">Réessayer</label>
                <input type="number" size="30" style="width:600px;" class="form-control" name="nb"><br>
                <div class="mb-2">
                    <input type="hidden" value="<?php echo $nb_magique ?>" name="nb_magique">
                    <input type="submit" value="Let's go" class="btn btn-primary">
                </div>
                <img src="petit.jpg">

    </div>
    </div>
    </div>
    <form>
        </div>

    <?php
        }
        if ($nb > $nb_magique) {
            echo " <h1> C'est trop grand o_0 </h1>";

            if ($nb > 500) {
                echo " <h1>Tu dois entrer une valeur entre 0 et 500 seulement ! </h1>";
            }
    ?>

        <form class="form" action="jeu_50copy.php" method="POST">
            <label for="exampleInputEmail1" class="form-label"font-size: 2.2em;> Réessayer </label>
            <input type="number" size="30" style="width:600px;" class="form-control" name="nb">
            <br>
            <div class="mb-2">
                <input type="hidden" value="<?php echo $nb_magique ?>" name="nb_magique">
                <input type="submit" value="Let's go" class="btn btn-primary">
            </div>
            <img src="grand.jpg">
            </div>
            </div>
            </div>
        </form>

            <form>
                <div class="jeu-form">
                    <?php
                    }
                    if ($nb == $nb_magique) {
                        echo "<h1> GG !!!</h1>";
                        echo "<h2> Le nombre mystère était $nb_magique</h2>"; 
                        echo '<img src="gg.jpg" border="0" /></div> ';
                        }
                       
                    ?>
                   
                    
                </div>
            </form>
            <style>
                
                h1 {
                    font-size: 2.2em;
                }
                h2 {
                    font-size: 1.2em;
                }
                
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