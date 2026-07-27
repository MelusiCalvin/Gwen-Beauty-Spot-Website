<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">

        <link rel="stylesheet" href="assets/css/bootsstrap.min.css">        
        <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.css"> 
        <title>Login</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            
            html, body{
                height: 80%;
                width: 100%;
                font-family: 'Poppins', sans-serif;
                color: #222;
            }
            .navbar{
                padding: .8rem;
            }
            .navbar-nav li{
                padding-right: 20px;
            }
            .nav-link{
                font-size:  1.1em !important;
            }

            .error {
                    width: 92%; 
                    margin: 0px auto; 
                    padding: 10px; 
                    color: #a94442; 
                    border-radius: 5px; 
                    text-align: left;
                    }

            body{
                background: rgb(219, 226, 226);
            }

            .row{
                background: white;
                border-radius: 30px;
                box-shadow: 12px 12px 22px grey;
            }

            img{
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
            }

            .btn1{
                border: none;
                outline: none;
                height: 50px;
                width: 100%;
                background-color: black;
                color: white;
                border-radius: 4px;
                font-weight: bold;
                transition: 0.9s;
            }
            .btn1:hover{
                background-color: blanchedalmond;
                color: black;
                border: 1px solid;
                transition: 0,9s;
            }
            input:hover{
                transition: 0.5s;
                background: blanchedalmond;
            }
            .Form{
                margin-top: 90px;
            }
            
        </style>
    </head>
    <body style="background-image: url('../pics/16.jpg');background-size: 100%;background-position: center;">

    <div class="wrap">

            <section class="Form" id="form" >
    
            <div class="container">
    
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="../pics/3.jpg" class="img-fluid" alt="">
                    </div>
    
                    <div class="col-lg-7 px-5 pt-5">
                        <h1 class="font-weight-bold py-3" >Admin Login</h1>
                        <h5>Only Administrators...!</h5>                        
    
                         <form action="code.php" method="POST">

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="email" placeholder="Email Address" class="form-control my-3 p-4" name="email">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="password" placeholder="Password" class="form-control my-3 p-4" name="password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="submit" class="btn1 mt-3 mb-5" name="login_btn" >Login</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </section>
    <!--start of the footer-->
    
    <!--end of the footer-->
    </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
    </body>
</html>