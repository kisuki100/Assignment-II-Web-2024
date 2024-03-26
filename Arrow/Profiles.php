<?php include("templates/header.php"); ?>
// Include database connection file
require_once "includes/dbConnect.php";

// Check if user is logged in, if not redirect to login page
// Add your login session check here

// Fetch user data from the database based on user ID (assuming user ID is stored in session)
$userID = $_SESSION['userID']; // Example session variable holding user ID
$sql = "SELECT users.*, genders.gender
        FROM users
        LEFT JOIN genders ON users.genderId = genders.genderId
        WHERE userId = $userID"; // Change table/column names as per your database schema
$result = $dbConn->query($sql);

if ($result->num_rows == 1) {
    // User found, fetch user details
    $user = $result->fetch_assoc();
<body>
<?php include("templates/nav.php"); ?><?php
    <div class="header">
        <h1>My Profile</h1>
    </div>
    <h1>User Profile</h1>
    <div>
        <h2><?php echo $user['fullname']; ?></h2>
        <p>Email: <?php echo $user['email']; ?></p>
        <p>Gender: <?php echo $user['gender']; ?></p>
        <p>Address: <?php echo $user['address']; ?></p>
        <p>Date Joined: <?php echo date("F j, Y", strtotime($user['date_created'])); ?></p>
        <!-- Add more user details as needed -->
    </div>
    <a href="edit_profile.php">Edit Profile</a> <!-- Link to edit profile page -->
    <!-- Add more sections for user activity, skills, experience, etc. -->
    <div class="footer">
        copyright &copy; ARROW 2024
    </div>
</body>
</html>

<?php
} else {
    // User not found or multiple users found (which shouldn't happen), handle the error
    echo "User not found or multiple users found. Please contact support.";
}
?>
