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

// Retrieve the values from the HTML code
$images = array(
    "images/maxresdefault_4.jpg",
    "images/Front-angle-view-of-yellow-2023-Chevy-Trailblazer-highlighting-its-release-date-and-price.jpg",
    "images/BMW.jpg",
    "images/afp-517919722-16_9.jpg",
    "images/red.jpg",
    "images/955946.jpg",
    "images/OIP.jpeg",
    "images/maxresdefault_2.jpg",
    "images/catgory.jpg",
    "images/maxresdefault_3.jpg",
    "images/cat3.jpg",
    "images/cat2.jpeg"
);

$descriptions = array(
    "Lime green XIIM car",
    "Yellow Cheverolet 2023",
    "Blue BMW APINA",
    "Red electric car",
    "Red Twin Cab",
    "GMD Twin Cab new shape",
    "Race high-speed car",
    "Lamboghin X3",
    "Gray Aud car 2024",
    "Orange Cheap Car 2023",
    "GMD Twin Cab",
    "Benz 2020 version"
);

$ratings = array(
    "4",
    "3",
    "4.5",
    "3.5",
    "3.5",
    "4.5",
    "4.5",
    "5",
    "4",
    "3",
    "4",
    "5"
);

$prices = array(
    "$20,000",
    "$7,000",
    "$80,000",
    "$120,000",
    "$40,000",
    "$90,000",
    "$120,000",
    "$200,000",
    "$30,000",
    "$12,000",
    "$90,000",
    "$100,000"
);

// Iterate over the arrays and insert values into the "products" table
for ($i = 0; $i < count($images); $i++) {
    $image = $images[$i];
    $description = $descriptions[$i];
    $rating = $ratings[$i];
    $price = $prices[$i];

    // Prepare and execute the SQL query
    $query = "INSERT INTO products (image, description, rating, price) VALUES ('$image', '$description', '$rating', '$price')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Values inserted successfully for product $description.<br>";
    } else {
        echo "Error inserting values for product $description: " . mysqli_error($connection) . "<br>";
    }
}

// Close the database connection
mysqli_close($connection);
?>