<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin Page</title>
    <link rel="stylesheet" href="CSS/style.css" />
    <style>
        body
         {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Light gray background */
            text-align: center;
            padding-top: 50px;
        }

        h2 {
            color: #333; /* Dark gray text color */
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            color: #333; /* Dark gray text color */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ddd; /* Lighter border */
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007BFF; /* Blue button color */
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
 <div class="toplink">
       <a href="signIn.php">SignIn</a>
                <a href="signUp.php">SignUp</a>
                <a href="share.php">""</a>
    </div>
    <div class="header">
    <h1>Sign In Here</h1>
</div>

    <form action="Sign In.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>