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
    $customerName = $_POST['customer_name'];
    $email = $_POST['email'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $paymentType = $_POST['payment_type'];

    // Validate inputs
    if (empty($customerName) || empty($email) || empty($product) || empty($quantity) || empty($paymentType)) {
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

        // Prepare and execute SQL statement to insert data into the clients_orders table
        $sql = "INSERT INTO clients_orders (email, customer_name, product, quantity, payment_type) VALUES ('$email', '$customerName', '$product', '$quantity', '$paymentType')";

        if ($conn->query($sql) === TRUE) {
            echo "Order submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Order | Car Sales</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <style>

       .order {
            width: 75%;
            max-width: 400px;
            margin: 200px auto 0;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .order h1 {
            text-align: center;
            margin-bottom: 30px;
            color: black;
        }

        .order input[type="text"],
        .order input[type="email"],
        .order input[type="number"],
        .order select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: black;
        }

        .order input[type="submit"] {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    
</head>
<body>
     <div class="header">
        <div class="navbar">
            <div class="logo">
                <b style="color: brown;">JaynCars</b><strong style="color: white;"><i>Sale</i></strong>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="registration.php">Account</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="mailto:nyandorog781@gmail.com">Contact Us</a></li>
                </ul> 
            </nav>
            <a href="order.php" title="Place your order"><img src="images/shopping-cart.png" alt="nothing" width="30px" height="30px"></a>
            <img src="images/menu.png" alt="nothing" width="30px" height="30px" class="menu-icon" onclick="menutoggle()">
     </div>
     <div class="order">
        <h1>Order Form</h1>
        <form action="" method="post">
            <input type="text" name="customer_name" placeholder="Enter your name">
            <input type="email" name="email" placeholder="Enter your email">
            <input type="text" name="product" placeholder="Enter product name">
            <input type="number" name="quantity" placeholder="Enter quantity">
            <select name="payment_type">
                <option value="Cash">Cash</option>
                <option value="Credit Card">Credit Card</option>
                <option value="Bank Transfer">Bank Transfer</option>
            </select>
            <input type="submit" value="Submit Order" name="signButton">
        </form>
     </div>

     <footer>
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <h4>Our address</h4>
                    <address>
                        Visit us at: Number 1994<br>
                        Complex Shops<br>
                        Pendennis, Mt Pleasant<br>
                        Harare<br>
                        Zimbabwe<br>
                    </address>
                </div>
                <div class="col-4">
                    <h4>Get in Touch with us</h4>
                    <ol style="list-style-type: none;">
                        <li><i class="fa fa-whatsapp" style="color: green; background: white;"></i>+263 77 931 9824</li>
                        <li><a href="https://twitter.com/GNyandoro72638" target="_blank"><i class="fa fa-twitter" style="color: aqua;"></i>Twitter</a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=61552379242784" target="_blank"><i class="fa fa-facebook-official" style="color: blue;"></i>Facebook</a></li>
                        <li><a href="mailto:nyandorog781@gmail.com" target="_blank"><i class="fa fa-envelope" style="color: red;"></i>Email</a></li>
                    </ol>
                </div>
                <div class="col-4">
                    <h4>Our Page</h4>
                    <p><a href="mailto:nyandorog781@gmail.com" target="_blank">Contact us</a></p>
                    <p><a href="aboutus.html#tc">Terms and conditions</a></p>
                    <p><a href="aboutus.html">About Us</a></p>
                    <p><a href="products.php">Our Products</a></p>
                    <p><a href="https://www.google.com/maps/place/University+of+Zimbabwe/@-17.7501263,30.9435991,12z/data=!4m6!3m5!1s0x1931a5673118070f:0xb9107787eed9e671!8m2!3d-17.782445!4d31.0546398!16zL20vMDF5Y3Jy?entry=ttu">Location</a></p>
                </div>
                <div class="col-4">
                    <h4>Student details</h4>
                    <p>Godknows Nyandoro</p>
                    <p>R237561Y</p>
                    <p>Year 1</p>
                    <p>Level 1.2 UZ</p>
                </div>
            </div>
        </div>
        <hr>
        
        <p style="text-align: center; padding-bottom: 20px; padding-top: 5px;">&copy;2014-2024 JaynCars company, Inc.</p>
    
     </footer>
</body>
</html>

