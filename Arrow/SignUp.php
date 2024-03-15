<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f7f7f7; /* Lighter background color */
            color: #444; /* Dark text color */
        }

        header {
            background-color: #1e8449; /* Green header */
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        main {
            max-width: 90%; /* Adjusted width */
            margin: 15cm auto; /* Centering with 15cm margin */
            padding: 20px;
            background-color: #e0e0e0; /* Light gray background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333; /* Label text color */
        }

        input[type="email"],
        input[type="text"],
        textarea,
        input[type="date"],
        input[type="submit"],
        input[type="checkbox"] {
            width: calc(100% - 24px); /* Adjusted width */
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #1e8449; /* Green border */
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            color: #333;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #3498db; /* Blue button color */
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9; /* Darker blue on hover */
        }

        footer {
            background-color: #1e8449; /* Green footer */
            color: #fff;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="toplink">
       <a href="signIn.php">SignIn</a>
                <a href="signUp.php">SignUp</a>
                <a href="share.php">Share</a>
    </div>
<div class="header">
    <h1>Register here</h1>
</div>
<!-- the main content section starts here -->
<div class="row">



<form action="processes/AutRegistration.php" method="POST">
    <label for="AuthorId">Author Id:</label><br>
    <input type="text" name="AuthorId" id="AuthorId" placeholder="Enter your Id" maxlength="60" required /><br><br>

    <label for="AuthorFullName">Author Full Name:</label><br>
    <input type="text" name="AuthorFullName" id="AuthorFullName" placeholder="Enter your full name" maxlength="60" /><br><br>

    <label for="AuthorEmail">Author Email:</label><br>
    <input type="email" name="AuthorEmail" id="AuthorEmail" placeholder="Enter your email" maxlength="60" /><br><br>

    <label for="AuthorAddress">Author Address:</label><br>
    <input type="text" name="AuthorAddress" id="AuthorAddress" placeholder="Enter your Address" maxlength="60" /><br><br>

    <label for="AuthorDateOfBirth">Date Of Birth:</label><br>
    <input type="date" name="AuthorDateOfBirth" id="AuthorDateOfBirth" required /><br><br>

    <label for="AuthorBiography">Author Biography:</label><br>
    <textarea name="AuthorBiography" id="AuthorBiography" placeholder="Enter your biography" rows="10" required><?php echo isset($author) ? $author["AuthorBiography"] : ''; ?></textarea><br><br>
    

    <!-- Hidden input for "not suspended" -->
    <input type="hidden" name="AuthorSuspended" value="0">

    <!-- Checkbox for "suspended" -->
    <input type="checkbox" name="AuthorSuspended" id="AuthorSuspended" value="1">
    <label for="AuthorSuspended">Suspended</label><br><br>
     

    <input type="submit" name="send_AuthorBiography" value="Send AuthorBiography" />
</form>
</div>

</html>