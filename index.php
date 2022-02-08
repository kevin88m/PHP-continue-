<html>

<body>
    <!--Exercice1-3Form-->
    <form action="user.php" method="get">
        Nom: <input type="text" name="nom"><br>
        prenom: <input type="text" name="prenom"><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
    }

    ?>
</body>

</html>