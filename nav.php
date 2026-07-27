<!DOCTYPE html>
<html>
<head>
	<!--Required meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css\bootsstrap.min.css">

    <title>Welcome to GwenBeatySpot</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .animated-nav{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #0d0f1b;
            overflow: hidden;
        }

        .animated-nav ul{
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .animated-nav ul li:before{
            content: attr(data-text);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: #fff;
            font-size: 6em;
            font-weight: 700;
            pointer-events: none;
            opacity: 0;
            letter-spacing: 20px;
            transition: 0.5s;
            white-space: nowrap;
        }

        .animated-nav ul li:hover:before{
            opacity: 0.1;
            letter-spacing: 5px;
        }

        .animated-nav ul li{
            list-style: none;
        }

        .animated-nav ul li a{
            position: relative;
            display: inline-block;
            padding: 6px 15px;
            text-decoration: none;
            background: #2196f3;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            overflow: hidden;
            transition: 0.5s;
            z-index: 1;
        }

        .animated-nav ul:hover li a{
            opacity: 0;
        }

        .animated-nav ul li a:hover{
            transform: scale(1.4);
            z-index: 1000;
            background: #ff3f81;
            opacity: 1;
        }

        .animated-nav ul li a:before{
            content: '';
            position: absolute;
            top: 0;
            left: -100;
            width: 80px;
            height: 100%;
            background: linear-gradient(90deg,transparent,rgba(255,255,255,0.8), transparent);
            transform: skew(35deg);
            transition: 0s;
        }   

        .animated-nav ul li a:hover:before{
            left: calc(100% + 100px);
            transition: 0.5s;
            transition-delay: 0.2s;
        }
    </style>
</head>
<body>

    <div class="animated-nav">
        <center>
        <ul>
            <li data-text="Administration section"><a href="admin/index.php">Administration section</a></li>
            <li data-text="Customer Section"><a href="index.php">Customer Section</a></li>
        </ul>
        </center>
    </div>    

	<!--Optional Javascript-->
	<!--jQuery first, then Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>