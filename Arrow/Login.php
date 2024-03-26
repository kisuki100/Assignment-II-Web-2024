<?php include("templates/header.php"); ?>
<body>
<?php include("templates/nav.php"); ?>
    <div class="header">
    <h1>Login</h1>
</div>

    <form action="Login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
<?php include("templates/footer.php"); ?>