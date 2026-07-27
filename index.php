<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GwenBeautySpot</title>

    <!-- <link rel="stylesheet" href="css/styling.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <style>

        #header {
			
            background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #fff, #333);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #fff, #333); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
        }
        #top-header {
              
  
            background: #870000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #333, #fff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #333, #fff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


            }
        /*footer*/
        section{
            background: #fff;
            margin-bottom: 120px;
            box-shadow: 0 3px 15px 2px rgba(61, 61, 61, 0.9);
        }
        body{
            margin: 0;
            background: #fff;
            /* height: 150vh; */
            overflow-x: hidden;
        }
        .footer{
            width: 100%;
            height: 120px;
            position: fixed;
            bottom: 0;
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
        }

        .about{
    /* min-height: 100vh; */
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1cb;
}
.about-section{
    background: url('pics/2 (18).jpg') no-repeat left;
    background-size: 60%;
    background-color: #fcdfee;
    overflow: hidden;
    padding: 100px 0;
}
.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}
.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}
.text-abt{
    font-size: 20px;
    font-weight: 500;
    color: #545454;
    text-align: justify;
    margin-bottom: 40px;
}
.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 18px;
}
@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}
@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 0;
    }
    .inner-container{
        width: 100%;
    }
    .welcome-txt span{
        font-size: 30px;
    }
}

@media screen and (max-width:400px){
    .welcome-txt span{
        font-size: 10px;
    }
}
@media screen and (max-width:600px){
    .cover{
        height: 30vh;
    }
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
    .welcome-txt span{
        font-size: 30px;
    }
}

.welcome-txt{
    text-align: center;
    position: absolute;
    left: 0;
    margin-top: 15%;
    width: 100%;
}
.welcome-txt span{
    text-transform: uppercase;
    display: block;
}
.text1{
    color: #fff;
    font-size: 30px;
    text-decoration: underline;
    font-family: chiller;
    letter-spacing: 10px;
    margin-bottom: 20px;
    position: relative;
    animation: text 2s;
}
.cover{
    width: 100%;
    height: 90vh;
}
.text2{
    font-size: 60px;
    font-weight: 900;
    letter-spacing: 10px;
    color: #920f51;
    animation: text 3s;
}
@keyframes text{
    0%{
        letter-spacing: 50px;
        font-size: 10px;
        opacity: 0;
        color: rgba(0, 0, 0, 0.1);
    }
    50%{
        letter-spacing: 8px;
        color: rgba(0, 0, 0, 0.7);
    }
    85%{
        letter-spacing: 20px;
        color: #ff0080;
    }
}
@media(max-width:992){
    .text1 ,.text2{
        font-size: 10px;
    }
}
    </style>
</head>
<body>
    
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					
					<ul class="header-links ">
						<li><a href="#"><i class="fa fa-inr"></i> INR</a></li>
                        <li><?php

                            include "db.php";
                             include "code.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT * FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                ?>
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI <?php echo $row["first_name"];?> </a>
								  <div class="dropdownn-content">
								  <form action="profile_update.php" method="post" >
								    <input type="hidden" name="edit_id" value="<?php echo $_SESSION['uid']; ?>" >
									<button style="background-color: #1E1F29; border: none; color: #fff; font-weight: 500; padding-top: 5px; padding-left: 15px; width: 100%;
									height: 35px; text-align: left;" name="edit_btn" ><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</button>
								  </form>
									
									<a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';
								<?php
                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                                             ?>
                               
								</li>
								<li class="pull-right">
									<h2 style="color: #B53AFF;font-weight:900;">GWENBEAUTYSPOT</h2>
								</li>
					</ul>
					
				</div>
			</div>
			<!-- /TOP HEADER -->
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
													
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>
													
                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>

                        </div>
                      </div>

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">

						<!-- ACCOUNT -->
						<div class="col-lg-3 col-md-3 col-sm-3 clearfix pull-left">
							<div class="header-ctn">
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span style="cursor: pointer;">Your Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown" style="margin-left: 15px;" >
										<div class="cart-list" id="cart_product">
										
											
										</div>
										
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>
											
										</div>
									</div>
									</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->

						<div class="col-lg-9 col-md-9 col-sm-9">
							<nav id='navigation pull-right'>
								<!-- container -->
								<div class="container" id="get_category_home">

								</div>
									<!-- responsive-nav -->
									
								<!-- /container -->
							</nav>
						</div>
								

							<!-- NAVIGATION -->

					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
        <!-- /HEADER -->
        
    <section style="background:  rgb(245, 245, 245); " >
        <div id="progressbar"></div>
        <div id="scrollPath"></div>

                    <!--particles-->
                    <div class="cover">
                            
                        <div id="particles-js" style="
                                background-image:url('pics/2 (25).jpg') ;
                                background-size: 100% 100%;
                                justify-content: center;
                                align-items: center;
                                top: 0;">
                            <!--welcome message-->
                            <div class="welcome-txt">
                                <span class="text1">Welcome To</span>
                                <span class="text2">GwenBeautySpot</span>
                            </div>
                            <!--/welcome message-->
                        </div>
                        
                    </div>

                    <!--About us section-->
        <div class="about">
            <div class="about-section">
                <div class="inner-container">
                    <h1>About Us</h1>
                    <p class="text-abt">
                        From being creative and all trying to improve the way women look,
                        all I want is women looking splendid and more significantly ,very beautiful
                        so to embrace my talent all over the continent and over the world if that's 
                        what is takes. As for anyone who goes out for functions or concerts you know what to do. :)
                    </p>
                    <div class="skills">
                        <span>Make-up Artist</span>
                        <span>Photoshop & Illustrator</span>
                        <span>Graphic Designer</span>
                    </div>
                </div>
            </div>
        </div>
            <!--end of About us section-->

                 <!--welcome sec-->
            <center>
                <div class="container-fluid padding">
                    <div class="row welcome text-center">
                        <div class="col-12">
                            <h1 class="display-4">Get My Media</h1>
                        </div>
                        <hr>
                        <div class="col-12">
                            <p class="lead">You can use my videos to learn how I do the beautiful looks so you can 
                                also learn it all by your self at home and can get to see my art gallery of my workplace
                                 in action.  </p>
                        </div>
                    </div>
                    <hr class="my-4">
                </div>
                </center>

                <!--emoji section-->
                <button class="fun" data-toggle="collapse" data-target="#emoji"> Hair That Goes With The Make Up </button>
                <div id="emoji" class="collapse">
                    <div class="container-fluid padding">
                        <div class="row text-center">
                            
                            <div class="col-sm-6 col-md-3">
                            <img class="gif" src="gifs/2 (1).gif" alt=""  width="300px" height="300px">   
                            </div>   

                            <div class="col-sm-6 col-md-3">
                            <img class="gif" src="gifs/2 (2).gif" alt=""  width="300px" height="300px">   
                            </div>   

                            <div class="col-sm-6 col-md-3">
                            <img class="gif" src="gifs/2 (3).gif" alt="" width="300px" height="300px">   
                            </div>   

                            <div class="col-sm-6 col-md-3">
                            <img class="gif" src="gifs/2 (4).gif" alt=""  width="300px" height="300px">   
                            </div>   

                        </div>

                    </div>
                </div>
                
            </div>
<hr class="my-4">
<div class="container1" >
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 style="font-weight: 500;font-size: 36px;" class="display-4">Brands</h1>
            <hr>
            <p class="lead" >
            You can choose your favorite brand.
                </p><br />
                
            
        </div>

    </div>
    <!--/.HEADER LINE END-->

<div class="container">
  <div class="row" >
  
      
        
           <img class="img img-rounded img-responsive" src="pics/18.jpg"  style="width:2000px;height:500px;"/>
          
         
        
        <div class="col-lg-12">
        
           
          </div>
        
        </div>
      </div>
    </div>

     
<div class="section">
    <div class="containers">
        <div class="cards">
            <div class="imgBx" data-text="Janine">
                <img src="pics/2 (11).jpg" alt="">
            </div>
            <div class="content">
                <div>
                <h3>Janine Fox</h3>
                <p>" Thank you so very much for the amazing job you did for my wedding! I can't recommend you highly enough. "
                </p>
                <!-- <a href="#">Read More</a> -->
                </div>
            </div>
        </div>

        <div class="cards" style="background:rgb(219, 212, 212);">
            <div class="imgBx" data-text="Careen">
                <img src="pics/2 (4).png" alt="">
            </div>
            <div class="content">
                <div>
                <h3>Careen Killingbeck</h3>
                <p>" If I could rate Gwen more than 5 stars I would! Gwen provided an excellent makeup service for me when competing. Not only is her work amazing she is a beautiful, friendly person who made me feel comfortable. I loved her and her work that much she was the first person I thought of when organising makeup for my upcoming wedding. "
                </p>
                <!-- <a href="#">Read More</a> -->
                </div>
            </div>
        </div>
        <div class="cards"  style="background:rgb(219, 212, 212);">
            <div class="imgBx" data-text="Belinda">
                <img src="pics/2 (4).jpg" alt="">
            </div>
            <div class="content">
                <div>
                <h3>Belinda Alderson</h3>
                <p>" Gwen you are so amazing at what you do! Thank you so much for everything! I felt so beautiful on our wedding day. Not only are you superwoman with a makeup brush, you are so lovely and such a delight to have around the morning of the wedding!! Any bride would be very lucky to have you part of her big day, I am very grateful that you were part of mine xxxx "</p>
                <!-- <a href="#">Read More</a> -->
                </div>
            </div>
        </div>
        <div class="cards"  style="background:rgb(219, 212, 212);">
            <div class="imgBx" data-text="Kate">
                <img src="pics/2 (1).jpg" alt="">
            </div>
            <div class="content">
                <div>
                <h3>Kate Haidar</h3>
                <p>" Seriously the BEST makeup artist I have ever met! So talented! She is now also booked in to do my bridal makeup! "</p>
                <!-- <a href="#">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>


    </section>
    
    <footer class="footer">
        <ul class="social-lists footer--social">
            <li > <a href="www.twitter.com"> <i class="fa fa-twitter"> </i> </a> </li>
            <li> <a href="#"> <i class="fa fa-linkedin"> </i> </a> </li>
            <li> <a href="#"> <i class="fa fa-pinterest"> </i> </a> </li>
        </ul>
        <div class="footer-copy">
            <div class="data">
            &copy;GwenBeautySpot 2020 || All Rights Reserved ||
            By : MelusiTheProgrammer
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="js/baffle text reveal.js"></script>
    <script type="text/javascript">
        const text = baffle('.data');
        text.set({
            characters : '▒<> /<▒/▓ ▒█▒█▓ /▓/ ▓/█>/ ▓░// ▓/░ ▒▒▓▓ ▒▒░░▓<░ ▓>▓<█ ▒░░░░ ▒▒▓ >▓█▓░ █/▓█ ▓<█ ▒█// ░>><░▒░ >▓//░ >░▓▓█ █▒▓ ▒▒<▒█ █░▒░ ▓█> <░>> <▓░▒',
            speed : 120
        });
        text.start();
        text.reveal(10000);
    </script>

<script type="text/javascript">
    let progress = document.getElementById('progressbar');
    let totalHeight = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function(){
        let progressHeight = (window.pageYOffset / totalHeight) * 97;
        progress.style.height = progressHeight + "vh";
    }
</script>


    <script src="js/script.js"></script>
		<script>
        
        var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
</script>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--particles js files included-->
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
    <script src="js/actions.js"></script>
    
</body>
</html>