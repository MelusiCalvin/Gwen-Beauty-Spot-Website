<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<body  style="background: linear-gradient(to right, #333, #fff);">
        <?php include ('header.php'); ?>
    
				<!-- row -->
				
                <div class="container-fluid" style="width: 70%;margin-top: 10px;">
                    <?php
                     
                    include ('db.php');

                    if(isset($_POST['edit_btn']))
                    {
                        $id = $_POST['edit_id'];
                        
                        $query = "SELECT * FROM user_info WHERE user_id = '$id'";
                        $query_run = mysqli_query($con, $query);
                    }
                    ?>

                    <?php 
                    
                        if(mysqli_num_rows($query_run) > 0){
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>  
						
						
						<!-- /Billing Details -->


								<form action="code.php" method="POST" id="signup_form" class="login100-form">
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >Update Profile Info <?php echo "$row[user_id]";?></h2>
                                    </div>

                                    <input type="hidden" name="edit_id" value="<?php echo $row['user_id'];?>">
                                    <div class="form-group ">
                                        <input class="input form-control input-borders" type="text" name="f_name" value="<?php echo  $row['first_name'];?>" id="f_name" placeholder="First Name" >
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="l_name" value="<?php echo  $row['last_name'];?>" id="l_name" placeholder="Last Name" >
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="email" name="email" value="<?php echo  $row['email'];?>"  placeholder="Email" >
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="password" value="<?php echo  $row['password'];?>" id="password" placeholder="password"  >
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="mobile" value="<?php echo  $row['mobile'];?>" id="mobile" placeholder="mobile" >
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="address1" value="<?php echo  $row['address1'];?>" id="address1" placeholder="Address" >
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="address2" value="<?php echo  $row['address2'];?>" id="address2" placeholder="City" >
                                    </div>
                                    <div class="form-group">
                                       <button class="primary-btn btn-block" type="submit" name="updateBtn" >Update</button>
                                    </div>
                                    
                                    <div class="form-group">
                                       <a href="index.php" class="primary-btn btn-block" name="" style="margin-top: 10px;" >Cancel</a>
                                    </div>
                                    
                                
								</form>
                                <div class="login-marg">
						<!-- Billing Details -->
						<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" id="signup_msg">
                                    

                                </div>
                                <!--Alert from signup form-->
                            </div>
                            <div class="col-md-2"></div>
                        </div>

						
					</div>
                    </div> 

					
				
				<!-- /row -->
          
                            </div>
                            
                          </div>

                        </div>
                      </div>

                      
                      <?php
                            }
                        }else{
                            echo "no record found";
                        }
                    
                    ?>


		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
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
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
						
</body>
</html>