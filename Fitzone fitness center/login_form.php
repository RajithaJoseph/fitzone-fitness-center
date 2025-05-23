<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>


    <link rel="stylesheet" href="css/form.css">

</head>
<?php


session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_management";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function logError($message)
{
    error_log(date("Y-m-d H:i:s") . " - " . $message . "\n", 3, "login_errors.log");
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $user_password = $_POST['password'];


    $query1 = "SELECT * FROM users WHERE email = '$email'";
    $result1 = $conn->query($query1);



    $query2 = "SELECT * FROM staff WHERE email = '$email'";
    $result2 = $conn->query($query2);


    $isAuthenticated = false;

    if ($result1->num_rows > 0) {
        $user = $result1->fetch_assoc();
        if (password_verify($user_password, $user['password'])) {
            $isAuthenticated = true;
            $customer_name = urlencode($user['name']);
            $customer_email = urlencode($user['email']);
            
            header("Location: customer_dashboard.php?name=$customer_name&email=$customer_email");
            
            exit();
        }
    } elseif ($result2->num_rows > 0) {
        $staff = $result2->fetch_assoc();
        if (password_verify($user_password, $staff['password'])) {
            $isAuthenticated = true;
            if ($staff['role'] === 'Admin') {
                $admin_name = urlencode($staff['name']);
                header("Location: admin_dashboard.php?name=" . $admin_name);
                
                exit();
            } else if ($staff['role'] === 'Staff') {
                $staff_name = urlencode($staff['name']);
                header("Location: staff_dashboard.php?name=" . $staff_name);
               
                exit();
            }
        }
    }

    if (!$isAuthenticated) {
        $_SESSION['login_attempts']++;
        logError("Failed login attempt for user: $email");
        header("Location: login_form.php");
        exit();
    }
}


$conn->close();

?>


<body>

    <div class="form-container">

        <form action="" method="post">
            <h3>login now</h3>
            <?php
            if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif;
            ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="register_form.php">register now</a></p>
            <a href="index.html">Home</a>
        </form>

    </div>

</body>

</html>