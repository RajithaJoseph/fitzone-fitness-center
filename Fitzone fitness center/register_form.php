<?php

@include 'config.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $membershipType = mysqli_real_escape_string($conn, $_POST['membership']);

    $user_type = "user";

    $select1 = " SELECT * FROM users WHERE email = '$email' ";
    $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select1);

    if (mysqli_num_rows($result) > 0) {

        $exist[] = 'user already exist!';
    } else {
        $insert = "INSERT INTO users(name, dob, gender, email, address, password, usertype,membership) VALUES('$name','$dob','$gender','$email','$address','$pass','$user_type','$membershipType')";
        mysqli_query($conn, $insert);

        $success[] = 'Registration successful! Please log in.';
        //   echo '"<h3>Registration successfull!!!!</h3>';
        sleep(1);
        header('location:login_form.php');
    }
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>


    <link rel="stylesheet" href="css/form.css">

</head>

<body>

    <div class="form-container">

        <form action="" method="post">
            <h3>register now</h3>
            <?php
            if (isset($error)) {
                foreach ($errors as $error[]) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>

            <input type="text" name="name" required placeholder="enter your name">
            <input type="date" name="dob" required placeholder="enter your date of birth">
            <input type="text" name="gender" required placeholder="enter your gender">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="text" name="address" required placeholder="enter your address">
            <select name="membership">
                <option value="basic">Basic</option>
                <option value="premium">Premium</option>
                <option value="vip">VIP</option>

            </select>

            <input type="password" name="password" required placeholder="enter your password">


            <input type="submit" name="submit" value="register now" class="form-btn">
            <?php
            if (isset($exist)) {
              
                    echo 'user already exist!';
                
            };
             if (isset($exist)) {
              
                    echo 'dfdgdfgdfg';
                
            };
            ?>
            
           
            
            
            <p>already have an account? <a href="login_form.php">login now</a></p>

            <button class="btn" onclick="window.location.href='index.html'">Home</button>
         
        </form>

    </div>

</body>

</html>