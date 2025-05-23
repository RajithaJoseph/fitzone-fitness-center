<?php
@include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $response = htmlspecialchars($_POST['response']);

    $query = "UPDATE queries SET response='$response' WHERE id='$id'";
    if ($conn->query($query) === TRUE) {
        // echo "<p>Response sent successfully!</p>";
        sleep(1);
        header("location:staff_dashboard.php?popup_closed=true");
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
