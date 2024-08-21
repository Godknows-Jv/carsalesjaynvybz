<!--- 
    DETAILS
    GODKNOWS NYANDORO
    R237561Y
    LEVEL 1.2
    HAI
-->

<?php

// Database connection credentials
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "car_sales";

// Create a new database connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Function to sanitize user inputs
function sanitizeInput($input)
{
    global $connection;
    return mysqli_real_escape_string($connection, htmlspecialchars($input));
}

// Function to display an error message
function displayErrorMessage($message)
{
    echo "<p class='error-message'>Error: " . $message . "</p>";
}

// Function to display a success message
function displaySuccessMessage($message)
{
    echo "<p class='success-message'>" . $message . "</p>";
}

// Function to fetch all products from the database
function getAllProducts()
{
    global $connection;
    $query = "SELECT * FROM products";
    $result = mysqli_query($connection, $query);
    return $result;
}

// Function to add a new product
function addProduct($image, $description, $rating, $price)
{
    global $connection;
    $query = "INSERT INTO products (image, description, rating, price) VALUES ('$image', '$description', '$rating', '$price')";
    $result = mysqli_query($connection, $query);
    return $result;
}

// Function to update an existing product
function updateProduct($itemNumber, $image, $description, $rating, $price)
{
    global $connection;
    $query = "UPDATE products SET image = '$image', description = '$description', rating = '$rating', price = '$price' WHERE item_number = '$itemNumber'";
    $result = mysqli_query($connection, $query);
    return $result;
}

// Function to delete a product
function deleteProduct($itemNumber)
{
    global $connection;
    $query = "DELETE FROM products WHERE item_number = '$itemNumber'";
    $result = mysqli_query($connection, $query);
    return $result;
}

// Check if the form data is submitted for adding a new product
if (isset($_POST['add_product'])) {
    $image = sanitizeInput($_POST['image']);
    $description = sanitizeInput($_POST['description']);
    $rating = sanitizeInput($_POST['rating']);
    $price = sanitizeInput($_POST['price']);

    // Validate the form inputs
    if (empty($image) || empty($description) || empty($rating) || empty($price)) {
        displayErrorMessage("All fields are required.");
    } elseif (!is_numeric($rating) || !is_numeric($price)) {
        displayErrorMessage("Rating and price must be numeric values.");
    } else {
        $result = addProduct($image, $description, $rating, $price);
        if ($result) {
            displaySuccessMessage("Product added successfully.");
        } else {
            displayErrorMessage("Error adding product: " . mysqli_error($connection));
        }
    }
}

// Check if the form data is submitted for updating a product
if (isset($_POST['update_product'])) {
    $itemNumber = sanitizeInput($_POST['item_number']);
    $image = sanitizeInput($_POST['image']);
    $description = sanitizeInput($_POST['description']);
    $rating = sanitizeInput($_POST['rating']);
    $price = sanitizeInput($_POST['price']);

    // Validate the form inputs
    if (empty($itemNumber) || empty($image) || empty($description) || empty($rating) || empty($price)) {
        displayErrorMessage("All fields are required.");
    } elseif (!is_numeric($itemNumber) || !is_numeric($rating) || !is_numeric($price)) {
        displayErrorMessage("Item number, rating, and price must be numeric values.");
    } else {
        $result = updateProduct($itemNumber, $image, $description, $rating, $price);
        if ($result) {
            displaySuccessMessage("Product updated successfully.");
        } else {
            displayErrorMessage("Error updating product: " . mysqli_error($connection));
        }
    }
}

// Check if the item number is submitted for deleting a product
if (isset($_POST['delete_product'])) {
    $itemNumber = sanitizeInput($_POST['item_number']);

    // Validate the item number
    if (empty($itemNumber) || !is_numeric($itemNumber)) {
        displayErrorMessage("Item number is required and must be a numeric value.");
    } else {
        $result = deleteProduct($itemNumber);
        if ($result) {
            displaySuccessMessage("Product deletedApologies for the cutoff in my previous response. Here's the continuation of the modified code:

successfully.");
        } else {
            displayErrorMessage("Error deleting product: " . mysqli_error($connection));
        }
    }
}


// Close the database connection
mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Car Sales</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    
    text-align: center;
    color: #333333;
}

table {
    max-width: 1300px;
    width: 100%;
    border-collapse: collapse;
    margin-top: 40px;
    margin-bottom: 90px;
}

th,
td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #333333;
    color: #ffffff;
}
tr {
    background-color: gray;
    color: #ffffff;
}
tr:nth-child(even) {
    background-color: white;
    color: gray;
}

.delete-button,
.edit-button {
    padding: 6px 10px;
    border: none;
    border-radius: 4px;
    color: #ffffff;
    cursor: pointer;
}

.delete-button {
    background-color: #e74c3c;
}



.message {
    margin-bottom: 20px;
    text-align: center;
    font-weight: bold;
    color: white;
}

/* Form container */
.form-container {
        max-width: 400px;
        margin-bottom: 200px;
        margin: 20px auto;
        padding: 20px;
        background: radial-gradient(gray,black);
        border-radius: 20px 0 20px 0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        color: white;

    }

    /* Form heading */
    .form-container h2 {
        margin-top: 0;
        
    }

    /* Form fields */
    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Submit button */
    .form-group button {
        padding: 10px 20px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-group button:hover {
        background-color: #333;
    }
    </style>   

      
    
</head>
<body>
        <div class="navbar">
            <div class="logo">
                <b style="color: brown;">Jayn</b><strong style="color: white;"><i>Cars</i></strong>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="registration.php">Account</a></li>
                </ul> 
            </nav>
            <a href="order.php" title="Place your order"><img src="images/shopping-cart.png" alt="nothing" width="30px" height="30px"></a>
            <img src="images/menu.png" alt="nothing" width="30px" height="30px" class="menu-icon" onclick="menutoggle()">
        </div>
        <div style="margin-top: 100px; text-align:center; background-color:#303030; color:#f0f0f0; border-radius:90px;">
            <h1 style="background-color:#f0f0f0; border-radius: 90px 90px 0 0">WELCOME TO ADIMIN PAGE!</h1>
            <p style="padding: 30px;" >
               <ul style="padding: 10px;">
                <li>You can update the table products</li>
                <li>You can add items on table products</li>
                <li>You can delete items on the table products</li>
                <li>You can view the table with the costumer orders</li>
               </ul>
            </p>
        </div>
<div class="row">
    <h1 class=title style="margin-top: 100px;">Product table and its updating tools</h1>
    <table>
        <tr>
            <th>Item Number</th>
            <th>Image</th>
            <th>Description</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php
        // Database connection credentials
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "car_sales";

        // Create a new database connection
        $connection = mysqli_connect($servername, $username, $password, $dbname);

        // Check if the connection was successful
        if (!$connection) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        // Prepare and execute the SQL query to fetch products from the "products" table
        $query = "SELECT * FROM products";
        $result = mysqli_query($connection, $query);

        // Iterate over the retrieved products and display them in table rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['item_number']}</td>";
            echo "<td><img src='{$row['image']}' width='100'></td>";
            echo "<td>{$row['description']}</td>";
            echo "<td>{$row['rating']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "<td data-label='Action'>";
            echo "<form method='post' action=''>
               <input type='hidden' name='item_number' value='" . htmlspecialchars($row['item_number']) . "'>
               <input type='hidden' name='delete_product' value='1'>
               <input type='submit' class='delete-button' value='Delete'>
            </form>";
            echo "</td>";
            echo "</tr>";
            
        }

        // Close the database connection
        mysqli_close($connection);
        ?>
    </table>
</div>
   <form method="post" action="" class='form-container'>
    <h2>Add Product</h2>
    <input type="hidden" name="item_number" value="<?php echo isset($itemNumber) ? $itemNumber : ''; ?>">

    <div class="form-group">
        <label for="image">Image URL:</label>
        <input type="text" name="image" id="image" class="form-control" value="<?php echo isset($image) ? $image : ''; ?>" required>
    </div>
    
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control" required><?php echo isset($description) ? $description : ''; ?></textarea>
    </div>
    
    <div class="form-group">
        <label for="rating">Rating:</label>
        <input type="number" name="rating" id="rating" class="form-control" value="<?php echo isset($rating) ? $rating : ''; ?>" required>
    </div>
    
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" class="form-control" value="<?php echo isset($price) ? $price : ''; ?>" required>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="add_product">
            Add Product
        </button>
    </div>
    </form>

    <div class="row">
        <h1 class="heading">Clients Orders</h1>
    </div>
    <div class="row">
        <table>
            <caption style="text-align: center; font-weight: bold; font-size: 20px; margin-bottom: 10px;">Legend</caption>
            <tr>
                <th>Email</th>
                <th>Customer Name</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Payment Type</th>
                <th>Date</th>
            </tr>
            <?php
            // Database connection credentials
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "car_sales";

            // Create a new database connection
            $connection = mysqli_connect($servername, $username, $password, $dbname);

            // Check if the connection was successful
            if (!$connection) {
                die("Database connection failed: " . mysqli_connect_error());
            }

            // Prepare and execute the SQL query to fetch orders from the "clients_orders" table
            $query = "SELECT * FROM clients_orders";
            $result = mysqli_query($connection, $query);

            // Iterate over the retrieved orders and display them in table rows
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['customer_name']}</td>";
                echo "<td>{$row['product']}</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "<td>{$row['payment_type']}</td>";
                echo "<td>{$row['date']}</td>";
                echo "</tr>";
            }

            // Close the database connection
            mysqli_close($connection);
            ?>
        </table>
    </div>
    
    
</body>
