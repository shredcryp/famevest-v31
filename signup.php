<?php
$con = mysqli_connect('localhost', 'root');

if (isset($_POST['signup'])) 
{
  mysqli_select_db($con, 'famevest');
  $email = $_POST['email'];
  $uname = $_POST['uname'];
  $pword = $_POST['pword'];
  $query="INSERT INTO signup(email,uname,pword) VALUES ('$email', '$uname', '$pword');";

  header("Location: myprofile.html");
  mysqli_query($con, $query);
//   $con->close();
}

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Famevest-Login</title>
    </head>

    <body>
        <style>
            body {
                background: black;
                margin: 0;
                padding: 0;
                width: 100%;
            }
        </style>
        <style>
            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #212121;
                color: #fff;
                height: 60px;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 20%;
            }
            
            .nav-left,
            .nav-right {
                display: flex;
                align-items: center;
            }
            
            .nav-right a {
                font-size: 1.3rem;
            }
            
            .nav-name {
                font-size: 2rem;
                margin-left: 20px;
                text-decoration: none;
                color: #2c87f0;
                font-weight: bold;
            }
            
            .nav-button {
                font-size: 14px;
                margin-right: 50px;
                text-decoration: none;
                color: #fff;
            }
            
            .nav-button:last-of-type {
                background-color: #42b72a;
                color: #fff;
                border-radius: 4px;
                padding: 10px 30px;
                font-weight: bold;
                font-size: 1.5rem;
            }
            
            .nav-button:hover {
                text-decoration: underline;
                transition: 2s;
            }
            
            .search-form {
                display: flex;
                align-items: center;
            }
            
            .search-form input[type="text"] {
                border: none;
                font-size: 1.1rem;
                padding: 10px;
                width: 230px;
                margin-right: 40px;
                border-radius: 10px;
            }
        </style>
        <nav>
            <div class="nav-left">
                <a class="nav-name" href="index.html">Famevest</a>
            </div>
            <div class="nav-right">
                <form class="search-form">
                    <input type="text" placeholder="Search...">
                </form>
                <a class="nav-button" href="#">Docs</a>
                <a class="nav-button" href="#">Features</a>
                <a class="nav-button" href="#">Trends</a>
                <a class="nav-button" href="#">Settings</a>
                <a class="nav-button" href="login.html">Login</a>
            </div>
        </nav>
        <style>
            .sidebar {
                position: fixed;
                top: 60px;
                left: 0;
                bottom: 0;
                width: 200px;
                background-color: black;
                color: #fff;
                display: flex;
                flex-direction: column;
            }
            
            .sidebar-item {
                display: flex;
                align-items: center;
                padding: 20px;
                cursor: pointer;
                font-size: 1.4rem;
                color: white;
            }
            
            .sidebar-item:hover {
                background-color: #212121;
                border-radius: 10px;
            }
            
            .sidebar-item img {
                width: 24px;
                height: 24px;
                margin-right: 20px;
            }
        </style>

        <div class="sidebar">
            <a href="myprofile.html">
                <div class="sidebar-item">
                    <img src="/images/profile.png" alt=""> Profile
                </div>
            </a>
            <a href="wallet.html">
                <div class="sidebar-item">
                    <img src="/images/wallet.png" alt=""> Wallet
                </div>
            </a>
            <a href="portfolio.html">
                <div class="sidebar-item">
                    <img src="/images/portfolio.png" alt=""> Portfolio
                </div>
            </a>
            <div class="sidebar-item">
                <img src="/images/watchlist.png" alt=""> Watchlist
            </div>
            <div class="sidebar-item">
                <img src="/images/inbox.png" alt=""> Inbox
            </div>
            <div class="sidebar-item">
                <img src="/images/notes.png" alt=""> Notes
            </div>
            <div class="sidebar-item">
                <img src="/images/more.png" alt=""> More
            </div>
        </div>

        <style>
            .login-card {
                background-color: #212121;
                border-radius: 10px;
                width: 400px;
                margin: 0 auto;
                padding: 20px;
                text-align: center;
                color: white;
                margin-top: 150px;
            }
            
            .login-card input[type="email"],
            .login-card input[type="password"],
            .login-card input[type="username"] {
                width: 95%;
                height: 50px;
                border-radius: 10px;
                font-size: 1.3rem;
                margin-bottom: 10px;
                padding-left: 10px;
            }
            
            .login-card input[type="checkbox"] {
                width: 15px;
                height: 15px;
            }
            
            .login-card input[type="submit"] {
                width: 120px;
                height: 50px;
                border: none;
                border-radius: 10px;
                font-size: 1.3rem;
                background-color: #2c87f0;
                color: white;
                cursor: pointer;
            }
            
            .maincontent {
                margin-top: 75px;
                margin-left: 210px;
            }
            
            .signupoption a {
                color: #2c87f0;
                text-decoration: none;
            }
            
            .checkrem {
                display: flex;
                align-items: center;
            }
        </style>

        <div class="maincontent">


            <div class="login-card">
                <form method="post" name="signup">
                    <input type="email" name="email" placeholder="Enter Email..." required>
                    <input type="username" name="uname" placeholder="Enter Username..." required>
                    <input type="password" name="pword" placeholder="Enter Password..." required>
                    <div class="checkrem">
                        <input type="checkbox">
                        <h3>Remember me</h3>
                    </div>
                    <br>
                    <br>
                    <br>
                    <input type="submit" name="signup" value="Sign up" id="signup">
                    <br>
                    <br>
                    <div class="signupoption">
                        <h3>
                            Already have an account?
                            <a href="login.html">
                        Log in
                      </a>
                        </h3>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>