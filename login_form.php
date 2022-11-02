<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Login!!!</title>
    </head>
    <style>
       body{
            font-family: Segoe UI, sans-serif;
            margin: 0;
            background-color: rgb(255,255,224);
       }
       
       .navtop {
            background-color: rgb(255,250,250);
            height: 90px;
            width: 100%;
            border: 0;
        }

        .navtop div{
            display: flex;
            margin: 0 auto;
            width: 800px;
            height: 100%;
        }
        
        .navtop div h1, .navtop div a, .navtop div img{
            display: inline-flex;
            align-items: center;
        }

        .navtop div h1{
            flex: 1;
            font-family: Impact, sans-serif;
            font-size: 28px;
            margin: 0;
            padding: 0;
            font-weight: normal;
            color: rgb(0,0,0); 
        }

        .navtop div img{
            height: 60px;
            width: 70px;
            margin: auto;
            padding: 0;
        }

        .navtop div a{
            padding: 0 20px;
            text-decoration: none;
            color: #c4c8cc;
            font-weight: bold;
        }

        .navtop div a i{
            padding: 2px 8px 0 0;
        }

        .navtop div a:hover{
            color: #ebedee;
        }
        form, .section-word {
            margin-top: 4%;
        }
   
       
        form{
            margin:;
            width: 300px;
            padding: 30px 25px;
            position: absolute;
            left: 55%;
            top: 22px;
       }

       .section-word{
            width: 600px;
            text-align: left;
            margin-left: 20px;
            border-right: 1px solid rgb(211,211,211);
       }
       
       h2{
            font-family: Impact, sans-serif;
            font-weight: normal;
            font-size: 30px;
        }
        label{
            text-align: left;
            padding: 0px, 18px, 18px, 0px;
            font-weight: bold;
        }
        input{
            margin-top: 6px;
            height: 25px;
            width: 175px;
        }

        .prompt-sign-up{
            font-size: 13px;
            font-weight: bold;
        }
        button{
	        margin-top: 10px;
            border: 5vw;
            border-radius: 4px;
            width: 5vw;
            height: 25px;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            background-color: rgb(255,69,0);
            color: white;
            cursor: pointer;
        }
    </style>
    
    <body>
       
        <?php
        session_start();

        require("connect.php");
        
        // If form is submitted, collect username and password from the form
        if(isset($_POST["login"])){
            $_username = $_POST["username"];
            $_password = $_POST["password"];

            $query =  "SELECT 'username','password' FROM users 
                WHERE username='$_username' AND password='$_password' ";

            $result = mysqli_query($conn, $query);    

            $user_matched = mysqli_num_rows($result);

            if ($user_matched > 0) { 
               
                $_SESSION["username"] = $_username;
                header("location: dashboard.php");

            } else {
                echo "Username and password do not match. Click here to login.";
            }
        }
        ?>
        <nav class="navtop">    
            <div>
            <img src="Boosted Academy.png"  alt="Boosted Academy Logo"><h1>BOOSTED TECHNOLOGIES BOOTCAMP</h1>
            </div>
        </nav>
        
        <div class="section-word">
            <img src="web-design.png" width="454" height="268">
        </div>
        
        <form method="post" name="login">
            <h2>Login</h2>
            <div>
                <label for="username">Username: </label>
                </br><input type="text" name="username" placeholder="Enter username" required>
            </div>
            <div>
                <label for="password">Password: </label>
                </br><input type="password" name="password" placeholder="Enter password" required>
            </div>
            <button type="submit" name="login">Login</button>
            <div class="prompt-sign-up">
                <p>Don't have an account? <a href="application_form.php">Sign up!!!</a></p>
            </div>
        </form>

        
    
    </body>
</html>