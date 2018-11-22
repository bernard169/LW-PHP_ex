<?php
Session_start();
if (isset ($_POST['submitForm']))
{
    if (isset($_POST['prenom']))
    {
        $_SESSION['prenom'] = $_POST ['prenom'];
    }
    if (isset ($_POST['nom']))
    {
        $_SESSION['nom'] = $_POST ['nom'];
    }
    header ('Location: select_info.php');
}
if (isset($_POST['cancel']))
    {
        header ('Location: exoPHP.php');
        session_destroy();
    }
?>

<!doctype html>
<html>
	<head>
        <title>exoPHP</title>
        <link rel="stylesheet" href = "style.css"/>
	    <meta charset="UTF-8">
    </head>

    <body>
        <h1>Données personnelles</h1>
        <!--liens = <a href="https://openclassrooms.com">OpenClassrooms</a>-->

        <div class="cont_forms">
            <form method="POST" id='infoPerso'>
                <label for="prenom">Votre prénom</label> <input type="text" name="prenom" id="prenom" placeholder="Ex : Hubert" required/>
                <label for="nom">Votre nom</label> <input type="text" name="nom" id="nom" placeholder="Ex : Bonisseur de La Bath" required/>

                <div class="cont_buttons">
                    <input type="submit" value="Envoyer" name = "submitForm" id="submitForm" action='select_info.php'/>
                    <input type="submit" value="Annuler" name = 'cancel' id= 'cancel'/>
                </div>
            </form>

            
        </div>
    </body>
</html>