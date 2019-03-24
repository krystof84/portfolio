<?php include 'include/header.php' ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/portfolio" class="standard-logo"><img src="img/logo.png"></a>
					</div><!-- #logo end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Natours - motyw wordpress</h1>
				<div id="portfolio-navigation">
					<!-- <a href="abctax.php"><i class="icon-angle-left"></i></a> -->
					<a href="/portfolio"><i class="icon-line-grid"></i></a>
					<a href="kalypso.php"><i class="icon-angle-right"></i></a>
				</div>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_two_third portfolio-single-image nobottommargin" data-lightbox="gallery">
						<a href="img/full/natours-1.jpg" data-lightbox="gallery-item"><img src="img/full/natours-1.jpg" alt=""></a>
					</div><!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content col_last nobottommargin">

						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2>Informacje o projekcie:</h2>
						</div>
						<p>Motyw WordPress typu one page. Pełne RWD. Wszystkie treści są w pełni edytowalne z panelu WordPressa za pomocą Theme Customization API. Do obsługi motywu nie potrzeba żadnych dodatkowych wtyczek. Projekt: Jonass Chmedtman.</p>

						<p>Użyte technologie: HTML5, CSS3, SASS, npm, Gulp, PHP, WordPress, WordPress Theme Customization API, JavaScript</p>
						<!-- Portfolio Single - Description End -->

						<div class="line"></div>

						<!-- Portfolio Single - Meta
						============================================= -->
						<ul class="portfolio-meta bottommargin">
							<li><span><i class="icon-user"></i>Autor:</span> Krzysztof Czajka</li>
							<li><span><i class="icon-link"></i>Adres url:</span> <a href="http://natours.wpmajster.pl/">
                        Projekt natours</a></li>
                            <li><span><i class="icon-github2"></i>Github:</span> <a href="https://github.com/krystof84/natours">github.com/krystof84/natours</a></li>
						</ul>
						<!-- Portfolio Single - Meta End -->

					</div><!-- .portfolio-single-content end -->

					<div class="clear"></div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Podobne:</h4>

					<?php include 'include/related.php'; ?>

				</div>

			</div>

		</section><!-- #content end -->

		<?php include 'include/footer.php' ?>