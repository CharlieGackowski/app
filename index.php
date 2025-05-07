<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>GroupTab.app - Login & Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h2 {
            color: #2AB7CA;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            margin: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            width: 300px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 6px 0 12px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #2AB7CA;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #1e8fa1;
        }
    </style>
</head>
<body>

    <h2>Register</h2>
    <form action="api/auth/register.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email_reg">Email:</label>
        <input type="email" id="email_reg" name="email" required>

        <label for="password_reg">Password:</label>
        <input type="password" id="password_reg" name="password" required>

        <input type="submit" value="Register">
    </form>

    <h2>Login</h2>
    <form action="api/auth/login.php" method="post">
        <label for="email_login">Email:</label>
        <input type="email" id="email_login" name="email" required>

        <label for="password_login">Password:</label>
        <input type="password" id="password_login" name="password" required>

        <input type="submit" value="Login">
    </form>

</body>
</html>
