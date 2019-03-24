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
				<h1>Kalypso - motyw WordPress</h1>
				<div id="portfolio-navigation">
					<a href="natours.php"><i class="icon-angle-left"></i></a>
					<a href="/portfolio"><i class="icon-line-grid"></i></a>
					<a href="abctax.php"><i class="icon-angle-right"></i></a>
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
						<a href="img/full/wp-1.jpg" data-lightbox="gallery-item"><img src="img/full/wp-1.jpg" alt=""></a>
						<a href="img/full/wp-1a.jpg" data-lightbox="gallery-item"></a>
						<a href="img/full/wp-1b.jpg" data-lightbox="gallery-item"></a>
						<a href="img/full/wp-1c.jpg" data-lightbox="gallery-item"></a>
					</div><!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content col_last nobottommargin">

						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2>Informacje o projekcie:</h2>
						</div>
						<p>Motyw WordPress zaprojektowany i zakodowany przeze mnie w oparciu o Timber Starter Theme. Pełne RWD. Wszystkie elementy są edytowalne z poziomu panelu WordPressa.</p>

						<p>Użyte technologie: HTML5, CSS3, SASS, GULP, PHP, WordPress, Timber, Twig, JavaScript, jQuery.</p>
						<!-- Portfolio Single - Description End -->

						<div class="line"></div>

						<!-- Portfolio Single - Meta
						============================================= -->
						<ul class="portfolio-meta bottommargin">
							<li><span><i class="icon-user"></i>Autor:</span> Krzysztof Czajka</li>
							<li><span><i class="icon-link"></i>Adres url:</span> <a href="http://kalypso.wpmajster.pl">kalypso.wpmajster.pl</a></li>
							<li><span><i class="icon-github2"></i>Github:</span> <a href="https://github.com/krystof84/kalypso">github.com/krystof84/kalypso</a></li>
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