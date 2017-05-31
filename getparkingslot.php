<?php
require_once('dbconn.php');
$query = "select * from parkingstatus";
$result = mysql_query($query);
while($results = mysql_fetch_array($result))
{
$parkname=$results['park_name'];
$parkstatus=$results['park_status'];
?>
<div class="col-md-3">
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading"><?php echo $parkname=$results['park_name']; ?></div>
<?php
if($parkstatus=='1')
{
?>
<div class="panel-body">
<i class="fa fa-truck fa-5x"></i>
</div>
<?php
}
else
{?>
<div class="panel-body">
Park Here..
</div>
<?php
}
?>
</div>
</div>
</div>
<?php 
}
?>