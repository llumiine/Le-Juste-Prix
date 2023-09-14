<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NoS1gnal" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Devine le chiffre</title>
</head>

<body>

    <div class="jeu-form">
      
        

      <form action="connexion.php" method="post">
            <h2 class="text-center">Devine le chiffre</h2>
            <h3 class="text-center">Choisis ton niveau de difficulté</h3>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block"><a href="jeu_50.php">Facile (0 à 50)</button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block"><a href="jeu_100.php">Moyen (0 à 100)</button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block"><a href="jeu_500.php">Difficile (0 à 500)</button>
            </div>
        </form>
      
        
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