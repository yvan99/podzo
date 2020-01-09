<?php
include('session_admin.php');
?>

<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="favicon.ico">

    <title>PODZO || Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/set.css" rel="stylesheet">
  </head>

  <body style="background-image: url('../images/background.png');">


    <style type="text/css">

    .status-userNotCreated{padding: 5px 10px;color: #FFFFFF; border-radius:4px;margin-top:5px;background-color:#FF6600;border:none;}
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}


.card-signin {
  border: 0;
  
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {

  letter-spacing: .1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

    </style>

  <script language=JavaScript>
<!--

//Disable right mouse click Script
//By Geek Site.in


//var message="Not Allowed!";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
//alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
//alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("return false")

// --> 
</script>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow" style="border-top: 2px solid #ff6000;">

      <a class="navbar-brand logo" href="index.php"><img src="images/podzo.png" style="width: 120px;" alt=""/></a>

      <nav class="my-2 my-md-0 mr-md-3">

        <a class="p-2 text-dark" href="homeadmin.php">Home</a>
        <a class="p-2 text-dark" href="">|</a>
        <a class="p-2 text-dark" href="restaurants.php">Restaurants</a>
        <a class="p-2 text-dark" href="">|</a>
        <a class="p-2 text-dark" href="menus.php">Menu</a>
        <a class="p-2 text-dark" href="">|</a>
              
      </nav>
      <a class="btn btn-sm btn-danger" href="logout_admin.php">Logout</a>

    </div>


    <div class="container">



      <!-- Default form login -->
   <div class="row">


       <div class="py-5 text-center">
      
        <h2 style="color: #ff6000;">New Restaurant Menu</h2>
      </div>

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

        <div class="card card-signin my-5" style="border-top: 4px solid #ff6000;border-radius: 5px;">

          <div class="card-body">

            <h5 class="card-title text-center" style="font-style: italic;">Register New Restaurant Menu</h5>
            
            <form class="form-signin" method="POST">


              <?php


if(isset($_POST['save_notice'])){

$t1=mysqli_real_escape_string($conn,$_POST['reres']);

$t2=mysqli_real_escape_string($conn,$_POST['rename']);

$t3=mysqli_real_escape_string($conn,$_POST['retime']);

$t4=mysqli_real_escape_string($conn,$_POST['reprice']);


$ins=mysqli_query($conn,"INSERT INTO `menu`(`me_id`, `re_id`, `me_name`, `me_take`, `me_price`) VALUES (Null,'$t1','$t2','$t3','$t4')");

if ($ins) {
  # code...
  header("location:menus.php");
}

else{
  echo "Something went wrong";
}


}

?>

              <div class="form-label-group">

                 <?php

        $sel=mysqli_query($conn,"SELECT * from resto");

        $a=1;

        ?>
       <select class="form-control" placholder="choose restaurant" name="reres" required >

                     <option selected="selected" disabled>choose restaurant</option>

                                                   <?php
     while($row=mysqli_fetch_array($sel)){
       $kk=$row['re_name'];
       $idid=$row['re_id'];

       echo "<option value=".$idid.">".$kk ;?></option>
     <?php $a++; } ?>

                   </select>
                
              </div>


              <div class="form-label-group">
                
                <select class="form-control" name="retime">

                  <option selected disabled> Choose Taking Time</option>
                  <option>Breakfast</option>
                  <option>Lunch</option>
                  <option>Supper</option>
                  

                </select>
                
              </div>

              <div class="form-label-group">

  <input type="text" id="inputEmail" name="rename" class="form-control" placeholder="Menu Name" required autofocus>
                
              </div>


               <div class="form-label-group">
                
  <input type="text" id="inputEmail" name="reprice" class="form-control" placeholder="Menu Price" required autofocus>
                
              </div>

              <div class="form-label-group">

    <button type="submit" name="save_notice" class="btn btn-sm btn-success">Add Menu</button>

              </div>

             
              
            </form>
          </div>
        </div>
      </div>
    </div>


<!-- Default form login -->

      <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">Copyright &copy; Awsomity Ltd <?php echo date('Y');?>&nbsp;Powered By Ishimwe Yvan</p>

      </footer>
    </div>

  </body>
</html>
