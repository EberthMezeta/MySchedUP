<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Cool-Navbar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/trelyco-login-vertical-horizontal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.2/sweetalert2.css" integrity="sha512-sdBlqIXiZQy6Z6WJXrCb6sQ3v1DF0x6qQghP56taypKGGuru3ANBhSFLePvcolfP8xCzVoNvhP8Smm29EH7eMQ==" crossorigin="anonymous" />
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


</head>

<body>
    <header class="header-nav">
        <nav class="navbar navbar-light navbar-expand-md fixed-top text-capitalize bg-inverse scrolling-navbar"
            id="main-navbar">
            <div class="container"><a class="navbar-brand" href="index.php"><img id="brand-image"
                        src="assets/img/Main/Logo.png"></a><button data-toggle="collapse" class="navbar-toggler"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item" id="Home"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item" id="ContainerSchedUP">
                            <p id="MySchedUP">My SchedUP</p>
                        </li>
                        <li class="nav-item" id="Team"><a class="nav-link" href="team.php">Team</a></li>
                        <li class="nav-item" id="Login"><a class="nav-link" id="Changelogin" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="main-login">
        <div class="container">
            <div class="login-card"><img class="profile-img-card" src="assets/img/Main/Logo2.png">
                <form class="form-signin"><span class="reauth-email"> </span>

                    <!--Input Email-->
                    <input class="form-control Field" type="email" id="inputEmail" name="email" required="" placeholder="Email" autofocus="">
                    
                    <!--Notification Username/Email-->
                     <div class="Container_Message" id="Invalidemail">
                    
                    </div>
                    
                    <!--Input Password-->
                    <input class="form-control" type="password" id="inputPassword" name="password" placeholder="Password" required=""
                        maxlength="16" minlength="8">

                    <!--Notification Password-->
                    <div class="Container_Message" id="Invalidpassword">
    
                    </div>

                    <!--Notification Password and Email-->
                    <div class="Container_Message" id="InvalidBoth">
                        
                    </div>  

                    <button class="btn btn-primary btn-block btn-lg btn-signin"
                        id="logButton" type="button">Login</button>
                </form>
              
                <div class="container-newRegister">
                    <p>Not a member yet?&nbsp; &nbsp;<a href="newRegister.php">Register now!</a></p>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.2/sweetalert2.min.js" integrity="sha512-8q8dX4h8U6M2QFpblGZKdat7oJyUgP7baNX0P5y3krh2gUoP91/F6sbkj27swwlBvDG9mFDtuXFrmX/u0CSlGA==" crossorigin="anonymous"></script>
   
    <script src="assets/js/Login.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Cool-Navbar.js"></script>

</body>

</html>