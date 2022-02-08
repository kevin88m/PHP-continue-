<!DOCTYPE html>
<html lang="fr">
<head>
    <!--EXERCICE8-->
</head>
<body>

<form action="index5.php" method="POST" enctype='multipart/form-data'>
civilité & Nom: :
<select name="civilite_form">
<option value="Mme">Mme</option>
<option value="Mr" selected="selected">Mr</option>

<input type="text" name="nom"><br>
Prenom: <input type="text" name="prenom"><br>
Fichier <input type="file" name="image">. 
<input type="submit">
</form>
<?php
 
     if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("pdf");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors="extension non valide prennez un fichier PDF.";
      }
      
      if($file_size > 2097152){
         $errors[]='le fichier ne doit pas excédé 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "$file_name";
      }else{
         print_r($errors);
      }
   }

   ?>
</body>
</html>
