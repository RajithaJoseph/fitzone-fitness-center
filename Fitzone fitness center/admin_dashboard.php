<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script>
        
        function showSection(sectionId) {
            
            const sections = document.querySelectorAll('.feature-section');
            sections.forEach(section => {
                section.style.display = 'none';
            });

            
            document.getElementById(sectionId).style.display = 'block';

            
            const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
            sidebarLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`a[data-section="${sectionId}"]`).classList.add('active');
        }

        
        window.onload = function() {
            showSection('addAdmin');
        
        };

        
        function showPopup() {
            document.getElementById('popupOverlay').style.display = 'block';
            document.getElementById('popupBox').style.display = 'block';
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

        p {
            text-align: center;
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

        <h2>Dashboard</h2>
        <ul>
            <li><a href="#" data-section="addAdmin" onclick="showSection('addAdmin')">Add Admin Account</a></li>
            <li><a href="#" data-section="addStaff" onclick="showSection('addStaff')">Add Staff Account</a></li>
            <li><a href="#" data-section="viewStaff" onclick="showSection('viewStaff')">View Staff Accounts</a></li>
            <li><a href="#" data-section="viewAdmin" onclick="showSection('viewAdmin')">View Admin Accounts</a></li>
        </ul>
        <button class="btnlogout" onclick="window.location.href='logout.php'">Logout</button>
        <form id="logoutForm" action="logout.php" method="POST" onsubmit="showPopup()">
            <button type="submit" class="btnlogout">Logout</button>
        </form>
    </div>
    <!-- Overlay for dimming the background -->
    <div id="popupOverlay" class="popup-overlay"></div>

    <!-- Pop-up box -->
    <div id="popupBox" class="popup-box">
        <div class="spinner"></div>
        <p>Logging out, please wait...</p>
    </div>

    <div class="main-content">
        
        <h1>Gym Admin Dashboard</h1>
        <div class="container">


            <!-- Add Admin Form -->
            <div id="addAdmin" class="feature-section">
                <h2>Add Admin Account</h2>
                <form action="#" method="post">
                    <input type="text" name="admin_name" placeholder="Admin Name" required>
                    <input type="email" name="admin_email" placeholder="Admin Email" required>
                    <input type="password" name="admin_password" placeholder="Password" required>
                    <button type="submit" name="add_admin">Add Admin</button>
                </form>
                <?php // Adding an admin
                if (isset($_POST['add_admin'])) {
                    $conn = mysqli_connect('localhost', 'root', '', 'gym_management');
                    $admin_name = $_POST['admin_name'];
                    $admin_email = $_POST['admin_email'];
                    $admin_password = password_hash($_POST['admin_password'], PASSWORD_DEFAULT); // Hash the password for security
                    $role = 'Admin';
                    // Check if email already exists
                    $checkQuery = "SELECT * FROM staff WHERE email = ?";
                    $stmt = $conn->prepare($checkQuery);
                    $stmt->bind_param("s", $admin_email);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        echo "<p>Email already exists. Please use a different email.</p>";
                    } else {
                        // Insert the new admin

                        $insertQuery = "INSERT INTO staff (name, email, password,role) VALUES (?, ?, ?, ?)";
                        $stmt = $conn->prepare($insertQuery);
                        $stmt->bind_param("ssss", $admin_name, $admin_email, $admin_password, $role);

                        if ($stmt->execute()) {
                            echo "<p>Admin account added successfully.</p>";
                        } else {
                            echo "<p>Error adding admin account: " . $conn->error . "</p>";
                        }
                    }

                    $stmt->close();
                    $conn->close();
                } ?>
            </div>


            <!-- Add Staff Form -->
            <div id="addStaff" class="feature-section">
                <h2>Add Staff Account</h2>
                <form action="#addStaff" method="post">
                    <input type="text" name="staff_name" placeholder="Staff Name" required>
                    <input type="email" name="staff_email" placeholder="Staff Email" required>
                    <input type="password" name="staff_password" placeholder="Password" required>
                    <button type="submit" name="add_staff">Add Staff</button>
                </form>
                <?php // Adding an staff
                if (isset($_POST['add_staff'])) {
                    $conn = mysqli_connect('localhost', 'root', '', 'gym_management');
                    $admin_name = $_POST['staff_name'];
                    $admin_email = $_POST['staff_email'];
                    $admin_password = password_hash($_POST['staff_password'], PASSWORD_DEFAULT); // Hash the password for security
                    $role = 'Staff';
                    // Check if email already exists
                    $checkQuery = "SELECT * FROM staff WHERE email = ?";
                    $stmt = $conn->prepare($checkQuery);
                    $stmt->bind_param("s", $admin_email);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        echo "<p>Email already exists. Please use a different email.</p>";
                    } else {
                        // Insert the new admin

                        $insertQuery = "INSERT INTO staff (name, email, password,role) VALUES (?, ?, ?, ?)";
                        $stmt = $conn->prepare($insertQuery);
                        $stmt->bind_param("ssss", $admin_name, $admin_email, $admin_password, $role);

                        if ($stmt->execute()) {
                            echo "<p>Staff account added successfully.</p>";
                        } else {
                            echo "<p>Error adding staff account: " . $conn->error . "</p>";
                        }
                    }

                    $stmt->close();
                    $conn->close();
                }
                ?>
            </div>



            <div id="viewStaff" class="feature-section" style="display: none;">
                <h2>Staff Accounts</h2>
                <?php
                
                @include'config.php';
                

            
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
                    $delete_id = (int)$_POST['delete_id']; 
                    $delete_query = "DELETE FROM staff WHERE id = ?";
                    $stmt = $conn->prepare($delete_query);
                    $stmt->bind_param("i", $delete_id);

                    if ($stmt->execute()) {
                        echo "<p>Staff account deleted successfully.</p>";
                    } else {
                        echo "<p>Error deleting staff account.</p>";
                    }

                    $stmt->close();
                }

                
                $query = "SELECT id, name, email, password FROM staff WHERE role='Staff'"; 
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>Name</th><th>Email</th><th>Action</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>";
                        
                        echo "<form method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='delete_id' value='" . htmlspecialchars($row['id']) . "'>";
                        echo "<button type='submit' onclick=\"return confirm('Are you sure you want to delete this account?');\">Delete</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No staff accounts found.</p>";
                }

                ?>
            </div>

            <div id="viewAdmin" class="feature-section" style="display: none;">
                <h2>Admin Accounts</h2>
                <?php
                @include'config.php';
                

                // Handle deletion if a POST request with 'delete_id' is detected
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
                    $delete_id = (int)$_POST['delete_id']; // Sanitize the ID input
                    $delete_query = "DELETE FROM staff WHERE id = ?";
                    $stmt = $conn->prepare($delete_query);
                    $stmt->bind_param("i", $delete_id);

                    if ($stmt->execute()) {
                        echo "<p>Admin account deleted successfully.</p>";
                    } else {
                        echo "<p>Error deleting Admin account.</p>";
                    }
                }

                // Fetch and display staff accounts
                $query = "SELECT id, name, email, password FROM staff WHERE role='Admin'"; // Include the id column
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>Name</th><th>Email</th><th>Action</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>";
                        // Form for the delete button
                        echo "<form method='POST' style='display:inline;'>";
                        echo "<input type='hidden' name='delete_id' value='" . htmlspecialchars($row['id']) . "'>";
                        echo "<button type='submit' onclick=\"return confirm('Are you sure you want to delete this account?');\">Delete</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No staff accounts found.</p>";
                }

                ?>
            </div>

        </div>
    </div>
</body>

</html>
<?php




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