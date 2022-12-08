<html>

<head>
    <title>Online voting system - Registratrion</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
    <div id="backg">
        <div id="headerSection1">
            <h1>Online Voting System</h1>
        </div>
        <h2>Registration</h2>
        <div id="box1">

            <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                <input class="inpu" type="text" name="name" placeholder="Name" required>&nbsp
                <input class="inpu" type="number" name="mob" placeholder="Mobile" required><br><br>
                <input class="inpu" type="password" name="pass" placeholder="Password" required>&nbsp
                <input class="inpu" type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                <input class="inpu add" type="text" name="add" placeholder="Address" required><br><br>
                <div id="upload" style="width: 30%">
                    <span>Upload image:</span> <input type="file" id="profile" name="image" required>
                </div><br>
                <button id="loginbtn" type="submit" name="registerbtn">Register </button><br><br>
                <span>Already user?</span> <a id="link1" href="../">Login here</a>
            </form>
        </div>
    </div>
</body>

</html>