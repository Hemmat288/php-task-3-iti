<html>
    <body>
        <a href="idex.php">Add Student</a>
        <table border=1>
            <tr>
                <th>id</th>
                <th>fname</th>
                <th>lname</th>
                <th>email</th>
                <th>address</th>
            </tr>
  


<?php

try{
$pdo = new pdo("mysql:host=localhost;dbname=phpQena", "root","");

 $data =$pdo->query(" select * from  student");
 
while($row=$data->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
 foreach($row as $value ){
     echo "<td> $value </td>";
 }
echo "<td><a href='show.php?id={$row['id']}'>show</a></td>";
echo "<td><a href='edit.php?id={$row['id']}'>edit</a></td>";
echo "<td><a href='delete.php?id={$row['id']}'>delete</a></td>";
    echo  "</tr>";
}


}catch(PDOException $e){
echo $e->getMesage();
}

$pdo = null;
?>


      </table>
    </body>
</html>