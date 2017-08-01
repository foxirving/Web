<html>
<head>
<link href="style.css">
</head>

<body>


	<div id="center">

		<div id="home-center">

			<div id="home-left">

				<img alt="My Photo" src="images/MyPhoto.jpg"> <br> <a
					href="https://github.com/foxirving">GitHub</a> <br> <a
					href="https://www.linkedin.com/in/amy-irving-06732b100/">LinkedIn</a>
				<br>

			</div>

			<div id="home-right">
				<p>
				<?php
				$homepage = file_get_contents ( 'text/AboutMe.txt' );
				echo $homepage;
				?>
				</p>
			</div>

		</div>


	</div>
</body>

</html>