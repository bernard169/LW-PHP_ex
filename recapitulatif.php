<?php
Session_start();
$totalPrice = 0;
for ($i=0; $i< count($_SESSION['formations']); $i++)
{
    $formation =$_SESSION['formations'][$i];
    switch ($formation)
    {
        case "PHP":
            $totalPrice += 250;
        break;

        case "XML":
            $totalPrice += 350;
        break;

        case "JAVA":
            $totalPrice += 450;
        break;

        case "C++":
            $totalPrice +=550;
        break;

        default :
            $totalPrice = 0;
        break;

    }
}
?>

<!doctype html>
<html>
	<head>
        <title>exoPHP recap</title>
        <link rel="stylesheet" href = "style.css"/>
        
        </p>

	<meta charset="UTF-8">
</head>

<body>
    <h1>Récapitulatif</h1>
    <p> 
        Prénom : <?php echo $_SESSION['prenom']?> </br>
        Nom : <?php echo $_SESSION['nom']?>
    </p>
        <h2>Formations sélectionnées</h2>
    <p>
        <?php
        for ($i=0; $i<count($_SESSION['formations']); $i++) {
            echo "<ul>".$_SESSION['formations'][$i]."</ul>";
        }
        ?></br>
        Coût total : <?php echo $totalPrice?> €
    </p>
</body>
</html>