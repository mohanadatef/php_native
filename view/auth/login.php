<?php
include "../../database/Connect.php";
include "../../controller/Auth.php";
$auth =new  Auth();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        echo  "Email is required";
    } else {
       echo $auth->login($_POST);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_start();
    if (isset($_SESSION['start'])) {
        header("Location: " . $baseurl );
    }
}
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    email : <input name="email" type="email" >
    <br>
    <input type="submit" name="submit" value="submit">
</form>