<?php include("templates/header.php"); ?>
<body>
<?php include("templates/nav.php"); ?>
<div class="header">
    <h1>Job Search</h1>
</div>

<?php
// Include necessary files and initialize session if needed
require_once "includes/dbConnect.php";

// Fetch job listings from the database based on search parameters
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve search parameters from the form
    $title = $_GET["title"] ?? "";
    $location = $_GET["location"] ?? "";
    $industry = $_GET["industry"] ?? "";
    $experience = $_GET["experience"] ?? "";

    // Construct the SQL query
    $sql = "SELECT * FROM job_listings WHERE 1=1";

    // Add search parameters to the query
    if (!empty($title)) {
        $sql .= " AND job_title LIKE '%$title%'";
    }
    if (!empty($location)) {
        $sql .= " AND job_location LIKE '%$location%'";
    }
    if (!empty($industry)) {
        $sql .= " AND job_industry LIKE '%$industry%'";
    }
    if (!empty($experience)) {
        $sql .= " AND experience_level LIKE '%$experience%'";
    }

    // Execute the SQL query
    $result = $dbConn->query($sql);

    // Check if the query executed successfully
    if ($result === false) {
        die("Error executing query: " . $dbConn->error);
    }

    // Display job listings
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . $row["job_title"] . "</h3>";
            echo "<p><strong>Location:</strong> " . $row["job_location"] . "</p>";
            echo "<p><strong>Industry:</strong> " . $row["job_industry"] . "</p>";
            echo "<p><strong>Experience Level:</strong> " . $row["experience_level"] . "</p>";
            // Add more job details as needed
            echo "</div>";
        }
    } else {
        echo "<p>No job listings found.</p>";
    }
}
?>

<div class="footer">
    copyright &copy; ARROW 2024
</div>
</body>
</html>
