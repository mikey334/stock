<?php
require_once("includes/initialize.php");

if (logged_in()) {
	header('Location: home_Vhf.php');
	exit;
	//echo '<script type="text/javascript">window.location = "home.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> F.D.R.E Minstry of Defence Communction & Information Main Department</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.png" >
</head>
<body>
    <?php
    if (isset($_POST['btnlogin'])) {
        //form has been submitted1
    
        $User_Name = trim($_POST['User_Name']);
        $upass = trim($_POST['pass']);
    
        $h_upass = sha1($upass);
        //check if the UserName and password is equal to nothing or null then it will show message box
        if ($User_Name == '') {
    ?>
    <script type="text/javascript">
    alert("In correct User_Name.");
    </script>
    <?php
        } elseif ($upass == '') {
    ?>
    <script type="text/javascript">
    alert("Incorrect password..");
    </script>
    <?php
        } else {
            //it creates a new objects of member
            $member = new member();
            //make use of the static function, and we passed to parameters
            $res = $member::AuthenticateMember($User_Name, $h_upass);
            //then it check if the function return to true
            if($res == true){
                ?>
    <script type="text/javascript">
    //then it will be redirected to home.php
    window.location = "Home_VHF.php";
    </script>
    <?php
            } else {
    ?>
    <script type="text/javascript">
    alert("I can't find your account try  sign up or contact your administer..");
    window.location = "index.php";
    </script>
    <?php
            }
        }
    } else {
    
        $User_Name = "";
        $upass = "";
    
    }
    
    ?><center>
    <div id="adimn" class="login-card">
        <div class="login-titel">VHF login Page</div>
        <hr>
    <form action="login_VHF.php" method="post">

        <input type="text" name="User_Name" id="" class="form_control" pattern="@+[A-Za-z]{5,}" title="UserName's Start With @" required placeholder="User Name"><br><br>
        <input type="password" name="pass" id="" class="form_control" required placeholder="Password"><br>
       <br>
      <div class="login-body-text">Forget password ?</div> 
      <br>
      <button type="submit" name="btnlogin"  class="btn_login">SingIn</button>

    </form>
    <br>
    <div class="login-body-text"> Don't Have Account ?<a href="Singup.php">Sing up</a></div>
    <button class='btnsend' onclick="loginpop()">Other Department Login</button>

</center>

<div class="loginoption">
    <div class="list">
        <div class="a"><a href="Transit.php"> <img src="img/job-transition.png" width="45" alt=""><br> Transit Department</a>     </div>  
 <div class="a"><a href="login_Stock.php"> <img src="img/warehouse.png" width="45" alt=""> <br> Stock Department</a></div>
    <div class="a"><a href="login_spaer.php"><img src="img/spare-parts.png" width="45" alt=""> <br>  Spaer Department</a> </div>
        <div class="a"><a href="login_Electronics.php"><img src="img/plug.png" width="45" alt=""> <br>Electronics Department</a> </div>
            <div class="a"><a href="login_VHF.php"> <img src="img/antenna.png" width="45" alt=""> <br> VHF Department</a></div>
                <div class="a"><a href="login_power.php"> <img src="img/power-plant.png" width="45" alt=""> <br> Power Department</a></div>
                    <div class="a"><a href="login_HF.php"> <img src="img/wrench.png" width="45" alt=""> <br> HF Department </a></div>
</div>



    </div>
    <style>
      
    
    </style>
<script src="js/js.js"></script><script>
    var login =document.querySelector('.loginoption')
    var list =document.querySelector('.list')
const loginpop=()=>{
   login.classList.toggle('active')
}
list.onclick =function(){
    login.classList.remove('active')
}

</script>
</body>
</html>