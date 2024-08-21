<!--- 
    DETAILS
    GODKNOWS NYANDORO
    R237561Y
    LEVEL 1.2
    HAI
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products| Car Sales</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <style>

        table {
            max-width: 1300px;
            width: 100%;
            border-collapse: collapse;
            background-color: gray;
            margin-bottom: 80px;
            
        }
       .order-now-button {
        padding: 8px 16px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

       .order-now-button:hover {
        background: radial-gradient(gray,black);
    }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
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
    </div>

<!---products--->
    <div class="small-container">
        <h2 class="title" style="padding-top: 80px;">Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/maxresdefault_4.jpg" alt="no image">
                <h4>Lime green XIIM car</h4>
                <div class="rating" title="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$20,000</p>
            </div>
            <div class="col-4">
                <img src="images/Front-angle-view-of-yellow-2023-Chevy-Trailblazer-highlighting-its-release-date-and-price.jpg" alt="no image">
                <h4>Yellow Cheverolet 2023</h4>
                <div class="rating" title="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$7,000</p>
            </div>
            <div class="col-4">
                <img src="images/BMW.jpg" alt="no image">
                <h4>Blue BMW APINA</h4>
                <div class="rating" title="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$80,000</p>
            </div>
            <div class="col-4">
                <img src="images/afp-517919722-16_9.jpg" alt="no image">
                <h4>Red electric car</h4>
                <div class="rating" title="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$120,000</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="images/red.jpg" alt="no image">
                    <h4>Red Twin Cab</h4>
                    <div class="rating" title="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$40,000</p>
                </div>
                <div class="col-4">
                    <img src="images/955946.jpg" alt="no image">
                    <h4>GMD Twin Cab new shape</h4>
                    <div class="rating" title="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$90,000</p>
                </div>
                <div class="col-4">
                    <img src="images/OIP.jpeg" alt="no image">
                    <h4>Race high speed car</h4>
                    <div class="rating" title="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$120,000</p>
                </div>
                <div class="col-4">
                    <img src="images/maxresdefault_2.jpg" alt="no image">
                    <h4>Lamboghin X3</h4>
                    <div class="rating" title="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$200,000</p>
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="images/catgory.jpg" alt="no image">
                <h4>Gray Aud car 2024</h4>
                <div class="rating" title="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$30,000</p>
            </div>
            <div class="col-4">
                <img src="images/maxresdefault_3.jpg" alt="no image">
                <h4>Orange Cheap Car 2023 </h4>
                <div class="rating" title="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$12,000</p>
            </div>
            <div class="col-4">
                <img src="images/cat3.jpg" alt="no image">
                <h4>GMD Twin Cab</h4>
                <div class="rating" title="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$90,000</p>
            </div>
            <div class="col-4">
                <img src="images/cat2.jpeg" alt="no image">
                <h4>Benz 2020 version</h4>
                <div class="rating" title="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$100,000</p>
            </div>
        </div>  
        <div class="row">
            <div class="col-2">
                <h1>
                    Watch this video!<br> 
                </h1>
                <p>You can by your car now via email or order shipping.
                   Cars on this video are latest and we are about to bring them in our shop view shipping 
                </p>
                <a href="order.php" class="btn">Order Now &#8594;</a>
            </div>
            <div class="col-2">
                <video src="images/TOP 10 Most Luxurious CARS in the World! YOU MUST SEE.mp4" controls></video>
            </div>
        </div>    
    </div>
    <div class="row">
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
            echo "<a href='order.php' class='order-now-button'>Order Now</a>";
            echo "</tr>";
        }

        // Close the database connection
        mysqli_close($connection);
        ?>
    </table>
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
 

    <script src="javascript.js"></script>
</body>
</html>