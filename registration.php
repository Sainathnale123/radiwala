<?php 
$con=mysqli_connect("localhost", "root", "", "scrap");
extract($_POST);
if(isset($reg))
{
$sql=mysqli_query($con,"select * from registration where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{

$pass=($p);
$user=($u);

	

$query="insert into registration(username,email,password,type,fullname,shope,mobile,zip,country,state,addr)values('$user','$e','$pass','$typ','$fn','$sn','$mn','$zc','$country','$state','$adr')";

mysqli_query($con,$query);
$err="<font color='blue'>Registration successfull !!</font>";
			
}

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title> 
   
<style>






/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
      <style>
body
{
background-image:url('https://previews.123rf.com/images/anyaberkut/anyaberkut1603/anyaberkut160300174/53072066-working-on-computer-close-up-of-hand-on-keyboard.jpg');
}
</style>

</head>

<body> 
    
    <br>
 
    <div class="container"> 
     <div class="row">
       <div class="col-md-4"></div>
        <div class="col-md-4"> 
          
            <div class="page-header">
                <h1 style="text-align: center;"><b>Registration</b></h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  type="text" class="form-control" name="u" placeholder="UserName" required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="email" class="form-control" name="e" placeholder="Email" required="">
                </div>
     <br />
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input  type="Password" class="form-control" name="p" placeholder="Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                </div>
                           <br>
                           <div class="input-group" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input  type="text" class="form-control" name="fn" placeholder="Full Name" required>
                </div><br />  
          <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  
  <select class="form-control" id="typ" name="typ" placeholder="Account Type">
   <option value="0">Holsaler</option>
    <option value="1">Retailer</option>
     <option value="1">Retailer</option>
   
    
   
  </select>
</div>
                <br> 
                 <div class="input-group" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input  type="text" class="form-control" name="sn" placeholder="Shop name" required>
                </div><br />
     <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input  type="number" class="form-control" name="mn" placeholder="mobile number" required>
                </div><br />   
                <div class="input-group" >
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input  type="Password" class="form-control" name="zc" placeholder="Zip code" required>
                </div><br />    
                   <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  
  <select class="form-control" name="country" placeholder="Country">
   <option value="india">India</option>
    <option value="asia">Asia</option>
     <option value="us">Us</option>
   
    
   
  </select>
</div><br />
   <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  
  <select class="form-control"  name="state" placeholder="State">
   <option value="0">Maharshtra</option>
    <option value="1">Kerala</option>
     <option value="1">UP</option>
   
    
   
  </select>
</div><br />
   <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  
  <select class="form-control" id="city" name="city" placeholder="city>
   <option value="kolhapur">kolhapur</option>
    <option value="1">mumbai</option>
     <option value="1">bangloro</option>
   
    
   
  </select>
</div><br />       <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  type="adr" class="form-control" name="adr" placeholder="Adress" required>
                </div>
                <br>  
        
                <div class="input-group">
                  <button type="submit" name="reg" name="reg" class="btn btn-success">Registration</button>
                  
                </div>
</br>

              </form>  
              <br> 
              
              
        </div> 
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</body>
</html>