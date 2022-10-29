<!DOCTYPE html>
    <html>
        <head>
            <title>PHP Blog</title>
            <link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
        </head>
        <style>
            .s {
                width: 70%;
                padding: 30px;
                border: 5px solid gray;
                margin: 20px auto;
            }
            .onlinebox {
                display: inline-block;
                position: relative;
                margin: 1%;
                float: left;
                width: 23%;
                height: 400px;
                border: 2px solid black;
                background-color: #ffff00;
            }
            .offlinebox {
                display: inline-block;
                margin: 1%;
                float: left;
                width: 23%;
                height: 400px;
                border: 2px solid black;
                background-color: #ffffff;
                opacity: 0.3;
            }
            .free {
                height: 25px;
                width: 25px;
                background-color: #50C878;
                border-radius: 50%;
                display: inline-block;
            }
            .offline {
                height: 25px;
                width: 25px;
                background-color: #808080;
                border-radius: 50%;
                display: inline-block;
            }
            .busy {
                height: 25px;
                width: 25px;
                background-color: #FF0000;
                border-radius: 50%;
                display: inline-block;
            }
            .management {
                display: inline-block;
                position: relative;
                margin: 1%;
                float: left;
                width: 23%;
                height: 400px;
                border: 2px solid black;
                background-color: #F8C8DC;
                padding: 10px 0px 0px 0px;
                justify-content: space-between;
                padding: 2px;
            }
            input[type=submit] {
                font-size : 20px;
                color: white;
                margin: 15px 20px;
                width: 90%;
            }
        </style>
    <body>
    <?php include('navbar.php'); ?>