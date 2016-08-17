<?php 
ob_start();
session_start();

include('../includes/db_config.php');
$msg='';

if(isset($_REQUEST['action'])){
	$id=$_REQUEST['id'];
	$query="delete from registration where user_id='$id'";
	mysql_query($query);
	$query1="delete from user where id='$id'";
	mysql_query($query1);
	header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">-->
<link href="../css/font-awesome.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/pages/dashboard.css" rel="stylesheet">
 <link href="../themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="../themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="../css/generic.css" rel="stylesheet" type="text/css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   <style>
   .effects{
	   width:240px;background-color:#7B6E5E;display:block;height:40px;color:#FFF;text-align:center;padding-top:16px;border-bottom:1px solid #AC9175;
   }
   .effects:hover{
	   color:#000 !important;
	   box-shadow:2px 2px 2px 2px #666 ;
	   cursor:pointer ;
	   background-color:#B3A9A0;
   }
   #link:hover{
	text-decoration:underline;
	cursor:pointer;
	color:#F00;   
   }
   label{
	margin-left:30px;
	margin-top:20px;
	font-size:14px;
	font-family:"Arial Black", Gadget, sans-serif;
	color:#7E3817;   
   }
   #createPassword input,select{
	  margin-left:50px;
	margin-top:20px; 
   }
  
   #forgotpassword input,select{
	  margin-left:50px;
	margin-top:20px; 
   }
    #regform input,select,textarea{
	  margin-left:50px;
	margin-top:10px; 
   }
  
   </style>
</head>
<body style="background-color:#FDFEF9;">
<div class="container">
<div class="navbar navbar-fixed-top" >
  <div class="navbar-inner" >
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html"><span style="margin-left:20px;">Eye Donation Administrator</span></a>
      <div class="nav-collapse">
        
       
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>

<!-- /navbar -->
<div class="subnavbar" style="margin-bottom:0.2em;">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Home</span> </a> </li>
        
       <li></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
</div>
<div class="main" style="border-bottom:none;">
  <div class="main-inner">
    <div class="container" style="box-shadow:2px 2px 2px 2px#666;height:850px;">
	 <div class="row" style="margin-left:0px;">
                  <div id="regform">
                   <div  class="span6" style="color:#7E3817;font-size:24px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:6%;"> List Of Users</div><br/>
          <div class="container" style="box-shadow:2px 2px 2px 2px #666;width:800px;margin-top:70px;padding:20px;height:700px;overflow:scroll;">
          
           <table class="table table-striped table-bordered">
           <th  style="text-align:center">Sl</th>
           <th  style="text-align:center">Name</th>
           <th  style="text-align:center">Email</th>
           <th  style="text-align:center">Contact</th>
           <th  style="text-align:center">Location</th>
           <th  style="text-align:center">Action</th>
          
            <?php 
			$j=0;
		   $query="select * from registration where 1";
		   $res=mysql_query($query);
		   while($row=mysql_fetch_assoc($res)){
			   $j++;
		   ?>
           <tr>
           <td style="text-align:center"><?php echo $j;?></td>
          
           <td style="text-align:center"><?php echo $row['name'];?></td>
           <td style="text-align:center"><?php echo $row['email'];?></td>
           <td style="text-align:center"><?php echo $row['mobile'];?></td>
           <td style="text-align:center"><?php echo $row['city'];?></td>
           <td style="text-align:center"><a href="index.php?action&id=<?php echo $row['user_id'];?>" onclick="return confirm('Are You Really Want To Cancel This Entry ?')"><i class="icon-trash" style="font-size:20px;padding:10px 10px 10px;color:#F00"></i></a></td>
           
             
           </tr>
           <?php }?>
           </table>
           </div>
         </div>
          
       </div>
	</div>
  </div>
</div>  



	
</body>
</html>