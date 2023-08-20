<!DOCTYPE html>
<html>
    <head>
    <title>
            Online Shopping
        </title>
        <link rel = "icon" href = Logo.jpg type = "image/x-icon">
        <link rel="stylesheet" type="text/css" href="../css/test.css" />
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    </head>

    <body>

        <div class="header">
            <div class="logocontainer">
            <a href="Home.php">
              <img class="logoimg" src="../images/LogoFinal.jpg" alt="Logo">
            </a>
              <h2>The largest online shopping platform in Sri Lanka.</h2>
            </div>
        
            <ul class="login">
              <li><a href="Login.html">Log in</a></li>
              <li><a href="Signup.html">Sign up</a></li>
              <li><a href="admin.html">Admin</a></li>
            </ul>
        </div>

        <div>
    <ul class="NavigationBar">
        <li><a href="Home.php">Home</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="orderHistory.php">Order History</a></li>
        <li><a href="Track_order.html">Track the Order</a></li>
        <li><a href="contacts.html">Contacts Us</a></li>
        <li><a href="RatingForm.php">Rate Us</a></li>
        <li><a href="Aboutus.html">About Us</a></li>
    </ul>
</div>

<?php
$host = "localhost";
$dbname = "project_database";
$username = "root";
$password = "";

// Establish a connection to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted EmployeeID from the form
    $employeeID = $_POST["EmployeeID"];

    // Retrieve other submitted form data
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $address = $_POST["Address"];
    $mobileNumber = $_POST["MobileNumber"];
    $salary = $_POST["Salary"];
    $jobType = $_POST["JobType"];


    // Construct the SQL query to update the employee information in the database
    $sql = "UPDATE employee SET 
                FirstName = '$firstName',
                LastName = '$lastName',
                Address = '$address',
                ContactNo = '$mobileNumber',
                Salary = '$salary',
                JobType = '$jobType'
            WHERE EmployeeID = '$employeeID'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Employee information updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

    <br><br>
    
    </body>
    <footer>
        <p>&copy; 2023 Online Shopping, Sri Lanka </p>
    </footer>

</html>

