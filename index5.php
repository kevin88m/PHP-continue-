<html>

<body>
    <!--EXERCICE6-->

    <form action="index5.php" method="get">
        batiment=<input type="number" name="batiment"> <br>
        salle=<input type="number" name="salle"> <br>
        <input type="submit">
    </form>

    <?php
        
        if(isset( $_GET['batiment']) ."<br>". isset ($_GET['salle'])){
            echo  $_GET['batiment'] ."<br>".$_GET['salle'] ;
       }else{
           echo "veuillez remplir le champs salle et batiment.";
        
       };
       
    ?>

</body>

</html>