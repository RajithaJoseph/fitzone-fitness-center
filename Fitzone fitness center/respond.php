<?php
@include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Popup Form</title>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
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

            h2{
                font-family: 'poppins';
                font-weight: 500;
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
                background: var(--secondary-color);
                color: white;
                padding: 12px 25px;
                border: none;
                border-radius: 30px;
                cursor: pointer;
                font-size: 18px;
                transition: background 0.3s ease-in-out, transform 0.2s ease-out;
            }

            .popup-form button:hover {
                background: var(--secondary-color-dark);
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
                font-size: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                transition:  0.3s ease-in-out, transform 0.2s;
            }

            .close-btn:hover {
                background: #ff1a1a;
                transform: scale(1.1);
            }
        </style>
    </head>

    <body>
        <div class="overlay1" id="popup">
            <div class="popup-form">
                <button class="close-btn" onclick="closePopup()">×</button>
                <h2>Respond to <?php echo $name; ?></h2>
                <form action="submit_response.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <textarea name="response" placeholder="Type your response here..." required></textarea>
                    <button type="submit">Send Response</button>
                </form>
            </div>
        </div>

        <script>
            // Function to close the popup
            function closePopup() {
                document.getElementById('popup').style.display = 'none';
                window.location.href = 'staff_dashboard.php#viewQueries';
            }
        </script>
    </body>

    </html>

<?php
}
?>