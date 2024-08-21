<!--- 
    DETAILS
    GODKNOWS NYANDORO
    R237561Y
    LEVEL 1.2
    HAI
-->
<?php
//session_start();

// Check if the form is submitted
if (isset($_POST['signinButton'])) {
    // Retrieve form inputs
    $name = $_POST['name'];
    $password = $_POST['password'];

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

    // Prepare and execute SQL statement to check if the user exists in the database
    $sql = "SELECT * FROM users WHERE name = '$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data from the database
        $userData = $result->fetch_assoc();

        // Verify password
        if ($password == $userData['password']) {
            $_SESSION['level'] = $userData['level'];

            // Redirect the user to the appropriate page based on their level
            if ($_SESSION['level'] == 1) {
                header("Location: admin.php");
            } elseif ($_SESSION['level'] == 2) {
                header("Location: home.html");
            }
            exit;
        }
    }

    $message = "Invalid credentials. Please register or try again.";

    // Close database connection
    $conn->close();
}

// Redirect the user to the appropriate page if already logged in
if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 1) {
        header("Location: admin.php");
    } elseif ($_SESSION['level'] == 2) {
        header("Location: home.html");
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page|JaynCars</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <style>
        .form {
            width: 200px;
            height: 400px;
        }

        .fa-user {
            font-size: 100px;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body class="signInbody">
    <div class="main">
        <div class="form">
            <form method="POST">
                <h1>Login</h1>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="inputbox">
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="login">
                    <a href="registration.php">Register Now!</a>
                </div>
                <div class="submitButton">
                    <input type="submit" value="Login" name="signinButton">
                </div>
                <?php if (isset($message)): ?>
                    <p><?php echo $message; ?></p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>