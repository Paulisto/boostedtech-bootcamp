<?php
    include 'calendar.php';
    $calendar = new Calendar('2022-10-01');
    $calendar->add_event('Hacking and Penetration', '2022-10-02', 7, 'red');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bootcamp Calendar</title>
        <link href="calendar.css" rel="stylesheet" type="text/css">
    </head>
    <style>
        * {
            box-sizing: border-box;
            font-family: Segoe UI, sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            -mox-osx-font-smoothing: grayscale;
        }

        body{
            background-color: rgb(255,255,224);
            margin: 0;
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
        
        .navtop div h1, .navtop div a{
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
        
        .content{
            width: 800px;
            margin: 0 auto;
        }

        .content h1{
            font-family: Impact, sans-serif;
            font-weight: normal;
            font-size: 30px;
        }
        .content h2{
            margin: 0;
            padding: 25px 0;
            font-size: 22px;
            border-bottom: 1px solid #ebebeb;
            color: #666666;
        }

       
    </style>
    <body>
        <nav class="navtop">    
            <div>
                <img src="Boosted Academy.png"  alt="Boosted Academy Logo"><h1>BOOSTED TECHNOLOGIES BOOTCAMP</h1>
            </div>
        </nav>
        <div class="content home">
            <h1>Calendar</h1>
            <p>Below is the calendar displaying all the bootcamps (both ongoing and past).</p>
            <p>If you want to enrol, click here to <a href="application_form.php">register</a>.</p>
            <p>If you have already enrolled, click here to <a href="login_form.php">sign in</a>.</p>
            <?=$calendar?>
        </div>
    </body>
</html>