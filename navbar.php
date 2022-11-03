<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	<title>Document</title>
</head>
<body>
	<nav class = "navbar">
	<div class = "navbar-links">
		<ul class = "navbar-lista"> 
			<li><a href = "index.php">HOME</a></li>
			<li><a href = "project.php">PROJECTS</a></li>
			<li><a href = "contact.php">CONTACT ME</a></li>
		</ul>
	</div>
</nav>

<div class = "navbar-mobile-closed">
	<div>
		<img src = "Assets/icons/hamburger-menu.svg" alt = "hamburger-menu" id = "hamburger">
	</div>
</div>

<div class = "navbar-mobile-overlay">
	<img src = "Assets/icons/close-line.svg" alt = "close hamburger menu" id = "close-hamburger">
	<div>
		<nav class = "navbar-mobile-open">
			<div class = "navbar-mobile-links">
				<ul class = "navbar-mobile-lista"> 
					<li><a href = "index.php">HOME</a></li>
					<li><a href = "project.php">PROJECTS</a></li>
					<li><a href = "contact.php">CONTACT ME</a></li>
				</ul>
			</div>
		</nav>
	</div>	
</div>
</body>
</html>

