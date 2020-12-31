<?php
include "../../database/connect.php";
include "../../controller/auth.php";
$auth = new auth();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        echo $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];


        $login = $auth->login($email);
        if ($login != null) {
            session_start();
            $_SESSION['start'] = 'start';
            header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        } else {
            echo "this email not found";
        }
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_start();
    if (isset($_SESSION['start'])) {
        $login = $auth->logout();
    }
}
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

    email : <input name="email" type="text" value="<?php $email; ?>">
    <br>
    <input type="submit" name="submit" value="submit">
</form>