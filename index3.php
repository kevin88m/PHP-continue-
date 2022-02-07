<html>

<body>
    <!--EXERCICE4-->

    <form action="index3.php" method="get">
        langage=<input type="text" name="langage"> <br>
        serveur=<input type="text" name="serveur"> <br>
        
        <input type="submit">
    </form>

    <?php
        
         if(isset( $_GET['langage']) ."<br>". isset ($_GET['serveur'])){
              echo  $_GET['langage'] ."<br>".$_GET['serveur'] ;
         }else{
             echo "veuillez remplir le champs serveur et langage";
         };
       
    ?>

</body>

</html>