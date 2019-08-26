<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Registration</h1>
    <form  class="container" method="post" enctype="multipart/form-data" action="connect.php" >

        <label for="name"><b>Enter your Name</b></label>
        <input type="text" placeholder="your  name"  name="name"  required /><br><br>

     
        <label for="email"><b>Enter your Email</b></label>
        <input type="text" placeholder="your  email" name="email" required/><br><br>

        <label for="psw"><b>Enter your Password</b></label>
        <input type="password" placeholder="your  Password"  name="password" required/><br><br>

        <label for="Address">Enter your Address</b></label>
        <textarea  placeholder="your  Address" name="address"></textarea><br><br>


        <label for="phone no."><b>Enter your Phone No.</b></label>
        <input type="number" placeholder="Phone No." name="phone" required/><br><br>
      

  
        <label for="gender"><b>Select your Gender :</b></label>
    
        	<input type="radio" name="gender" value="Male"/>Male
        	<input type="radio" name="gender" value="Female"/>Female<br><br>
        	

         <label for="country"><b>Country</b></label>
         <select>
         
          <option value="India">India</option>
          <option value="Greece">Greece</option>
          <option value="Nepal">Nepal</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Colombia">Colombia</option>
          <option value="China">China</option>
          <option value="Brazil">Brazil</option>
          <option value="Egypt">Egypt</option>
          <option value="France">France</option>
          <option value="Iraq">Iraq</option>
          <option value="Italy">Italy</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Japan">Japan</option>
        </select><br><br>
           
      <label for="hobies"><b>Hobbies :</b></label>
      <textarea type="hobbies" name="Hobby"></textarea><br><br>
    	
   
      <label for="skills"><b>Skills :</b></label>
      
        HTML<input type="checkbox" value="HTML" name="skill[]"/>
        JAVA<input type="checkbox" value="JAVA" name="skill[]"/>
        PHP<input type="checkbox" value="PHP" name="skill[]"/>
        .NET<input type="checkbox" value="NET" name="skill[]"/>
        SQL_DATABASE<input type="checkbox" value="SQL" name="skill[]"/><br><br>
      

   
      <label for="dob"><b>Date Of Birth</b></label>
         <input type="Date"  name="date"  required/><br><br>
        
    <button type="submit" name="submit" value="submit"class="registerbtn">Register</a></button>  
 
</form>
</body>
</html>


