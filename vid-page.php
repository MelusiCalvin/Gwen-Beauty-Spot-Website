<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Makeup Tutorials</title>
    <link rel="stylesheet" href="css/vid.css">
    <style>
        
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
    <div class="container">
        <h1>Gwen's Tutorials On Make-Up</h1>
        <div class="row">
            <div class="col">
                <div class="feature-img">
                    <img src="pics/pic1.png" width="100%">
                    <img src="pics/play.png" class="play-btn"
                    onclick="playVideo('vids/four.mp4')">
                </div>
            </div>
            <div class="col">
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="pics/pic2.png">
                        <img src="pics/play.png" class="play-btn"
                        onclick="playVideo('vids/one.mp4')">
                    </div>
                    <p>How To Apply Make-up And Make Up Her Gorgeous Look.</p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="pics/pic3.png">
                        <img src="pics/play.png" class="play-btn"
                        onclick="playVideo('vids/three.mp4')">
                    </div>
                    <p>How To Apply Simple Makeup</p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="pics/pic4.png">
                        <img src="pics/play.png" class="play-btn"
                        onclick="playVideo('vids/two.mp4')">
                    </div>
                    <p>How To Disinfect Your Makeup Brushes</p>
                </div>
            </div>
        </div>
    </div>
    <div class="video-player" id="videoPlayer">
        <video src="" width="100%" controls autoplay id="myVideo">
            <source src="one.mp4" type="video/mp4">
        </video>
        <img src="pics/close.png" class="close-btn" onclick="stopVideo()">
    </div>

    <script>
        let videoPlayer = document.getElementById('videoPlayer');
        let myVideo = document.getElementById('myVideo');

        function stopVideo(){

            videoPlayer.style.display = "none";
            window.location.reload();
        }

        function playVideo(file){
            myVideo.src = file;
            videoPlayer.style.display = "block";
        }

    </script>

</body>
</html>