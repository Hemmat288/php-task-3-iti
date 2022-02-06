<?php
$id=$_GET['id'];
try{
$pdo = new pdo("mysql:host=localhost;dbname=phpQena", "root","");

$sudentData=$pdo->query("select * from  student where id=$id");
 

while($sudent=$sudentData->fetch(PDO::FETCH_ASSOC)){
     
 foreach($sudent as  $key => $value){
     echo  $key.' '.$value."<br>"  ;
 }
 
  
}



}catch(PDOException $e){
echo $e->getMesage();
}


$pdo = null;
?>