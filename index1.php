<html>

<body>
    <!--Exercice2-4Form-->
    <form action="user1.php" method="post">
        Nom: <input type="text" name="nom"><br>
        prenom: <input type="text" name="prenom"><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
    }

    ?>
</body>

</html>