<?php
session_start();

    $_SESSION;

    include("connection.php");
    include("functions.php");

    $user_data = check_loginplus($con);
?>

<!DOCTYPE html>
<html>

<head>

    <style>
        html {
            overflow-x: hidden;
            overflow-y: hidden;
        }

        body {
            background: #929292;
        }

        .divlogo {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80%;
            width: 100%;
        }

        .divcircle {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .divdrop {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10%;
            width: 10%;
        }

        .logo {
            width: 18%;
            filter: drop-shadow(0px 20px 15px rgba(0, 0, 0, 0.25));
        }

        .logo:hover{
            width: 22%;
            height: auto;
        }

        .dropdown {
            height: 50%;
            width: 50%;
        }

        .dropdown:hover {
            height: 60%;
            width: 60%;
        }

        .circle {
            height: 155vh;
            width: 155vh;
            background-color: #BCBCBC;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="divcircle">
        <div class="circle"></div>
    </div>
    <div class="divlogo">
        <img src="Group 5logoG.png" class="logo" onclick="roll()">
    </div>
    <div class="divdrop">
        <img src="Group 7drop.png" class="dropdown" onclick="dropdown()">
    </div>


    <script>
        function dropdown() {
            console.log("Dropdown button pressed!");
        }
        function roll() {
            window.open("https://www.youtube.com/watch?v=dQw4w9WgXcQ");

        }
    </script>
</body>

</html>