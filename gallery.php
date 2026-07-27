
<?php
// include('header.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
	
	<title>ShowCase Room</title>

		<!-- <link rel="stylesheet" href="css/bootsstrap.min.css"> -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>


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
        body{
                height: 100%;
                width: 100%;
                font-family: 'Poppins', sans-serif;
                color: #222;
            }
		.wrap{
			background-image: url('pics/2 (25).jpg');
			margin-bottom: 120px;
		}
		hr{
		border-top: 2px solid #b4b4b4;
		width:95%;
		margin-top: .3rem;
		margin-bottom: 1rem;
		}

	/*	.wrap img{
			width: 100%;
			height: 100vh;
			opacity: 1;
		}
		*/

		body{
			background-image: url('pics/2 (18).jpg');
			/* padding: 40px 20px; */
		}

		#our-team{
			border-bottom-left-radius: 20px;
		}

		#our-team img{
			border-top-left-radius: 20px;
		}

		#our-team1{
			border-bottom-right-radius: 20px;
		}

		#our-team1 img{
			border-top-right-radius: 20px;
		}

		.container{
			padding: 10px 10px;
		}

		@import url('https://fonts.googleapis.com/css?family=Galada');
		.lt h2{
			font-family: chiller;
			padding-top: 15px;
			font-size: 7rem;
			color: #f5deb3;
			text-shadow: 5px 5px 10px #a78d8d;
		}

		.our-team{
			text-align: center;
			transition: all 0.5s ease 0s;
			margin-top: 3rem;
		}

		.our-team .pic{
			overflow: hidden;
			position: relative;
		}

		.our-team:hover{
			box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5),
						0 1px 4px wheat,
						0 0 40px white inset;
		}

		.our-team .pic img{
			height: auto;
			width: 100%;
		}

		.our-team .pic:before,
		.our-team .pic:after{
			content: "";
			width: 200%;
			height: 80%;
			position: absolute;
			top: -100%;
			left: -4%;
			transform: rotate(45deg);
			transition: all 0.5s ease 0s;
			background: rgba(16, 159, 191, 0.8);
		}

		.our-team .pic:after{
			top: auto;
			left: auto;
			bottom: -100%;
			right: -4%;
			background: rgba(226, 178, 3, 0.8);
		}

		.our-team:hover .pic:before{
			top: 0;
		}

		.our-team:hover .pic:after{
			bottom: 0;
		}

		.social{
			width: 100%;
			padding: 0;
			margin: 0;
			list-style: none;
			position: absolute;
			bottom: 45%;
			left: 0;
			opacity: 0;
			z-index: 2;
			transition: all 0.5s ease 0.3s;
		}

		.social li{
			display: inline-block;
		}

		.our-team:hover .social{
			opacity: 1;
		}

		.social li a{
			display: block;
			width: 80px;
			height: 80px;
			line-height: 75px;
			font-size: 35px;
			position: relative;
			margin-right: 10px;
			color: #d41717;
			transition: all 0.5s ease 0s;
		}

		.social li a:after{
			content: "";
			position: absolute;
			height: 100%;
			width: 100%;
			top: 0;
			left: 0;
			z-index: -1;
			background-color: #e4e4e4;
			border-radius: 0px 30px 30px 30px
		}

		.social li a:hover:after{
			transform: rotate(180deg);
			transition: 0.3s ease 0s; 
		}

		.team-content{
			padding: 20px;
		}

		.team-content .title{
			font-size: 22px;
			font-weight: 700;
			letter-spacing: 2px;
			text-transform: uppercase;
			margin-bottom: 7px;
			color: #047168;
		}

		.team-content .post{
			display: block;
			font-size: 17px;
			font-weight: 600;
			color: #707070;
			text-transform: capitalize;
		}
				
		.button-linkBack{
			background: coral;
			padding: 1em 2em;
			color: #fff;
			border: 0;
			font-weight: 900;
		}
		.button-linkBack:hover{
			background: #333;
		}
		.vid-pic-link{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 30vh;
			flex-direction: row;
			/*background: #040d15;*/
		}
		.btn5	{
			position: relative;
			display: inline-block;
			padding: 12px 36px;
			margin: 10px 50px;
			color: #fff;
			text-decoration: none;
			text-transform: uppercase;
			font-size: 20px;
			overflow: hidden;
			letter-spacing: 4px;
			border-radius: 20px;
			background: linear-gradient(90deg, #0162c8, #55e7fc);
		}
		.btn5:nth-child(2){
			background: linear-gradient(90deg, #755bea, #ff72c0);
		}
		/* prob is here */
		.button span{
			position: absolute;
			background: #fff;
			transform: translate(-50%, -50%);
			pointer-events: none;
			border-radius: 50%;
			animation: animate 0.6s linear infinite;
		}
		@keyframes animate {
			0%{
				width: 0px;
				height: 0px;
				opacity: 0.5;
			}
			100%{
				width: 500px;
				height: 500px;
				opacity: 0;
			}
		}
				
		.media-link-box{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		.media-link a{
			position: relative;
			display: inline-block;
			padding: 25px 25px;
			margin: 40px 0;
			color: #03e9f4;
			font-size: 24px;
			text-decoration: none;
			text-transform: uppercase;
			overflow: hidden;
			transition: 0.5s;
			letter-spacing: 2px;
			-webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
		}

		.media-link a:nth-child(1){
			filter: hue-rotate(110deg);
		}

		.media-link a:hover{
			background: #027379;
			color: #050801;
			box-shadow: 0 0 5px #03e9f4,
						0 0 25px #03e9f4,
						0 0 50px #0688bb,
						0 0 200px #01a1a7;
		}
		.media-link a span{
			position: absolute;
			display: block;
		}
		.media-link a span:nth-child(1){
			top: 0;
			left: -100%;
			width: 100%;
			height: 2px;
			background: linear-gradient(90deg, transparent, #1cec00);
			animation: animate1 1s linear infinite;
		}
		@keyframes animate1{
			0%{
				left: -100%;
			}
			50%,100%{
				left: 100%;
			}
		}


		.media-link a span:nth-child(2){
			top: -100%;
			right: 0;
			width: 2px;
			height: 100%;
			background: linear-gradient(180deg, transparent, #03e9f4);
			animation: animate2 1s linear infinite;
			animation-delay: 0.25s;
		}
		@keyframes animate2{
			0%{
				top: -100%;
			}
			50%,100%{
				top: 100%;
			}
		}

		.media-link a span:nth-child(3){
			bottom: 0;
			right: -100%;
			width: 100%;
			height: 2px;
			background: linear-gradient(270deg, transparent, #d9ff00);
			animation: animate3 1s linear infinite;
			animation-delay: 0.5s;
		}
		@keyframes animate3{
			0%{
				right: -100%;
			}
			50%,100%{
				right: 100%;
			}
		}

		.media-link a span:nth-child(4){
			bottom: -100%;
			left: 0;
			width: 2px;
			height: 100%;
			background: linear-gradient(360deg, transparent, #8adadf);
			animation: animate4 1s linear infinite;
			animation-delay: 0.75s;
		}
		@keyframes animate4{
			0%{
				bottom: -100%;
			}
			50%,100%{
				bottom: 100%;
			}
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
									<h2 class="web-title" style="color: #B53AFF;font-weight:900;">GWENBEAUTYSPOT</h2>
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
							<center>
						<!-- ACCOUNT -->
						<div class="col-lg-3 col-md-3 col-sm-3 clearfix">
							<div class="header-ctn" style="padding-top: 15px;">
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span style="cursor: pointer;">Your Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
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
							</center>
						<!-- /ACCOUNT -->

						<div class="">
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
        
		
<div class="wrap">
		<div class="container">

			<div class="row">
				<div class="col-md-12 col-sm-12 text-center lt">
					<h2>Gwen's Workshop</h2>
				</div>
			</div>
			<hr class="my-4">
			<h3 class="text-center" style="color: #047168;">Gwen's Social Links</h3>
			<div class="row">
				<div class="col-sm-3">
					<div class="our-team" id="our-team">
						<div class="pic">
							<img src="pics/3.jpg">
							<ul class="social">
								<li><a href="#" style="color: #3340c9;" class="fa fa-facebook"></a></li>
							</ul>
						</div>
						<div class="team-content">
							<h3 class="title">Gwen</h3>
							<span class="post">Facebook Page</span>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="our-team" id="our-team1">
						<div class="pic">
							<img src="pics/3.jpg">
							<ul class="social">
								<li><a href="#" style="color: #1da1f2;" class="fa fa-twitter"></a></li>
							</ul>
						</div>
						<div class="team-content">
							<h3 class="title">Gwen</h3>
							<span class="post"> Twitter Page</span>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="our-team" id="our-team">
						<div class="pic">
							<img src="pics/3.jpg">
							<ul class="social">
								<li><a href="#" class="fa fa-instagram"></a></li>
							</ul>
						</div>
						<div class="team-content">
							<h3 class="title">Gwen</h3>
							<span class="post"> Instagram Page</span>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="our-team" id="our-team1">
						<div class="pic">
							<img src="pics/3.jpg">
							<ul class="social">
								<li><a href="#" class="fa fa-youtube"></a></li>
							</ul>
						</div>
						<div class="team-content">
							<h3 class="title">Gwen</h3>
							<span class="post"> Youtube Channel</span>
						</div>
					</div>
				</div>

			</div>
			<hr class="my-4">
						
			<div class="media-link-box text-center">
			<h3 class="text-center" style="color: #047168;">Media You Should See</h3>
				<div class="media-link">
					<a href="vid-page.php">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						View Gwen's Videos
					</a>

					<a href="Images.php">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						View Gwen's Images
					</a>

				</div>
			</div>	
			<hr class="my-4">
	</div>
</div>
		
<footer class="footer">

        <ul class="social-lists footer--social">
            <li > <a href="#"> <i class="fa fa-twitter"> </i> </a> </li>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<?php  
		include('footer.php');
		?>
</body>
</html>