<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="login-container">
        <h1>Welcome!</h1>
        <div>
            <h2>Login</h2>
            <form>
                <p>Username</p>
                <input name="username" type="text">

                <p>Password</p>
                <input name="password" type="password">
                <br>
                <br>
                <input name="submit" type="submit">
            </form>
            <br>
            <div>or <button onclick="register()">register</button> instead.</div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>