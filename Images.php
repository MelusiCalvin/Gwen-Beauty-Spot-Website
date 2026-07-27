<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gwen's Workplace Images</title>

    <link type="stylesheet" href="css/font-awesome.css"> 

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
.gallery{
    padding: 20px;
    width: 1280px;
    margin: 40px auto;
}
.gallery ul{
    display: flex;
    margin-bottom: 10px;
}
.gallery ul li{
    list-style: none;
    background: #eee;
    padding: 8px 20px;
    margin: 5px;
    letter-spacing: 1px;
    cursor: pointer;
}
.gallery ul li.active{
    background: #03a9f4;
    color: #fff;
}
.product{
    display: flex;
    flex-wrap: wrap;
}
.product .itemBox{
    position: relative;
    width: 300px;
    height: 300px;
    margin: 5px;
}
.product .itemBox img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.fa.fa-arrow-back{
    font-size: 20px;
    color: black;
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
    </style>

</head>
<body>

            <div class="link-back">
				<a href="gallery.php">
			<button id="modalBtn" class="button-linkBack">BACK</button>
				</a>
			</div>
    <div class="gallery">
        <ul>
            <li class="list active" data-filter="All">All</li>
            <li class="list" data-filter="Make-up">Make-up</li>
            <li class="list" data-filter="Foundation">Foundation</li>
            <li class="list" data-filter="Lipstick">Lipstick</li>
        </ul>

        <div class="product">
            <div class="itemBox Make-up"><img src="pics/2 (6).jpg" alt=""></div>
            <div class="itemBox Foundation"><img src="pics/2 (24).jpg" alt=""></div>
            <div class="itemBox Lipstick"><img src="pics/2 (5).jpg" alt=""></div>
        
            <div class="itemBox Make-up"><img src="pics/2 (18).jpg" alt=""></div>
            <div class="itemBox Foundation"><img src="pics/2 (7).jpg" alt=""></div>
            <div class="itemBox Lipstick"><img src="pics/4 (2).jpg" alt=""></div>

            <div class="itemBox Make-up"><img src="pics/2 (14).jpg" alt=""></div>
            <div class="itemBox Foundation"><img src="pics/2 (24).jpg" alt=""></div>
            <div class="itemBox Lipstick"><img src="pics/4 (1).jpg" alt=""></div>

            <div class="itemBox Make-up"><img src="pics/2 (16).jpg" alt=""></div>
            <div class="itemBox Foundation"><img src="pics/2 (4).png" alt=""></div>
            <div class="itemBox Lipstick"><img src="pics/4 (1).jpg" alt=""></div>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.list').click(function(){
                const value = $(this).attr('data-filter');
                if (value == 'all'){
                    $('.itemBox').show('1000');
                }
                else{
                    $('.itemBox').not('.'+value).hide('1000');
                    $('.itemBox').filter('.'+value).show('1000');
                }
            })
            //add active class on selected item
            $('.list').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
            })
        })
    </script>
</body>
</html>