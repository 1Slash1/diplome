<?php

    require_once "admin/includes/connect.php";

    $name = $_POST["name"];
    $title = $_POST["title"];
    $review = $_POST["review"];

    $con->query("INSERT INTO `reviews` (`id`, `name`, `title`, `review`) VALUES (NULL, '$name', '$title', '$review')");
    
    header('Location: index.php');

?>