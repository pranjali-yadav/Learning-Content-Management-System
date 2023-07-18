
<?php

// Establish database connection 
$host = "localhost";
$username = "root"; 
$password = "";
$database = "admin_database";
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the search term from AJAX request
$searchTerm = $_POST['search'];

// Search the 'mcategory' table
$mcategoryQuery = "SELECT id, area_name FROM mcategory WHERE area_name LIKE '%$searchTerm%'";
$mcategoryResult = $conn->query($mcategoryQuery);

// Search the 'scategory' table
$scategoryQuery = "SELECT id, name FROM scategory WHERE name LIKE '%$searchTerm%'";
$scategoryResult = $conn->query($scategoryQuery);

// Display the search results
if ($mcategoryResult->num_rows > 0 || $scategoryResult->num_rows > 0) {
    echo "<h4>Search Results:</h4>";

    if ($mcategoryResult->num_rows > 0) { 
        echo "<h4>From Main category table:</h4>";
        while ($row = $mcategoryResult->fetch_assoc()) {
            echo '<a href="library.php?mid='.$row['id'].'" style="font-weight:bold; color:orange;">'. $row['area_name'] .'</a>'.'<br>.';
        }
    }

    if ($scategoryResult->num_rows > 0) {
        echo "<h4>From Sub Category table:</h4>";
        while ($row = $scategoryResult->fetch_assoc()) {
            echo '<a href="course_details.php?sid='.$row['id'].'" style="font-weight:bold; color:orange;">'. $row['name'] .'</a>'.'<br>.';
        }
    }
} else {
    echo "No results found.";
}

// Close database connection
$conn->close();
?>
