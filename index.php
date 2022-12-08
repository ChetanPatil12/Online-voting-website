<html>

<head>
    <title>Online voting system - Home</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>

    <div id="bg">
        <div id="headerSection">
            <h1>E-voting</h1>
        </div>


        <div id="loginSection">
            <div id="box">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <div class="inp">
                        <span>Mob. NUMBER</span>
                        <input type="number" name="mob" required>
                    </div><br>

                    <div class="inp">
                        <span>PASSWORD</span>
                        <input type="password" name="pass" required>
                    </div><br>
                    
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    <span>New user?</span> <a id="link" href="routes/register.php">Register here</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>