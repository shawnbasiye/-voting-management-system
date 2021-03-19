<?php
  require_once './includes/header.php';
?>
<!-- Registration form 
   containes the following controls:
   - first_name
   - last_name
   - email
   - password
   - reg_no
   - confirm_passwordd
 -->


<div class="container" >
   <div class="header">
      <h2>Register</h2>
   </div>
   <form action="Registartion.php" method="post">
      <div>
         <label for= "First_name">First_name:</label>
         <Input type="text" name="First_name"required>
      </div>

      <div>
         <label for= "Last_name">Second_name:</label>
         <Input type="text" name="Last_name"required>
      </div>

      <div>
         <label for= "Email">Email:</label>
         <Input type="text" name="Email"required>
      </div>

      <div>
            <label for= "Reg_No">Reg_No:</label>
            <Input type="text" name="Reg_No"required>
      </div>

      <div>
            <label for= "Password">Password:</label>
            <Input type="text" name="Password"required>
      </div>

      <div>
            <label for= "Confirm Password">Confirm Password:</label>
            <Input type="text" name="Confirm Password" required>
      </div>

      <button type="Submit" name="reg_User">Submit</button>
   </form>
   <p>Already a User?<a href="login.php"><b>Login</b></a></p>
</div>
 
<?php 
   require_once './includes/footer.php';
?>