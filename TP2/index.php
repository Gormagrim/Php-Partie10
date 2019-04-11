<?php include('regex.php'); ?>

<?php
$formErrors = array();

if (count($_POST) > 0) {
    // on vérifie que la variable $_POST['lastname'] existe ET n'est pas vide.
    if (!empty($_POST['lastname'])) {
        // Je vérifie bien que ma variable $_POST['lastname'] correspond à ma patternName.
        if (preg_match($patternName, $_POST['lastname'])) {
            // On stocke dans la variable lastname la variable $_POST['lastname'] dont on a désactivé les balises HTML.
            $lastname = htmlspecialchars($_POST['lastname']);
        } else {
            // Si la saisie utilisateur ne correspond pas à la regex on va stocker une erreur lastname dans notre tableau d'erreurs.
            $formErrors['lastname'] = 'Votre nom de famille est incorrect.';
        }
    } else {
        // On va réutiliser notre erreur lastName parce que les deux ne peuvent pas exister en même temps.
        $formErrors['lastname'] = 'Veuillez renseigner votre nom de famille.';
    }

    if (!empty($_POST['firstname'])) {
        if (preg_match($patternName, $_POST['firstname'])) {
            $firstname = htmlspecialchars($_POST['firstname']);
        } else {
            $formErrors['firstname'] = 'Votre prénom est incorrect.';
        }
    } else {
        $formErrors['firstname'] = 'Veuillez renseigner votre prénom.';
    }

    if (!empty($_POST['age'])) {
        if (preg_match($patternAge, $_POST['age'])) {
            $age = htmlspecialchars($_POST['age']);
        } else {
            $formErrors['age'] = 'Votre age est incorrect.';
        }
    } else {
        $formErrors['age'] = 'Veuillez renseigner votre age.';
    }

    if ($_POST['age'] < 18 || $_POST['age'] > 65) {
        $formErrors['age'] = 'Veuillez renseigner votre age correctement (> 18a ns et < 65 ans).';
    }

    if (!empty($_POST['gender'])) {
        if ($_POST['gender'] == 'Monsieur' || $_POST['gender'] == 'Madame') {
            $gender = htmlspecialchars($_POST['gender']);
        } else {
            $formErrors['gender'] = 'Merci de selectionner un genre dans la liste.';
        }
    } else {
        $formErrors['gender'] = 'Veuillez renseigner votre genre.';
    }

    if (!empty($_POST['company'])) {
        if (preg_match($patternCompanyName, $_POST['company'])) {
            $company = htmlspecialchars($_POST['company']);
        } else {
            $formErrors['company'] = 'Votre société est incorrect.';
        }
    } else {
        $formErrors['company'] = 'Veuillez renseigner votre société.';
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
        <title>Partie 10 php TP 2</title>
    </head>
    <body>
        <h1>TP 2 Partie 10 Php</h1>
        <p>Faire une page permettant de saisir les informations suivantes :</p>

        <p>Civilité (liste déroulante)</p>
        <p>Nom</p>
        <p>Prénom</p>
        <p>Age</p>
        <p>Société</p>
        <p>A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.</p>

        <div class="container-fluid">
            <div class="row">
                <div class="offset-1 col-10 offset-sm-4 col-sm-4 offset-md-4 col-md-4 offset-lg-4 col-lg-4 registration">

                    <div class="formRegistration">
                        <h2>Formulaire d'inscription :</h2>
                        <form name="registrationForm" action="index.php" method="POST">
                            <label for="gender"></label>
                            <select  class="form-control" name="gender" id="gender">
                                <option disabled selected>Veuillez faire un choix</option> 
                                <option value="Monsieur" <?= isset($_POST['gender']) && $_POST['gender'] == 'Monsieur' ? 'selected' : '' ?>>Monsieur</option>
                                <option value="Madame" <?= isset($_POST['gender']) && $_POST['gender'] == 'Madame' ? 'selected' : '' ?>>Madame</option>
                            </select>

                            <label class="d-flex justify-content-start" for="lastname">Nom de famille</label>
                            <input class="form-control lastname <?= !isset($formErrors['lastname']) ? '' : 'is-invalid' ?>" type="text" name="lastname" id="lastname" placeholder="Doe" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required />
                            <?php if (isset($formErrors['lastname'])) {
                                ?>
                                <div class="invalid-feedback">
                                    <p><?= $formErrors['lastname']; ?></p>
                                </div>
                            <?php } ?>
                            <!-- Utiliser les class : is-invalid et is-valid et invalid-feedback (pour les messages d'erreur) pour la mise en forme des input en fonction du remplissage correct ou pas. -->
                            <label for="firstname">Prénom</label>
                            <input class="form-control <?= !isset($formErrors['firstname']) ? '' : 'is-invalid' ?>" type="text" name="firstname" id="firstname" placeholder="John" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" required />
                            <?php if (isset($formErrors['firstname'])) {
                                ?>
                                <div class="invalid-feedback">
                                    <p><?= $formErrors['firstname']; ?></p>
                                </div>
                            <?php } ?>
                            <label for="age">Age</label>
                            <input class="form-control <?= !isset($formErrors['age']) ? '' : 'is-invalid' ?>" type="text" name="age" id="age" placeholder="27" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>" required />
                            <?php if (isset($formErrors['age'])) {
                                ?>
                                <div class="invalid-feedback">
                                    <p><?= $formErrors['age']; ?></p>
                                </div>
                            <?php } ?>
                            <label for="company">Société</label>
                            <input class="form-control <?= !isset($formErrors['company']) ? '' : 'is-invalid' ?>" type="text" name="company" id="company" placeholder="Novei Formation" value="<?= isset($_POST['company']) ? $_POST['company'] : '' ?>" required />
                            <?php if (isset($formErrors['company'])) {
                                ?>
                                <div class="invalid-feedback">
                                    <p><?= $formErrors['company']; ?></p>
                                </div>
                            <?php } ?>
                            <input type="submit" name="submit" value="Valider">
                        </form> 
                    </div>
                </div>
                <?php if (count($_POST) > 0 && count($formErrors) == 0) { ?>
                    <div class="offset-1 col-10 offset-sm-4 col-sm-4 offset-md-4 col-md-4 offset-lg-4 col-lg-4">
                        <div class="validSubmit">
                            <p>Vos données ont bien été envoyées.</p>
                        </div>
                        <div class="jumbotron">
                            <p><?= $gender ?> <?= $lastname ?> <?= $firstname ?>.</p>
                            <p>Vous avez <?= $age ?> ans et travaillez pour la société <?= $company ?>.</p>
                        </div>
                        <div class="return">
                            <a class="test" href="index.php">Retour</a>
                        </div>
                    <?php } else { ?>
                        <p></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>