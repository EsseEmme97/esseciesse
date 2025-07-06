<?
$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$testo = array(1=>"Con Pizeta Express abbiamo trovato il partner ideale per le nostre spedizioni urgenti. La loro capacità di garantire consegne entro 24 ore, anche in zone difficili da raggiungere, è stata determinante per la nostra attività.",
				2=>"La nostra azienda si affida a Pizeta Express per il trasporto di materiali pericolosi. La loro competenza e le certificazioni ADR ci danno la sicurezza di essere sempre in conformità con la normativa, senza preoccupazioni.",
				3=>"Il servizio di logistica integrata di Pizeta Express ha rivoluzionato la gestione del nostro magazzino. Grazie ai loro spazi ampi e alla gestione automatizzata, abbiamo ottimizzato i nostri processi e migliorato l'efficienza.",
				4=>"Abbiamo esigenze complesse per il trasporto di macchinari. Pizeta Express ha sempre saputo gestire le nostre richieste con precisione e professionalità, mantenendo puntuali le consegne.",
				5=>"Grazie a Pizeta Express, le nostre spedizioni nella grande distribuzione sono sempre tracciabili e puntuali. La loro affidabilità è un valore aggiunto per il nostro business.",
				6=>"Trasportare macchinari fuori misura è una sfida, ma con Pizeta Express abbiamo trovato un partner in grado di rispondere a ogni esigenza con soluzioni su misura e grande professionalità.",
				7=>"Ci affidiamo a Pizeta Express per lo stoccaggio dei nostri prodotti stagionali. La flessibilità e la sicurezza offerte dalla loro logistica integrata sono state fondamentali per ottimizzare i nostri processi.",
				8=>"Grazie alla loro competenza e alle certificazioni ADR, Pizeta Express è il nostro punto di riferimento per il trasporto sicuro di materiali pericolosi. Un partner davvero affidabile!",
				9=>"La precisione e la puntualità di Pizeta Express sono impareggiabili. Il loro team riesce a gestire anche le consegne più urgenti senza compromettere la qualità del servizio.",
				10=>"Pizeta Express ha migliorato la nostra gestione logistica, offrendoci spazi ampi e una gestione automatizzata che ha semplificato il nostro flusso operativo.",
				11=>"Per il trasporto dei nostri rifiuti non pericolosi, ci affidiamo a Pizeta Express. La loro precisione e il rispetto rigoroso delle normative ci garantiscono tranquillità e un servizio impeccabile.",
				12=>"Le consegne espresse di Pizeta Express hanno reso più efficienti i nostri processi aziendali. La puntualità e la trasparenza del loro servizio sono impareggiabili.");
$nome = array(1=>"F. B.",2=>"G. D. M.",3=>"L.V.",4=>"S.T.",5=>"M. C.",6=>"A. R.",7=>"E. T.",8=>"P. S.",9=>"G. L.",10=>"C. B.",11=>"D. F.",12=>"L. M.");
$settore = array(1=>"Cliente settore metalmeccanico",
					2=>"Cliente settore chimico",
					3=>"Cliente settore GDO",
					4=>"Cliente settore industriale",
					5=>"Cliente settore GDO",
					6=>"Cliente settore meccanico",
					7=>"Cliente settore alimentare",
					8=>"Cliente settore chimico",
					9=>"Cliente settore metalmeccanico",
					10=>"Cliente settore GDO",
					11=>"Cliente settore industriale",
					12=>"Cliente merce pallettizzata");

// Seleziona 4 chiavi casuali senza ripetizioni
$randomKeys = array_rand($numeri, 4);
$randomNumbers = array_map(function($key) use ($numeri) {
    return $numeri[$key];
}, $randomKeys);
?>
			<section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="<?=$pathindex?>assets/img/testimonial/home_diconodinoi_blu.webp">
				<div class="container py-15 py-md-13">
					<h2 class="display-5 fw-semibold mb-4 text-center text-white">Dicono di noi</h2>
					<div class="swiper-container dots-closer dots-light dots-light-75" data-autoplay="true" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
						<div class="swiper">
							<div class="swiper-wrapper">
<?foreach($randomNumbers as $v) {?>
								<div class="swiper-slide">
									<div class="item-inner">
										<div class="card border-0 bg-white-900">
											<div class="card-body">
												<span class="ratings five mb-3"></span>
												<blockquote class="border-0 mb-0">
													<p class="h5-09rem">“<?=$testo[$v]?>”</p>
													<div class="blockquote-details">
														<div class="info p-0">
															<p class="h5-09rem mb-0 fs-19 fw-bold"><?=$nome[$v]?></p>
															<p class="mb-0 fs-17"><?=$settore[$v]?></p>
														</div>
													</div>
												</blockquote>
											</div>
											<!-- /.card-body -->
										</div>
										<!-- /.card -->
									</div>
									<!-- /.item-inner -->
								</div>
<?}?>
							</div>
							<!--/.swiper-wrapper -->
						</div>
						<!-- /.swiper -->
					</div>
					<!-- /.swiper-container -->
				</div>
				<!-- /.container -->
			</section>
			<!-- /section -->
