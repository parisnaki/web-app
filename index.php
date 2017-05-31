<?php
session_start();

require_once('config.php');
$connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database);

if(isset($_SESSION['user_oid']))
{
	$user_oid = $_SESSION['user_oid'];
	$display_name = $_SESSION['display_name'];
	$last_modification_time = $_SESSION['last_modification_time'];

	header('location: dashboard.php');
	exit ;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dynamic Parking</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		
	<script type="text/javascript">
    function submitForm1(action)
    {
        
		document.getElementById('form1').action = action;
        document.getElementById('form1').submit();
    }
	
	function submitForm2(action)
    {   
	    var action_type=$('#action_type').val(); 
		var display_name=$('#display_name').val();
		var email=$('#email').val(); 
		var password=$('#password').val();
	        if(email!='' && password!='')
	        {
		 var myurl = 'admin_user_profile_master3.php?action_type='+action_type+'&display_name='+display_name+'&email='+email+'&password='+password+'';
		// alert(myurl);
	         $.ajax({
						url: myurl,
						success:function(result)
						{   alert(result);
						    location.reload();
							//document.getElementById('test_hostel').innerHTML = result;
						}
					  }); 
		}
		else
		{
		   alert("Username/Password is required");
		}				  
	}
    
</script>
    </head>
    <body>

    <div style="background-image:url(img/bg_2.jpg); height:100%;">
<br>


<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <!--<td align="right"><img src="img/logo.png"/></td>-->
    <td><h1 style="color:#FFF;">Dynamic Parking System Optimization</h1>
</td>
  </tr>
</table>


        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form id="form1" method="post">
                <div class="body bg-gray">

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                   

                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                         <p class="pull-right"><a href="#" data-toggle="modal" data-target="#edit-modal">New User Register</a></p>
                    </div>

                <div class="footer">
                    <button type="button" onclick="submitForm1('login_check.php')" class="btn btn-success btn-block">Sign me in</button>



                </div>

                </div>
           </form>
            <!-- COMPOSE MESSAGE MODAL -->
        <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-arrow-right"></i>New User Register</h4>
                    </div>
                    
                    
  <form id="form2" method="post" action="" onsubmit="return validate();">
  <input type="hidden" id="action_type" name="action_type" id="action_type" value="0" />
  <input type="hidden" name="user_oid" id="user_oid" value="0" />
                   <div class="modal-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Name:&nbsp;</span>
                                    	<input type="text" name="display_name" class="form-control" id="display_name" placeHolder="Name" tabindex="1" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Username:</span>
                                    <input type="text" name="email" id="email" placeHolder="User Name" tabindex="2" class="form-control" required="true" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    
                                    <input type="password" name="password" id="password" placeHolder="Password" tabindex="3" class="form-control" required="true"/>

                                </div>
                            </div>
                          </div>

                        <div class="modal-footer clearfix">
		
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>

                            <button type="button" onclick="submitForm2('admin_user_profile_master3.php')" class="btn btn-primary pull-left"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

         <div class="clearfix">
         </div>


</div>
        <!-- jQuery 2.0.2 -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

<!-- Piwik -->

<!-- End Piwik Code -->


    </body>
</html>