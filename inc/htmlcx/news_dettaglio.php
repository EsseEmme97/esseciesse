                            <div class="blog single">
                                <div class="card">
                                    <figure class="card-img-top"><img src="../<?=$imageheader?>" alt="<?=$imageheaderalt?>" /></figure>
                                    <div class="card-body">
                                        <div class="classic-view">
                                            <article class="post">
                                                <div class="post-content mb-5">
                                                    <p><?=$descrizione_breve?></p>
<?
if($id_doc){
	$query = "SELECT name,title 
	FROM files 
	WHERE checknumber='news' AND id IN (".$id_doc.") AND type LIKE '%application/%'
	ORDER BY FIELD(id, ".$id_doc.")
	LIMIT 0,1";
	$resultsdoc = $database->get_results($query);
	if($database->num_rows($query) > 0){
		foreach($resultsdoc as $row2){
			$url=rawurlencode($row2['name']);
			$alttmp=explode("#",$row2['title']);
			$altlan=$alttmp[$lingua-1];
			if($altlan=="") $altlan=$alttmp[1]; // setta 1=inglese
			if($altlan=="") $altlan=$alttmp[0]; // setta 0=italiano	 	
	?>												
													<div class="mb-0 mb-md-2">
														<div class="dropdown share-dropdown btn-group">
															<a href="<?=$pathindex."upl/".$url?>" target="_blank"class="btn btn-primary fs-17 rounded">
																<i class="uil uil-file-download"></i>&nbsp;<?=$altlan?>
															</a>
														</div>
													</div>   
<?	} } }
if($id_foto!=""){
	$query = "SELECT name,title 
	FROM files 
	WHERE checknumber='news' AND id IN ($id_foto) AND type LIKE '%image%'
	ORDER BY FIELD(id, $id_foto) LIMIT 10 OFFSET 1";
	$results = $database->get_results($query);
	if($database->num_rows($query)){
?>
                                                    <div class="row g-6 mt-3 mb-10">
<?
		foreach($results as $row2){	
			$alttmp=explode("#",$row2['title']);
			$altlan=$alttmp[$lingua-1];
			if($altlan=="") $altlan=$alttmp[1]; // setta 1=inglese
			if($altlan=="") $altlan=$alttmp[0]; // setta 0=italiano
			$url=htmlentities(utf8_decode($row2['name']));				
?>
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark"><img src="<?=$pathindex?>upl/<?=$url?>" alt="<?=$altlan?>" /></figure>
                                                        </div>
<?}?>
													</div>
<?	}}?>                                                    
                                                    <!-- /.row -->
                                                </div>
                                                <!-- /.post-content -->
<?if($tag){ $tags=explode(",",$tag);?>
                                                <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                                    <div>
                                                        <ul class="list-unstyled tag-list mb-0">
<?	foreach($tags as $tv) {?>
															<li><a href="<?=$pathindex."tag/".CleanString($tv)?>" class="btn btn-soft-ash btn-sm rounded-pill mb-0"><?=$tv?></a></li>
<?	}?>  
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /.post-footer -->
<?}?>                                    
                                            </article>
                                            <!-- /.post -->
                                        </div>
                                        <!-- /.classic-view -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.blog -->


