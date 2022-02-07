<html>

<body>
    <!--EXERCICE5-->

    <form action="index4.php" method="get">
        semaine=<input type="number" name="semaine"> <br>
        
        <input type="submit">
    </form>

    <?php
        
         if(isset( $_GET['semaine'])){
              echo  $_GET['semaine'] ;
         }else{
             echo "veuillez remplir le nombre de semaine";
         };
       
    ?>

</body>

</html>