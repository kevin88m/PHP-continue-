<!DOCTYPE html>
<html lang="fr">
<head>
    <!--EXERCICE5-->
</head>
<body>

<form action="index2.php" method="get">
civilité & Nom: :
<select name="civilite_form">
<option value="Mme">Mme</option>
<option value="Mr" selected="selected">Mr</option>

<input type="text" name="nom"><br>
Prenom: <input type="text" name="prenom"><br>
<input type="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
}

echo $_GET['nom'] ."<br>". $_GET['prenom'];

?>
    
</body>
</html>

