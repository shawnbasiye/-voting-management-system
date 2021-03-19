<?php
//  Registration form 
// containes the following controls:
// - first_name
// - last_name
// - email
// - password
// - reg_no
// - confirm_password

require_once './connect.php';

if (isset($_POST['reg_user'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $reg_no = $_POST['reg_no'];
    $confirm_password = $_POST['confirm_password'];

    if ( $confirm_password  != $password ) {
        $_SESSION['validation_errors']['password_mismatch'] = "Password Do not match";
        header("location: ../registration.php ");
    }
    
    $password = password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users`(`Reg_No`, `First_name`, `Last_name`, `Email`, `Password` ) VALUES (?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1,$reg_no);
    $stmt->bindParam(2,$first_name);
    $stmt->bindParam(3,$last_name);
    $stmt->bindParam(4,$email);
    $stmt->bindParam(5,$password);
    try {
        $stmt->execute();
        echo "Registration successful";
        $db = null;
    } catch (PDOException $e) {
        $_SESSION['validation_errors']['technical'] = $e->getMessage();
        echo $e->getMessage();

    } 

}

else {
    header("location: ../registration.php ");
}

?>