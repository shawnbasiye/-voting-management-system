<?php
  require_once './includes/guestheader.php';
?>
<!-- Login form 
   containes the following controls:
   - reg_no
   -password
 -->

<div class="container" >
      <div class="row">
        <div class="col-sm-4 m-auto border p-2 shadow mt-3">
           <h2 class="text-center">Login</h2>
         
   <form action="./controllers/login.php" method="post">
       <div class="mb-2">
           <label for= "reg_on">Reg_No:</label>
           <Input type="text" class="form-control"  name="reg_no" id="reg_no" required>
       </div>

      <div class="mb-2">
         <label for= "password">Password:</label>
         <Input type="password" class="form-control"  name="password" id="password" required>
      </div>
   </form>
   <input type="Submit" class="btn btn-primary" name="Login" value="Submit" />
   <p>Not a User?<a href="registration.php"><b>Register Here</b></a></p>
   </div>

<?php 

require_once './includes/guestfooter.php';

?>