<?php include("templates/header.php"); ?>
<body>
<?php include("templates/nav.php"); ?>

<?php
require_once "includes/dbConnect.php";

$select_users = "SELECT * FROM `users` LEFT JOIN `genders` USING (`genderId`) ORDER BY `fullname` ASC";

$users_res = $dbConn->query($select_users);

if($users_res === false) {
    // Query execution failed, handle the error
    die("Error executing query: " . $dbConn->error);
}

if($users_res->num_rows > 0){
    $sn = 0;
    ?>
    <table>
        <tr>
            <th>S/N</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Last Updated</th>
            <th>Action</th>
        </tr>
    <?php
    while($user_row = $users_res->fetch_assoc()){
        $sn++;
        ?>
        <tr>
            <td><?php print $sn; ?>. </td>
            <td><?php print $user_row["fullname"]; ?></td>
            <td><?php print $user_row["email"]; ?></td>
            <td><?php print $user_row["gender"]; ?></td>
            <td><?php print date("d-F-Y H:i:s", strtotime($user_row["date_updated"])); ?></td>
            <td>
                [ <a href="edit_users.php?userId=<?php print $user_row["userId"]; ?>">Edit</a> ] 
                [ <a href="processes/del_users.php?userId=<?php print $user_row["userId"]; ?>" OnClick="return confirm('Are you sure you want to delete <?php print $user_row["fullname"]; ?> from the database?');">Del</a> ]
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
} else {
    ?>
    <p>No Data</p>
    <?php
}
?>

<?php include("templates/footer.php"); ?>
