<?php 
ob_start();
session_start();

include('includes/db_config.php');
$msg='';



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
        <li><a href="index.php"><i class="icon-home"></i><span>Home</span> </a> </li>
        <li><a href="eye.php"><i class="icon-eye-open"></i><span>What is eye donation</span> </a> </li>
         <li class="active"><a href="list.php"><i class="icon-list-alt"></i><span>List of eye donors</span> </a> </li>
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
                   <div  class="span6" style="color:#7E3817;font-size:24px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:6%;"> List Of Donors</div><br/>
          <div class="container" style="box-shadow:2px 2px 2px 2px #666;width:800px;margin-top:70px;padding:20px;height:700px;overflow:scroll;">
          <form method="post" name="list">
            <div class="span1" style="width:50px;"> <label>From</label></div><div class="span3"><select name="from_day" style="width:50px;float:left;">
            <option value="">D</option>
            <option value="1">1</option>
             <option value="2">2</option>
              <option value="3">3</option>
               <option value="4">4</option>
                <option value="5">5</option>
                 <option value="6">6</option>
                  <option value="7">7</option>
                   <option value="8">8</option>
                    <option value="9">9</option>
                     <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
               <option value="13">13</option>
               <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
               <option value="17">17</option>
               <option value="18">18</option>
               <option value="19">19</option>
               <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>    
               <option value="25">25</option>
               <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option> 
               <option value="31">31</option> 
            </select>
            <select name="from_month" style="width:50px;float:left;margin-left:10px;">
             <option value="">M</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            </select>
             <select name="from_year" style="width:80px;float:left;margin-left:10px;">
              <option value="">Y</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
             <option value="2008">2008</option>
              <option value="2007">2007</option>
               <option value="2006">2006</option>
                <option value="2005">2005</option>
                 <option value="2004">2004</option>
                  <option value="2003">2003</option>
                   <option value="2002">2002</option>
                   <option value="2001">2001</option>
                   <option value="2000">2000</option>
            </select>
            </div>
            <div class="span1" style="width:50px;"> <label>To</label></div><div class="span3"><select name="to_day" style="width:50px;float:left;">
             <option value="">D</option>
            <option value="1">1</option>
             <option value="2">2</option>
              <option value="3">3</option>
               <option value="4">4</option>
                <option value="5">5</option>
                 <option value="6">6</option>
                  <option value="7">7</option>
                   <option value="8">8</option>
                    <option value="9">9</option>
                     <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
               <option value="13">13</option>
               <option value="13">13</option>
               <option value="14">14</option>
               <option value="15">15</option>
               <option value="16">16</option>
               <option value="17">17</option>
               <option value="18">18</option>
               <option value="19">19</option>
               <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>    
               <option value="25">25</option>
               <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option> 
               <option value="31">31</option> 
            </select>
            <select name="to_month" style="width:50px;float:left;margin-left:10px;">
             <option value="">M</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            </select>
             <select name="to_year" style="width:80px;float:left;margin-left:10px;">
              <option value="">Y</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
             <option value="2008">2008</option>
              <option value="2007">2007</option>
               <option value="2006">2006</option>
                <option value="2005">2005</option>
                 <option value="2004">2004</option>
                  <option value="2003">2003</option>
                   <option value="2002">2002</option>
                   <option value="2001">2001</option>
                   <option value="2000">2000</option>
            </select></div>
             <div class="span1" style="width:50px;"> <label>City</label></div><div class="span3"><input type="text" name="loc" id="loc"/></div>
              <div class="span4" style="float:right"><input type="submit" name="search" id="search" value="Search" class="btn btn-primary"/></div>
           </form>
          
           <table class="table table-striped table-bordered">
           <th  style="text-align:center">Sl</th>
           <th  style="text-align:center">Date</th>
           <th  style="text-align:center">Name</th>
           <th  style="text-align:center">Blood Group</th>
           <th  style="text-align:center">City</th>
           <th  style="text-align:center">Gender</th>
           <th  style="text-align:center">Phone</th>
           <th  style="text-align:center">Email</th>
            <?php 
			$bv='';
			if(isset($_POST['search'])){
				$loc=$_POST['loc'];
				if($loc!=''){
				 $bv .=" and city LIKE '%$loc%'";	
				}
				if($_POST['from_day']!='' && $_POST['from_month']!='' && $_POST['from_year']!='' && $_POST['to_day']!='' && $_POST['to_month']!='' && $_POST['to_year']!=''){
					$from_date=$_POST['from_year'];
					$from_date .="-";
					$from_date .=$_POST['from_month'];
					$from_date .="-";
					$from_date .=$_POST['from_day'];
					$to_date=$_POST['to_year'];
					$to_date .="-";
					$to_date .=$_POST['to_month'];
					$to_date .="-";
					$to_date .=$_POST['to_day'];
					$bv .=" and (date between '$from_date' and '$to_date)')";	
				}
			}
			$bvv='';
			$bvv .=" order by date desc";
		   $j=0;
		   $query="select * from registration where 1".$bv."".$bvv;
		   $res=mysql_query($query);
		   while($row=mysql_fetch_assoc($res)){
			   $j++;
		   ?>
           <tr>
           <td style="text-align:center"><?php echo $j;?></td>
           <td style="text-align:center"><?php echo $row['date'];?></td>
           <td style="text-align:center"><?php echo $row['name'];?></td>
           <td style="text-align:center"><?php echo $row['blood'];?></td>
           <td style="text-align:center"><?php echo $row['city'];?></td>
           <td style="text-align:center"><?php echo $row['gender'];?></td>
            <td style="text-align:center"><?php echo $row['mobile'];?></td>
             <td style="text-align:center"><?php echo $row['email'];?></td>
           </tr>
           <?php }?>
           </table>
           </div>
         </div>
          
       </div>
	</div>
  </div>
</div>  
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