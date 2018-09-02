<!DOCTYPE html>
<html>
<head>
    <title>Notepad3</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <meta charset="utf-8">
    <link rel="manifest" href="manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Chrome for Android theme color -->
        <meta name="theme-color" content="#DD2C00">

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Notepad3">
        <link rel="icon" sizes="192x192" href="favicon.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Notepad3">
        <link rel="apple-touch-icon" href="favicon.png">

        <!-- Tile for Win8 -->
        <meta name="msapplication-TileColor" content="#DD2C00">
        <meta name="msapplication-TileImage" content="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="height: 70px; padding-top: 10px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width: 150px; height: 50px; padding-bottom: 10px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li class="active"><a href="#">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img src="images/signup.png" style="width: 90%; height: 350px;" class="center-block">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <br><br>
            <h2>Sign Up Today</h2>
            <h4>You can create public notes without an account.</h4>
            <h4>Create your free account today, and get access to all the features.</h4>
            <br>
            <div style="display: flex; justify-content: center;">
                <a class="btn btn-primary" id="submitsave">Sign Up</a>
            </div>
        </div>
        </div>
        <br><br><br><hr>
        <div class="row">
        <div class="col-sm-6 col-md-push-6 col-lg-push-6">
            <img src="images/features.jpg" style="width: 90%; height: 350px;" class="center-block">
        </div>
        <div class="col-sm-6 col-md-pull-6 col-lg-pull-6">
            <br><br>
            <h2>Features</h2>
            <ul>
                <li><h4>Create Private Notes</h4></li>
                <li><h4>Create Public Notes and Share The Link With Others</h4></li>
                <li><h4>Access Public Notes Without an Account</h4></li>
            </ul>
            <br>
            <h3>No Internet Connection? No Problem</h3>
            <ul>
                <li><h4>Save All Your Notes For Offline Access</h4></li>
                <li><h4>Edit Your Current Notes in Offline Mode</h4></li>
                <li><h4>Create New Notes Offline</h4></li>
            </ul>
        </div> 
        </div>
        <br><br><br><hr>
        <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <br><br>
            <img src="images/developer.jpg" style="height: 300px; width: 200px; border-radius: 500px;" class="center-block">
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <br><br>
            <h2>About Developer</h2>
            <h4>This is me, Sanjay Shanbhag, the creator of this application. I am a Web Developer and a student of Computer Science Engineering.</h4>
            <h5>Note From The Developer:</h5>
            <p>This is not a finished product, and is still being improved. So, whenever you encounter any kind of bug, regardless of however small it maybe, it would be a great help if you could bring it to my notice. Just shoot me an email and I will try to fix the issue as soon as possible and inform you of the same.</p>
            <p>Thank You.</p>
            <p>Email: sanjayb.shanbhag@gmail.com</p>
        </div> 
        </div>
        <br><br><br><br>
    </div>
</body>
</html>