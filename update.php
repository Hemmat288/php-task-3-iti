<?php
try{

$id=$_GET['id'];
 $fname=$_GET['fname'];
 $lname=$_GET['lname'];
 $email=$_GET['email'];
 $address=$_GET['address'];

$pdo = new pdo("mysql:host=localhost;dbname=phpQena", "root","");

$sudentData=$pdo->query("update student
set fname='$fname',
     lname='$lname',
     email='$email',
     address='$address'
where id= $id;
");
 // var_dump($sudentData);

     header("location:list.php");
 
}catch(PDOException $e){
echo $e->getMesage();
}



?>