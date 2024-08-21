<!--- 
    DETAILS
    GODKNOWS NYANDORO
    R237561Y
    LEVEL 1.2
    HAI
-->
<?php
// Check if the form is submitted
if (isset($_POST['signButton'])) {
    // Retrieve form inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $level = $_POST['level'];
    $userPassword = $_POST['password']; // Changed variable name

    // Validate inputs
    if (empty($name) || empty($email) || empty($phone) || empty($level) || empty($userPassword)) {
        echo "Please fill in all the details.";
    } else {
        // Database connection settings
        $servername = "localhost:3307";
        $username = "root";
        $db_password = ""; // Update with your database password
        $dbname = "car_sales";

        // Create connection
        $conn = new mysqli($servername, $username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the user already exists in the database
        $checkQuery = "SELECT * FROM users WHERE email = '$email'";
        $checkResult = $conn->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            echo "You have already registered.";
        } else {
            // Prepare and execute SQL statement to insert data into the users table
            $sql = "INSERT INTO users (name, email, phone, level, password) VALUES ('$name', '$email', '$phone', '$level', '$userPassword')";

            if ($conn->query($sql) === TRUE) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Close database connection
        $conn->close();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body class=signInbody>
    <div class="main">
        <div class="form">
            <form action="" method="post">
                <h1>Registration</h1>
                <div class="inputbox">
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="email" name="email" placeholder="Enter your email">
                    <input type="tel" name="phone" placeholder="Phone">
                </div>
                <div class="inputbox">
                    <select name="level" id="">
                        <option value="1">Admin</option>
                        <option value="2">Client</option>
                    </select>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="mailing">
                    <input type="checkbox" id="mailingList" name="mailingList">
                    <label for="mailingList">Subscribe to Mailing List</label>
                </div>
                <div class="terms">
                    <input type="checkbox" id="termsConditions" name="termsConditions" required>
                    <a href="aboutus.html#tc" target="_blank">Accept terms & conditions</a>
                </div>
                <div class="login">
                    <a href="login.php">Have account Login here!</a>
                </div>
                <div class="submitButton">
                    <input type="submit" value="Register" name="signButton">
                </div>
            </form>
        </div>
    </div>
</body>
</html>