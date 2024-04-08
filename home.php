<?php
// Check if the request is POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data sent from the form
    $name = $_POST["name"];
    $aadharId = $_POST["aadharId"];
    $regNo = $_POST["regNo"];

    // Store the data in a file (you can modify this to store in a database)
    $data = "Name: $name, Aadhar ID: $aadharId, Registration No.: $regNo\n";
    file_put_contents("registered_users.txt", $data, FILE_APPEND);

    // Redirect to the page with bike types
    header("Location: index.html");
    exit();
}
?>
