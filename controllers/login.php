<?php 
//  Login form 
// containes the following controls:
// - reg_no
// - password


require_once './connect.php';

    if(isset($_POST['submit'])) {
        try{
            $reg_no = $_POST['reg_no'];
            $password = $_POST['password'];

            // execute query
            $STH = $DBH->prepare("SELECT * FROM users WHERE reg_no=?");
            $data = array($reg_no);
            $STH->execute($data);

            //check if reg_no exists
            $rows_affected = $STH->rowCount();
            if ($rows_affected == 1){
                $row = $STH->fetch();
                $pass = $row['password'];

                //Check if password is correct
                if(password_verify($password,$pass))
                {
                    $_SESSION['success'] = "Login Successfull";
                    $_SESSION['user'] = $row['id'];

                    //check if the logged in user is_voter
                    $row['is_staff'] == 1?
                    header("location: dashboard.php"):header("location: index.php");                
                }
                else 
                $_SESSION['error'] = "Incorrect Password";
            }
            else 
            $_SESSION['error'] = "reg_no does not exist";            
        }

        catch(PDOException $e){
            $_SESSION['error'] = "I'm afraid I can't Log you in at the moment.";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND); # log errors to afile
        }
    }

    else {
        header("location: ../login.php ");
    }
?>
 