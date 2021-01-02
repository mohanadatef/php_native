<?php
session_start();
if (isset($_SESSION['start'])) {
    include "../../database/Connect.php";
    include "../../controller/About_us.php";
    $about_us = new About_us();
    $erorr = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["title"])) {
            $erorr['title'] = "title is required";
        }
        if (empty($_POST["description"])) {
            $erorr['description'] = "description is required";
        }
        if (empty($_POST["image"])) {
            $erorr['image'] = "image is required";
        }
        if ($erorr != null) {
            foreach ($erorr as $e) {
                echo '<br>' . $e;
            }
        } else {
            $about_us->store($_POST);
            header("Location: " . $GLOBALS['baseurl'] . "index");
        }
    }
    ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        title : <input name="title" type="text">
        <br>
        description : <input name="description" type="text">
        <br>
        image : <input name="image" type="text">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
   <br><br><a href="../../index">home</a>
   <br><br><a href="../../view/auth/login">logout</a>
    <?php
} else {
    header("Location: " . $baseurl . "view/auth/login");
}