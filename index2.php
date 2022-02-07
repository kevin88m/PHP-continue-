

<html>

<body>
    <!--EXERCICE3-->

    <form action="index2.php" method="get">
        dateDebut=<input type="date" name="dateDebut"    > <br>
        dateFin=<input type="date"   name="dateFin" > <br>
        
        <input type="submit">
    </form>

    <?php
        
         if(isset($_GET['dateDebut'])  AND isset($_GET['dateFin']))
         {
             echo  $_GET['dateDebut'] ."<br>".$_GET['dateFin'] ;
         }
         else{
             echo "il faut saisir la date de debut et fin!";
         };
       
    ?>

</body>

</html>