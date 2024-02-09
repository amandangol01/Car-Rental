<?php
include("connection.php");
if(isset($_POST['submit'])){
    $user=mysqli_real_escape_string($con,$_POST['uname']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $pwd=sha1($_POST['pass']);
    $rpwd=sha1($_POST['repass']);

    $query="select * from userinfo where Username='$user' and Password='$pwd'";

    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $error[]='user already exist!';
    }
    elseif($pwd!=$rpwd){
            $error[]='password not matched!';   
        }
    else{
        $insert="insert into userinfo(Username,Phone,Email,Password,user_type) values('$user','$phone','$email','$pwd','$ut')";
        mysqli_query($con,$insert);
        header('location:login-form.php');
    }
};
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Signup page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="signup-form">
        <form action="">
            <h3>User Signup</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            };
            ?>
            <input type="text" name="uname" required placeholder="Username" class="box"><br>
            <input type="email" name="email" required placeholder="Email" class="box"><br>
            <input type="phone" name="phone" required placeholder="Phone Number" class="box"><br>
            <input type="password" name="pass" required placeholder="Password" class="box"><br>
            <input type="password" name="repass" required placeholder="Retype Password" class="box"><br> 
            <input type="submit" name="submit" value="Submit" class="btn"><br>
        </form>
    </div>
</body>
</html>tml></html>l