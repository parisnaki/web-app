<?php
require_once('dbconn.php');
if(isset($_REQUEST['btnsubmit']))
{
$userid=$_REQUEST['userid'];
$park_v=$_REQUEST['drop_2'];
$query = "update parkingstatus set park_status= '1',userid='".$userid."' where id='".$park_v."'";
$result = mysql_query($query);
echo '<script language="javascript">';
echo 'alert("Parked Successfully")';
echo '</script>';


}
if(isset($_REQUEST['btnunlock']))
{
$userid=$_REQUEST['userid'];
$query = "update parkingstatus set park_status= '0' and userid='0' where userid='".$userid."'";
$result = mysql_query($query);
echo '<script language="javascript">';
echo 'alert("Unparked Successfully")';
echo '</script>';


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>Parking Vehicle</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- bootstrap 3.0.2 -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- DATA TABLES -->
<link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

function showEdit(user_oid, display_name, email, user_group_oid,designation,status)
{
document.getElementById('action_type').value = "1";
document.getElementById('user_oid').value = user_oid;
document.getElementById('user_group_oid').value = user_group_oid;
document.getElementById('display_name').value = display_name;
document.getElementById('email').value = email;
document.getElementById('designation').value = designation;
document.getElementById('status').value = status;
document.getElementById('display_name').focus();		
}

function resetGroup()
{
document.getElementById('action_type').value = "0";
document.getElementById('user_oid').value = "0";
document.getElementById('user_group_oid').value = "0";
document.getElementById('display_name').value = "";
document.getElementById('email').value = "";
document.getElementById('designation').value ="";
document.getElementById('status').value = "0";
}

function validate()
{
if(document.getElementById('display_name').value == "")
{
alert("User's Display Name cannot be blank!");
document.getElementById('display_name').focus();
return false;
}

if(document.getElementById('email').value == "")
{
alert("Email cannot be blank!");
document.getElementById('email').focus();
return false;
}

if(document.getElementById('action_type').value == 0)
{

if(document.getElementById('password').value == "")
{
alert("Password cannot be blank!");
document.getElementById('password').focus();
return false;
}
}
else
{
if(document.getElementById('password').value != "")
{
if(!confirm("Are you sure you want to change the password ?"))
return false;
}
}


return true;


}


</script>
</head>

<body onload="initAction();" class="skin-blue">

<div id="blank"></div>

<?php
include('nav_top.php');
?>

<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
<?php
$page = "Masters";
$subpage = "Parking Vehicle";
include('nav_left.php');
?>

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Parking Vehicle
<small>Parking Vehicle</small>
</h1>
<ol class="breadcrumb">
<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active"><a href="#">Parking Vehicle</a></li>
</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="col-lg-6">
<div class="box box-success">
<div class="box-header">
<h3 class="box-title">Parking Vehicle</h3>
<div class="box-tools pull-right">
</div>
</div>
<div class="box-body">
<form action="parkingvehicle.php" method="POST">
<div class="form-group">
<div class="input-group">
<input type="hidden" name="userid" value="<?php echo $user_oid; ?>">
<span class="input-group-addon">Park Slot &nbsp;</span>
 <?php
	$result = mysql_query("SELECT * FROM parkingstatus where park_status='0'") or die(mysql_error());
	if (mysql_num_rows($result)!=0)
	{
	echo '<select name="drop_2" class="form-control" id="drop_2">
		  <option value=" " selected="selected">Choose one</option>';
		   while($drop_2 = mysql_fetch_array( $result ))
			{
			  echo '<option value="'.$drop_2['id'].'">'.$drop_2['park_name'].'</option>';
			}
	echo '</select>';
	}
	?>
</div>
</div>
<div class="box-tools ">


<button type="submit" name="btnsubmit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> Park</button>
<button type="submit" name="btnunlock" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Unpark</button>
</div>
</form>			<br>
<br>

</div><!-- /.box-body -->
</div>
</div><!-- ./col -->


<br>
<br>
<br>
<br>
<br>
<br>
</div>



</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->


<?php
include('log_pop_html.php');
?>  



<!-- Brit JS -->
<script type="text/javascript" language="javascript" src="js/brit.js"></script>

<!-- jQuery 2.0.2 -->
<script src="js/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="js/AdminLTE/app.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="js/AdminLTE/demo.js" type="text/javascript"></script>

<script type="text/javascript">
$(function() {
$("#example1").dataTable();
});
</script>

</body>
</html>