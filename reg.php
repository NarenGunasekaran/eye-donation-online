<?php 
ob_start();
session_start();
if(isset($_SESSION['userid'])!=''){
$id=$_SESSION['userid'];

}else
{
header('Location:index.php');	
}
include('includes/db_config.php');
$msg='';
if(isset($_POST['reg'])){
	$ids=$id;
	$date=date('Y-m-d');
$name=$_POST['reg_name'];
$blood=$_POST['blood'];
$email=$_POST['reg_email'];
$mobile=$_POST['reg_mobile'];
$state=$_POST['reg_state'];
$city=$_POST['reg_city'];
$address=$_POST['reg_address'];
$edu=$_POST['reg_edu'];
$ocu=$_POST['reg_ocu'];
$dob=$_POST['reg_dob'];
$gender=$_POST['reg_gender'];
$query="insert into registration(user_id,date,name,blood,email,mobile,state,city,address,education,occupation,dob,gender) values('$ids','$date','$name','$blood','$email','$mobile','$state','$city','$address','$edu','$ocu','$dob','$gender')";
if(mysql_query($query))
{
header('Location:index.php');	
}else{
	
}
}

if(isset($_POST['update'])){
	$ids=$id;
	$date=date('Y-m-d');
$name=$_POST['reg_name'];
$blood=$_POST['blood'];
$email=$_POST['reg_email'];
$mobile=$_POST['reg_mobile'];
$state=$_POST['reg_state'];
$city=$_POST['reg_city'];
$address=$_POST['reg_address'];
$edu=$_POST['reg_edu'];
$ocu=$_POST['reg_ocu'];
$dob=$_POST['reg_dob'];
$gender=$_POST['reg_gender'];
$query="update registration set date='$date', name='$name', blood='$blood', email='$email', mobile='$mobile', state='$state', city='$city', address='$address', education='$edu', occupation='$ocu', dob='$dob', gender='$gender' where user_id='$ids'";

if(mysql_query($query)){
$msg="Update Sucessfully";	
}else{
	$msg="Updation Failed";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">-->
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
 <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="css/generic.css" rel="stylesheet" type="text/css" />
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
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php"><span style="margin-left:20px;">Eye Donation</span></a><span style="float:right;margin-right:30px;margin-top:10px;font-size:16px;color:#FFF"><?php if(isset($_SESSION['usernames'])!=''){echo "<i class='icon-user'></i> Welcome ".$_SESSION['usernames'];?>&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></span><?php }else{}?>
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
        <li class="active"><a href="index.php"><i class="icon-home	"></i><span>Home</span> </a> </li>
        <li><a href="eye.php"><i class="icon-eye-open"></i><span>What is eye donation</span> </a> </li>
         <li><a href="list.php"><i class="icon-list-alt"></i><span>List of eye donors</span> </a> </li>
        <li><a href="about.php"><i class="icon-leaf"></i><span>About Us</span> </a> </li>
        <li><a href="contactus.php"><i class="icon-envelope"></i><span>Contact Us</span> </a> </li>
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
                 <?php
				 $query1="select * from registration where user_id='$id'";
				 $res=mysql_query($query1);
				 $row=mysql_fetch_assoc($res);
				 $num=mysql_num_rows($res);
				 if($num==0){
				 ?>
                  <div  class="span6" style="color:#7E3817;font-size:24px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:16%;"> Registration Form</div><br/>
          <div class="container" style="box-shadow:2px 2px 2px 2px #666;width:600px;margin-top:60px;padding:20px;">
          <form method="post" name="regform">
           <div class="span2"> <label>Name</label></div><div class="span3"><input type="text" name="reg_name" id="reg_name" onBlur="nameValidate()" required/><br/><span style="color:#F00;position:;" id="nameErr"></span></div>
             <div class="span2"> <label>Blood Group</label></div><div class="span3"><select name="blood" id="blood" required>
             <option>--Select--</option>
             <option value="O+">O+</option>
             <option value="O-">O-</option>
             <option value="A+">A+</option>
             <option value="A-">A-</option>
             <option value="B+">B+</option>
             <option value="B-">B-</option>
             <option value="AB+">AB+</option>
             <option value="AB-">AB-</option>
             </select>
             </div>
             <div class="span2"> <label>Email</label></div><div class="span3"><input type="text" name="reg_email" id="reg_email" onBlur="emailValidate()" required/><br/><span style="color:#F00;position:;" id="emailErr"></span></div>
             <div class="span2"> <label>Mobile</label></div><div class="span3"><input type="text" name="reg_mobile" onBlur="mobileValidate()" id="reg_mobile" required/><br/><span style="color:#F00;position:;" id="mobileErr"></span></div>
            <div class="span2"> <label>State</label></div><div class="span3"><input type="text" name="reg_state" id="reg_state" required/></div>
             <div class="span2"> <label>City</label></div><div class="span3"><input type="text" name="reg_city" id="reg_city" required/></div>
              <div class="span2"> <label>Address</label></div><div class="span3"><textarea type="text" name="reg_address" id="reg_address" required></textarea></div>
               <div class="span2"> <label>Education</label></div><div class="span3"><input type="text" name="reg_edu" id="reg_edu" required/></div>
                <div class="span2"> <label>Occupation</label></div><div class="span3"><input type="text" name="reg_ocu" id="reg_ocu" required/></div>
                <div class="span2"> <label>DOB</label></div><div class="span3"><input type="text" name="reg_dob" id="reg_dob" required/></div>
                <div class="span2"> <label>Gender</label></div><div class="span3"><select name="reg_gender" id="reg_gender" required>
             <option>--Select--</option>
             <option value="Male">Male</option>
             <option value="Female">Female</option>
             </select>
             </div>
              <div style="padding-left:385px;"><input type="submit" name="reg" id="reg" value="Submit" class="btn btn-primary"/></div>
           </form>
           </div>
         </div>
          <?php
				 }else{
					 
		  ?>
          <div  class="span6" style="color:#7E3817;font-size:24px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:16%;"> Registration Form</div><br/>
          <div class="container" style="box-shadow:2px 2px 2px 2px #666;width:600px;margin-top:60px;padding:20px;">
          
         <span style="color:#F00;margin-left:20px;"> <?php echo $msg;?></span>
          <form method="post" name="regform_update">
         
           <div class="span2"> <label>Name</label></div><div class="span3"><input type="text" name="reg_name" id="reg_name" value="<?php echo $row['name'];?>" onBlur="nameValidate()" required/><br/><span style="color:#F00;position:;" id="nameErr"></span></div>
             <div class="span2"> <label>Blood Group</label></div><div class="span3"><select name="blood" id="blood1" required>
             <option>--Select--</option>
             <option value="O+" <?php if($row['blood']=='O+'){echo 'selected';}?>>O+</option>
             <option value="O-" <?php if($row['blood']=='O-'){echo 'selected';}?>>O-</option>
             <option value="A+" <?php if($row['blood']=='A+'){echo 'selected';}?>>A+</option>
             <option value="A-" <?php if($row['blood']=='A-'){echo 'selected';}?>>A-</option>
             <option value="B+" <?php if($row['blood']=='B+'){echo 'selected';}?>>B+</option>
             <option value="B-" <?php if($row['blood']=='B-'){echo 'selected';}?>>B-</option>
             <option value="AB+" <?php if($row['blood']=='AB+'){echo 'selected';}?>>AB+</option>
             <option value="AB-" <?php if($row['blood']=='AB-'){echo 'selected';}?>>AB-</option>
             </select>
             </div>
             <div class="span2"> <label>Email</label></div><div class="span3"><input type="text" name="reg_email" id="reg_email" value="<?php echo $row['email'];?>" onBlur="emailValidate()" required/><br/><span style="color:#F00;position:;" id="emailErr"></span></div>
             <div class="span2"> <label>Mobile</label></div><div class="span3"><input type="text" name="reg_mobile" id="reg_mobile" value="<?php echo $row['mobile'];?>" onBlur="mobileValidate()" id="reg_mobile" required/><br/><span style="color:#F00;position:;" id="mobileErr"></span></div>
            <div class="span2"> <label>State</label></div><div class="span3"><input type="text" name="reg_state" id="reg_state1" value="<?php echo $row['state'];?>" required/></div>
             <div class="span2"> <label>City</label></div><div class="span3"><input type="text" name="reg_city" id="reg_city1" value="<?php echo $row['city'];?>" required/></div>
              <div class="span2"> <label>Address</label></div><div class="span3"><textarea type="text" name="reg_address" id="reg_address1" required><?php echo $row['address'];?></textarea></div>
               <div class="span2"> <label>Education</label></div><div class="span3"><input type="text" name="reg_edu" id="reg_edu1" value="<?php echo $row['education'];?>" required/></div>
                <div class="span2"> <label>Occupation</label></div><div class="span3"><input type="text" name="reg_ocu" id="reg_ocu1" value="<?php echo $row['occupation'];?>" required/></div>
                <div class="span2"> <label>DOB</label></div><div class="span3"><input type="text" name="reg_dob" id="reg_dob1" value="<?php echo $row['dob'];?>" required/></div>
                <div class="span2"> <label>Gender</label></div><div class="span3"><select name="reg_gender" id="reg_gender1" required>
             <option>--Select--</option>
             <option value="Male" <?php if($row['gender']=='Male'){echo 'selected';}?>>Male</option>
             <option value="Female" <?php if($row['gender']=='Female'){echo 'selected';}?>>Female</option>
             </select>
             </div>
              <div style="padding-left:385px;"><input type="submit" name="update" id="update" value="Update" class="btn btn-primary"/></div>
           </form>
           </div>
         </div>
          <?php }?>
       </div>
	</div>
  </div>
</div>  
<script type="text/javascript">
function nameValidate(){
var name=document.getElementById('reg_name').value;
var nn=/^[a-zA-Z]+$/;

	if(!nn.test(name))
		{	
		document.getElementById('nameErr').innerHTML="Enter a valid name";
		
			return false;
		}else{document.getElementById('nameErr').innerHTML="";}
			
		

}
function emailValidate(){
var email=document.getElementById('reg_email').value;
var nm= /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
				if(!nm.test(email))
		{	
		document.getElementById('emailErr').innerHTML="Enter a valid email id";
			return false;
		}else{document.getElementById('emailErr').innerHTML="";}
		

}

function mobileValidate(){
var phones=document.getElementById('reg_mobile').value;

var ph=/^([0-9]{10})$/;
	
				if(!ph.test(phones))
		{	 document.getElementById('mobileErr').innerHTML="Please enter valid phone number";
			
			return false;
		}else{document.getElementById('mobileErr').innerHTML="";}
		

}


</script>
<script type="text/javascript">
function check(){
var un=document.getElementById('username').value;
	if(un!=''){
showForm('regform');
}

}

function showForm(a)
{
  if(a=='createPassword'){
	document.getElementById('createPassword').style.display="block";  
	document.getElementById('main').style.display="none"; 
	document.getElementById('forgotpassword').style.display="none";  
	document.getElementById('main').style.display="none";   
	document.getElementById('regform').style.display="none";
  }
  else if(a=="forgotpassword"){
	document.getElementById('forgotpassword').style.display="block";  
	document.getElementById('main').style.display="none";   
	document.getElementById('createPassword').style.display="none";  
	document.getElementById('regform').style.display="none";  
  }
  else if(a=="regform"){
	  document.getElementById('regform').style.display="block";  
	document.getElementById('main').style.display="none";   
	document.getElementById('createPassword').style.display="none";  
	document.getElementById('forgotpassword').style.display="none";  
  }
}
</script>
<!--<script>
var validator = new FormValidator('create', [{
    name: 'uname',
    display: 'required',
    rules: 'required'
}, {
    name: 'alphanumeric',
    rules: 'alpha_numeric'
}, {
    name: 'email',
    rules: 'valid_email',
    depends: function() {
        return Math.random() > .5;
    }
}, {
    name: 'passw',
    rules: 'required'
}, {
    name: 're_pass',
    display: 'password confirmation',
    rules: 'required|matches[passw]'
}
});
</script>-->
 <script type="text/javascript">
        //The following script is for the group 2 navigation buttons.
        function switchAutoAdvance() {
            imageSlider.switchAuto();
            switchPlayPauseClass();
        }
        function switchPlayPauseClass() {
            var auto = document.getElementById('auto');
            var isAutoPlay = imageSlider.getAuto();
            auto.className = isAutoPlay ? "group2-Pause" : "group2-Play";
            auto.title = isAutoPlay ? "Pause" : "Play";
        }
        switchPlayPauseClass();
    </script>	
	<script type="text/javascript" src="js/validate.js"></script>
</body>
</html>