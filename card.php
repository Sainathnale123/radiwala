<?php
include('header.php');
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<style>
		.box {
  width: 300px;
  height: 400px;
  padding: 20px;
  border: 1px solid black;
}
.center
{
.display: block;
margin-left: auto;margin-right: auto;width:100%	
	
}.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}
</style>
	</head>
	<body>
	<br />
<?php
require_once("includes/dbconn.php");
$sql = "SELECT fullname,shope,mobile,zip,state FROM registration ";

$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
?>

		    <div class="container" > 
     <div class="row">
      <div class="col-md-4"></div>
        <div class="col-md-4"> 
    <div class="row profile" class="profile-sidebar">
    <br />
   <div class="box">
   
<div class="card hovercard">
<div class="cardheader">
<div class="avatar">
<img class="center" alt="" src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2018/07/24/708716-salman.jpg" height="100px"; width="100">
</div>
</div>
<br />
<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
					<button type="submit" class="btn btn-success btn-sm" name="submit"><a href="#content"> View</a></button>
				
				</div>
<br />
<div class="card-body info">
<div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="u" type="text" class="form-control" name="u" placeholder="<?php echo"id : "; echo $record['shope']; ?>" readonly="">
                  </div>

 <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="u" type="text" class="form-control" name="u" placeholder="<?php echo $record['fullname']; ?>" readonly="">
                  </div>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="u" type="text" class="form-control" name="u" placeholder="<?php echo $record['mobile']; ?>" readonly="">
                </div>
                   
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                  <input id="u" type="text" class="form-control" name="u" placeholder="<?php echo $record['zip']; ?>" readonly="">
                </div>
   <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="u" type="text" class="form-control" name="u" placeholder="<?php echo $record['state']; ?>" readonly="">
                </div>
               
</div>

</div></div>
</div>
</div></div>
</div>

<?php } ?>
</body>
</html>