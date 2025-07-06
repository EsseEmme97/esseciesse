			<section class="wrapper" id="form-contatti">
				<div class="container py-13">
					<div class="card bg-primary shadow-lg">
						<div class="card-body p-12">
							<div class="row gx-md-8 gx-xl-12 gy-10">
								<div class="col-lg-6">
									<h2 class="display-4 text-white mb-3 pe-lg-10">Richiedi un preventivo</h2>
									<p class="lead text-white pe-lg-12 mb-14">Inviaci la richiesta di preventivo tramite il modulo.<br>Ti risponderemo entro 24 ore.</p>
								</div>
								<!-- /column -->
								<div class="col-lg-6">
									<form class="contact-form needs-validation" method="post" action="../assets/php/contact.php" novalidate id="myForm">
										<input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
										<div class="messages"></div>
										<div class="row gx-4">
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="frm_name" type="text" name="name" class="form-control border-0" required="required">
													<label for="frm_name">Azienda *</label>
													<div class="invalid-feedback">
														Inserisci l'azienda.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="frm_cognome" type="text" name="riferimento" class="form-control border-0" required="required">
													<label for="frm_cognome">Riferimento *</label>
													<div class="invalid-feedback">
														Inserisci il nome.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="frm_name" type="text" name="telefono" class="form-control border-0" required="required">
													<label for="frm_phone">Telefono *</label>
													<div class="invalid-feedback">
														Inserisci un numero di telefono.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-md-6">
												<div class="form-floating mb-4">
													<input id="frm_email" type="email" name="email" class="form-control border-0" required="required">
													<label for="frm_email">Email *</label>
													<div class="invalid-feedback">
														Inserisci un indirizzo mail valido.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="col-12">
												<div class="form-floating mb-4">
													<textarea id="frm_message" name="messaggio" class="form-control border-0" style="height: 150px" required=""></textarea>
													<label for="frm_message">Messaggio *</label>
													<div class="invalid-feedback">
														Inserisci il messaggio.
													</div>
												</div>
											</div>
											<!-- /column -->
											<div class="form-check ps-8 pb-2">
												<input class="form-check-input" type="checkbox" id="privacyCheck" required>
												<label class="form-check-label text-white" for="privacyCheck" >
												* Ho letto e compreso la <a class="text-yellow-hov-line" target="_blank" href="../privacy-policy">Privacy</a>
												</label>
												<div class="invalid-feedback">
													Campo obbligatorio.
												</div>
											</div>
											<div class="col-12">
												<input type="submit" class="btn btn-yellow text-white  fs-17 fw-bold rounded mt-2" value="Invia richiesta">
											</div>
											<!-- /column -->
										</div>
										<!-- /.row -->
									</form>
									<!-- /form -->
								</div>
								<!-- /column -->
							</div>
							<!-- /.row -->
						</div>
						<!--/.card-body -->
					</div>
					<!--/.card -->
				</div>
				<!-- /.container -->
			</section>
