<html>

<body>
    <!--EXERCICE2-->

    <form action="index1.php" method="get">
        nom=<input type="text" name="nom"> <br>
        prenom=<input type="text" name="prenom"> <br>
        age=<input type="number" name="age"> <br>
        <input type="submit">
    </form>

    <?php

if (isset($_GET['prenom']) and isset($_GET['nom'])and isset ($_GET['age']))   // on a le nom et le prénom
{
    echo '' . $_GET['prenom'] . ' ' . $_GET['nom'] . ''. $_GET['age'];
} else   // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner un nom et un prénom,age !';
}

    ?>

</body>

</html>