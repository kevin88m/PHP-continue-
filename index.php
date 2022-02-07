<html>

<body>
    <!--EXERCICE1-->

    <form action="index.php" method="get">
        nom=<input type="text" name="nom"> <br>
        prenom=<input type="text" name="prenom"> <br>
        <input type="submit">
    </form>

    <?php

    if (isset($_GET['prenom']) and isset($_GET['nom']))   // on a le nom et le prénom
    {
        echo '' . $_GET['prenom'] . ' ' . $_GET['nom'] . '!';
    } else   // Il manque des paramètres, on avertit le visiteur
    {
        echo 'Il faut renseigner un nom et un prénom !';
    }

    ?>

</body>

</html>

