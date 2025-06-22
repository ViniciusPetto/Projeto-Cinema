<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require_once 'app/view/structure/header.php' ?>
        <link rel="icon" href="app/view/images/film-solid.ico">
        <link rel="stylesheet" href="app/public/css/style.css">
        <title>CineHome</title>
    </head>
    <body>
        <?php include_once 'app/view/structure/navbar.php' ?>

        <h4 style="color: white;">Filmes Disponíveis</h4>
		<br>

		<div class="container">

			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

				<div class="carousel-inner">



					<div class="carousel-item active">

						<div class="row">

							<div class="col-sm-12 col-md-4">

								<div class="card">

									<img src="app/view/images/capa-deadpool-wolverine.png">
									<div class="card-body">

										<h4 class="card-title">Deadpool & Wolverine</h4>
										<h6>Deadpool e Wolverine se unem em uma missão caótica e irreverente para enfrentar uma nova ameaça. O filme combina o humor irreverente de Deadpool com a ação e intensidade de Wolverine, resultando em uma parceria explosiva e cheia de ação</h6>

									</div>
									
									<div class="d-grid gap-2 col-4 mx-auto">
											
										<form action="app/view/horario.php" method="POST">

											<input type="text" name="sigla_filme" value="DW" style="display: none;">
											<button class="btn btn-danger">Reserve Agora</button>

										</form>

									</div>

								</div>

							</div>
						


							<div class="col-sm-12 col-md-4">

								<div class="card">

									<img src="app/view/images/capa-o-corvo.png">
									<div class="card-body">

										<h4 class="card-title">O Corvo</h4>
										<h6>Um jovem artista é ressuscitado por um corvo para vingar seu próprio assassinato e o da sua noiva. O filme é uma nova adaptação da história de vingança e justiça com uma abordagem moderna</h6>

									</div>
									<br>
										
									<div class="d-grid gap-2 col-4 mx-auto">
											
										<form action="app/view/horario.php" method="POST">

											<input type="text" name="sigla_filme" value="COR" style="display: none;">
											<button class="btn btn-danger">Reserve Agora</button>

										</form>

									</div>

								</div>

							</div>




							<div class="col-sm-12 col-md-4">

								<div class="card">

									<img src="app/view/images/capa-divertidamente-2.jpg">

									<div class="card-body">

										<h4 class="card-title">Divertidamente 2</h4>
										<h6>Riley, agora adolescente, enfrenta novas emoções e desafios. Alegria e suas colegas do painel emocional ajudam Riley a navegar por mudanças complexas na vida e a encontrar equilíbrio em seu mundo interior</h6>

									</div>
									<br>
									<br>
									<br>
									<br>
									<br>
										
									<div class="d-grid gap-2 col-4 mx-auto">
											
										<form action="app/view/horario.php" method="POST">

											<input type="text" name="sigla_filme" value="DIV2" style="display: none;">
											<button class="btn btn-danger">Reserve Agora</button>

										</form>

									</div>
										
								</div>

							</div>

						</div>

					</div>




					<div class="carousel-item">

						<div class="posCarousel row">

							<div class="col-md-4 col-sm-12">

								<div class="card">

									<img src="app/view/images/capa-coraline.jpg">

									<div class="card-body">

										<h4 class="card-title">Coraline e o Mundo Secreto</h4>
										<h6>Coraline retorna a um mundo alternativo onde descobre novos segredos e perigos, enfrentando uma nova ameaça enquanto luta para proteger sua família e seu próprio mundo real</h6>

									</div>
									<br>
										
									<div class="d-grid gap-2 col-4 mx-auto">
											
										<form action="app/view/horario.php" method="POST">

											<input type="text" name="sigla_filme" value="CMS" style="display: none;">
											<button class="btn btn-danger">Reserve Agora</button>

										</form>

									</div>

								</div>

							</div>

							<div class="col-md-4 col-sm-12">

								<div class="card">

									<img src="app/view/images/capa-meu-malvado-favorito-4.jpg">
									<div class="card-body">

										<h4 class="card-title">Meu Malvado Favorito 4</h4>
										<h6>Gru e seus minions enfrentam uma nova ameaça enquanto Gru busca equilíbrio entre ser um supervilão e um pai. Novas aventuras e desafios testam a força de sua família e suas habilidades</h6>

									</div>
									<br>
									<br>
										
									<div class="d-grid gap-2 col-4 mx-auto">
											
										<form action="app/view/horario.php" method="POST">

											<input type="text" name="sigla_filme" value="ME4" style="display: none;">
											<button class="btn btn-danger">Reserve Agora</button>

										</form>

									</div>

								</div>

							</div>

							<div class="col-md-4 col-sm-12">

								<div class="card">

									<img src="app/view/images/capa-hp-3.png">
									<div class="card-body">

										<h4 class="card-title">Harry Potter e o Prisioneiro de Azkaban</h4>
										<h6>Harry descobre que Sirius Black, um prisioneiro fugido, está atrás dele. Enquanto enfrenta perigos e revela segredos sobre seu passado, Harry e seus amigos enfrentam desafios para proteger Hogwarts e desvendar a verdade</h6>

									</div>
										
									<div class="d-grid gap-2 col-4 mx-auto">
											
											<form action="app/view/horario.php" method="POST">

												<input type="text" name="sigla_filme" value="HP3" style="display: none;">
												<button class="btn btn-danger">Reserve Agora</button>

											</form>

									</div>

								</div>

							</div>

						</div>

					</div>


					

					<button class="carousel-control-prev button-voltar" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="pos-botao-carousel-left" aria-hidden="false"><b>Voltar</b> <i class="fa-solid fa-greater-than fa-rotate-180 fa-2xl" style="color: #ff0000;"></i></span>
					</button>

					<button class="carousel-control-next corCarouselbutton button-proximo" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="pos-botao-carousel-right" aria-hidden="false"><b>Próximo</b> <i class="fa-solid fa-greater-than fa-2xl" style="color: #ff0000;"></i></span>
					</button>

				</div>

			</div>

		</div>

        <?php require_once 'app/view/structure/footer-scripts.php' ?>
    </body>
</html>