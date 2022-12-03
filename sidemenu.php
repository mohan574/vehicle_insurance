<!--<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
-->

<?php
session_start();


$user_name = $_SESSION["username"];
$email = $_SESSION["email"];
if(empty($user_name)){
header('Location: index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rbm Studio</title>
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <style>
		/*popup*/
.nav-profile-image.profileImage {
    margin: 1px 1px 20px 2px;
}

.rbmbnt2 {
    width: 87px;
    margin: 0px!important;
    font-size: 11px;
    padding: 8px;
    float: left;
	height: 25px;
}


.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {
    width: 130%;
    left: -30px;
}



.sidebar .nav .nav-item .nav-link{
padding: 9px 0px !important;
}
        #button {
                cursor: pointer;
        }



	

        /* Dropdown Button */

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }


        /* The container <div> - needed to position the dropdown content */

        .dropdown {
            position: relative;
            display: inline-block;
        }


        /* Dropdown Content (Hidden by Default) */

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            margin-top: 44px;
            margin-left: 27px;
        }


        /* Links inside the dropdown */

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }


        /* Change color of dropdown links on hover */

        .dropdown-content a:hover {
            background-color: #ddd
        }


        /* Show the dropdown menu on hover */

        .dropdown:hover .dropdown-content {
            display: block;
        }


        /* Change the background color of the dropdown button when the dropdown content is shown */

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }


p.walletbalance {
    font-size: 21px;
    line-height: 1.5;
    font-weight: bold;
}



.rbmbnt2 {
    background: #659dbd;
    color: #fff;
    font-weight: bold;
    padding: 6px 33px;
    border: none;
    border-radius: 2px;
}


.rbmbnt2 {
     width: 85px;
    float: left;
    padding: 2px 6px!important;
}





        .nav-link {
            float: left;
        }

        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item:hover {
            color: #659dbd;
        }

        #general-pages {
            display: none;
        }

        .sidebar .nav.sub-menu {
            width: 100% !important;
        }

        .sidebar .nav.sub-menu .nav-item .nav-link.active {
	    color: #659dbd !important;
	   
        }

        .sidebar .nav.sub-menu .nav-item .nav-link {
	    font-size: 15px !important;	
            margin-left: 30px;
        }

        .alert-success {
            color: #0b5348;
            background-color: #d1f5f0;
            border-color: #bbf1e9;
            position: absolute;
            width: 84%;
            z-index: 999;
            margin: 0 auto;
            left: 278px;
            margin-top: 9px;
        }

        .down {
  
      font-size: 20px;

    margin-left: 42px;
        }

        .alert-danger {
            background-color: #d1f5f0;
            border-color: #bbf1e9;
            position: absolute;
            width: 84%;
            z-index: 999;
            margin: 0 auto;
            left: 278px;
            margin-top: 9px;
        }



.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img {
    position: relative;
    width: 38px !important;
    height: 38px !important;
    border: 1px solid #fff !important;
    border-radius: 21px !important;
    padding: 0px 2px !important;
    margin: 5px !important;
}




.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {
    width: 141%;
    left: -47px;
}

        .linav {
    margin-top: 4px;
}

.menu-title{
    width: 40px;
}

.sidebar .nav .nav-item {
   
    border-bottom: 1px solid #cccccc45 !important;
}

.form-group {
    margin-bottom: 0;
}

.logout{
display : none;
}

@media (max-width: 720px){
.navbar .navbar-brand-wrapper {
	width: 50% !important;
	display: block !important;
}

}
@media (max-width: 720px){
.logout{
display : block;
}

.content-wrapper{
margin-left:0 !important;
}
}

@media (max-width: 991px){
.navbar .navbar-brand-wrapper .navbar-brand.brand-logo {
    display: block;
}
}
.form-group.form-login.cambnt {
    float: left;
    margin-top: 7px;
}

.leftspace{
margin-left:0 !important;
}


.profileImage {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: #eee;
  font-size: 28px;
  color: #fff;
  text-align: center;
  margin: 0px 4px;
  padding-top:8px;
background:#659dbd
}



a {
  color: #35a785;
  text-decoration: none;
}

.img-replace {
  /* replace text with an image */
  display: inline-block;
  overflow: hidden;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
}



.cd-popup-trigger {
  display: block;
  width: 170px;
  height: 50px;
  line-height: 50px;
  margin: 3em auto;
  text-align: center;
  color: #FFF;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 50em;
  background: #35a785;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07);
}
@media only screen and (min-width: 1170px) {
  .cd-popup-trigger {
    margin: 6em auto;
  }
}

/* --------------------------------

xpopup

-------------------------------- */
.cd-popup {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
}
.cd-popup.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}

.cd-popup-container {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: 4em auto;
  background: #FFF;
  border-radius: .25em .25em .4em .4em;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-40px);
  -moz-transform: translateY(-40px);
  -ms-transform: translateY(-40px);
  -o-transform: translateY(-40px);
  transform: translateY(-40px);
  /* Force Hardware Acceleration in WebKit */
  -webkit-backface-visibility: hidden;
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.cd-popup-container p {
  padding: 3em 1em;
}
.cd-popup-container .cd-buttons:after {
  content: "";
  display: table;
  clear: both;
}
.cd-popup-container .cd-buttons li {
  float: left;
  width: 50%;
  list-style: none;
}
.cd-popup-container .cd-buttons a {
  display: block;
  height: 60px;
  line-height: 60px;
  text-transform: uppercase;
  color: #FFF;
  -webkit-transition: background-color 0.2s;
  -moz-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.cd-popup-container .cd-buttons li:first-child a {
  background: #fc7169;
  border-radius: 0 0 0 .25em;
}
.no-touch .cd-popup-container .cd-buttons li:first-child a:hover {
  background-color: #fc8982;
}
.cd-popup-container .cd-buttons li:last-child a {
  background: #b6bece;
  border-radius: 0 0 .25em 0;
}
.no-touch .cd-popup-container .cd-buttons li:last-child a:hover {
  background-color: #c5ccd8;
}
.cd-popup-container .cd-popup-close {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 30px;
  height: 30px;
}
.cd-popup-container .cd-popup-close::before, .cd-popup-container .cd-popup-close::after {
  content: '';
  position: absolute;
  top: 12px;
  width: 14px;
  height: 3px;
  background-color: #8f9cb5;
}
.cd-popup-container .cd-popup-close::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 8px;
}
.cd-popup-container .cd-popup-close::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 8px;
}
.is-visible .cd-popup-container {
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
}
@media only screen and (min-width: 1170px) {
  .cd-popup-container {
    margin: 8em auto;
  }
}


.sel-agent{
    padding: 10px;
    border: 0;
    outline: 1px solid #ccc;
    color: #fff !important;
    background-color: transparent !important;
    
    float: left;

}




.sel-agent {
    padding: 10px;
    border: 0 !important;
    outline: 0 !important;
    color: #fff !important;
    background-color: transparent !important;
    float: left;
}

    </style>






    <script>
setIdleTimeout(600000, function() {
        sessionStorage.clear();
       window.location.href = 'session_time_out.php';
    });
    function setIdleTimeout(millis, onIdle, onUnidle) {
        var timeout = 0;
        startTimer();
        function startTimer() {
            timeout = setTimeout(onExpires, millis);
            document.addEventListener("mousemove", onActivity);
            document.addEventListener("keypress", onActivity);
        }

        function onExpires() {
            timeout = 0;
            onIdle();
        }

        function onActivity() {
            if (timeout) clearTimeout(timeout);
            else onUnidle();

            document.removeEventListener("mousemove", onActivity);
            document.removeEventListener("keypress", onActivity);
            setTimeout(startTimer, 1000);
        }
    }
</script>
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
</head>
<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background: #659dbd;">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background: #659dbd;">
                <a class="navbar-brand brand-logo" href="Dashboard.php"><img src="./images/logo.png" alt="logo" />
		<?php if( $email == 'damodar@pyrogroup.com'){ ?>

		<img src="logo.svg" alt="logo"  style="width:25%;margin-left: 5px;"/>

		<?php  } ?>
		</a>
            </div>
	    <div class="navbar-menu-wrapper d-flex align-items-stretch" style="color:#fff;">
		           <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <i class="icon-align-justify"></i>
                </button>



          
		<ul class="navbar-nav navbar-nav-right">

	

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                             	 <i class="fa-duotone fa-user" style="margin: 5px;color: #fff;font-size: 25px;"></i>
                            </div>
                            <div class="nav-profile-text" style="margin: 10px 4px 6px 8px;">
			    <p class="text-black" style="margin: 0;"><?php echo $user_name ;?></p>
			    <small  style="font-size:10px;font-weight: bold;">


		<?php


if ($role == '1'){

echo "MASTER";
}
else if ($role =='2'){
echo "SUPER_FINANCE";
}
else if ($role =='3'){
echo "FINANCE";
}
else if ($role =='4'){
echo "ADMIN";
}
else if ($role == '5'){
echo "OPERATIONS";
}
else if ($role == '6'){
echo "FINANCE";
}






?>

			</small>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                               
					
				<a class="dropdown-item" href = "User_Profile.php">
                                <i class="fa-duotone fa-user" style="margin: 10px 15px;color:#659dbd;"></i> My profile</a>


                            <a class="dropdown-item" href="changepassword.php">
                                <i class="icon-cog" style="margin: 10px 15px;color:#659dbd;"></i> Change Password </a>

                            <a class="dropdown-item" href="logout.php">
                  	              <i class="icon-off" style="margin: 10px 15px;color:#659dbd;"></i> Signout </a>


                        </div>
                    </li>
                </ul>
            </div>
	</nav>


        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar" style="position: fixed;">
                <ul class="nav">

                    <li class="nav-item nav-profile" style="padding-top: 12px;">
                        <a href="#" class="nav-link" style="padding:0 !important;">
                            <div class="nav-profile-image profileImage">
			    <span id="firstName" class="fname"></span>
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
			    <span class="font-weight-bold" id="nameu"><?php echo $cname; ?></span>
<!--				<a href="User_Profile.php" style="margin:2px 0;color: #659dbd;font-size: 15px;cursor: pointer;"> My Account</a>-->
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item create_agent">
                        <a class="nav-link" href="Dashboard.php">
                            <span class="menu-title"><i class="icon-dashboard cust_icons"></i></span><span class="linav">Insurance</span>
                        </a>

                    </li>

                

			<li class="nav-item create_agent">
                        <a class="nav-link" href="Agent.php">
                            <span class="menu-title"><i class="icon-user cust_icons"> </i></span><span class="linav">My Insurance</span>
                        </a>

                    </li>	

			<!-- <li class="nav-item rcs_check">
                        <a class="nav-link" href="RcsCheck.php">
                            <span class="menu-title"><i class="icon-check-sign cust_icons"></i></span><span class="linav">Rcs Check</span>

                        </a>
                    </li> -->

                </ul>
                <div>
                    <ul class="nav" style="    position: fixed;top: 83%;">
			<!--
			<li class="nav-item">
                            <a class="nav-link" href="Help.php">
                                <span class="menu-title"><i class="icon-male cust_icons"></i></span><span class="linav">Help</span>
                            </a>
                        </li>-->

                        <li class="nav-item">
                            <a class="nav-link" href="faqs.php">
                                <span class="menu-title"><i class="icon-book cust_icons"></i></span><span class="linav">FAQ's</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="support.php">
                                <span class="menu-title"><i class="icon-phone-sign cust_icons"></i></span><span class="linav">Support</span>
                            </a>
                        </li>
			
			<li class="nav-item logout">
                            <a class="nav-link " href="logout.php">
                                <span class="menu-title"><i class="icon-off cust_icons"></i></span><span class="linav">Logout</span>
                            </a>
                        </li>

                    </ul>

                </div>
	    </nav>
<?php


if (isset($_POST['getbalance'])) {

$postData  = array(
	"username" => $user_name,

);
$user_name;

if(empty($postData)){
echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Empty Login Details');window.location.href='index.php';</SCRIPT>";
}
error_log('LOGIN-DETAILS----'.$uname.$password,0);
$url = "http://10.77.75.4:4000/login/getbalance";
$headers = "Content-Type: multipart/form-data";
$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, $url);
curl_setopt( $ch,CURLOPT_POST, true);
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS,$postData);
$result = curl_exec($ch );

error_log($result);
$rs = json_decode($result,true);

$status = $rs['status'];
$Wallet_Balance = $rs['Wallet_Balance'];


if($status == '200'){
	?>


                                        <?php


}

else {

?>


<div class="alert alert-danger alert-dismissible fade show" role="alert" data-tor="show:[rotateX.from(90deg) @--tor-translateZ(-5rem; 0rem) pull.down(full)] slow">
	<strong>Unable to fetch the balance </strong>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php

}


}

?>








</body>



<script type="text/javascript">

if (<?php echo $role ;?> == '4'){
	$('.approvals').hide();


}
else if(<?php echo $role ;?> == '5'){
	$('.approvals').hide();
	$('.create_user').hide();
        $('.create_agent').hide();
	$('.billing').hide();
}
else if(<?php echo $role ;?> == '6'){
        $('.approvals').hide();
	$('.campagins').hide();
	$('.create_user').hide();
	$('.create_agent').hide();
	$('.rcs_check').hide();
	$('.reports').hide();
}
else if(<?php echo $role ;?> == '2'){
        $('.Dashboard.php').hide();
	$('.approvals').hide();
	$('.create_user').hide();
	$('.create_agent').hide();
	$('.rcs_check').hide();
        $('.campagins').hide();
        $('.reports').hide();
}
else if(<?php echo $role ;?> == '3'){
        $('.Dashboard.php').hide();
        $('.approvals').hide();
        $('.create_user').hide();
        $('.create_agent').hide();
        $('.rcs_check').hide();
        $('.campagins').hide();
        $('.reports').hide();
}

</script>


<script>



jQuery(document).ready(function($){
	//open popup
	$('.cd-popup-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
	});

	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup').removeClass('is-visible');
	    }
    });
});

</script>




<script type="text/javascript">
    $(document).ready(function() {

        $("#menu-titleid").click(function() {

            $("#general-pages").toggle();

        })
	
	$(".approve").click(function() {

            $(".approve_show").toggle();

        })

	
        $(".align-self-center").click(function() {
            $("#general-pages").hide();
	});



	 $(".align-self-center").click(function() {
		 $(".linav").toggle();


	 })


		 $(".align-self-center").click(function() {
			 
			 $("#sidebar").toggle();
			 $(".content-wrapper").toggleClass("leftspace");
        })


    });

</script>

<script>
$("#button2").click(function () {
    $(".rbmbnt2").css("display", "none");
});
</script>

<script>
$(document).ready(function(){
 var firstName = $('#nameu').text();
  var intials = firstName.charAt(0);
 
  $('.profileImage').append('HI');
  var profileImage = $('.profileImage').text(intials);
});

</script>

