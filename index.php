<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title> 
    
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
                <h1 style="text-align: center;"><b>search</b></h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="city" type="text" class="form-control" name="city" placeholder="City">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="pincode" type="number" class="form-control" name="pincode" placeholder="Pincode">
                </div>
                <br> 
                             
                  <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  
  <select class="form-control" id="sel1" placeholder="Gender">
    <option>wholesalers</option>
    <option>retailers</option>
    <option>distributors</option>
     
   
  </select>
</div><br />
                <div class="input-group">
                  <button type="submit" name="search" class="btn btn-success">Search</button>
                  
                </div>

              </form>  
             
              
        </div> 
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>