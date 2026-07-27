
<html>
    <head>
        <meta charset="UTF-8">
        <title>Here is your title of your web-page</title>
    </head>
    <body>
    <?php include('header.php'); ?>
    <style>
            .body{
                background-image: url('pics/night.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                margin-bottom: 120px;
            }
            .box{
                background-color: rgba(0, 0, 0, 0.4);
                margin: 60px 0;
                border-radius: 10px;
            }
            .section{
                padding: 50px;
                box-shadow:  5px 15px 15px rgba(0, 0, 0, 1),
                            5px 15px 15px rgba(0, 0, 0, 1),
                            5px 15px 15px #fff,
                            5px 15px 15px #333;
                border-radius: 10px;
            }
            .box .section form{
                background-color: rgba(0, 0, 0, 0.2);
                padding: 10px 50px;
            }
            .box .section form h3{
                color: #eee;
                font-weight: 100;
                font-size: 50px;
            }
            .box .section form input:focus{
                background-color: rgba(0, 0, 0, 0.2);
                border-right: 3px solid salmon;
                border-bottom: 3px solid salmon;
                color: #fff;
            }
            .box .section form input{
                background-color: transparent;
                font-size: 20px;
                color: #fff;
                border: 0;
                text-align: center;
                border-right: 3px solid #333;
                border-bottom: 3px solid #333;
            }
            .box .section form textarea:focus{
                color: #fff;
                background-color: transparent;
                border-bottom: 3px solid salmon;
                border-right: 3px solid salmon;
            }
            .box .section form textarea{
                font-size: 20px;
                color: #fff;
                background-color: rgba(0, 0, 0, 0.2);
                border: none;
                text-align: center;
                border-right: 3px solid #333;
                border-bottom: 3px solid #333;
            }
            .box .section form hr{
                width: 70%;
                height: 2px;
                background: salmon;
                border: none;
            }
            .box .section form button:hover{
                transition: 1s;
                background-color: rgba(0, 0, 0, 0.1);
                border-bottom: solid 1px salmon;
                border-right: solid 1px salmon;
                color: rgba(0, 0, 0, 0.1);
            }
            .box .section form button{
                transition: 1s;
                background-color: rgba(0, 0, 0, 1);
                color: #fff;
                font-weight: 700;
                font-size: 20px;
            }
            .footer{
                width: 100%;
                height: 140px;
                position: fixed;
                bottom: -50px;
                z-index: -2;
                background: #6c0099;
                color: white;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .footer .footer--social{
                padding: 0;
                margin: 0;
                list-style: none;
                text-align: center;
                float: none;
                position: relative;
            }
            .footer .footer--social li{
                display: inline-block;
                padding: 5px;
                text-align: center;
            }
            .footer .social-lists a{
                color: #fff;
                font-size: 24px;
            }
            .footer .footer-copy .data{
                font-family: Poppins;
                color: #fff;
                letter-spacing: 2px;
                font-weight: 600;
                /* transform: translate(-50%, -50%); */
            }
            @media screen and (max-width:600px){
                .footer .footer-copy .data{
                    font-family: Poppins;
                    color: #fff;
                    font-size: xx-small;
                    /* transform: translate(-50%, -50%); */
                }
                .box .section form textarea{
                    font-size: 15px;
                }
                .box .section form input{
                    font-size: 15px;
                }
            }
            </style>
    <div class="body">
    <div class="container">
                <div class="box">
                <div class="section p-5">
                <form role="form" id="contact-form" class="contact-form text-center" action="data.php" method="post">
                    <h3>Contact us</h3>
                    <hr>

                    <?php if (isset($_SESSION['success']))
                    {
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        
                    } ?>
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-warning"><?php echo $_SESSION['error']; unset($_SESSION['error']) ?></div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <input type="email" class="form-control" name="contact-email" autocomplete="off" id="contact-email" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" autocomplete="off" id="subject" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <textarea class="form-control textarea" rows="9" name="msg" id="msg" placeholder="Please state your enquiry..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-secondary w-100 pull-right">Send a message</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
       
    </div>
           <?php
            include('footer.php')
            ?>

</body>
</html>