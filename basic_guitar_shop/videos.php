<?php include 'view/header.php'; ?>


<!-- video object methods -->
	<script>

//play contoller

	function doPlay() {
		var a = document.getElementById('video').play();
	}


//pause contoller

	function doPause() {
		var b = document.getElementById('video').pause();
	}

	</script>

<div id="content">

	<section id="container">
		<header id="top">
			<h1>View Our Video</h1>
		</header>

<!-- Content Starts Here -->

		<video controls poster="images/joey.png" id='video' height='200'>
			<source src='videos/joey.mp4' type='video/mp4' />
		</video>


<!-- Add video object methods -->

		<br />
		<button type='button' onclick='doPlay()'>Play Video</button>
		<button type='button' onclick='doPause()'>Pause Video</button>

<!-- Content Ends Here -->
	</section>


</div>
<?php include 'view/footer.php'; ?>