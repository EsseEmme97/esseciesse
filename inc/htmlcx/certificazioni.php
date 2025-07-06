			<section class="wrapper bg-light container mb-13 <?=(($_pagina_corrente == "news-dettaglio.php" || $_pagina_corrente == "settori.php" || $_pagina_corrente == "lavora-con-noi.php") ?"mt-13": "");?><?=($_pagina_corrente == "trasporto-merce-pallettizzata.php" || $_pagina_corrente == "trasporto-carico-parziale.php" || $_pagina_corrente == "trasporto-full-track.php" || $_pagina_corrente == "trasporto-espresso.php" ? "mt-11" : "");?>">
				<div>
					<div class="row gx-xl-12">
						<div class=" col-xl-5">
							<h2 class="display-2 lh-xs mb-3">Le nostre <span class="underline-3 style-3 yellow">certificazioni</span></h2>
							<p class="fs-17 mb-6"><?=$certificazioni_testo;?></p>
							<a href="<?=$pathindex?>qualita-ambiente" class="btn btn-primary fs-17 rounded">Scopri di più</a>
						</div>
						<!-- /column -->
						<div class="col-xl-7 align-items-center py-7">
							<div class="position-relative">
								<div class="swiper-container dots-closer" data-margin="0" data-dots="true" data-items-md="3" data-items-xs="1">
									<div class="swiper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="item-inner">
													<div class="card">
														<div class="card-body">
															<a href="<?=$pathindex?>assets/media/PIZETA_EXPRESS_9001.pdf" target="blank" title="ISO 9001"><img class="rounded" src="<?=$pathindex?>assets/img/global/certificazione1.jpg" alt="ISO 9001"></a>
														</div>
														<!--/.card-body -->
													</div>
													<!-- /.card -->
												</div>
												<!-- /.item-inner -->
											</div>
											<!--/.swiper-slide -->
											<div class="swiper-slide">
												<div class="item-inner">
													<div class="card">
														<div class="card-body">
															<a href="<?=$pathindex?>assets/media/PIZETA_EXPRESS_45001.pdf" target="blank" title="ISO 45001"><img class="rounded" src="<?=$pathindex?>assets/img/global/certificazione2.jpg" alt="ISO 45001"></a>
														</div>
														<!--/.card-body -->
													</div>
													<!-- /.card -->
												</div>
												<!-- /.item-inner -->
											</div>
											<!--/.swiper-slide -->
											<div class="swiper-slide">
												<div class="item-inner">
													<div class="card">
														<div class="card-body">
															<a href="<?=$pathindex?>assets/media/PIZETA_EXPRESS_ESG-NET.pdf" target="blank" title="ESG-NET"><img class="rounded" src="<?=$pathindex?>assets/img/global/certificazione3.jpg" alt="ESG-NET"></a>
														</div>
														<!--/.card-body -->
													</div>
													<!-- /.card -->
												</div>
												<!-- /.item-inner -->
											</div>
											<!--/.swiper-slide -->
										</div>
										<!--/.swiper-wrapper -->
									</div>
									<!-- /.swiper -->
								</div>
								<!-- /.swiper-container -->
							</div>
							<!-- /. relative-->
						</div>
						<!-- /column -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
			<!-- /section -->
