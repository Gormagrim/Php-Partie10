<?php include_once('regex.php'); ?>

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

    if (!empty($_POST['birthday'])) {
        if (preg_match($patternDate, $_POST['birthday'])) {
            $birthday = htmlspecialchars($_POST['birthday']);
        } else {
            $formErrors['birthday'] = 'Veuillez renseigner une date de naissance correcte.';
        }
    } else {
        $formErrors['birthday'] = 'Veuillez renseigner votre date de naissance.';
    }

    if (!empty($_POST['placeOfBirth'])) {
        if (preg_match($patternName, $_POST['placeOfBirth'])) {
            $placeOfBirth = htmlspecialchars($_POST['placeOfBirth']);
        } else {
            $formErrors['placeOfBirth'] = 'Veuillez renseigner un lieu de naissance correct.';
        }
    } else {
        $formErrors['placeOfBirth'] = 'Veuillez renseigner votre lieu de naissance.';
    }

    if (!empty($_POST['nationality'])) {
        if (preg_match($patternName, $_POST['nationality'])) {
            $nationality = htmlspecialchars($_POST['nationality']);
        } else {
            $formErrors['nationality'] = 'Veuillez renseigner une nationnalité correct.';
        }
    } else {
        $formErrors['nationality'] = 'Veuillez renseigner votre nationnalité.';
    }

    if (!empty($_POST['address'])) {
        if (preg_match($patternAddress, $_POST['address'])) {
            $address = htmlspecialchars($_POST['address']);
        } else {
            $formErrors['address'] = 'Votre adresse est incorrecte.';
        }
    } else {
        $formErrors['address'] = 'Veuillez renseigner votre adresse.';
    }

    if (!empty($_POST['postalCode'])) {
        if (preg_match($patternPostalCode, $_POST['postalCode'])) {
            $postalCode = htmlspecialchars($_POST['postalCode']);
        } else {
            $formErrors['postalCode'] = 'Votre code postal est incorrect.';
        }
    } else {
        $formErrors['postalCode'] = 'Veuillez renseigner votre code postal.';
    }

    if (!empty($_POST['city'])) {
        if (preg_match($patternName, $_POST['city'])) {
            $city = htmlspecialchars($_POST['city']);
        } else {
            $formErrors['city'] = 'Votre ville est incorrecte.';
        }
    } else {
        $formErrors['city'] = 'Veuillez renseigner votre ville.';
    }


    if (!empty($_POST['mail'])) {
        if (preg_match($patternMail, $_POST['mail'])) {
            $mail = htmlspecialchars($_POST['mail']);
        } else {
            $formErrors['mail'] = 'Votre adresse mail est incorrecte.';
        }
    } else {
        $formErrors['mail'] = 'Veuillez renseigner votre adresse mail.';
    }

    if (!empty($_POST['phone'])) {
        if (preg_match($patternPhone, $_POST['phone'])) {
            $phone = htmlspecialchars($_POST['phone']);
        } else {
            $formErrors['phone'] = 'Votre numéro de téléphone est incorrect.';
        }
    } else {
        $formErrors['phone'] = 'Veuillez renseigner votre numéro de téléphone.';
    }

    if (!empty($_POST['diploma'])) {
        if ($_POST['diploma'] == 'Sans' || $_POST['diploma'] == 'Bac' || $_POST['diploma'] == 'Bac +2' || $_POST['diploma'] == 'Bac +3' || $_POST['diploma'] == 'Supérieur') {
            $diploma = htmlspecialchars($_POST['diploma']);
        } else {
            $formErrors['diploma'] = 'Merci de selectionner un diplome dans la liste.';
        }
    } else {
        $formErrors['diploma'] = 'Veuillez renseigner votre diplome.';
    }

    if (!empty($_POST['poleEmploiNumber'])) {
        if (preg_match($patternPoleEmploi, $_POST['poleEmploiNumber'])) {
            $poleEmploiNumber = htmlspecialchars($_POST['poleEmploiNumber']);
        } else {
            $formErrors['poleEmploiNumber'] = 'Votre numéro Pôle emploi est incorrect.';
        }
    } else {
        $formErrors['poleEmploiNumber'] = 'Veuillez renseigner votre numéro Pôle emploi.';
    }

    if (!empty($_POST['numberOfBadge'])) {
        if (preg_match($patternNumberOfBadge, $_POST['numberOfBadge'])) {
            $numberOfBadge = htmlspecialchars($_POST['numberOfBadge']);
        } else {
            $formErrors['numberOfBadge'] = 'Votre nombre de badges n\'est pas compris entre 0 et 100.';
        }
    } else {
        $formErrors['numberOfBadge'] = 'Veuillez renseigner votre nombre de badges.';
    }

    if (!empty($_POST['codecademyLink'])) {
        if (preg_match($patternCodecademyLink, $_POST['codecademyLink'])) {
            $codecademyLink = htmlspecialchars($_POST['codecademyLink']);
        } else {
            $formErrors['codecademyLink'] = 'Votre lien Codecademy n\'est pas valide';
        }
    } else {
        $formErrors['codecademyLink'] = 'Veuillez renseigner votre lien Codecademy.';
    }

    if (!empty($_POST['firstQuestion'])) {
        if (preg_match($patternQuestion, $_POST['firstQuestion'])) {
            $firstQuestion = htmlspecialchars($_POST['firstQuestion']);
        } else {
            $formErrors['firstQuestion'] = 'Votre réponse doit comprendre entre 5 et 100 caractéres';
        }
    } else {
        $formErrors['firstQuestion'] = 'Veuillez réponre à la question.';
    }

    if (!empty($_POST['secondQuestion'])) {
        if (preg_match($patternQuestion, $_POST['secondQuestion'])) {
            $secondQuestion = htmlspecialchars($_POST['secondQuestion']);
        } else {
            $formErrors['secondQuestion'] = 'Votre réponse doit comprendre entre 5 et 100 caractéres';
        }
    } else {
        $formErrors['secondQuestion'] = 'Veuillez réponre à la question.';
    }

    if (!empty($_POST['thirdQuestion'])) {
        if ($_POST['thirdQuestion'] == 'oui' || $_POST['thirdQuestion'] == 'non') {
            $thirdQuestion = htmlspecialchars($_POST['thirdQuestion']);
        } else {
            $formErrors['thirdQuestion'] = 'Merci de selectionner une réponse.';
        }
    } else {
        $formErrors['thirdQuestion'] = 'Veuillez réponre à la question.';
    }
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/slate/bootstrap.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <title>Partie 10 php TP 1</title>
    </head>
    <body>
        <h1>TP 1 Partie 10 Php</h1>
        <p>Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :</p>
        <p>Nom</p>
        <p>Prénom</p>
        <p>Date de naissance</p>
        <p>Pays de naissance</p>
        <p>Nationalité</p>
        <p>Adresse</p>
        <p>Email</p>
        <p>Téléphone</p>
        <p>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</p>
        <p>Numéro pôle emploi</p>
        <p>Nombre de badge</p>
        <p>Liens codecademy</p>
        <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</p>
        <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
        <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
        <p>A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire.</p>

        <div class="container-fluid">
            <div class="row">
                <div class="offset-1 col-10 offset-sm-4 col-sm-4 offset-md-4 col-md-4 offset-lg-4 col-lg-4 registration">
                    <?php
// On affiche le formulaire si rien a été envoyé ou qu'il y a une erreur dans ce qui à été saisi.
                    if (count($_POST) == 0 || count($formErrors) > 0) {
                        ?>
                        <div class="formRegistration">
                            <h2>Formulaire d'inscription :</h2>
                            <form name="registrationForm" action="index.php" method="POST">

                                <label class="d-flex justify-content-start" for="lastname">Nom de famille</label>
                                <input class="form-control lastname <?= !isset($formErrors['lastname']) ? '' : 'is-invalid' ?>" type="text" name="lastname" id="lastname" placeholder="Doe" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required />
                                <?php if (isset($formErrors['lastname'])) { ?>
                                    <div class="is-invalid">
                                        <p class="is-valid"><?= $formErrors['lastname'] ?></p>
                                    </div>
                                <?php } ?>
                                <!-- Utiliser les class : is-invalid et is-valid et invalid-feedback (pour les messages d'erreur) pour la mise en forme des input en fonction du remplissage correct ou pas. -->
                                <label for="firstname">Prénom</label>
                                <input class="form-control <?= !isset($formErrors['firstname']) ? '' : 'is-invalid' ?>" type="text" name="firstname" id="firstname" placeholder="John" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" required />
                                <?php if (isset($formErrors['firstname'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['firstname'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="birthday">Date de naissance</label>
                                <input class="form-control <?= !isset($formErrors['birthday']) ? '' : 'is-invalid' ?>" type="text" id="birthday" placeholder="20/09/1980" name="birthday" value="<?= isset($_POST['birthday']) ? $_POST['birthday'] : '' ?>" required />
                                <?php if (isset($formErrors['birthday'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['birthday'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="placeOfBirth">Lieu de naissance</label>
                                <input class="form-control <?= !isset($formErrors['placeOfBirth']) ? '' : 'is-invalid' ?>" type="text" id="placeOfBirth" placeholder="Paris" name="placeOfBirth" value="<?= isset($_POST['placeOfBirth']) ? $_POST['placeOfBirth'] : '' ?>" required />
                                <?php if (isset($formErrors['placeOfBirth'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['placeOfBirth'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="nationality">Nationalité</label>
                                <input class="form-control <?= !isset($formErrors['nationality']) ? '' : 'is-invalid' ?>" type="text" id="nationality" placeholder="Française" name="nationality" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>" required />
                                <?php if (isset($formErrors['nationality'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['nationality'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="address">Adresse</label>
                                <input class="form-control <?= !isset($formErrors['address']) ? '' : 'is-invalid' ?>" type="text" name="address" id="address" placeholder="1 rue des métiers" value="<?= isset($_POST['address']) ? $_POST['address'] : '' ?>" required />
                                <?php if (isset($formErrors['address'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['address'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="postalCode">Code postal</label>
                                <input class="form-control <?= !isset($formErrors['postalCode']) ? '' : 'is-invalid' ?>" type="text" name="postalCode" id="postalCode" placeholder="60000" value="<?= isset($_POST['postalCode']) ? $_POST['postalCode'] : '' ?>" required />
                                <?php if (isset($formErrors['postalCode'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['postalCode'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="city">Ville</label>
                                <input class="form-control <?= !isset($formErrors['city']) ? '' : 'is-invalid' ?>" type="text" name="city" id="city" placeholder="Beauvais" value="<?= isset($_POST['city']) ? $_POST['city'] : '' ?>" required />
                                <?php if (isset($formErrors['city'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['city'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="mail">Adresse mail</label>
                                <input class="form-control <?= !isset($formErrors['mail']) ? '' : 'is-invalid' ?>" type="email" name="mail" id="mail" placeholder="exemple@mail.com" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" required />
                                <?php if (isset($formErrors['mail'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['mail'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="phone">Numéro de téléphone</label>
                                <input class="form-control <?= !isset($formErrors['phone']) ? '' : 'is-invalid' ?>" type="text" name="phone" id="phone" placeholder="0601020304" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required />
                                <?php if (isset($formErrors['phone'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['phone'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="diploma">Diplome</label>
                                <select  class="form-control" name="diploma" id="diploma">
                                    <option disabled selected>Veuillez faire un choix !</option>
                                    <option value="Sans" <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Sans' ? 'selected' : '' ?>>Sans</option>;
                                    <option value="Bac" <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Bac' ? 'selected' : '' ?>>Bac</option>;
                                    <option value="Bac +2" <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Bac +2' ? 'selected' : '' ?>>Bac +2</option>;
                                    <option value="Bac +3" <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Bac +3' ? 'selected' : '' ?>>Bac +3</option>;
                                    <option value="Supérieur" <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Supérieur' ? 'selected' : '' ?>>Supérieur</option>;
                                </select>

                                <label for="poleEmploiNumber">Numéro Pôle emploi</label>
                                <input class="form-control <?= !isset($formErrors['poleEmploiNumber']) ? '' : 'is-invalid' ?>" type="text" id="poleEmploiNumber" placeholder="1234567A" name="poleEmploiNumber" value="<?= isset($_POST['poleEmploiNumber']) ? $_POST['poleEmploiNumber'] : '' ?>" required />
                                <?php if (isset($formErrors['poleEmploiNumber'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['poleEmploiNumber'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="numberOfBadge">Nombre de badges</label>
                                <input class="form-control <?= !isset($formErrors['numberOfBadge']) ? '' : 'is-invalid' ?>"" type="number" id="numberOfBadge" placeholder="99" name="numberOfBadge" value="<?= isset($_POST['numberOfBadge']) ? $_POST['numberOfBadge'] : '' ?>" required />
                                <?php if (isset($formErrors['numberOfBadge'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['numberOfBadge'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="codecademyLink">Lien Codecademy</label>
                                <input class="form-control <?= !isset($formErrors['codecademyLink']) ? '' : 'is-invalid' ?>" type="text" id="codecademyLink" placeholder="https://www.codecademy.fr/....." name="codecademyLink" value="<?= isset($_POST['codecademyLink']) ? $_POST['codecademyLink'] : '' ?>" required />
                                <?php if (isset($formErrors['codecademyLink'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['codecademyLink'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="firstQuestion">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                                <textarea class="form-control <?= !isset($formErrors['firstQuestion']) ? '' : 'is-invalid' ?>" type="texte" id="firstQuestion" placeholder="Réponse à la première question." name="firstQuestion" required /><?= isset($_POST['firstQuestion']) ? $_POST['firstQuestion'] : '' ?></textarea>
                                <?php if (isset($formErrors['firstQuestion'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['firstQuestion'] ?></p>
                                    </div>
                                <?php } ?>
                                <label for="secondQuestion">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                <textarea class="form-control <?= !isset($formErrors['secondQuestion']) ? '' : 'is-invalid' ?>" type="texte" id="secondQuestion" placeholder="Réponse à la deuxième question." name="secondQuestion" required /><?= isset($_POST['secondQuestion']) ? $_POST['secondQuestion'] : '' ?></textarea>
                                <?php if (isset($formErrors['secondQuestion'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['secondQuestion'] ?></p>
                                    </div>
                                <?php } ?>
                                <p for="thirdQuestion">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                                <input type="radio" name="thirdQuestion" <?= isset($_POST['thirdQuestion']) && $_POST['thirdQuestion'] == 'oui' ? 'checked' : '' ?> value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
                                <input type="radio" name="thirdQuestion" <?= isset($_POST['thirdQuestion']) && $_POST['thirdQuestion'] == 'non' ? 'checked' : '' ?> value="non" id="non" /> <label for="non">Non</label>
                                <?php if (isset($formErrors['thirdQuestion'])) { ?>
                                    <div class="invalid-feedback">
                                        <p><?= $formErrors['thirdQuestion'] ?></p>
                                    </div>
                                <?php } ?>
                                <input type="submit" name="submit" value="Envoyer" class="btn btn-outline-warning registrationBtn" />
                            </form>
                        </div>
                        <a href="index.php">Retour</a>
                    <?php } else { ?>
                        <div class="validSubmit">
                            <p>Vos données ont bien été envoyées.</p>
                        </div>
                        <div class="jumbotron"
                             <p>Nom : <?= $lastname; ?></p>
                            <p>Prénom : <?= $firstname; ?></p>
                            <p>Date de naissance : <?= $birthday; ?></p>
                            <p>Lieu de naissance : <?= $placeOfBirth; ?></p>
                            <p>Nationnalité : <?= $nationality; ?></p>
                            <p>Adresse : <?= $address; ?></p>
                            <p>Code postal : <?= $postalCode; ?></p>
                            <p>Ville : <?= $city; ?></p>
                            <p>Numéro de téléphone : <?= $phone; ?></p>
                            <p>Adresse mail : <?= $mail; ?></p>
                            <p>Diplome : <?= $diploma; ?></p>
                            <p>Numéro Pôle emploi : <?= $poleEmploiNumber; ?></p>
                            <p>Lien Codecademy : <?= $codecademyLink; ?></p>
                            <p>Nombre de badges : <?= $numberOfBadge; ?></p>
                            <p>Question 1 : <?= $firstQuestion; ?></p>
                            <p>Question 2 : <?= $secondQuestion; ?></p>
                            <p>Question 3 : <?= $thirdQuestion; ?></p>
                        </div>
                        <button type="button" class="btn btn-outline-warning registrationBtn" onclick="javascript:location.href = 'connection.php'">Suivant</button>
                        <div class="return">
                            <a class="test" href="index.php">Retour</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>

