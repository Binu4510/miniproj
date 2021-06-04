<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['tpmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['fsubmit']))
  {
    $orderno=$_POST['orderno'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $amount=$_POST['amount'];
    $foodid=$_POST['foodid'];
$foodname=$_POST['foodname'];
    $paymentid=$_POST['paymentid'];
    
 
   
       $query=mysqli_query($con, "insert into food(orderno,time,date,amount,foodid,foodname,paymentid) value('$orderno','$time','$date','$amount','$foodid','$foodname','$paymentid')");
    if ($query) {
     echo '<script>alert("Food has been added")</script>';
echo "<script>window.location.href ='f.php'</script>";
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
<title>Park Theme Management System || Add Food Ticket</title>

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
  	    <h3>Food Ticket</h3>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">

          <fieldset>
            
   
            <div class="form-group">
              <label class="control-label"> Orderno</label>
              <input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="orderno" name="orderno" >
            </div>
            <div class="form-group">
              <label class="control-label">Time</label>
            <input type="time" name="time" >
            </div>
       
            <div class="form-group">
              <label class="control-label">Date</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required ng-touched"   id="date" name="date">
            </div>
<div class="form-group">
              <label class="control-label"> Foodid</label>
              <input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="foodid" name="foodid" >
            </div>
<div class="form-group">
              <label class="control-label"> Foodname</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="foodname" name="foodname" >
            </div>
<div class="form-group">
              <label class="control-label"> Paymentid</label>
              <input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="paymentid" name="paymentid" >
            </div>
<div class="form-group">
              <label class="control-label"> Amount</label>
              <input type="number" class="form-control1 ng-invalid ng-invalid-required ng-touched"  required="true" id="amount" name="amount" >
            </div>

  
      </table>

            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="fsubmit" class="btn btn-primary">Add</button></p>
             
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