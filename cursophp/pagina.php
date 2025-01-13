<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub</title>
    <link rel="perconnect" href="https://fonts.googleapis.com">
    <link rel="perconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis..com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="hub.css"> 
</head>
<body>
	<?php include "includes/Libros.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
 
    <script  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top sticky">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"> HUB </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="/lectura">Lectura</a>
					</li>
					<li class="nav-item dropdown">
						<a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Proyectos</a>
						<ul class="dropdown-menu">
							<li><a href="/pdfs" class="dropdown-item">PDFs</a></li>
							<li><a href="/webs" class="dropdown-item">Web</a></li>
							<li><a href="/juegos" class="dropdown-item">Juegos</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Libros">Libros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Mangas">Mangas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Series">Series</a>
					</li>
				</ul>
			</div>
		</div>   
    </nav>
	<div class="container-fluid">
		<div id="home" class="row align-items-center hero">
			 <div class="col-lg-3 offset-lg-2 hero-text">
				 <h1>Hub</h1>
				 <p>La idea es tener una pagina en donde tenga todos mis intereses juntos. Por ahora solo hay Libros, Mangas, y Proyectos de programacion, pero proximamente agregare un Calendario, un boletin de Fechas y Eventos cercanos, entre otras cosas </p>
			 </div>
		</div>
	</div>
    <!--      -------------------------------------------------MODALS-----------------------------------------------------------------------------       -->
	<div class="hero2 row my-3">
		<div id="Libros" class="col-md-5 offset-md-2 py-3">
			<h2>Libros</h2>
			<ul class="lista-libros">
				<li><a href="#" data-bs-toggle="modal" data-bs-target="#modalLTerminados"><img src="img/Pagina/lista-libro.jpg">Terminados</a></li>
				<li><a href="#" data-bs-toggle="modal" data-bs-target="#modalLLeyendo"><img src="img/Pagina/lista-libro.jpg">Leyendo</a></li>
				<li><a href="#" data-bs-toggle="modal" data-bs-target="#modalLPendientes"><img src="img/Pagina/lista-libro.jpg">Pendientes</a></li>
			</ul>
		</div>
	</div>
	<div class="hero3 row my-3">
		<div id="Mangas" class="col-md-5 offset-md-2 py-3">
			<h2>Mangas</h2>
			<ul class="lista-mangas">
				<li><a href="#" data-bs-toggle="modal" data-bs-target="#modalRomance"><img src="img/Pagina/scroll.png">Romance</a></li>
				<li><a href="#" data-bs-toggle="modal" data-bs-target="#modalShonen"><img src="img/Pagina/scroll.png">Shonen</a></li>
				<li><a href="#" data-bs-toggle="modal" data-bs-target="#modalMTerminados"><img src="img/Pagina/scroll.png">Terminados</a></li>
			</ul>
		</div>
	</div>
    <div class="hero4 row my-3">
        <div id="Series" class="col-md-5 offset-md-2 py-3">
            <h2>Series</h2>
            <ul class="lista-series">
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalSTerminados"><img src="img/Pagina/Popcorn.png">Terminados</a></li>
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalSViendo"><img src="img/Pagina/Popcorn.png">Viendo</a></li>
                <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalSPendientes"><img src="img/Pagina/Popcorn.png">Pendientes</a></li>
            </ul>
        </div>
    </div>
    <!--      -------------------------------------------------CARDS LIBROS-------------------------------------------------------------------------       -->
    
		<div class="modal fade" id="modalLTerminados" tabindex="-1" aria-labelledby="modalLTerminadosLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-4 row-cols-md-2 g-10">
						<?php include "modales/terminadosModal.php" ?>
						
							<!--
                            <div class="col">
                                <div class="card">
                                    <a href="pdfs/"><img src="img/Libros/" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalLLeyendo" tabindex="-1" aria-labelledby="modalLLeyendoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-3 row-cols-md-2 g-10">
						<?php include "modales/leyendoModal.php" ?>
							<!--
                            <div class="col">
                                <div class="card">
                                    <a href="pdfs/"><img src="img/Libros/" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
		<div class="modal fade" id="modalLPendientes" tabindex="-1" aria-labelledby="modalLPendientesLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-4 row-cols-md-2 g-10">
							
							<?php include "modales/pendientesModal.php" ?>
							
							<!--
                            <div class="col">
                                <div class="card">
                                    <a href="pdfs/.pdf"><img src="img/Libros/.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    <!--      -------------------------------------------------CARDS MANGA-----------------------------------------------------------------------------       -->
        <div class="modal fade" id="modalRomance" tabindex="-1" aria-labelledby="modalRomanceLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-4 row-cols-md-2 g-10">
                            <div class="col">
                                <div class="card">
                                    <a href="https://tumanhwas.com/viewer/19-dias-389.00"><img src="img/Mangas/19Days.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">19 Days</h5>
                                        <p class="card-text">cap 389</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://mangatoto.com/chapter/2144003"><img src="img/Mangas/PerfectlyBrokenLove.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Perfectly Broken Love</h5>
                                        <p class="card-text">cap 26</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/romance/lore-olympus/s2-episode-205/viewer?title_no=1320&episode_no=210"><img src="img/Mangas/LoreOlympus.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Lore Olympus</h5>
                                        <p class="card-text">Season 2: cap 205</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/fantasy/castle-swimmer/s2-episode-125-season-2-finale/viewer?title_no=1499&episode_no=134"><img src="img/Mangas/CastleSwimmer.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Castle Swimmer</h5>
                                        <p class="card-text">Season 2 Finale: cap 125</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://tapas.io/episode/2407978"><img src="img/Mangas/ChangeYourPath.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Change Your Path</h5>
                                        <p class="card-text">geni bicha</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/challenge/ru-screwed/1741-1742/viewer?title_no=154066&episode_no=174"><img src="img/Mangas/RUScrewed.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">R U Screwed</h5>
                                        <p class="card-text">Scooooooch</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://mto.to/chapter/2062501"><img src="img/Mangas/ChronicleOfTeenBoys.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Chronicles of Teenage Boys</h5>
                                        <p class="card-text">cap 5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://vgmotor.com/news/22861c0aa68bc2f047eae25537fb4304/cascade"><img src="img/Mangas/CreadorDelRey.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Creador del Rey -Tres Coronas-</h5>
                                        <p class="card-text">Temporada 2: cap 1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/challenge/dream-constellation/on-the-surface-01/viewer?title_no=125380&episode_no=126"><img src="img/Mangas/DreamConstellation.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Dream Constellation </h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://dto.to/chapter/2129649"><img src="img/Mangas/SurgeTowardsYou.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Surge Towards You </h5>
                                        <p class="card-text">Capitulo 41</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://mangamirror.com/manga/23670-fate-makes-no-mistakes/chapter-32"><img src="img/Mangas/FateMakesNoMistakes.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Fate Makes No Mistakes</h5>
                                        <p class="card-text">Capitulo 92</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://comiko.net/chapter/2338832"><img src="img/Mangas/PerfectBuddy.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Perfect Buddy</h5>
                                        <p class="card-text">Capitulo 59</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/fantasy/the-croaking/s2-episode-182-season-2-finale-/viewer?title_no=1494&episode_no=184"><img src="img/Mangas/TheCroaking.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">The Croaking</h5>
                                        <p class="card-text">Segunda Temporada terminada</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/challenge/bailin-and-li-yun/44-creak-creak-creak/viewer?title_no=781556&episode_no=49"><img src="img/Mangas/BailinAndLiYun.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Bailin And Li Yun</h5>
                                        <p class="card-text">cap 44</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/slice-of-life/daybreak/episode-1/viewer?title_no=4089&episode_no=1"><img src="img/Mangas/Daybreak.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Daybreak</h5>
                                        <p class="card-text">chap 1</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://ithinkilikeyou.net/"><img src="img/Mangas/IThinkILikeYou.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">I Think I Like You</h5>
                                        <p class="card-text">Limit Reached - 3/10/2023</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://www.glanceoflife.com/statuses/24912177.html"><img src="img/Mangas/LostInTheCloud.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Lost In The Cloud</h5>
                                        <p class="card-text">Cap 92 - DIOS LOS TRAUMAS</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/fantasy/osora/chapter-24/viewer?title_no=6202&episode_no=24"><img src="img/Mangas/Osora.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Osora</h5>
                                        <p class="card-text">chap 24 - DIOS EL SHIP</p>
                                    </div>
                                </div>
                            </div>
							
							
                            <!--
                            <div class="col">
                                <div class="card">
                                    <a href=""><img src="..." class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalShonen" tabindex="-1" aria-labelledby="modalShonenLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-4 row-cols-md-2 g-10">
                            <div class="col">
                                <div class="card">
                                    <a href="https://readherooacademia.com/manga/boku-no-hero-academia-chapter-388/"><img src="img/Mangas/BokuNoHero.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Boku no Hero</h5>
                                        <p class="card-text">cap 383</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://www.tcbscans.net/manga/one-piece/chapter-1115/"><img src="img/Mangas/OnePiece.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">One Piece</h5>
                                        <p class="card-text">Cap 1115</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://readfireforce.com/manga/fire-force-enen-no-shouboutai-chapter-304/?date=2024-06-01"><img src="img/Mangas/FireForce.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Fire Force</h5>
                                        <p class="card-text">FIN </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://readjujustu-kaisen.com/manga/jujutsu-kaisen/chapter-261/"><img src="img/Mangas/JujutsuKaisen.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Jujutsu Kaisen</h5>
                                        <p class="card-text">Cap 261</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://www.tcbscans.net/manga/black-clover/"><img src="img/Mangas/BlackClover.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Black Clover</h5>
                                        <p class="card-text">Cap ?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/action/the-gamer/season-5-ep-65/viewer?title_no=88&episode_no=415"><img src="img/Mangas/TheGamer.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">The Gamer</h5>
                                        <p class="card-text">cap ?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="https://recipesandcooker.com/news/d47c8552f6a69e1b86bf3477825ec039/cascade"><img src="img/Mangas/SKCClearCards.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Sakura Card Captor</h5>
                                        <p class="card-text">Cap ?</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://manhuatop.org/manhua/solo-farming-in-the-tower/chapter-62/"><img src="img/Mangas/SoloFarming.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Solo Farming In The Tower</h5>
                                        <p class="card-text">cap 8</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://www.webtoons.com/en/action/my-s-class-hunters/ep-116-deep-rinsing/viewer?title_no=3963&episode_no=116"><img src="img/Mangas/SRankers.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">S-Rankers I Raised</h5>
                                        <p class="card-text">chap 116</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://mangamiso.net/manga/virus-tensei-kara-hajimaru-isekai-kansen-monogatari"><img src="img/Mangas/IsekaiVirus.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">The Otherworldly Infection Story that Started with a Virus Reincarnation</h5>
                                        <p class="card-text">Chap 16.2</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://w2.kumodesugananika.com/manga/kumo-desu-ga-nani-ka-chapter-69-1/"><img src="img/Mangas/KumoDesuGaNaniKa.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Kumo Desu Ga Nani Ka</h5>
                                        <p class="card-text">Chap 69.1</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://mangadex.org/chapter/55799586-ed64-460c-963e-75daa88fd507/1"><img src="img/Mangas/TheExiledReincarnatedHeavyKnightIsUnrivaledInGameKnowledge.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">The Exiled Reincarnated Heavy Knight Is Unrivaled In Game Knowledge</h5>
                                        <p class="card-text">chap 88</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://indomitablemartialking.com/manga/2319-the-indomitable-martial-king-chapter-30/"><img src="img/Mangas/IndomitableMartialKing.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Indomitable Martial King</h5>
                                        <p class="card-text">chap 30</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href=""><img src="SoulEater.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Soul Eater</h5>
                                        <p class="card-text">FIN</p>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="col">
                                <div class="card">
                                    <a href=""><img src="..." class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
		<div class="modal fade" id="modalMTerminados" tabindex="-1" aria-labelledby="modalMTerminadosLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-4 row-cols-md-2 g-10">
                            <div class="col">
                                <div class="card">
                                    <img src="img/Mangas/Berserk.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Berserk</h5>
                                        <p class="card-text">F</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="img/Mangas/MarchStory.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">March Story</h5>
                                        <p class="card-text">Menosquetres a todos Y.Y</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <img src="img/Mangas/HungryJoker.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Hungry Joker</h5>
                                        <p class="card-text">cap 24 - Nunca salio la tercera temporada</p>
                                    </div>
                                </div>
                            </div>
							<div class="col">
                                <div class="card">
                                    <a href="https://mangatoto.com/series/94793"><img src="img/Mangas/ColdBloodedBeast.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Cold Blooded Beast</h5>
                                        <p class="card-text">Hermosho OwO - tipica historia koreana del dragon que necesita la perla de su amante </p>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    <!--      -------------------------------------------------CARDS SERIES---------------------------------------------------       -->
		<div class="modal fade" id="modalSTerminados" tabindex="-1" aria-labelledby="modalSTerminadosLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-3 row-cols-md-2 g-10">
						
                             <div class="col">
                                <div class="card">
                                    <a href="https://www.youtube.com/watch?v=y1sF6ZeASU0&list=PL-uopgYBi65HwiiDR9Y23lomAkGr9mm-S&index=15"><img src="img/Series/HelluvaBoss.png" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title">Helluva Boss</h5>
                                        <p class="card-text">S2 ep 6</p>
                                    </div>
                                </div>
                            </div>
							<!--
                            <div class="col">
                                <div class="card">
                                    <a href=""><img src="..." class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
			</div>
		</div>
	
		<div class="modal fade" id="modalSViendo" tabindex="-1" aria-labelledby="modalSViendoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-3 row-cols-md-2 g-10">
                             
							<!--
                            <div class="col">
                                <div class="card">
                                    <a href=""><img src="..." class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
	
		<div class="modal fade" id="modalSPendientes" tabindex="-1" aria-labelledby="modalSPendienLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row row-cols-3 row-cols-md-2 g-10">
                             
							<!--
                            <div class="col">
                                <div class="card">
                                    <a href=""><img src="..." class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    <!--      -------------------------------------------------CARDS PROYECTOS WIP---------------------------------------------------       -->
    
</body>

<footer>
    <p class="text-center">Diseñado por: Eli Pistoia</p>
</footer>



</html>