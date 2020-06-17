
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="container"> 
     <div class="row">
       <div class="col-md-4"></div>
        <div class="col-md-4"> 
<h4>Request</h4>
<form method="post" action="insert.php">

<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input type="text" name="name" placeholder="FullName" class="form-control" required=""></div><br>
<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="number" name="mn" placeholder="Mobile number"class="form-control" required=""></div> <br>
<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="email" name="e" placeholder="Email"class="form-control" required=""></div> <br>

<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="number" name="sid" placeholder="Seller Id"class="form-control" required=""></div> <br>
<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="text" name="add" placeholder="Adress"class="form-control" required=""></div> <br>
<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="number" name="w" placeholder="Weight"class="form-control" required=""></div> <br>
<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="number" name="z" placeholder="Zip Code"class="form-control" required=""></div> <br>
<div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select id="typ" name="typ" placeholder="Account Type" required="">
   <option value="paper">paper</option>
    <option value="still">still</option>
     
  
   
  </select></div><br />


<input type="submit" value="Request" class="form-control">
</form>
</div></div></div>
</body>
</html>