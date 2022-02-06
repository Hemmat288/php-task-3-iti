<?php

 

$id=$_GET['id'];
  
try{
$pdo = new pdo("mysql:host=localhost;dbname=phpQena", "root","");

$sudentData=$pdo->query("select * from  student where id=$id");
 

   $sudent=$sudentData->fetch(PDO::FETCH_ASSOC);
 
}catch(PDOException $e){
echo $e->getMesage();
}


$pdo = null;
 
 
?>




<html>
    <body>
         <form method="get" action="update.php">
          <input type="hidden" value="<?= $sudent['id'] ?>" name="id"> 
         <input type="text"  value="<?= $sudent['fname'] ?>" name="fname"><br>
         <input type="text"  value="<?= $sudent['lname'] ?>" name="lname" ><br>
         <input type="text"  value="<?= $sudent['address'] ?>" name="address" id=""><br>
         <input type="mail"  value="<?= $sudent['email'] ?>" name="email" id=""><br>
        <input type="submit" value="update student" name="update">
            </form>
    </body>
</html>

 