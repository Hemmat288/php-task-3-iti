<?php
$id=$_GET['id'];

echo $id;



try{
$pdo = new pdo("mysql:host=localhost;dbname=phpQena", "root","");

$pdo->query(" delete  from  student where id=$id");
  header("location:list.php");

}catch(PDOException $e){
echo $e->getMesage();
}


$pdo = null;
?>