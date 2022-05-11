<?php
  require_once 'parameters.php';
  include('connexion/connexion.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HETA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html"><img style="width: 140px;" src="images/logo_heta.png"></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.html">Qui sommes nous ?</a></li>
					<li><a href="domaines.html">Expertise en projets immobiliers</a></li>
					<li><a href="projets.html">Nos projets</a></li>
					<li class="colorlib-active"><a href="blog.php">Docteur maisons et actu</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p class="footer_padding">
					<small>
						<i>"Votre projet, <br> votre signature"</i>
					</small>
				</p>
				<ul class="footer_padding">
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
				<p class="footer_padding">
					<small>
						Bureau d'études assuré dans le cadre de son activité
					</small>
				</p>
			</div>

		</aside>

		<div id="colorlib-main">

			<div class="colorlib-blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Blog</span>
							<h2 class="colorlib-heading">
								Docteur maisons « Allô ! »
							</h2>
							<p>
								<a href=""><b><i >*service uniquement pour les projets en Ile de France</i></b></a>
							</p>
						</div>

						<div class="row row-bottom-padded-md">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">	
											<p style="text-align: justify;">
												Vous avez un projet d’achat, <button class="btn" id="boutton_voir" onclick="voirPlus()">Lire ...</button><span id="voir_texte">
												des questions sur des démarches administratives, sur la méthodologie pour appréhender cet univers complexe qu’est le marché immobilier, et pourtant vous devez prendre des décisions qui peuvent impliquer des économie de toute une vie . 
												<br>
												Depuis plus de 15 ans,  notre expérience nous mène à côtoyer quotidiennement  tous les acteurs de la construction,   toujours l’échelle du particulier, de la maison individuelle,  de l’appartement, tels :  Les services urbanisme des mairies avec la plupart desquelles nous avons noué d’étroites relations (surtout en Île-de-France) , les bureaux d’études ingénieurs, les géotechniciens, l’Inspection générale des Carrières (une grande partie du foncier en île de France se trouve en zone de carrières ),les architectes DPLG ( obligatoire pour tous projet supérieurs 150 m2 de surface de plancher),  les thermiciens , les géomètres, les entreprises et artisans  de la construction, les fournisseurs etc. 
												</span>
												<button class="btn" id="boutton_cacher" onclick="voirMoins()"><i class="icon-arrow-up"></i> Voir moins</button>
											</p>
											<p style="text-align: justify;">
												Nous partageons volontiers tous nos acquis et pouvons <b><u>vous conseiller et vous accompagner dans votre projet </u></b>
											</p>
											<p style="text-align: justify;">
												<a href="contact.html"><b>Envoyez nous un mail nous vous répondons gratuitement, ou prenez un RDV  à nos locaux pour nous présenter votre projet ou vos questions ( honoraires forfaitaires quelque soit votre projet : 50€ H.T. ou 60€ TTC la séance )</b></a>
											</p>
											<p>
												<a href="contact.html" class="btn btn-primary btn-learn">Nous contacter</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<h2 class="colorlib-heading">Actus et projets en cours</h2>
						</div>
					</div>

				<?php
                    $sql = "SELECT * FROM article";
                    $resultat = mysqli_query($conn, $sql);
                    $total_ligne = mysqli_num_rows($resultat);
                    if(isset($_GET["debut"]))
                    {
                      $commencement = $_GET["debut"];
                      $nbliste = 3;
                    }
                    else
                    {
                      $commencement = 0;
                      $nbliste = 3;
                    }

                    $nb_page = ceil($total_ligne/$nbliste);
                    $sql = "SELECT * FROM article ORDER BY id DESC LIMIT  $commencement, $nbliste";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                 ?>

					<div class="row">
						<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="blog_voir.php?id=<?php echo $row['id']; ?>" class="blog-img"><img src="<?php echo 'upload/'.$row['image_art'] ?>" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
							<div class="desc">
								<h3 style="margin: 0 0 15px 0;"><a href="blog_voir.php?id=<?php echo $row['id']; ?>"><?php echo $row['titre_art']; ?></a></h3>
								<span style="font-weight: bold;"><small><?php echo $row['date_pub_art']; ?></small></span>
								<p style="text-align: justify;"><?php echo(substr($row['contenu_art'],0,210).'...'); ?></p>
								<a href="blog_voir.php?id=<?php echo $row['id']; ?>">
		                          <div class="post-btn">
		                             <button class="btn btn-post float-right">En savoir plus</button>
		                           </div>
		                        </a>
							</div>
							<!-- <hr> -->
						</div>
					</div>

					<?php
                        }
                      }
                      ?>

					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<ul class="pagination">
								<?php
			                    for($i = 0; $i<$nb_page; $i++){
			                      $k = $i * $nbliste;
			                      $p = $i+1;

			                      ?>
			                      <li class="page-item"><a class="page-link"  href="blog.php?debut=<?php echo $k  ?>"><?php echo $p; ?></a></li>
			                  	<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead" style="font-size: 13px;">
								<b>Hêta</b> <br>
								32, rue Barbès <br>
								92120 - Montrouge <br>
								contact@heta-france.fr
							</p>
							<p>
								<a href="contact.html" class="btn btn-primary btn-learn">Nous contacter</a>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<center>
								<p class="devinbox_footer">
									<small>
										&copy;Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br> | Made with passion by <a href="https://www.pricing.dev-inbox.com" target="_blank">Devinbox</a>
									</small>
								</p>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	<script>
		var voir_texte = document.getElementById("voir_texte");
		var boutton_voir = document.getElementById("boutton_voir");
		var boutton_cacher = document.getElementById("boutton_cacher");
		voir_texte.style.display = "none";
		boutton_cacher.style.display = "none";
		
		function voirPlus() {
		voir_texte.style.display = "inline";
		boutton_voir.style.display = "none";
		boutton_cacher.style.display = "inline";
		}
		function voirMoins() {
		voir_texte.style.display = "none";
		boutton_voir.style.display = "inline";
		boutton_cacher.style.display = "none";
		}

	</script>

	</body>
</html>

