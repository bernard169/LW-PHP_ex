<?php
Session_start();
if (isset ($_POST["submitForm"]))
{
    $_SESSION['formations']= $_POST['formationsCheck'];
    header ('Location: recapitulatif.php');
}
if (isset ($_POST["previousPage"]))
{
    header ('Location: exoPHP.php');
}
if (isset ($_POST["cancel"]))
{
    header ('Location: exoPHP.php');
    session_destroy();
}
?>

<!doctype html>
<html>
	<head>
        <title>exoPHP select formations</title>
        <link rel="stylesheet" href = "style.css"/>
	<meta charset="UTF-8">
</head>

<body>
    <h1>Sélection des formations</h1>
    
    <div class="cont_forms">
            <form method="POST">
                <p>
                    <input type="checkbox" name="formationsCheck[]" value= 'PHP' id= "foPHP"/> <label for="foPHP">Formation PHP : 250€</label> </br>
                    <input type="checkbox" name="formationsCheck[]" value= 'XML' id= "foXML"/> <label for="foXML">Formation XML : 350€</label> </br>
                    <input type="checkbox" name="formationsCheck[]" value= 'JAVA' id= "foJAVA"/> <label for="foJAVA">Formation JAVA : 450€</label> </br>
                    <input type="checkbox" name="formationsCheck[]" value= 'C++' id= "foC++"/> <label for="foC++">Formation C++ : 550€</label> </br>
                </p>
                <p>
                <input type="submit" name= "submitForm" value="Envoyer" id="submitForm"/> </br>
                <input type="submit" name= "previousPage" value="Page précédente" id="previousPage"/> </br>
                <input type="submit" value="Annuler" name = 'cancel' id= 'cancel'/>
                </p>
            </form>
    </div>
</body>
</html>