<?php
     session_start();
     if(!isset($_SESSION['userdata'])){
       header("location: ../");
    }
    
    $userdata = $_SESSION['userdata'];
?>
<html>

    <head>
        <title>Online Voting System-dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
</head>
    <body>
        <style>
            #backbtn{
                padding: 10px;
                border-radius: 5px;
                 background-color: blue;
                 color:white;
                 float: left;
            }
            #logoutbtn{
                padding: 10px;
                border-radius: 5px;
                background-color: blue;
                color:white;
                float: right;
            }
        </style>
        <div id="mainsection">
            <div id="headersection">
                <button id="backbtn">Back</button>
                <button id="logoutbtn">Logout</button>
                <h1>Online Voting System</h1>
            </div>
           <hr>
            <div id="Profile">
                <img src="../uploads/<?php echo $userdata['photo']?>"height="200" width="200">
                <b>Name:</b><br><br>
                <b>Mobile:</b><br><br>
                <b>Address:</b><br><br>
                <b>Status:</b><br><br>

            </div>
            <div id="Group">

            </div>
        </div>   

    </body>
</html>