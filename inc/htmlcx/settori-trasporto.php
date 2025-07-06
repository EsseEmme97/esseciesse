<?
switch ($_pagina_corrente) {
	case "trasporto-espresso.php":
		$siderurgico="Gestiamo qualsiasi tipo di trasporto eccezionale di prodotti siderurgici. I nostri mezzi sono dotati anche di sistemi di GPS per il controllo costante in tempo reale.";
		$gd="Consegne tracciabili e geolocalizzabili, per avere sempre sotto controllo i tempi di consegna.";
		$rifiuti="Ci occupiamo del trasporto di tutti i rifiuti che rientrano nella categoria dei “non pericolosi”, nel rispetto della normativa vigente.";
		$industriali="Movimentiamo, trasportiamo e consegniamo spedizioni di macchinari, indipendentemente dalle dimensioni e peso.";
		$adr="Pizeta Express possiede specifiche certificazioni abilitanti il trasporto delle merci pericolose soggette a normativa ADR.";
		$pallet="Soluzioni veloci e sicure per il trasporto di merce pallettizzata, con gestione ottimizzata per garantire puntualità e affidabilità in ogni consegna.";
		break;
	case "trasporto-carico-parziale.php":
		$siderurgico="Servizio di trasporto eccezionale di prodotti siderurgici, con mezzi dotati di sistemi GPS per un monitoraggio continuo e in tempo reale.";
		$gd="Offriamo consegne tracciabili e geolocalizzabili, permettendovi di monitorare i tempi di consegna e avere sempre il controllo sulla spedizione.";
		$rifiuti="Effettuiamo il trasporto di rifiuti non pericolosi, rispettando tutte le normative vigenti per garantire una gestione sicura e conforme.";
		$industriali="Siamo specializzati nel movimentare, trasportare e consegnare macchinari di qualsiasi dimensione e peso, con un servizio attento e preciso.";
		$adr="Siamo abilitati con certificazioni specifiche per il trasporto di merci pericolose, conformi alla normativa ADR, garantendo il rispetto degli standard di sicurezza.";
		$pallet="Gestione sicura e ottimizzata del trasporto di merce pallettizzata, con attenzione alla puntualità di consegna in tutta Italia, monitoraggio costante e flessibilità.";
		break;
	case "trasporto-full-track.php":
		$siderurgico="Gestiamo il trasporto eccezionale di prodotti siderurgici con mezzi dotati di sistemi GPS, assicurando un monitoraggio continuo e in tempo reale.";
		$gd="Le nostre consegne sono completamente tracciabili e geolocalizzabili, permettendovi di monitorare i tempi di arrivo e di mantenere il controllo completo delle spedizioni.";
		$rifiuti="Gestiamo il trasporto di rifiuti non pericolosi, rispettando scrupolosamente le normative vigenti per garantire una gestione sicura e conforme.";
		$industriali="Siamo esperti nella movimentazione, trasporto e consegna di macchinari di qualsiasi dimensione e peso, offrendo un servizio preciso e affidabile.";
		$adr="Le <a class=\"text-blu-hov-yellow\" href=\"".$pathindex."qualita-ambiente\">certificazioni</a> specializzate per il trasporto di merci pericolose, conformi alle normative ADR, ci consentono di garantire ai nostri clienti il rigoroso rispetto degli standard di sicurezza.";
		$pallet="Trasportiamo la tua merce su pallet con efficienza, puntualità e sicurezza, garantendo un servizio affidabile e flessibile in tutta Italia.";
		break;
}
?>
            <section class="wrapper bg-light">
                <div class="container pb-13 pt-6">
                    <div class="row text-center">
                        <div class="col-md-10 offset-md-2 col-lg-8">
                            <h2 class="display-4 mb-3"><span class="underline-3 style-3 yellow">Settori</span> serviti</h2>
                            <p class="fs-17 lh-1-25 fw-normal mb-9 mb-md-6" style="color: #60697b;">In questi 40 anni di lavoro ci siamo dotati delle migliori tecnologie e acquisito le <a class="text-blu-hov-yellow" href="<?=$pathindex?>qualita-ambiente">certificazioni</a> necessarie, per poter offrire sempre il meglio ai clienti che si affidano a noi per il trasporto espresso merci.</p>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                    <div class="row gx-lg-8 gx-xl-12 gy-8">
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="<?=$pathindex?>assets/img/trasporto/setting.svg" class="me-4" style="width: 30px;" alt="Settore siderurgico">
                                </div>
                                <div>
                                    <h4 class="mb-1 fs-22 fw-bold">Materiale siderurgico</h4>
                                    <p class="mb-0 fs-17 fw-normal" style="color: #60697b;"><?=$siderurgico?></p>
									<a href="<?=$pathindex?>trasporto-materiale-siderurgico">
										<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Maggiori info <i class="more"></i></p>
									</a>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="<?=$pathindex?>assets/img/trasporto/director.svg" class="me-4" style="width: 30px;" alt="Settore GD, GDO, GDS">
                                </div>
                                <div>
                                    <h4 class="mb-1 fs-22 fw-bold">GD, GDO, GDS</h4>
                                    <p class="mb-0 fs-17 fw-normal" style="color: #60697b;"><?=$gd?></p>
									<a href="<?=$pathindex?>trasporto-gdo">
										<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Maggiori info <i class="more"></i></p>
									</a>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="<?=$pathindex?>assets/img/trasporto/server.svg" class="me-4" style="width: 30px;" alt="Settore trasporto rifiuti">
                                </div>
                                <div>
                                    <h4 class="mb-1 fs-22 fw-bold">Rifiuti</h4>
                                    <p class="mb-0 fs-17 fw-normal" style="color: #60697b;"><?=$rifiuti?></p>
									<a href="<?=$pathindex?>trasporto-rifiuti">
										<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Maggiori info <i class="more"></i></p>
									</a>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="<?=$pathindex?>assets/img/trasporto/script.svg" class="me-4" style="width: 30px;" alt="Settore macchinari">
                                </div>
                                <div>
                                    <h4 class="mb-1 fs-22 fw-bold">Macchinari industriali</h4>
                                    <p class="mb-0 fs-17 fw-normal" style="color: #60697b;"><?=$industriali?></p>
									<a href="<?=$pathindex?>trasporto-macchinari">
										<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Maggiori info <i class="more"></i></p>
									</a>                                    
                                </div>
                            </div>
                        </div>
                        <!--/column --> 
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="<?=$pathindex?>assets/img/trasporto/cloud-network.svg" class="me-4" style="width: 30px;" alt="Settore metalmeccanico">
                                </div>
<!--
                                <div>
                                    <h4 class="mb-1 fs-22 fw-bold">Materiale metalmeccanico</h4>
                                    <p class="mb-0 fs-17 fw-normal" style="color: #60697b;">Autoarticolati centinati per offrire un carico-scarico merci agevole, per assicurarvi sicurezza, puntualità ed efficienza.</p>
									<a href="<?=$pathindex?>trasporto-materiale-metalmeccanico">
										<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Maggiori info <i class="more"></i></p>
									</a>                                    
                                </div>
-->
                                <div>
                                    <h4 class="mb-1 fs-22 fw-bold">Merce Pallettizzata</h4>
                                    <p class="mb-0 fs-17 fw-normal" style="color: #60697b;"><?=$pallet?></p>
									<a href="<?=$pathindex?>trasporto-merce-pallettizzata">
										<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Maggiori info <i class="more"></i></p>
									</a>                                    
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-4">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="<?=$pathindex?>assets/img/trasporto/verify.svg" class="me-4" style="width: 30px;" alt="Settore materiale ADR">
                                </div>
                                <div>
                                    <h4 class="mb-1 fs-22 fw-bold">Materiale ADR</h4>
                                    <p class="mb-0 fs-17 fw-normal" style="color: #60697b;"><?=$adr?></p>
									<a href="<?=$pathindex?>trasporto-materiale-adr">
										<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Maggiori info <i class="more"></i></p>
									</a>                                    
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                </div>
				<!-- /.container -->
			</section>
			<!-- /section -->
			<section class="wrapper bg-light">
				<div class="container pb-13">
					<div class="grid grid-view projects-masonry">
						<div class="row gx-md-8 gy-10 gy-md-13 isotope">
							<div class="project item col-md-6 col-xl-6">
								<figure class="rounded mb-6"><img src="<?=$pathindex?>assets/img/trasporto/trasportoespresso_caricoparziale.webp" srcset="<?=$pathindex?>assets/img/trasporto/trasportoespresso_caricoparziale.webp" alt="groupage" /></figure>
								<div class="project-details d-flex justify-content-center flex-column">
									<div class="post-header text-center">
										<a href="<?=$pathindex?>trasporto-carico-parziale">
											<h2 class="post-title h3 fs-23 fw-bold mb-2 text-blu-hov-yellow">Groupage</h2>
										</a>
										<p class="fs-17 fw-normal mb-2" style="color: #60697b;">Efficienza e flessibilità nel trasporto di carichi parziali, con consegne velocissime e affidabilità garantita.
										</p>
										<a href="<?=$pathindex?>trasporto-carico-parziale">
											<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Scopri di più<i class="more"></i></p>
										</a>
									</div>
									<!-- /.post-header -->
								</div>
								<!-- /.project-details -->
							</div>
							<!-- /.item -->
							<div class="project item col-md-6 col-xl-6">
								<figure class="rounded mb-6"><img src="<?=$pathindex?>assets/img/trasporto/trasportoespresso_fulltrack.webp" srcset="<?=$pathindex?>assets/img/trasporto/trasportoespresso_fulltrack.webp" alt="trasporto full track" /></figure>
								<div class="project-details d-flex justify-content-center flex-column">
									<div class="post-header text-center">
										<a href="<?=$pathindex?>trasporto-full-track">
											<h2 class="post-title h3 fs-23 fw-bold mb-2 text-blu-hov-yellow">Trasporto full track</h2>
										</a>
										<p class="fs-17 fw-normal mb-2" style="color: #60697b;">Servizio dedicato per trasportare merci in esclusiva, garantendo massima sicurezza e puntualità.
										</p>
										<a href="<?=$pathindex?>trasporto-full-track">
											<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Scopri di più<i class="more"></i></p>
										</a>
									</div>
									<!-- /.post-header -->
								</div>
								<!-- /.project-details -->
							</div>
							<!-- /.item --> 
							<!--
								<div class="project item col-md-6 col-xl-4">
								  <figure class="rounded mb-6"><img src="<?=$pathindex?>assets/img/trasporto/trasportoespresso_speciale.webp" srcset="<?=$pathindex?>assets/img/trasporto/trasportoespresso_speciale.webp" alt="" /><a class="item-link" href="./assets/img/photos/pd8-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
								  <div class="project-details d-flex justify-content-center flex-column">
									<div class="post-header text-center">
									  <a href="<?=$pathindex?>trasporti-speciali">
									  <h2 class="post-title h3 fs-23 fw-bold mb-2 text-blu-hov-yellow">Trasporti speciali</h2></a>
									  <p class="fs-17 fw-normal mb-2" style="color: #60697b;">Gestiamo carichi eccezionali con mezzi specifici, garantendo sicurezza e attenzione alle esigenze particolari.
									  </p>
									  <a href="<?=$pathindex?>trasporti-speciali"><p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;">Scopri di più su di noi<i class="more"></i></p></a>
									</div>
								  </div>
								</div>
								-->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.grid -->
				</div>
				<!-- /.container -->
			</section>
			<!-- /section -->
