<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Staff Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script>
        
        function showSection(sectionId) {
            
            const sections = document.querySelectorAll('.feature-section');
            sections.forEach(section => {
                section.style.display = 'none';
            });

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';

            // Highlight the active sidebar item
            const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
            sidebarLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`a[data-section="${sectionId}"]`).classList.add('active');
        }

        // Show the first section by default on load
        window.onload = function() {
            showSection('viewCustomers');

        };

        function showPopup() {
            document.getElementById('popupOverlay').style.display = 'block';
            document.getElementById('popupBox').style.display = 'block';
        }
        // Function to close the popup
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            window.location.href = 'staff_dashboard.php';
        }

        
    </script>
    <style>
        :root {
            --primary-color: #111317;
            --primary-color-light: #1f2125;
            --primary-color-extra-light: #35373b;
            --secondary-color: #a044ff;
            --secondary-color-dark: #6a3093;
            --text-light: #d1d5db;
            --white: #ffffff;
            --max-width: 1200px;
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            overflow-y: auto;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background-color: #575757;
            color: var(--secondary-color);
            /* Highlight color */
        }

        .main-content {
            margin-left: 300px;
            /* Offset for sidebar */
            padding: 20px;
            flex-grow: 1;
            transition: margin-left 0.3s;
        }

        h1 {
            text-align: center;
            margin-top: 10px;
            font-size: 2em;
        }

        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .feature-section {
            display: none;
            /* Hide sections by default */
            animation: fadeIn 0.5s ease-in-out;

        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        input,
        button {
            box-sizing: border-box;
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            margin-right: 10px;
        }

        button {
            background-color: var(--secondary-color);
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button.btnlogout {

            padding: 1rem 1rem;
            outline: none;
            border: none;
            font-size: 1rem;
            color: var(--white);
            background-color: var(--secondary-color);
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            position: absolute;
            width: 100px;
            height: 50px;
            left: 10px;
            bottom: 33px;
            text-align: center;



        }


        button:hover {
            background-color: var(--secondary-color-dark);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: var(--secondary-color);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td {
            word-wrap: break-word;
            max-width: 250px;
        }
    
        /* Overlay styling */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 999;
        }

        /* Pop-up styling */
        .popup-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(to right, #6a3093, #a044ff);

            color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            font-family: 'Arial', sans-serif;
            z-index: 1000;
            animation: fadeIn 0.5s ease;
        }



        /* Loading spinner */
        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #fff;
            border-top: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            margin: 20px auto;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
        

        /* Overlay styles */
        .overlay1 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.3s ease-in-out;
        }

        /* Popup form styles */
        .popup-form {
            background: linear-gradient(135deg, #ffffff, #f2f2f2);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 500px;
            text-align: center;
            transition: transform 0.3s ease-out;
            opacity: 0;
            animation: popupAnim 0.4s forwards;
        }

        @keyframes popupAnim {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .popup-form textarea {
            width: 95%;
            height: 120px;
            /* margin: 15px 0px; */
            margin-right: 15px;
            margin-bottom: 10px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            font-family: 'Arial', sans-serif;
            resize: none;
            transition: border-color 0.3s;
        }

        .popup-form textarea:focus {
            border-color: #007BFF;
            outline: none;
        }

        .popup-form button {
            background: linear-gradient(135deg, #007BFF, #0056b3);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s ease-in-out, transform 0.2s ease-out;
        }

        .popup-form button:hover {
            background: linear-gradient(135deg, #0056b3, #003366);
            transform: scale(1.05);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff4d4d;
            color: white;
            border: none;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background 0.3s ease-in-out, transform 0.2s;
        }

        .close-btn:hover {
            background: #ff1a1a;
            transform: scale(1.1);
        }


        
        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 210px;
            }

            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>Staff Dashboard</h2>
        <ul>
            <li><a href="#" data-section="viewCustomers" onclick="showSection('viewCustomers')">View Customer</a></li>
            <li><a href="#" data-section="updateCustomer" onclick="showSection('updateCustomer')">Update Customer</a></li>
            <li><a href="#" data-section="viewQueries" onclick="showSection('viewQueries')">View Messages</a></li>
            <li><a href="#" data-section="viewAppointments" onclick="showSection('viewAppointments')">View Appointments</a></li>
        </ul>

        <!-- Logout form -->
        <form id="logoutForm" action="logout.php" method="POST" onsubmit="showPopup()">
            <button type="submit" class="btnlogout">Logout</button>
        </form>



    </div>
    
    <div id="popupOverlay" class="popup-overlay"></div>

    <!-- Pop-up box -->
    <div id="popupBox" class="popup-box">
        <div class="spinner"></div>
        <p>Logging out, please wait...</p>
    </div>


    <div class="main-content">
        <h1>Gym Staff Dashboard</h1>
        <div class="container">

            <!-- View Customers Section -->
            <div id="viewCustomers" class="feature-section">
                <h2>Customer List</h2>
                <?php
                @include
                    'config.php';  
                if (isset($_POST['delete_id'])) {
                    $delete_id = $_POST['delete_id'];
                    $delete_query = "DELETE FROM users WHERE id = ?";
                    $stmt = $conn->prepare($delete_query);
                    $stmt->bind_param('i', $delete_id);
                    $stmt->execute();
                
                    echo "<p>Customer deleted successfully!</p>";
                }

                $query = "SELECT * FROM users";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    echo "<table><tr><th>Id</th><th>Name</th><th>DOB</th><th>Gender</th><th>Address</th><th>Email</th><th>Membership</th><th>Action</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . htmlspecialchars($row['id']) . "</td>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['dob']) . "</td>
                    <td>" . htmlspecialchars($row['gender']) . "</td>
                    <td>" . htmlspecialchars($row['address']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['membership']) . "</td>
                    <td>
                        <form method='POST' action=''>
                            <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
                            <button type='submit' onclick='return confirm(\"Are you sure you want to delete this customer?\")'>Delete</button>
                        </form>
                    </td>
                  </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No customers found.</p>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </div>






            <!-- Update Customer Section -->
            <div id="updateCustomer" class="feature-section" style="display: none;">
                <h2>Update Customer Information</h2>
                <form action="" method="post">
                    <input type="text" name="customer_id_update" placeholder="Customer ID" required>
                    <input type="text" name="customer_name_update" placeholder="New Customer Name">
                    <input type="text" name="customer_dob_update" placeholder="New Customer Date of Birth">
                    <input type="text" name="customer_gender_update" placeholder="New Customer gender">
                    <input type="text" name="customer_address_update" placeholder="New Customer address">
                    <input type="email" name="customer_email_update" placeholder="New Customer Email">
                    <input type="text" name="customer_membership_update" placeholder="New Customer membership">
                    <button type="submit" name="update_customer">Update Customer</button>
                </form>
                <?php
                include 'config.php';
                if (isset($_POST['update_customer'])) {
                    
                    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id_update']);
                    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name_update']);
                    $customer_dob = mysqli_real_escape_string($conn, $_POST['customer_dob_update']);
                    $customer_gender = mysqli_real_escape_string($conn, $_POST['customer_gender_update']);
                    $customer_address = mysqli_real_escape_string($conn, $_POST['customer_address_update']);
                    $customer_email = mysqli_real_escape_string($conn, $_POST['customer_email_update']);
                    $customer_membership = mysqli_real_escape_string($conn, $_POST['customer_membership_update']);

                    if (!empty($customer_id)) {
                        $update_query = "UPDATE users SET ";
                        $update_fields = [];

                        if (!empty($customer_name)) {
                            $update_fields[] = "name = '$customer_name'";
                        }
                        if (!empty($customer_dob)) {
                            $update_fields[] = "dob = '$customer_dob'";
                        }
                        if (!empty($customer_gender)) {
                            $update_fields[] = "gender = '$customer_gender'";
                        }
                        if (!empty($customer_address)) {
                            $update_fields[] = "address = '$customer_address'";
                        }
                        if (!empty($customer_email)) {
                            $update_fields[] = "email = '$customer_email'";
                        }
                        if (!empty($customer_membership)) {
                            $update_fields[] = "membership = '$customer_membership'";
                        }
                    
                        if (count($update_fields) > 0) {
                        
                            $update_query .= implode(', ', $update_fields) . " WHERE id = '$customer_id'";

                            if (mysqli_query($conn, $update_query)) {
                                echo "<center>Customer information updated successfully.</center>";
                            } else {
                                echo "Error updating customer information: " . mysqli_error($conn);
                            }
                        } else {
                            echo "<center>No fields to update.</center>";
                        }
                    } else {
                        echo "Customer ID is required.";
                    }
                }
                ?>

            </div>

            <!-- View Customer messages -->
            <div id="viewQueries" class="feature-section">
                <h2>Messages</h2>
                <?php
                @include 'config.php';


                $query = "SELECT id, name,email,message FROM queries";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    echo "<table><tr><th>Name</th><th>Email</th><th>Message</th><th>Action</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['message']) . "</td>
                    <td>
                        <form action='respond.php' method='post'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='hidden' name='name' value='" . htmlspecialchars($row['name']) . "'>
                            <input type='hidden' name='email' value='" . htmlspecialchars($row['email']) . "'>
                            <button type='submit' >Respond</button>
                        </form>
                    </td>
                  </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No customers found.</p>";
                }


                $conn->close();
                ?>



            </div>
            

            <div id="viewAppointments" class="feature-section" style="display: none;">
                <h2>My Appointments</h2>
                <?php
                @include 'config.php';
                

                // Handle deletion if a POST request with 'delete_id' is detected
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
                    $delete_id = (int)$_POST['delete_id']; // Sanitize the ID input
                    $delete_query = "DELETE FROM appointments WHERE id = ?";
                    $stmt = $conn->prepare($delete_query);
                    $stmt->bind_param("i", $delete_id);

                    if ($stmt->execute()) {
                        echo "<p>Staff account deleted successfully.</p>";
                    } else {
                        echo "<p>Error deleting staff account.</p>";
                    }

                    $stmt->close();
                }

                // Fetch and display staff accounts
                $query = "SELECT id,name, email, class ,date,time FROM appointments"; // Include the id column
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>Name</th><th>Email</th><th>Class</th><th>Date</th><th>Time</th><th>Actions</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['class']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['date']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['time']) . "</td>";
                        echo "<td>";
                        // Form for the delete button
                        echo "<form method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='delete_id' value='" . htmlspecialchars($row['id']) . "'>";
                        echo "<button type='submit' onclick=\"return confirm('Are you sure you want to delete this appointment?');\">Delete</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No Appoitments.</p>";
                }

                ?>
            </div>

        </div>
    </div>




</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['email'];
    echo $name;
}

// Adding an admin
if (isset($_POST['add_admin'])) {
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = password_hash($_POST['admin_password'], PASSWORD_DEFAULT); // Hash the password for security

    // Check if email already exists
    $checkQuery = "SELECT * FROM admin_accounts WHERE email = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $admin_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<p>Email already exists. Please use a different email.</p>";
    } else {
        // Insert the new admin
        $insertQuery = "INSERT INTO admin_accounts (name, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sss", $admin_name, $admin_email, $admin_password);

        if ($stmt->execute()) {
            echo "<p>Admin account added successfully.</p>";
        } else {
            echo "<p>Error adding admin account: " . $conn->error . "</p>";
        }
    }

    $stmt->close();
}

// Removing an admin
if (isset($_POST['remove_admin'])) {
    $admin_email_remove = $_POST['admin_email_remove'];

    // Check if the admin exists
    $checkQuery = "SELECT * FROM admin_accounts WHERE email = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $admin_email_remove);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Delete the admin
        $deleteQuery = "DELETE FROM admin_accounts WHERE email = ?";
        $stmt = $conn->prepare($deleteQuery);
        $stmt->bind_param("s", $admin_email_remove);

        if ($stmt->execute()) {
            echo "<p>Admin account removed successfully.</p>";
        } else {
            echo "<p>Error removing admin account: " . $conn->error . "</p>";
        }
    } else {
        echo "<p>No admin account found with that email.</p>";
    }

    $stmt->close();
}


?>