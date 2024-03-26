
<?php include("templates/header.php"); ?>
<body>
<?php include("templates/nav.php"); ?>
<div class="header">
    <h1>Register</h1>
</div>
<div class="row">
    <div class="content">
        <h3>Sign Up </h3>
<form action="processes/sign_up.php" method="post">
    <label for="fullname">Full Name: </label><br>
    <input type="text" id="fullname" name="fullname" placeholder="Full Name" autofocus required /><br>

    <label for="email_address">Email Address: </label><br>
    <input type="email" id="email_address" name="email_address" placeholder="Email Address" /><br>
    
    <label for="password">Password: </label><br>
    <input type="password" id="password" name="password" placeholder="Password" /><br>
    <label for="gender">Gender : </label><br>
    <select id="gender" required name="gender">
        <option value="">--Select Gender--</option>
<?php
require_once "includes/dbConnect.php";

$select_gender = "SELECT * FROM genders ORDER BY genderId ASC";

$gender_res = $dbConn->query($select_gender);

if($gender_res->num_rows > 0){
while($gender_row = $gender_res->fetch_assoc()){
print "<option value='".$gender_row["genderId"]."'>".$gender_row["gender"]."</option>";
}
}
?>
    </select>
    <br>
    <label for="Address"> Address : </label><br>
<textarea id="Address" name="Address" placeholder="Enter your Address here" col="30" rows="5"></textarea>
    <br>
    <input type="submit" name="" value="Save Details" />
    <br>

</form>
    </div>
</div>
<?php include("templates/footer.php"); ?>
