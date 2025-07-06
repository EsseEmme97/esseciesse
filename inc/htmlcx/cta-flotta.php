			<section class="wrapper">
				<div class="container mb-13 <?=(($_pagina_corrente == "trasporto-carico-parziale.php" || $_pagina_corrente == "trasporto-full-track.php") ?"": "mt-13");?>">
					<div class="row gy-10 align-items-center mb-13 mb-md-13">
						<div class="col-lg-6">
							<div>
								<div class="bg-soft-grape overflow-hidden">
									<div class="row gx-4 gx-md-9">
										<div>
											<figure><img class="shadow-lg rounded" src="<?=$pathindex?>assets/img/trasporto/trasportoespresso_laflotta.webp" srcset="<?=$pathindex?>assets/img/trasporto/trasportoespresso_laflotta.webp" alt="pizeta la flotta"></figure>
										</div>
										<!-- /column -->
									</div>
									<!-- /.row -->
								</div>
								<!--/.card-body -->
							</div>
							<!--/.card -->
						</div>
						<!-- /column -->
						<div class="col-lg-5 ms-auto align-items-center">
							<h2 class="text-start fs-40 fw-bold">Scopri la nostra flotta</h2>
							<p class="fs-17 fw-normal pb-4"><?=$flotta?></p>
							<a href="<?=$pathindex?>flotta" class="btn btn-lg fs-17 text-white btn-yellow-hov-blu">Flotta</a>
						</div>
						<!-- /column -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
