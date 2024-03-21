<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <script>
        // Function to toggle password visibility
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</head>
<body>
    <header>
        <div class="logo">
            <span class="header">IT-TRAIN</span>
        </div>
    </header>
    <div class="mainbody">
        <div class="container">
            <div class="left">
                <div class="buttons">
                    <div class="button a"><button>Login</button></div>
                    <div class="button b"><button><a href="register.php">Register</a></button></div>
                </div>
            </div>
            <div class="right">
                <div class="body">
                    <div class="title">
                        <span><b>Login</b></span>
                    </div>
                    <form action="login_process.php" method="post">
                        <div class="radio_buttons">
                            <div class="radio">
                                <input type="radio" name="userType" id="athlete" value="athlete">
                                <label for="athlete">Athlete</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="userType" id="ADO" value="ADO">
                                <label for="ADO">ADO</label>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="text_values">
                                <input type="text" name="username" id="username" placeholder=" " required>
                                <div class="label">
                                    <label for="username" class="user_label">UserName</label>
                                </div>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="text_values">
                                <input type="password" name="password" id="password" placeholder=" " required>
                                <div class="label">
                                    <label for="password" class="password_label">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="inputs checkbox">
                            <input type="checkbox" id="Passwordtoggle" onclick="togglePassword()"> Show Password
                            | <a href=""> Forgot Logins</a>
                        </div>
                        <div class="process inputs">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
