<?php
include "../../database/connect.php";
include "../../controller/auth.php";
$auth = new auth();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        echo $emailErr = "Email is required";
    } else {
        echo $auth->login($_POST["email"]);
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