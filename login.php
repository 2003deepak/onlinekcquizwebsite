<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online KC Test</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

        <nav>
            <a href="index.php"  target="_blank" class="Navigation" ><b> Home </b></a>
            <a href="signup.php"  target="_blank" class="Navigation"><b> SignUp </b> </a>
            <a href="login.php"  target="_blank" class="Navigation"><b> Login </b></a>
            <a href="contact.php"  target="_blank" class="Navigation"><b> Contact </b></a>
        </nav>
    

        
        <form action="logincheck.php" method="POST" class = "login">
            <img src="images/loginavatar.png" alt="login" height="110px">
            <h1>LOGIN</h1>
            <p id = "username"><b>Username</b></p>
            <input type="text" placeholder = "Enter Your Username" name = "username" > 
            <p id = "password"><b>Password</b></p>
            <input type="password" placeholder = "Enter Your Password" name = "password"> 
            <br>
            <br>
            <input type="submit" value = "Login" name="submit">
            <p>Forgot Password? <a href="forgot.php">Click Here </a></p>
            <p>Not yet registered <a href="signup.php">Register </a></p>
        </form>
       
    
</body>
</html>