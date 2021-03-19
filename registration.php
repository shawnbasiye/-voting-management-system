<?php
  require_once './includes/guestheader.php';
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
   <div class="row">
      <div class="col-sm-6 m-auto border p-2 shadow mt-3">
         <h2 class="text-center">Register</h2>
         <form action="./controllers/register.php" method="post">
            <div class="mb-3">
               <label for="first_name">First name:</label>
               <Input type="text" class="form-control" name="first_name" id="first_name"  required>
            </div>

            <div class="mb-3">
               <label for="last_name">Last name:</label>
               <Input type="text" class="form-control"  name="last_name" id="last_name" required>
            </div>

            <div class="mb-3">
               <label for="email">Email:</label>
               <Input type="email" class="form-control"  name="email"required>
            </div>

            <div class="mb-3">
                  <label for="reg_no">Reg_No:</label>
                  <Input type="text" class="form-control"  name="reg_no" id="reg_no" required>
            </div>

            <div class="mb-3">
                  <label for="password">Password:</label>
                  <Input type="password" class="form-control"  name="password" id="password" required>
            </div>

            <div class="mb-3">
                  <label for="confirm_password">Confirm Password:</label>
                  <Input type="password" name="confirm_password" class="form-control"  id="confirm_password" required>
            </div>

            <input type="Submit" class="btn btn-primary" name="reg_user" value="Submit" />
         </form>
         <p>Already a User?<a href="login.php"><b>Login</b></a></p>
      </div>
   </div>
</div>
 
<?php 
   require_once './includes/guestfooter.php';
?>