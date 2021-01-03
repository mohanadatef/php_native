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
            $about_us->update($_POST, $_GET['id']);
            header("Location: " . $GLOBALS['baseurl'] . "index");
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        $about_us1 = $about_us->edit($_GET['id']);
        foreach ($about_us1 as $about_us11) {
            $about_us1 = $about_us11;
        }
    }
    ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        title : <input name="title" type="text" value="<?php print_r($about_us1['title']); ?>">
        <br>
        description : <input name="description" type="text" value="<?php print_r($about_us1['description']); ?>">
        <br>
        image : <input name="image" type="text" value="<?php print_r($about_us1['image']); ?>">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br><br><a href="../../index">home</a>
    <br><br><a href="../../view/auth/logout">logout</a>
    <?php
} else {
    header("Location: " . $baseurl . "view/auth/login");
}