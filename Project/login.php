<?php
include('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select * from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if($pass == $db_password)
                {
                    header("location:index1.php");
                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }
            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>

body{
    width: 90%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 50vh;
}

.form{
    width: 300px;
    height: 350px;
    background: white;
    position: absolute;
    top:200px;
    left:400px;
    border:1px solid purple;
    border-radius: 10px;
    padding: 20px;
    

}

.form h2{
    width:90%;
    font-family: sans-serif;
    text-align: center;
    color: Purple;
    font-size: 22px;
    background-color: white;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;

}

 .h{
    width: 100%;
    height: 50px;
    background: transparent;
    border: 1px solid purple;
    border-radius:10px;
    color: black;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 20px;
    font-family: sans-serif;
}
.h:focus{
    outline: none;
}

::placeholder{
    color:black;
    font-family: Arial;
    
}

.btnn{
    width: 300px;
    height: 40px;   
    
    background: purple;
    border:none;
    margin-top: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
  
}

.btnn:hover{
    background: blueviolet;
    color:black;
}

.btnn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
    color: #bbb;
}

.form .link a{
    text-decoration: none;
    color:purple;
}
.back{
    width: 150px;
    height: 40px;   
    background: purple;
    border:none;
    margin-top: 0px;
    margin-left:1000px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
}

.back a{
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}
</style>
</head>
<body>

<button class="back"><a href="index.php">Go To Home</a></button>

    
    <form class="form" method="post">
        <h2>User Login</h2>
        <input type="email" name="email" placeholder="Enter email" class="h">
        <input type="password" name="pass" placeholder="Enter password" class="h">
        <input type="submit" class="btnn" value="login" name="login" >
        <p class="link">Don't have an account?<br>
                <a href="register.php">Sign up</a> here</a></p>
    </form>
</body>
</html>