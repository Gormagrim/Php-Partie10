<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function showCards($globalPortrait) {
    foreach ($globalPortrait as $element) {
        ?>
        <div class="card mb-3">
            <h3 class="card-header">Portrait</h3>
            <div class="card-body">
                <h5 class="card-title">Prénom : <?= $element['name']; ?> </h5>
                <h5 class="card-title">Nom : <?= $element['firstname']; ?></h5>
            </div>
            <img style="height: 500px; width: auto; display: block;" src="<?= $element['portrait']; ?>" alt="Portrait de Monsieur <?= $element['firstname']; ?>" alt="Portrait de Monsieur <?= $element['firstname']; ?>" title="Portrait de Monsieur <?= $element['firstname']; ?>">
        </div>
    <?php
    }
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/slate/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <title>Partie 10 php TP 3</title>
    </head>
    <body>
        <h1>TP 3 Partie 10 Php</h1>
        <p>Faire une fonction qui permet d'afficher les données des tableaux suivants :</p>
        <p>$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');</p>
        <p>$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');</p>
        <p>$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');</p>
        <p>$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');</p>
        <p>Les afficher tous sur une même page.</p>

        <div class="container-fluid">
            <div class="row">
                <div class="offset-1 col-10 offset-sm-4 col-sm-4 offset-md-4 col-md-4 offset-lg-4 col-lg-4 registration">
                    <?php
                    showCards([$portrait1, $portrait2, $portrait3, $portrait4]);
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>