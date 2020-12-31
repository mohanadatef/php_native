<?php
session_start();
if (isset($_SESSION['start'])) {
    include "../../database/Connect.php";
    include "../../controller/About_us.php";
    $about_us = new About_us();
    $about_us1 = $about_us->index();
    echo '
    <table>
    <thead>
    
    <th>id</th>
    <th>title</th>
    <th>description</th>
    <th>image</th>
    
    </thead>
   <tbody>';
    foreach ($about_us1 as $about_us11) {
        echo '<tr> <td>' . $about_us11['id'] . '
            </td>
            <td>' . $about_us11['title'] . '
            </td>
            <td>' . $about_us11['description'] . '
            </td>
             <td>' . $about_us11['image'] . '
            </tr>';
    }
    echo '</tbody>
           </table>';
    echo '<br><br><a href="../../view/about_us/store">create</a>';
    echo '<br><br><a href="../../index">home</a>';
    echo '<br><br><a href="../../view/auth/login">logout</a>';
} else {
    header("Location: " . $baseurl . "view/auth/login");
}