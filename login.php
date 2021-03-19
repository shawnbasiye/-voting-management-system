<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
   <div class="container" >
   <div class="header">
   <h2>Login</h2>
   </div>
   <form action="Registartion.php" method="post">

<div>
<label for= "Reg_No">Reg_No:</label>
<Input type="text" name="Reg_No"required>
</div>

<div>
<label for= "Password">Password:</label>
<Input type="text" name="Password"required>
</div>


   </form>
   <button type="Submit" name = "Login_User">Login</button>
   <p>Not a User?<a href="registration.php"><b>Register Here</b></a></p>
   </div>
</body> 
</html>