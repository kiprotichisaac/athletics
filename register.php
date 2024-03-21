<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

</head>
<body>
    <header>
        <div class="logo">
            <span class="header">
                IT-TRAIN
            </span>
        </div>
    </header>
    <div class="mainbody">
        <div class="container">
            <div class="left">
                <div class="buttons">
                    <div class="button a"><button> <a href="login.php"> Login </a></button></div>
                    <div class="button b"><button>Register</button></div>
                </div>
            </div>
            <div class="right RegisterRight">
                <div class="body">
                    <div class="title">
                        <span> <b> Register</b></span>
                    </div>
                    <form action="registration.php" method="post">
                        <div class="radio_buttons">
                           <div class="radio">
                            <input type="radio" name="userType" id="athlete" value="athlete">
                            <label for="athlete">Athlete</label>
                           </div>
                           <div class="radio">
                                <input type="radio" name="userType" id="ADO" value="ADO">
                                <label for="athlete">ADO</label>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="text_values">
                                <input type="text" name="first_name" id="FirstName" placeholder=" " required>
                                <div class="label">
                                    <label for="FirstName" class="user_label">FirstName</label>
                                </div>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="text_values">
                                <input type="text" name="last_name" id="LastName" placeholder=" " required>
                                <div class="label">
                                    <label for="LastName" class="LastName_Label">LastName</label>
                                </div>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="text_values">
                                <input type="text" name="password" id="SName" placeholder=" " required>
                                <div class="label">
                                    <label for="SName" class="SName_Label">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="inputs">
                            <div class="text_values">
                                <select id="countrySelect" name="country">
                                    <option value="">Select Country</option>
                                    <option value="burundi">Burundi</option>
                                    <option value="comoros">Comoros</option>
                                    <option value="djibouti">Djibouti</option>
                                    <option value="eritrea">Eritrea</option>
                                    <option value="ethiopia">Ethiopia</option>
                                    <option value="kenya">Kenya</option>
                                    <option value="rwanda">Rwanda</option>
                                    <option value="seychelles">Seychelles</option>
                                    <option value="somalia">Somalia</option>
                                    <option value="south sudan">South Sudan</option>
                                    <option value="tanzania">Tanzania</option>
                                    <option value="uganda">Uganda</option>
                                  </select>
                                <div class="label">
                                    <label for="LastName" class="Country_Label">Country Select</label>
                                </div>
                            </div>
                        </div>


                   
                        
                        <!-- <div class="inputs">
                            <div class="text_values">
                                <div class="input_value">
                                    <input type="password" name="password" id="password">
                                </div>
                                <label for="password" class="pass_label">Password/Pin</label>
                            </div>
                        </div> -->
                        
                        <div class="process Rinputs">
                            <input type="submit" value="Next">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
