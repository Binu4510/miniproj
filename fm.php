<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['tpmsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_GET['tdel']))
  {
$tid=$_GET['tdel'];
$query=mysqli_query($con,"delete from tblfoodtickets where id='$tid'");
    if ($query) {
     echo '<script>alert("Ticket has been deleted")</script>';
echo "<script>window.location.href ='fm.php'</script>";
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
<title>Theme Park Management System || Manage Food Tickets</title>
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
     <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	<h3>Manage Food Tickets</h3>
 
	<div class="bs-example4" data-example-id="simple-responsive-table">
  
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>S.no</th>
            <th>Orderno</th>
            
            <th>Time</th>
            <th>Date</th>
            <th>Foodid</th>
            <th>Paymentid</th>
            <th>Amount</th>
            
            </tr>
        </thead>
        <tbody>
           <?php
$ret=mysqli_query($con,"select *from food");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
          <tr>
            <th scope="row"><?php echo $cnt;?></th>
                <td><?php  echo $row['orderno'];?></td>
                <td><?php  echo $row['time'];?></td>
                <td><?php  echo $row['date'];?></td>
                <td><?php  echo $row['foodid'];?></td>
                 <td><?php  echo $row['paymentid'];?></td>
<td><?php  echo $row['amount'];?></td>
                 
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
          </tr>
  
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
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
<?php }  ?>