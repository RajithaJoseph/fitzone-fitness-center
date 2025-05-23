<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
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
            showSection('makeAppointments');
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
        button,
        select {
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
        <h2>Customer Dashboard</h2>
        <ul>
            <li><a href="#" data-section="addAdmin" onclick="showSection('makeAppointments')">Make Appointments</a></li>
            <li><a href="#" data-section="addStaff" onclick="showSection('viewAppointments')">My Appointments</a></li>
            <li><a href="#" data-section="messageResponse" onclick="showSection('messageResponse')">Messages and Respones</a></li>

        </ul>
        <button class="btnlogout" onclick="window.location.href='logout.php'">Logout</button>
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
        
        <?php
        $customer_name = isset($_GET['name']) ? $_GET['name'] : '';

        // Optional: Display or use the data
        echo "<h1>Welcome, " . htmlspecialchars($customer_name) . "</h1>";


        ?>

        <div class="container">
            <!-- Make Appointments -->
            <div id="makeAppointments" class="feature-section">
                <h2>Book a Gym Class</h2>
                <form method="POST" action="">
                    
                    <label for="class">Class:</label>
                    <select id="class" name="class">
                        <option value="Yoga">Yoga</option>
                        <option value="Pilates">Pilates</option>
                        <option value="HIIT">HIIT</option>
                        <option value="Spinning">Spinning</option>
                    </select><br>

                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required><br>
                    <label for="class">Time:</label>
                    <select id="class" name="time">
                        <option value="08.00-10.00">08.00-10.00</option>
                        <option value="10.00-12.00">10.00-12.00</option>
                        <option value="01.00-03.00">01.00-03.00</option>
                        <option value="03.00-05.00">03.00-05.00</option>
                    </select><br><br>

                    <button type="submit">Book Appointment</button>
                </form>
                <?php
                @include 'config.php';

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }


                // Handle form submission
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $customer_name = isset($_GET['name']) ? $_GET['name'] : '';
                    $customer_email = isset($_GET['email']) ? $_GET['email'] : '';

                    $class = $_POST['class'];
                    $date = $_POST['date'];
                    $time = $_POST['time'];

                    $sql = "INSERT INTO appointments (name, email, class, date,time) VALUES ('$customer_name', '$customer_email', '$class', '$date','$time')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Appointment booked successfully!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }

                // Display appointments
                $result = $conn->query("SELECT * FROM appointments");
                ?>
            </div>



            <div id="viewAppointments" class="feature-section" style="display: none;">
                <h2>My Appointments</h2>
                <?php
                @include 'config.php';
                // Handle deletion 
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
                    $delete_id = (int)$_POST['delete_id']; // Sanitize the ID input
                    $delete_query = "DELETE FROM appointments WHERE id = ?";
                    $stmt = $conn->prepare($delete_query);
                    $stmt->bind_param("i", $delete_id);

                    if ($stmt->execute()) {
                        echo "<p>Appointment deleted successfully.</p>";
                    } else {
                        echo "<p>Error deleting appointment.</p>";
                    }

                    $stmt->close();
                }

                $customer_name = isset($_GET['name']) ? $_GET['name'] : '';

                // Fetch and display staff accounts
                $query = "SELECT id,name, email, class ,date,time FROM appointments WHERE name='$customer_name' "; // Include the id column
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>Class</th><th>Date</th><th>Time</th><th>Actions</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
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


            <div id="messageResponse" class="feature-section">
                <h2>Your Messages and Responses</h2>
                <?php
                @include 'config.php';
                $customer_email = isset($_GET['email']) ? $_GET['email'] : '';

                $query = "SELECT name, message, response FROM queries WHERE email='$customer_email'"; 
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    echo "<table><tr><th>Name</th><th>Message</th><th>Response</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['message']) . "</td>
                    <td>" . (!empty($row['response']) ? htmlspecialchars($row['response']) : 'No response yet') . "</td>
                  </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No messages found.</p>";
                }

                $conn->close();
                ?>
            </div>



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