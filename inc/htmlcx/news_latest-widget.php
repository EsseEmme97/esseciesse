<?
$lastnews=array(1=>'News recenti',2=>'Latest blog',3=>'Последний блог',4=>'Último blog',12=>'Latest blog');
$path=array(1=>'news',2=>'en/blog-detail',3=>'ru/blog-detail',4=>'es/blog-detalle',12=>'us/blog-detail',14=>'mx/blog-detalle');

$query = "select news_data.id_new, titolo, descrizione_breve, news_data.datanews,id_categoria,id_foto,url
	FROM news_com, news_data
	WHERE news_data.attivo = '1' AND
	news_com.id_new = news_data.id_new AND
	id_lingua='".$lingua."'
	ORDER by news_data.datanews DESC, news_com.id_new DESC
	LIMIT 3";		
$results = $database->get_results($query);
if($database->num_rows($query) > 0){
?>
							<div class="widget">
								<div class="widget-title fs-19 fw-bold mb-2"><?=$lastnews[$lingua]?></div>
								<ul class="image-list">
<?
	foreach($results as $row){
		$url=$row['url'];	
		$id=$row['id_new'];	
		$titolo=$row['titolo'];	
		$data=substr($row['datanews'],8,2)." ".ucfirst($mesi_long[$lingua][substr($row['datanews'],5,2)])." ".substr($row['datanews'],0,4);
?>									
									<li>
										<?	
		if($row['id_foto']!=""){
			$query = "SELECT name,title 
			FROM files 
			WHERE checknumber='news' AND id IN (".$row['id_foto'].") AND type LIKE '%image%'
			ORDER BY FIELD(id, ".$row['id_foto'].") LIMIT 1";
			$results = $database->get_results($query);		
			if($database->num_rows($query) > 0){

				foreach($results as $row2){	
					$alttmp=explode("#",$row2['title']);
					$altlan=$alttmp[$lingua-1];
					if($altlan=="") $altlan=$alttmp[1]; // setta 1=inglese
					if($altlan=="") $altlan=$alttmp[0]; // setta 0=italiano
					$url=htmlentities(utf8_decode($row2['name']));				
?>
										<figure class="rounded">
											<a href="<?=$pathindex.$path[$lingua]."/".CleanString($titolo)?>"> <img src="../upl/thumbnail/<?=$url?>" alt="<?=$altlan?>" /></a>
										</figure>
<?}}}?>	
										<div class="post-content">
											<p class="mb-2"> <a class="link-dark" href="<?=$pathindex.$path[$lingua]."/".CleanString($titolo)?>"><?=$titolo?></a> </p>
											<ul class="post-meta">
												<li class="post-date"><i class="uil uil-calendar-alt"></i><span><?=$data?></span></li>
											</ul>
											<!-- /.post-meta -->
										</div>
									</li>
<?	}?>
								</ul>
								<!-- /.image-list -->
							</div>
							<!-- /.widget -->
<?}?>
<?/*
$lastnews=array(1=>'News recenti',2=>'Latest blog',3=>'Последний блог',4=>'Último blog',12=>'Latest blog');
$pathdettaglio=array(1=>'it/blog-dettaglio',2=>'en/blog-detail',3=>'ru/blog-detail',4=>'es/blog-detalle',12=>'us/blog-detail',14=>'mx/blog-detalle');
?>
                        <aside id="widget_mfn_recent_posts-2" class="widget widget_mfn_recent_posts">
                            <h3><?=$lastnews[$lingua]?></h3>
                            <div class="Recent_posts">
<?
$query = "select news_data.id_new, titolo, descrizione_breve, news_data.datanews,id_categoria,id_foto,url
	FROM news_com, news_data
	WHERE news_data.attivo = '1' AND
	news_com.id_new = news_data.id_new AND
	id_lingua='".$lingua."'
	ORDER by news_data.datanews DESC, news_com.id_new DESC
	LIMIT 3";		
$results = $database->get_results($query);
if($database->num_rows($query) > 0){	
?>
                                <ul>
<?
	foreach($results as $row){
		$url=$row['url'];	
		$id=$row['id_new'];	
		$titolo=$row['titolo'];	
		$data=substr($row['datanews'],8,2)." ".ucfirst($mesi_long[$lingua][substr($row['datanews'],5,2)])." ".substr($row['datanews'],0,4);
?>
                                    <li class="post format-">
                                        <a href="<?=$pathindex.$pathdettaglio[$lingua]."/".$url?>">                                            
                                            <div class="desc">
                                                <h6><?=$titolo?></h6><span class="date"><i class="icon-clock"></i><?=$data?></span>
                                            </div>
                                        </a>
                                    </li>
<?	}?>                                    
                                </ul>
<?}?>
                            </div>
                        </aside>
<?*/?>
