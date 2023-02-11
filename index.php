<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tobi Salau">
    <meta name="description" content="SizeItRight">
    <title>SizeItRight</title>
    <!-- <link rel="icon" href="oplogo.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="size.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@500&display=swap"
        rel="stylesheet">


    <style>
        h1 {
            font-family: 'Pacifico', cursive;
        }

        #sign {
            font-family: 'Bebas Neue', cursive;
        }

        #qui {
            font-family: 'Bebas Neue', cursive;
        }

        #des {
            font-family: 'Bebas Neue', cursive;
        }

        .lisel {
            font-family: 'Bebas Neue', cursive;
        }

        h2 {
            font-family: 'Bebas Neue', cursive;
        }
    </style>

    <script type="module" src="back.js">
    </script>

</head>

<body>
<?php

/* $uname = $pword = "";
$firstErr = "";

function errHan($error) {
    if (empty($firstErr)) {
        $firstErr = $error;
    }
}

function vali_input($info) {
    $info = trim($info);
    $info = stripslashes($info);
    $info = htmlspecialchars($info);
    return $info;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        errHan("Please enter a username");
    }
    else {
        $uname = vali_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z0-9_]*$/",$uname)) {
            errHan("Only letters, number and underscores are allowed in usernames");
        }
    }
    
    if (empty($_POST["pwrd"])) {
        errHan("Please enter a password");
    }
    else {
        $pword = vali_input($_POST["pwrd"]);;
    } */
    
    // $connection = obdc_connect('DRIVER={ODBC Driver 18 for SQL Server};Server=tcp:sizeserver2.database.windows.net,1433;DATABASE=sizedb5;UID=ooas3;PWD=Password22!!;CONNECTION TIMEOUT=30;');
}
/* 
    $serverName = "sizeserver2.database.windows.net"; 
    $connectionOptions = array(
        "Database" => "sizedb5", 
        "Uid" => "ooas3", 
        "PWD" => "Password22!!" 
    );
    /* //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT brandname FROM Brands WHERE b_id == 1";
    $getResults= sqlsrv_query($conn, $tsql);
    echo $getResults
    /* if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults); */

?>
    <header>
        <ul id="ups">

            <li>
                <h1 id="named"><a href="index.html">SizeItRight</a> </h1>
            </li>

        </ul>
    </header>

    <div id="show">
        <img src="shirts.jpg" alt="T-shirts folded up" id="im1">
    </div>

    <div id="log">
        <!-- <p id="sign">Why do I have to sign in with google?</p> -->
        <button onclick="getStarted()">Get Started</button>
    </div>

    <div id="anim-cont">
        <div id="anim-txt"> <a
                href="https://startups.co.uk/news/clothing-height-of-everest-sent-to-landfill-every-7-minutes/"
                target="_blank">20
                billion garments produced for fashion end up in landfill yearly. Every 16 seconds the equivalent of the
                height of the Eiffel Tower is thrown in landfill </a> </div>
    </div>
    <div id="righty">
        <p id="qui">Who are we?</p>
        <ul id="des">
            <li>We're SizeItRight - a UK tech startup founded in 2023 </li>
            <li>We want to reduce clothes waste</li>
            <li>According to the BBC, 2.3 <strong>billion</strong> kilograms of waste are generated through the return
                of purchased items</li>
            <li>Fashion is the top selling industry online, and our website will reduce the number of fashion
                accessories returned </li>
            <li>How?</li>
        </ul>
    </div>

    <div id="page2intro">
        <section class="signin">
            <h2>Log in</h2>
            <form method="post" action="<?php echo htmlspecialchars("index2.php");?>" id="loggy">
                <input type="text" class="input" name="username" placeholder="Username"><br>
                <input type="password" class="input" name="pwrd" placeholder="Password"> <br>
                <input type="submit" value="Submit" class="input">
            </form>
            <!-- <span id="errShow"> <?php echo $firstErr;?> </span> -->
        </section>
    </div>
    <!-- <div id="thelist">
        <ul id="select" style="padding: 0; margin: 0;">
            <li class="lisel" onclick="cloth()">
                <h2>Clothes</h2>
            </li>
            <li class="lisel">
                <h2>|</h2>
            </li>
            <li class="lisel">
                <h2>Shoes</h2>
            </li>
        </ul>
    </div> -->
    <footer id="foot">
        <!-- <hr style="position:absolute; bottom:0%; width:100%; background-color:black; height:0.2%; padding:0; margin:0;"> -->
        <p id="copy">SizeItRight 2022 - founded by Tobi Salau All rights reserved</p>
    </footer>

    <script src="back.js">
    </script>
</body>

