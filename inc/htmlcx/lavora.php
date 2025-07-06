<?
$query = "select lavora_data.id_new, titolo, descrizione_breve
	FROM lavora_com, lavora_data
	WHERE lavora_data.attivo = '1' AND
	lavora_com.id_new = lavora_data.id_new AND
	id_lingua='".$lingua."'
	ORDER by lavora_com.ordine DESC";
$totali=$database->num_rows($query);
?>
					<div class="row">
						<div class="col-lg-11 col-xxl-10 mx-auto text-center">
							<h2 class="fs-15 text-uppercase link-yellow mb-3">UNISCITI AL TEAM DI PIZETA EXPRESS</h2>
							<h3 class="display-4 mb-10 px-lg-12 px-xl-10 px-xxl-15">Vuoi entrare nel team?</h3>
						</div>
						<!--/column -->
						<div>
							<p>
								In Pizeta Express siamo costantemente alla ricerca di persone dinamiche, appassionate e pronte a mettersi in gioco in un ambiente stimolante e in continua crescita. Se desideri contribuire al nostro successo e fare la differenza nel settore dei trasporti e della logistica, inviaci il tuo CV e candidati per una delle posizioni aperte.<br>
								Non vedi l'opportunità giusta per te? Nessun problema! Puoi comunque inviare una candidatura spontanea: saremo lieti di valutare il tuo profilo e contattarti quando si apriranno nuove opportunità.
							</p>
<?if($totali>0){?>
							<p>Posizioni Aperte:</p>
<?}?>
						</div>
					</div>
<?
if($totali>0){?>
					<div class="accordion accordion-wrapper" id="accordionExample">
<?
	$results = $database->get_results($query);
	foreach($results as $row){
		$id=$row['id_new'];
		$search  = array('à', 'è', 'é', 'ì', 'ò', 'ù');
		$replace  = array('À', 'È', 'É', 'Ì', 'Ò', 'Ù');
		$titolotmp=$row['titolo'];
		$titolo=str_replace($search, $replace, $titolotmp);
		$desb=$row['descrizione_breve'];
?>
						<div class="card accordion-item">
							<div class="card-header" id="collapse<?=++$i?>_header">
								<button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?=$i?>" aria-expanded="false" aria-controls="collapse<?=$i?>"> <?=$titolo?> </button>
							</div>
							<div id="collapse<?=$i?>" class="accordion-collapse collapse" aria-labelledby="collapse<?=++$i?>_header" data-bs-parent="#accordionExample">
								<div class="card-body"><?=nl2br($desb);?><br><br>
									<div class="pb-4">
										<a href="<?=$_SERVER['REQUEST_URI']?>#form" id="pos<?=++$n?>" class="btn text-white btn-yellow-hov-blu rounded fs-14 fw-bold cta-lavora">Invia il curriculum</a>
									</div>
								</div>
							</div>
						</div>							
<?	}?>
					</div>
<?}?>

