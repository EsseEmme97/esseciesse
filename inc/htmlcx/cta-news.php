<?
$path=array(1=>'news',2=>'news');
$lanlatest=array(1=>"Ultima news");
$lanmore=array(1=>'Leggi tutto',2=>'Read more',3=>'Nouvelles');
$lanlink=array(1=>'news');

$query = "select news_data.id_new, titolo, titolo2, descrizione_2, id_foto, news_data.datanews
	FROM news_com, news_data
	WHERE news_data.attivo = '1' AND
	news_com.id_new = news_data.id_new AND
	id_lingua='".$lingua."' AND
	casa='1'
	ORDER by news_data.datanews DESC
	LIMIT 1";		
if($database->num_rows($query) > 0){
	list($id,$titolo,$titolo2,$desb,$id_foto,$datanews) = $database->get_row($query);
	$data=substr($datanews,8,2)." ".ucfirst($mesi_long[$lingua][substr($datanews,5,2)])." ".substr($datanews,0,4);
}
?>

			<section class="wrapper bg-light">
				<div class="container py-13">
					<div class="card bg-primary shadow-lg">
						<div class="row gx-0">
							<div class="col-lg-6 d-flex align-items-end">
								<div class="p-10 p-md-11 p-lg-14">								
									<h2 class="display-4 text-white mb-5">Leggi le nostre news</h2>
									<p class="lead text-inverse fs-17 mb-7 lh-base">  
										<?=$news_testo?>
									</p>
									<a href="../news" class="btn text-white btn-primary fs-17 fw-bold rounded mt-2 mb-4">Leggi tutte le news <i class="uil uil-arrow-right"></i></a>
								</div>
							</div>
							<!--/column -->
<?
if($id_foto!=""){
	$query = "SELECT name,title 
	FROM files 
	WHERE checknumber='news' AND id IN ($id_foto) AND type LIKE '%image%'
	ORDER BY FIELD(id, $id_foto)";
	$results = $database->get_results($query);
	if($database->num_rows($query)){
?>
							<div class="col-lg-6">
								<div class="p-10 p-md-11 p-lg-13">
									<div class="swiper-container dots-closer mb-2 swiper-container-2" data-autoplay="true" data-autoplaytime="3000" data-margin="30" data-dots="true">
										<div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
											<div class="swiper-wrapper" id="swiper-wrapper-39f02d53f93e53101" aria-live="off" style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
<?
		foreach($results as $row2){	
			$alttmp=explode("#",$row2['title']);
			$altlan=$alttmp[$lingua-1];
			if($altlan=="") $altlan=$alttmp[1]; // setta 1=inglese
			if($altlan=="") $altlan=$alttmp[0]; // setta 0=italiano
			$url=htmlentities(utf8_decode($row2['name']));				
?>
												<div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3" style="width: 485px; margin-right: 30px;">
													<img src="<?=$pathindex?>upl/medium/<?=$url?>" alt="<?=$altlan?>" style="width:100%" class="rounded">
												</div>
<?}?>
											</div>
<?	}}?>  							
											<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
										</div>
										<!-- /.swiper -->
										<div class="swiper-controls">
											<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
												<span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span>
												<span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
												<span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
											</div>
										</div>
									</div>
									<!-- /.swiper-container -->
								</div>
							</div>
							<!--/column -->
						</div>
						<!--/.row -->
					</div>
					<!--/.card -->
				</div>
				<!--/.container -->
			</section>
