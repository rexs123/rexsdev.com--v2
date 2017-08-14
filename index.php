<?php include("./system/config.php"); ?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Rexs Development &amp; Design </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="keywords" content="rexs, rexs123, rexs183, rexsdev, develpment, web, design, web design, web development, system, linux, mysql, design development, app, dev, graphics, flat, material">
		<meta name="description" content="Rexs Development &amp; Design; freelance web design and development out of Toronto, Canada..">

		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.rexsdev.com">
		<meta property="og:site_name" content="Rexs Development">
		<meta property="og:description" content="Rexs Development &amp; Design a web design and development company.">
		<meta property="og:locale" content="en-US">

		<meta name="twitter:domain" content="rexsdev.com">
		<meta name="twitter:url" content="https://www.rexsdev.com">
		<meta name="twitter:description" content="Professional Web Design Development Company">
		<meta name="twitter:site" content="@rexs183">

		<meta name="robots" content="index,follow,noodp,noydir">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha256-916EbMg70RQy9LHiGkXzG8hSg9EdNy97GazNG/aiY1w=" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" integrity="sha256-HxaKz5E/eBbvhGMNwhWRPrAR9i/lG1JeT4mD6hCQ7s4=" crossorigin="anonymous" />
		<link href="https://rexsdev.com/assets/css/responsive.min.css" rel="stylesheet">
		<link href="https://rexsdev.com/assets/css/style.min.css" rel="stylesheet">
		<link href="https://rexsdev.com/assets/css/rexsdev.min.css" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="57x57" href="https://rexsdev.com/assets/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="https://rexsdev.com/assets/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="https://rexsdev.com/assets/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="https://rexsdev.com/assets/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="https://rexsdev.com/assets/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="https://rexsdev.com/assets/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="https://rexsdev.com/assets/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="https://rexsdev.com/assets/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="https://rexsdev.com/assets/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192" href="https://rexsdev.com/assets/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="https://rexsdev.com/assets/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="https://rexsdev.com/assets/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="https://rexsdev.com/assets/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="https://rexsdev.com/assets/img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffb204">
		<meta name="msapplication-TileImage" content="https://rexsdev.com/assets/img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffb204">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
</head>
<body>
<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center">
					<img src="https://i.rexsdev.com/y0qFd.gif" alt="Rexs Development &amp; Design" class="img-responsive img-center" draggable="false">
					<a href="./partner">Partners</a> | <a href="./soon">Soon&trade; List</a> | <a href="./calender">Calender</a> | <a href="https://tactserv.com">Hosting</a>
			</div>
		</div>
	</div>
</div>
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<h1>About Me</h1>
					<br>
					<p>Bacon ipsum dolor amet meatloaf doner capicola pig chicken biltong. Shoulder venison pork loin swine, chicken cow jowl spare ribs. Frankfurter brisket venison biltong pancetta turkey cow spare ribs salami jowl boudin strip steak. Bresaola landjaeger shank, tongue strip steak ham hock drumstick jerky short ribs pork chop pancetta meatball turducken beef. Kevin andouille tri-tip tail jowl corned beef jerky salami cow burgdoggen capicola. Jerky sirloin bacon swine, ham hock brisket porchetta shoulder t-bone.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="portfolio">
	<div class="container">
		<div class="row text-center">
			<h1>Portfolio</h1>
			<?php
			foreach ($portfolio->loop() as $id) {
			?>
			<div class="col-md-4">
				<div class="card">
					<div class="portfolio" style="background-image: url('./assets/img/portfolio/<?=$portfolio->get($id, "image");?>');"></div>
					<h3><a href="<?=$portfolio->get($id, "url");?>"><?=$portfolio->get($id, "name");?></a></h3>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>
</body>
</html>
