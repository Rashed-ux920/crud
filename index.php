<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taskmanegment</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
            <a href="index.php" ><h4>tasketo</h4></a>
            <div class="signin">
                <a href="javascript:void(0)" onclick="openPopup()">Sign in</a>
                <a href="javascript:void(2)" onclick="openLoginPopup()">logein</a>
            </div>
            <div class="signin">
                <a href="admin.php">admin</a>
            </div>
        <div id="popupForm" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <form action="signin.php" method="post">
                    <h2>Sign In</h2>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required><br><br>
                    <label for="username">Email:</label><br>
                    <input type="text" id="email" name="email" required><br><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br><br>
                    <input type="submit" value="Sign In">
                </form>
            </div>
        </div>

        <div id="loginPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeLoginPopup()">&times;</span>
            <form action="logein.php" method="post">
                <h2>Loge In</h2>
                <label for="login-username">Username:</label>
                <input type="text" id="login-username" name="username" required><br><br>
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="password" required><br><br>
                <input type="submit" value="Loge In">
            </form>
        </div>
    </div>
       
    </header>
    <div class="contaner">
    <div class="img">
            <img src="imeg/Checklist Customizable Cartoon Illustrations _ Bro Style.jpeg" alt="help">
        </div>
        <div class="text">
            <p>
                <h4>hi, i am rashed the founder of tasketo</h4> <br>
                <h1>welcome, i am  very happy to meet you</h1><br>
                <h4>to get more services <span>sign in</span> or <span>loge in</span></h4>
            </p>
        </div>
    </div>
<script src="js/index.js"></script>
</body>
</html>