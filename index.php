<?php
session_start();
// error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['save'])) 
  {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID FROM tbladmin WHERE AdminUserName=:username and Password=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['sturecmsstuid']=$result->AdminUserName;
$_SESSION['sturecmsuid']=$result->ID;
}

 
$_SESSION['save']=$_POST['username'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Miltary Command Control System || Home</title>
    <link href="css/fiki.css" rel="stylesheet" type="text/css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>

    <div class="wrapper">
    <img src="images/logo.png" alt="Miltary CCS Logo" class="logo">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
       
            <h2 class="animation" style="--i:0; --j:20;">Login</h2>
            <form class="pt-3" id="login" method="post" name="login">
                <div class="input-box animation" style="--i:1; --j:21;">
                    <input type="text" required name="username" >
                    <label >Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:22;">
                    <input type="password"   name="password" required="true" >
                    <label >Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <input type="checkbox" name="remember" id="remember">
  <label for="remember" style="color:white;">Remember Me</label>
                <button type="submit" class="btn animation" style="--i:3; --j:23;" name="save">Login
                </button>
                <div class="logreg-link animation" style="--i:4; --j:24;">
                    <p>Commander please login here! <a href="#" class="login-link">LogIn</a></p>
                </div>
            </form>
        </div>
        
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20;">Miltary CCS</h2>
            <p class="animation" style="--i:1; --j:21;">Welcome Back Admin to 
                Miltary Command control system!.
            </p>
        </div>
        <div class="form-box register">
        <img src="images/logo.png" alt="Miltary CCS Logo" class="logo1 animation">
            <h2 class="animation" style="--i:17;--j:0">LogIn</h2>
            <form class="pt-3" id="login" method="post" name="login">
                <div class="input-box animation" style="--i:18;--j:1">
                    <input type="text" required name="stuid" >
                    <label >Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19;--j:2">
                    <input type="password"  name="password" required="true" >
                    <label >Password</label>
                    <i class='bx bxs-lock-alt'></i>
                    
                </div>
                <button type="submit" class="btn animation" style="--i:20;--j:3" name="submit" type="submit">Login
                </button>
                <div class="logreg-link animation" style="--i:21;--j:4">
                    <p>Admin please logIn here! <a href="#" class="register-link">LogIn</a></p>
                </div>
            </form>
        </div>
        <div class="info-text register">
        
            <h2 class="animation" style="--i:17;--j:0">Miltary CCS</h2>
            <p class="animation" style="--i:18;--j:1">Welcome Back Commander to 
            Miltary Command control system!.</p>

        </div>
    </div>
    <footer>  <p id="copyright"></p></footer>

    <script src="js/fiki.js">
        const year = new Date().getFullYear();
        document.getElementById('copyright').InnerHTML= "&copy" + year + "Miltary Css. Alright revserved."
    </script>

</body>
</html>