<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="get" action="addStudent.php">
         <label for="fname">First Name</label>
         <input type="text" name="fname">
         <br>
         <br>
         <label for="lname">last Name</label>
         <input type="text" name="lname" >
         <br>
         <br>
         <label for="address">Address</label>
         <input type="text" name="address" id="">
         <br>
         <br>
         <label>Email</label>
         <input type="mail" name="email" id="">
         <br>
         <br>
         <label for="country">Choose a country:</label>
        <select id="country">
        <option value="Egypt">Egypt</option>
        <option value="turkey">turkey</option>
        <option value="Americian">Americian</option>
         </select>
        <br>
        <br>
         <label> Gender</label> 

          <input type="radio" id="male" name="Gender" value="male">
         <label for="male"> male</label> 
         
          <input type="radio" id="famel" name="Gender" value="famel">
           <label for="famel"> famel</label> 
          
        <br>
        <br>

          <label for="skill[]">skill</label>
        <br>
        <input type="checkbox" id="html" name="skill[]" value="html">
        <label for="html"> html</label> 
        <input type="checkbox" id="vehicle2" name="skill[]" value="css">
        <label for="css"> css</label><br>
        <input type="checkbox" id="php" name="skill[]" value="php">
        <label for="php"> php</label>
        <input type="checkbox" id="laravel" name="skill[]" value="laravel">
        <label for="laravel"> laravel</label>  

        
        <br>
        <br>
        <label>User Name</label>
        <input type="text" name="userName">
        <br>
        <br> 
        <label>Password</label>
        <input type="password" name="Password">
        <br>
        <br> 
        <label>Department</label>
        <input type="text" name="Department">
        <br>
        <br> 
        <input type="submit" value=" Add student">
            
            </form>
</body>
</html>