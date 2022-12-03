<?php include('config.php') ?>


<?php
if (isset($_POST["signupsubmit"])) {

  // (B) HANDLE LOGIN

  $email = $_POST['email'];
  $sql = "select USER_NAME ,USER_PWD,ROLEID from IDEADSA.TBL_GUI_USERS where USER_NAME = '$email' ";
  $s = oci_parse($c, $sql);
  oci_execute($s);
  while (($row = oci_fetch_array($s)) != false) {

    echo $user = $row['USER_NAME'];
    echo $password = $row['USER_PWD'];
    echo $role = $row['ROLEID'];
  }

  if ($_POST["email"] == $user && $_POST["password"] == $password) {
    $_SESSION["loggedin"] = true;
    $_SESSION["role"] =  $role;
    if ($role == '1' || $role == '2') {
      header("Location: Dashboard.php");
    } else {
      header("Location: Activation_Status.php");
    }
  } else {
    $wrong = "Bad ID and password, the system could not log you in";
  }
}
?>


<style>
  html {
    height: 100%;
  }

  body {
    margin: 0;
    padding: 0;
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
    background: rgba(0, 0, 0, .5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
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

  .signupbtn {
    width: 100%;
    padding: 10px;
    background: #40495800;
    color: white;
    border: none;
    border-radius: 5px !important;
    cursor: pointer;
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


  .signupbtn:hover {

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
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }

  .login-box .user-box input:focus~label,
  .login-box .user-box input:valid~label {
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

    50%,
    100% {
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

    50%,
    100% {
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

    50%,
    100% {
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

    50%,
    100% {
      bottom: 100%;
    }
  }

  a {
    color: white;
    text-decoration: none;
  }
</style>

<div class="login-box">
  <h2>Create</h2>
  <form action="#" method="POST" style="margin-top: -13%;" enctype="multipart/form-data" autocomplete="off">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="text" name="firstname" required="">
      <label>First Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="lastname" required="">
      <label>Last Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Email adress</label>
    </div>

    <div class="user-box">
      <input type="text" name="mobile_number" required="">
      <label>Mobile Number</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <!-- <div class="user-box">
    <a href="#">
      Forget Password
    </a>
    </div> -->

    <!-- <div class="form-group form-login"> -->
    <button type="submit" class="signupbtn">Sign Up</button>

    <!-- <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Log in
    </a>-->
  </form>
  <p>Already user? Please
    <a href="#">
      Login
    </a>
  </p>
  <!-- </div> -->

</div>