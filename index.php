<?php 

require_once 'database.php';

try {
	$result = $db->query('select * from film');
} catch (Exception $e) {
	echo $e->getMessage();
	die();
}

$films = $result->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html">Retrospect</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>Etiam adipiscing</h2>
				<p>Magna feugiat lorem dolor egestas</p>
				<ul class="actions">
					<li><a href="#" class="button big special">Learn More</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<div class="row">
						<?php foreach ($films as $film) { ?>
							<div class="col-sm-6">
								<article class="feature left">
									<span class="image"><img src="images/pic01.jpg" alt="" /></span>
									<div class="content">
										<a href="film.php?id=<?= $film["film_id"] ?>">
											<h4><?= $film["title"] ?></h4>
										</a>
										<p><?= substr($film["description"], 0, 25) ?></p>
										<!-- <ul class="actions">
											<li>
												<a href="#" class="button alt">More</a>
											</li>
										</ul> -->
									</div>
								</article>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Aliquam Blandit Mauris</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">Tempus Aliquam</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Magna sed consequat tempus</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Magna feugiat</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>Ipsum dolor tempus commodo adipiscing</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php //The Array
$arr=array(array(
    'month'     => "January",
    'month2'    => 'Feb',
    'tests'     => "Test A, Test B",
    'values'    => "VAL A, VAL B"
));
?>

<table>
<thead>
<tr>
    <th>Month</th>
    <th>Tests</th>
    <th>Values</th>
    <th>Month</th>
</tr>
</thead>
<tbody>
    <?php foreach($arr as $item): ?>
        <tr>
            <td rowspan="2">lrem</td>
            <td>A</td>
            <td>B</td>
            <td rowspan="2">asda</td>
        </tr>
        <tr>
            <td>LOREM</td>
            <td>LOREM</td>
        </tr>
    <?php endforeach; ?>

</tbody>
</table>