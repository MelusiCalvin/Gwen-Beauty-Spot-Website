	
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