<?php 
    require("connect.php"); 

    if (isset($_POST["submit"])) {
        $_firstname = $_POST["firstname"];
        $_lastname = $_POST["lastname"];
        $_email = $_POST["email_address"];
        $_username = $_POST["username"];
        $_password = $_POST["password"];
        $_create_datetime = date("Y-m-d H:i:s");
        
        // An error message is output if email already registered
        $email_result = mysqli_query($conn, "select 'email_address' from users where email_address='$_email' and password='$_password'");

        // This counts the number of rows matched
        $user_matched = mysqli_num_rows($email_result);

        if($user_matched > 0){
            echo "<br/><br/><strong>Error: </strong> User already exists with the email '$_email'.";
        } else {
            // Insert new user into database
            $result = mysql_query($conn, "INSERT INTO users(firstname,lastname,email_address,username,password,create_datetime) VALUES('$_firstname',
                '$_lastname','$_email','$_username','$_password')");
            
            // Check if data is entered into the database successfully
            if($result){
                echo "Registration successfully";
            }
            else{
                echo "Registration unsuccessful" . mysqli_error($mysqli);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Apply for Bootcamp</title>
    </head>
    <style>
       body{
            font-family: Segoe UI, sans-serif;
            text-align: center;
            background-color: rgb(255,255,224);
       }
       
       form{
            margin: 25px auto;
            width: 300px;
            padding: 30px 25px;
       }

       .navtop {
            background-color: rgb(255,250,250);
            width: 100%;
            height: 90px;
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
      
       h1{
            font-family: Impact, sans-serif;
            font-weight: normal;
        }
        label{
            text-align: left;
            padding: 18px;
            margin: 16px;
            font-weight: bold;
        }
        input{
            margin: 12pt;
            height: 25px;
            width: 205px;
        }

        .prompt-sign-up{
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }
        button{
            margin: 10px;
	        border: 5vw;
            border-radius: 4px;
            width: 8vw;
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
        <nav class="navtop">    
            <div>
                <img src="Boosted Academy.png"  alt="Boosted Academy Logo"><h1>BOOSTED TECHNOLOGIES BOOTCAMP</h1>
            </div>
        </nav>
    
        <h1>Apply for Bootcamp</h1>
            <p>Fill in this form if you want to be enrolled in the Bootcamp</p>
        <form action="connect.php" method="post">
            <div class="form.firstname">
                <label for="firstname">First Name: </label>
                <input type="text" name="firstname" placeholder="Provide your first name.">
            </div>
            <div class="form.lastname">
                <label for="lastname">Last Name: </label>
                <input type="text" name="lastname" placeholder="Provide your last name.">
            </div>
            <div class="form.email">
                <label for="email_address">Email: </label>
                <input type="email" name="email_address" placeholder="Provide your e-mail address">
            </div>
            <div class="form.username">
                <label for="username">Username: </label>
                <input type="text" name="username" placeholder="Username you want to use">
            </div>
            <div class="form.password">
                <label for="password">Password: </label>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div class="form.button">
                <button type="submit">Register!!!</button>
            </div>
            
        </form>
</html>