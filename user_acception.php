<head>
    <title>Insurance</title>
</head>
<style>

body{
	
}
.contain{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background: linear-gradient(90deg,#189086,#2f8198);
background-image: linear-gradient(to bottom right,#02b3e4,#02ccba);	
}

.done{
	width:100px;
	height:100px;
	position:relative;
	left: 0;
	right: 0;
	top:-20px;
	margin:auto;
}
.contain h1{
	font-family: 'Julius Sans One', sans-serif;
	font-size:1.4em;
	color: #02b3e4;
}

.congrats{
	position:relative;
	left:50%;
	top:50%;
	max-width:800px;	transform:translate(-50%,-50%);
	width:80%;
	min-height:300px;
	max-height:900px;
	border:2px solid white;
	border-radius:5px;
	    box-shadow: 12px 15px 20px 0 rgba(46,61,73,.3);
    background-image: linear-gradient(to bottom right,#02b3e4,#02ccba);
	background:#fff;
	text-align:center;
	font-size:2em;
	color: #189086;
}

.text{
	position:relative;
	font-weight:normal;
	left:0;
	right:0;
	margin:auto;
	width:80%;
	max-width:800px;

	font-family: 'Lato', sans-serif;
	font-size:0.6em;

}


.drawn svg .path{
    opacity: 1;
    stroke-dashoffset: 0;
}

.regards{
	font-size:.7em;
}


@media (max-width:600px){
	.congrats h1{
		font-size:1.2em;
	}
	
	.done{
		top:-10px;
		width:80px;
		height:80px;
	}
	.text{
		font-size:0.5em;
	}
	.regards{
		font-size:0.6em;
	}
}

@media (max-width:500px){
	.congrats h1{
		font-size:1em;
	}
	
	.done{
		top:-10px;
		width:70px;
		height:70px;
	}
	
}

@media (max-width:410px){
	.congrats h1{
		font-size:1em;
	}
	
	.congrats .hide{
		display:none;
	}
	
	.congrats{
		width:100%;
	}
	
	.done{
		top:-10px;
		width:50px;
		height:50px;
	}
	.regards{
		font-size:0.55em;
	}
	
}

</style>

<?php

$token = $_GET['token'];

$dbhost = "localhost";
$dbuser = "rcs";
$dbpass = "rcs@Rbmstudio123";
$dbname = "rbmstudio";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$query = "UPDATE `TBL_USER_MASTER` SET status='Pending' WHERE token = '$token'";

$result = mysqli_query($link,$query);




?>



<div class="contain">
	<div class="congrats">
		<h1>Congrat<span class="hide">ulation</span>s !</h1>
		<div class="done">
			<svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
<path class="circ path" style="fill:#0cdcc7;stroke:#07a796;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" d="
	M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"
	/>
<polyline class="tick path" style="fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" points="
	11.6,20 15.9,24.2 26.4,13.8 "/>
</svg>
			</div>
		<div class="text">
		<p>You have successfully Registred  with us
		</p>
			<p>Eagerly awaiting for your visit
			</p>
			</div>
		<p class="regards">Regards, Team INSURANCE</p>

        <p class="regards">you will be redirected to login page in 1 min or else please click the below link </p><a href="index.php">click here</a>
	</div>
</div>


<script>

$(window).on("load",function(){
	
	setTimeout(function(){$('.done').addClass("drawn");},500)
	
});


</script>