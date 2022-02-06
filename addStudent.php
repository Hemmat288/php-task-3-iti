<?php
// $connection = new mysqli("localhost", "root", "");

// if($connection ->connect_error){
//     die("conection error is: ".$connection ->connect_error);
// }

// var_dump($connection);
// $connection -> query("
//   CREATE DATABASE IF NOT EXISTS phpQena;
// ");

// $connection ->close();








// $connection = new mysqli("localhost", "root","", "phpQena");

// if($connection ->connect_error){
//     die("conection error is: ".$connection ->connect_error);
// }

// var_dump($connection);
// $connection -> query("
//     create table student(
//       id int not Null AUTO_INCREMENT primary key,
//       fanme varchar (50),   
//       lanme varchar (50),    
//       email varchar (50), 
//     address varchar (50)
//        )
// ");

// $connection ->close();







// $connection = new mysqli("localhost", "root","", "phpQena");

// if($connection ->connect_error){
//     die("conection error is: ".$connection ->connect_error);
// }

//  $fname=$_GET['fname'];
//  $lname=$_GET['lname'];
//  $email=$_GET['email'];
//  $address=$_GET['address'];
// $connection -> query("
   
//       insert into  student set fanme = '$fname', lname='$lname', email='$email', address=' $address'
// ");

// $connection ->close();



try{
$connection = new pdo("mysql:host=localhost;dbname=phpQena", "root","");

 $fname=$_GET['fname'];
 $lname=$_GET['lname'];
 $email=$_GET['email'];
 $address=$_GET['address'];
 $stm=$connection->prepare("
   
      insert into  student set
       fname = ?,
        lname=?, 
        email=?,
         address=?
");
 $stm->execute([$fname,$lname,$email,$address]);
}catch(PDOException $e){
echo $e->getMesage();
}

$connection = null;
  header("location:list.php");

?>
























