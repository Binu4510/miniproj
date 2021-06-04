<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['tpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['lsubmit']))
  {
    $luggageid=$_POST['luggageid'];
    $noofluggages=$_POST['noofluggages'];
    $checkintime=$_POST['checkintime'];
    $noofhours=$_POST['noofhours'];
    $amount=$_POST['amount'];

    
 
   
       $query=mysqli_query($con, "insert into luggage(luggageid,noofluggages,checkintime,noofhours,amount) value('$luggageid','$noofluggages','$checkintime','$noofhours','$amount')");
    if ($query) {
     echo '<script>alert("Luggage has been added")</script>';
echo "<script>window.location.href ='l.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Park Theme Management System || Add Luggage Ticket</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Luggage Ticket</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">

          <fieldset>
            
   
            <div class="form-group">
              <label class="control-label"> Luggageid</label>
              <input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="luggageid" name="luggageid" >
            </div>
            <div class="form-group">
              <label class="control-label">No.of.Luggages</label>
            <input type="number" name="noofluggages" >
            </div>
       
            <div class="form-group">
              <label class="control-label">Checkin time</label>
              <input type="time" class="form-control1 ng-invalid ng-invalid-required ng-touched"   id="checkintime" name="checkintime">
            </div>
<div class="form-group">
              <label class="control-label"> No.of.Hours</label>
              <input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="noofhours" name="noofhours" >
            </div>

<div class="form-group">
              <label class="control-label"> Amount</label>
              <input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="amount" name="amount" >
            </div>

  
      </table>

            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="lsubmit" class="btn btn-primary">Add</button></p>
             
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <?php include_once('includes/footer.php');?>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php } ?>