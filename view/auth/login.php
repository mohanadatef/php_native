<?php
include "../../database/connect.php";
include "../../controller/auth.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        echo $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];

        $auth = new auth();

        $login = $auth->login($email);
        if($login != null)
        {
            session_start();
            $_SESSION['start']='start';
            header("Location: http://localhost:8080/roshetta/");
        }
        else
        {
            echo "this email not found";
        }
    }
}
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

    email : <input name="email" type="text" value="<?php $email; ?>">
    <br>
    <input type="submit" name="submit" value="submit">
</form>