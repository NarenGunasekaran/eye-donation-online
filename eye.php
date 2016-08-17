<?php 
ob_start();
session_start();
if(isset($_SESSION['userid'])!=''){
$id=$_SESSION['userid'];

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
        <li><a href="index.php"><i class="icon-home"></i><span>Home</span> </a> </li>
        <li class="active"><a href="eye.php"><i class="icon-eye-open"></i><span>What is eye donation</span> </a> </li>
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
                 
                  
          <div class="container" style="box-shadow:2px 2px 2px 2px #666;width:800px;margin-top:60px;padding:20px;height:700px;overflow:scroll;">
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What is Eye Donation?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eye donation is an act of donating one's eyes after his/her  death. Only corneal blinds can be benefitted through this process not other Blinds. It is an act of charity, purely for the benefit of the society and is totally voluntary. It is done after death. The eye donation of the deceased can be authorized by the next of kith & kin even if the deceased did not pledge to donate his / her eyes before death.</div>
           
            <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What is the use of eyes received?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The eyes, which are received through such magnanimous gestures, are of great benefit to the society. The front, clear and transparent tissue of the eye called as cornea can be used to restore vision to corneal blind person. The other portions of the eye are also used for research and  training   purposes to develop cures for some of the common eye diseases.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What is Corneal Blindness?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Cornea is the clear tissue covering the front of the eye. It is a focusing element of the eye. The Vision is dramatically reduced or lost if the cornea becomes cloudy. This loss of the vision is referred as corneal blindness.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What causes corneal blindness?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The cornea can get damaged through accidents. Children, while playing with sharp objects (e.g. bows and arrows ,pen, pencil, etc.) can accidentally damage their cornea. Corneal blindness can also happen to elders. Some of the industrial causes are chemical bums, flying debris or road accidents. The cornea can get damaged due to infections and malnutrition as well.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">Is there a cure for corneal blindness?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes. Removing the damaged cornea and replacing it with a healthy cornea by surgery can cure corneal blindness. Till date the treatment of the corneally blind people is corneal grafting. Artificial corneas have not yet been developed and hence the only source for cornea is from our fellow human beings.The first corneal transplant took place in 1905.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What is the source for the cornea?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortunately, cornea can be removed from a deceased person within six hours of death and can be used for surgery. Artificial cornea has not yet been developed nor is there any other objective. The eyes, which would ultimately be consigned to flames, or buried along with the body, can restore sight to two or moer needy people.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What is the magnitude of corneal blindness?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are tentative 4.9 million people suffering from corneal blindness. Majority of the 4.9  million are young adults who have to spend long blind years even though they have a cure. The present collection from all over the      COUNTRY     is   41883 !! (Year-2011 (  source EBAI.)</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">How can one donate eyes?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eyes are removed only after death. A person wishing to donate eyes should make close family members aware of their intentions. After the death of the person, it is the family who can inform the nearest eye bank to fulfill the wishes of the deceased or authorize the removal of the eyes if somebody from an eye bank approaches the family.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What is an Eye Bank?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An Eye Bank is a charitable organization and is not for profit .They are purely functioning for the benefit of the society. The eye banks facilitate removal of eyes, processing of eyes and evaluation of the eyes and distribute them to the needy.  The first Eye Bank was set up in United states in 1945 at Newyark City.  Around 500 + – Eye banks in India.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">How do I ensure that the eyes so donated would not be misused?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eye Banks are covered under "Transplantation of Human Organs Act"  since 1994. It is a criminal offence to buy or sell organs. The Government issues a certificate of registration to eye banks and has a provision to inspect them regularly. In case a complaint is filed against any eye bank, the Government can take legal action.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">How do I contact an eye bank?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A special Toll free number 1919 (BSNL) Nationwide  has been allotted for eye banks. Most of the eye banks all over the country have this number, once information for eye donation is communicated to eye banks; the eye bank sends its team to collect the eyes. By calling this number, details about eye donation can also be obtained.Also,all local news paper carry the eye banks number in their Emergency Number list.You can even get it from 197(BSNL/TATA Directory numbers.)At last,if required,you can contact any hospital and ask them for thelocal eye bank number.If you still could no find one,please call me up on +9422203645  (4.00 pm to 8.00 pm Only)and I shall help you find the local eye bank number.</div>
           
            <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What is the procedure for eye donation?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The local telephone directory usually lists the phone number of eye banks under essential services. The eye bank personnel would give directions and precautions to be taken. The process of removing eyes does not take more than 15 to 20 minutes. The eye bank team can come either to the house where death has taken place or to the hospital where death has taken place to remove the eyes there. It would not delay the funeral arrangements.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">What precautions are to be taken?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Switch off fans and switch on Air conditioner (if available). Raise the head of the deceased slightly by placing a pillow underneath. Place wet clean cloth over the closed eye lids. Please ensure that the eyelids are properly closed. Keep a copy of the death certificate ready (if available). Contact the nearest eye bank as quickly as possible.Give the correct address with specific  landmarks or famous name of our area and mobile and residenc number to enable the team of eye bank for locating the house easily.Give alternate cell number of any available relatives also.The eye bank team, which would have a trained technician and/or a registered medical practitioner, would remove the eyes after taking consent on a printed form in the presence of two witnesses and also take A small quantity of  blood sample will be drawn to rule out communicable diseases.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">After the removal of eyes, would there be any complications or disfigurement?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are two methods adopted for removal of eyes. Some eye banks would remove the whole eyeball. In such a case there may be temporary bleeding. The team is well trained to take care of such eventualities. There would be no disfigurement. The eye bank team, after the removal of eyes would properly close the eyes so that there is no disfigurement. The second method is the removal of only the clear transparent tissue. Here also a plastic shield is placed in place of the tissue and no difference can be noticed.</div>
           
           <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">Is eye donation against religious principles or traditions?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All religions endorse eye donation. There are numerous examples in our traditions and scriptures, which endorse eye and organ donation. A part of the body would be consumed by flames and reduced to ashes or which is buried and allowed to decay and disintegrate & cannot be put to a better use than restoring vision to the needy!!!</div>
           
            <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">Who can donate eyes? Is there any age limit?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-left:0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any person of any age can donate eyes. Even if the deceased has medical history of hypertension, diabetes, asthma, tuberculosis etc., and even spectacle wearers and people who have undergone cataract operation can donate eyes.</div>
           
            <div style="color:#7E3817;font-size:18px;font-family:Arial Black, Gadget, sans-serif;margin-top:30px;margin-left:0%;">Who cannot donate their eyes?</div>
           <div style="color:#7E3817;font-size:15px;font-family:Arial Black, Gadget, ;margin-top:10px;margin-bottom:10%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patients suffering from Rabies, Tetanus, Aids, Jaundice, Cancer, Gangrene, Brain Tumer, Food Poisoning, Septosamia & a person who has died due to drowning etc. cannot donate their eyes.
                            
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