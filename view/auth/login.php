<?php
include "../../database/Connect.php";
include "../../controller/Auth.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        echo $emailErr = "Email is required";
    } else {
        echo Auth::login($_POST["email"]);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_start();
    if (isset($_SESSION['start'])) {
        $login = Auth::logout();
    }
}
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    email : <input name="email" type="text" value="<?php $email; ?>">
    <br>
    <input type="submit" name="submit" value="submit">
</form>