<?php
if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $Email = $_POST["Email"];
    $comment = $_POST["comment"];

    if (!empty($fullname) && !empty($Email) && !empty($comment)) {
        $link = mysqli_connect("localhost", "root", "", "massage");
        if ($link == false) {
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO users(fullname, Email, comment) VALUES('$fullname', '$Email', '$comment')";
        if (mysqli_query($link, $sql)) {
            echo "Record inserted successfully";
        } else {
            echo "Something went wrong";
        }
    } else {
        echo "Please provide all information.";
    }
}
?>
