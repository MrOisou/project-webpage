<!DOCTYPE html>
<html>
  <head>
	<link rel="icon" href="favicon.ico" />
	<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Marcin Szpądrowski - Fotokreatywność">
    <meta name="author" content="Mr.Oisou & Yaudso">
    <title>Marcin Szpądrowski - Fotokreatywność</title>
    <!-- CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">1111.pl</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a key="butaboutme" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger tr" href="#about">O Mnie</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a key="butmywork" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger tr" href="#mywork">Moje Prace</a>
            </li>
			<li class="nav-item mx-0 mx-lg-1">
              <a key="butawards" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger tr" href="#awards">Nagrody</a>
			</li>
			<li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger tr" href="bioKS/">Kazimierz Szpądrowski</a>
            </li>
			<li class="nav-item mx-0 mx-lg-1">
				<button id="pl" type="button" class="btn btn-primary lang name">POL</button>
			</li>
			<li class="nav-item mx-0 mx-lg-1">
				<button id="en" type="button" class="btn btn-primary lang names">ENG</button>
			</li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.jpg" alt="" style="width: 22%;">
        <h1 class="text-uppercase mb-0">Marcin Szpądrowski</h1>
        <hr class="star-light">
        <h2 key="trtitle" class="font-weight-light mb-0 tr">Fotograf - Fotokreatywność - Przedsiębiorca</h2>
      </div>
    </header>
	<!-- About Me -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
	  <br />
	  <br />
	  <br />
        <h2 key="butaboutme" class="text-center text-uppercase text-white tr">O mnie</h2>
        <hr class="star-light mb-5">
<p key="aboutmedesc" class="tr">Urodziłem się w Częstochowie, gdzie losy wojenne przywiodły moich Rodziców: Mamę Alinę (młodą sanitariuszkę z Powstania Warszawskiego) i Tatę Andrzeja (syna legionisty-piłsudczyka, Kazimierza Szpądrowskiego, bohaterskiego wysokiego oficera wywiadu, aresztowanego we Lwowie, więzionego w Starobielsku i straconego przez Sowietów w Moskwie).<br />
Pasjonuję się fotografią, głównie fotoreporteską, fotografuję najchętniej wydarzenia kulturalne, Pasję tą przejąłem po swoim Tacie, a ostatnio udało mi się zarazić ją również moją córkę, Magdalenę. <br />
Od 10 lat dokumentuję m.inn. Międzynarodowy Festiwal Muzyki Sakralnej „Gaude Mater”. <br />
Jestem członkiem Fotoklubu RP, fotografem roku 2010, organizatorem Wystawy „Grand Press Photo” w Częstochowie, współorganizatorem i jurorem konkursu „Klimaty Częstochowy”. <br />
Mam na swoim koncie szereg publikacji w prasie, periodykach i albumach, wystaw indywidualnych i zbiorowych oraz nagród w konkursach fotograficznych w kraju i za granicą. <br />

      </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="mywork">
      <div class="container">
        <h2 key="butmywork" class="text-center text-uppercase text-secondary mb-0 tr">Moje Prace</h2>
		   <hr class="star-dark mb-5">
		<div class="row" style="width: 60%; margin-left: 20%;">
		
		
		
		<?php
		$modal=0;
		$pdo = new PDO('mysql:host=localhost;port=3306;dbname=test;charset=utf8','root','');
		$wynik = $pdo->query("SELECT * FROM zdjecia ORDER BY id DESC;");
		foreach($wynik as $row)
		{
			$modal++;
		echo '
		 <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-'.$modal.'">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
			<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($row['zdjecie'] ).'" />
		</a>
          </div>
		  <div class="portfolio-modal mfp-hide" id="portfolio-modal-'.$modal.'">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-'.$modal.'g-8 mx-auto">
              <h2 key="modal'.$modal.'TR" class="text-secondary text-uppercase mb-0 tr">Nazwa pracy</h2>
              <hr class="star-dark mb-5">
			<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode($row['zdjecie'] ).'" />
              <p key="modal'.$modal.'TRdesc" class="mb-5 tr">Opis Pracy</p>
              <a key="moda'.$modal.'Close" class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss tr" href="#">
                <i class="fa fa-close"></i>
                Zamknij prace</a>
            </div>
          </div>
        </div>
      </div>
    </div>
		';
		}
		
		?>
		</div>
       <!-- <hr class="star-dark mb-5">
        <div class="row" style="width: 60%; margin-left: 20%;">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/jewish_priest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/little_girl.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/students.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/Bobby.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
	  -->
    </section>
	<!-- Awards -->
    <section class="bg-primary text-white mb-0" id="awards">
      <div class="container">
	  <br />
	  <br />
	  <br />
        <h2 key="butawards" class="text-center text-uppercase text-white tr">Nagrody</h2>
        <hr class="star-light mb-5">
		<style>.card {background-color: rgba(0, 0, 0, 0.37);}</style>
		<div class="card-group" style="width: 125%; margin-left: -11%;">
	<?php
		$zmienna=0;
		$pdo = new PDO('mysql:host=localhost;port=3306;dbname=test;charset=utf8','root','');
		$wynik = $pdo->query("SELECT * FROM wpis;");
		foreach($wynik as $row)
		{
			$zmienna++;
			echo '
			<div class="card">
				<div class="card-body">
								<h4 key="awardTitle'.$zmienna.'" class="card-title tr">'.$row['tytul'].'<h4>
						<p key="awardDesc'.$zmienna.'" class="card-text tr">'.$row['tresc'].'</p>
										</div>
			</div>
			
			';
		}
		?>
			<!--<div class="card">
				<div class="card-body">
				<style>.card {background-color: rgba(0, 0, 0, 0.37);}</style>
								<h4 key="awardTitle1" class="card-title tr">6 września 2010</h4>
						<p key="awardDesc1" class="card-text tr">Wygrałem konkurs miesiąca w Oddziale Jurajskim Fotoklubu RP. Temat miesiąca: "Szaleństwo"</p>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 key="awardTitle2" class="card-title tr">4 października 2010</h4>
					<p key="awardDesc2" class="card-text tr">Wygrałem konkurs miesiąca w Oddziale Jurajskim Fotoklubu RP. Temat miesiąca: "Fotograf"</p>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 key="awardTitle3" class="card-title tr">13 października 2010</h4>
					<p key="awardDesc3" class="card-text tr">Zdobyłem pierwszą nagrodę w konkursie "Dzieci ulicy - Nie bądź obojętny".</p>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 key="awardTitle4" class="card-title tr">20 października 2010</h4>
					<p key="awardDesc4" class="card-text tr">Odebrałem w tym dniu nagrodę Prezydenta Miasta Częstochowy w konkursie "Ona i On. Studenckie Wakacje".</p>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 key="awardTitle5" class="card-title tr">8 listopada 2010</h4>
					<p key="awardDesc5" class="card-text tr">Wygrałem konkurs w Oddziale Jurajskim Fotoklubu RP. Tematem było "Ściana", zapewniłem sobie tytuł "Fotografa roku".</p>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h4 key="awardTitle6" class="card-title tr">8 stycznia 2011</h4>
					<p key="awardDesc6" class="card-text tr">Moja praca "Bobby McFerrin w Katedrze w Częstochowie" została sprzedana za 1000 PLN podczas Aukcji Charytatywnej.</p>
				</div>
			</div>			
		</div>
       -->
	   </div>
	</section>
    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 key="loc" class="text-uppercase mb-4 tr">Lokalizacja</h4>
            <p key="loc2" class="lead mb-0 tr">Ul. Kolorowa 45
              <br />Częstochowa, 42-200</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 key="web" class="text-uppercase mb-4 tr">Sieć</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/marcin.szpadrowski">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 key="transemail" class="text-uppercase mb-4 tr">Adres E-mail</h4>
            <p class="lead mb-0">marcin@1111.pl
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Mr.Oisou & Yaudso</small>
      </div>
    </div>
    <!-- Portfolio Modal 1 -->
   <!-- <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 key="modal1TR" class="text-secondary text-uppercase mb-0 tr">Nazwa pracy</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/jewish_priest.jpg" alt="">
              <p key="modal1TRdesc" class="mb-5 tr">Opis Pracy</p>
              <a key="modalClose" class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss tr" href="#">
                <i class="fa fa-close"></i>
                Zamknij prace</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 2 -->
    <!--<div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 key="modal2TR" class="text-secondary text-uppercase mb-0 tr">Nazwa pracy</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/little_girl.jpg" alt="">
              <p key="modal2TRdesc" class="mb-5 tr">Opis Pracy</p>
              <a key="modalClose" class="tr btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Zamknij prace</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 3 -->
   <!-- <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 key="modal3TR" class="text-secondary text-uppercase mb-0 tr">Nazwa pracy</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/students.jpg" alt="">
              <p key="modal3TRdesc" class="mb-5 tr">Opis Pracy</p>
              <a key="modalClose" class="tr btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Zamknij prace</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio Modal 4 -->
    <!--<div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 key="modal4TR" class="tr text-secondary text-uppercase mb-0">Nazwa Pracy</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/Bobby.jpg" alt="">
              <p key="modal4TRdesc" class="mb-5 tr">Opis Pracy</p>
              <a key="modalClose" class="tr btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Zamknij prace.</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JavaScriptS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrolling Script -->
   <script src="js/scroll.js"></script>
   <!-- Translate Script -->
   <script src="js/langTrans.js"></script>
  </body>
</html>
