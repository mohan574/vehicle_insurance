
<?php include('config.php')?>



<?php
session_start();
if(isset($_POST["loginsubmit"])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $postData = array(
    'username' => $username,
    'password' => $password,
);

if(empty($postData)){
  echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Empty Login Details');window.location.href='comapny_registration.php';</SCRIPT>";
  }
  
  
  error_log('LOGIN-DETAILS----'.$username.$password,0);
  $url = "http://127.0.0.1:5000/login";
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
  $Message = $rs['Message'];
  $USER_NAME = $rs['username'];
  $email = $rs['email'];
  if($status == 200){
  
  

  $_SESSION["username"] = $USER_NAME;
  $_SESSION["email"] = $email;
  
  
  $reurl = "http://localhost/INSURANCE/Dashboard.php";
  
  header("Location:".$reurl);
  
  }
  
  else{
  $status = $rs["status"];
  unset($_SESSION['username']);
  session_destroy();
  echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Invalid Login Details');window.location.href='index.php';</SCRIPT>";
  }

}
?>


<style>
html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  /* background: linear-gradient(#3b2abd, #3e5773); */

  background: linear-gradient(#b0b3a47a, #416997);

}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 60px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.logbtn{
  width: 35%;
    padding: 10px;
    background: #40495800;
    color: white;
    border: none;
    border-radius: 5px !important;

    position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 10px;
  letter-spacing: 4px
}


.logbtn:hover{

  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

/* a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
} */


a:hover {
  color: #03e9f4;
  /* color: #fff; */
  border-radius: 5px;
  /* box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
               0 0 100px #03e9f4;  */
} 

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  /* background: linear-gradient(180deg, transparent, #03e9f4); */

  background: linear-gradient(#b0b3a47a, #416997);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

a {
  color: white;
  text-decoration: none;
}
</style>

<div class="login-box">
  <h2>Login</h2>
  <form action="#" method="POST" style="margin-top: -13%;" enctype="multipart/form-data" autocomplete="off">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Email adress/Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
    <a href="#">
      Forget Password
    </a>
    </div>

    <!-- <div class="form-group form-login"> -->
      <button type="submit"  name="loginsubmit"class="logbtn">Login</button>
    
    <!-- <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Log in
    </a>-->
    </form>
    <p>New user? 
    <a href="Sign_up.php">
      Sign Up
    </a></p> 
    <!-- </div> -->
 
</div>


