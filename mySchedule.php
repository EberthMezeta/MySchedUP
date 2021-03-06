<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>My SchedUP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"  media="all">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css"  media="all">
    <link rel="stylesheet" href="assets/css/Cool-Navbar.css"  media="all">
    <link rel="stylesheet" href="assets/css/styles.css"  media="all">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

</head>

<body class="Body">
    <header class="header-nav">
        <nav class="navbar navbar-light navbar-expand-md fixed-top text-capitalize bg-inverse scrolling-navbar" id="main-navbar">
            <div class="container"><a class="navbar-brand" href="index.php"><img id="brand-image" src="assets/img/Main/Logo.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item" id="Home"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item" id="ContainerSchedUP">
                            <p id="MySchedUP">My SchedUP</p>
                        </li>
                        <li class="nav-item" id="Team"><a class="nav-link" href="team.php">Team</a></li>
                        <li class="nav-item" id="IDUser"><a class="nav-link" id="Changelogin" href="login.php">Login</a></li>
                        <li class="nav-item" id="LogOut"><button class="btn btn-primary LogOut-Icon" id="LogOut" type="submit" style="background: url(&quot;assets/img/Icons/Logout.png&quot;) center / contain no-repeat;"></button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="header-container"><label class="btn-label" for="btn-nav">Label</label>
        <div class="header-button"></div>
    </div>
    <main id="mainForm" class="main">
        <div id="container" class="container">
            <div id="menu" class="menu">
                <nav class="navbar navbar-light navbar-expand-md">
                    <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-2">
                            <ul class="nav navbar-nav" id="menu">
                                <li class="nav-item" id="SubjectItem" style="background: url(&quot;assets/img/Icons/Subject.png&quot;) left / contain no-repeat;"><input type="text" id="Subject" name="Subject" placeholder="Group Name / Subject">
                                
                                <div id="InvalidSubject">

                                </div>
                                
                                </li>
                                <li class="nav-item" id="TeacherItem" style="background: url(&quot;assets/img/Icons/Teacher.png&quot;) no-repeat;background-size: contain;"><input type="text" id="Teacher"  name="Teacher" class="Teacher" placeholder="Teacher">
                                <div id="InvalidTeacher">

                                </div>
                                
                                </li>
                                <li class="nav-item" id="weekDays" style="background: url(&quot;assets/img/Icons/calendar.webp&quot;) no-repeat;background-size: contain;"><select id="Days" class="Days">
                                        <optgroup label="WeekDays">
                                            <option value="Monday" selected="">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </optgroup>
                                    </select></li>
                                <li class="nav-item" id="STime">
                                    <p id="TimeTxt">Start Time:&nbsp;</p><input id="StartTime" class="StartTime" name="StartTime" type="time">
                                </li>
                                <li class="nav-item" id="ETime">
                                    <p id="TimeTxt" class="TimeTxt">End Time:&nbsp;</p><input id="EndTime" name="EndTime" class="EndTime" type="time">
                                </li>
                                <li class="nav-item" id="AddSubjectButton"><button class="btn btn-primary" id="AddSubjectBTN" type="button" style="font-size: 12px;text-align: center;">Add Subject</button></li>
                                <li class="nav-item" id="PrintScheduleButton"><button class="btn btn-primary" id="PrintBTN" type="button" style="font-size: 12px;text-align: center;" onclick="javascript:window.print()" >Print My SchedUP</button></li>
                                <li class="nav-item" id="DownloadButton"><button class="btn btn-primary" id="DownloadBTN" type="button" style="font-size: 12px;text-align: center;" onclick="DownloadSchedule()" >Download My SchedUP</button></li>
                                <li class="nav-item" id="InvalidStartTime"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="mainTable" class="scheduleTable">
            <div class="table-responsive" id="weekDaysTable">
                <p class = "header-title"> </p>
                <table class="table">
                    <thead >
                        <tr ></tr>
                    </thead>
                    <tbody>
                        <tr id="weekDaysRow">
                            <td><strong>Monday</strong></td>
                            <td><strong>Tuesday</strong></td>
                            <td><strong>Wednesday</strong></td>
                            <td><strong>Thursday</strong></td>
                            <td><strong>Friday</strong></td>
                            <td><strong>Saturday</strong></td>
                            <td><strong>Sunday</strong></td>
                        </tr>
                        <tr id="test" class="test">
                            <td id="MondayCell" class="test"></td>
                            <td id="TuesdayCell" class="test"></td>
                            <td id="WednesdayCell" class="test"></td>
                            <td id="ThursdayCell" class="test"></td>
                            <td id="FridayCell" class="test"></td>
                            <td id="SaturdayCell" class="test"></td>
                            <td id="SundayCell" class="test"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Cool-Navbar.js"></script>
    <script src="assets/js/mySchedule.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
</body>

</html>