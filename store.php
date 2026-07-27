<?php
include 'header.php';


?>
     <script id="jsbin-javascript">
(function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };	
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);
</script>

	<section>
      <div class="main main-raised"> 
        <style>
			body{
				background: rgba(0, 0, 0, 0.3);
			}
			.section{
            background: #fff;
            margin-bottom: 120px;
            box-shadow: 0 3px 15px 2px rgba(61, 61, 61, 0.9);
        }
			.footer{
            width: 96%;
			height: 120px;
			margin-left: 2%;
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
		</style>
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<center>
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div id="get_category">
				        </div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div id="get_brand">
				        </div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Top selling</h3>
							<div id="get_product_home">
								<!-- product widget -->
								
								<!-- product widget -->
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<!-- <div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
						</div> -->
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row" id="product-row">
						<div class="col-md-12 col-xs-12" id="product_msg">
						<?php
							
							if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
								echo '<h3 class="success">'.$_SESSION['status'].'</h3>';
								// unset($_SESSION['status']);
							}
						
						
						?>
					</div>
							<!-- product -->
							<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
							
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination" id="pageno">
								<li ><a class="active" href="#aside">1</a></li>
								
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</center>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
	</div>
</section>
<?php
include "footer.php";
?>
