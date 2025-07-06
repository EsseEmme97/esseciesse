<?
$query = "SELECT tag
		FROM news_com, news_data
		WHERE news_data.attivo = '1' AND
		news_com.id_new = news_data.id_new AND
		id_lingua='".$lingua."' AND
		tag!=''
		ORDER by tag DESC";
if($database->num_rows($query)>0){
	$results = $database->get_results($query);
	foreach($results as $row){
		$tag_tmp.=$row['tag'].",";
	}
	$tag_tmp=substr($tag_tmp,0,-1);
	$tag_tmp=explode(",",$tag_tmp);
	$tag_all=array_flip($tag_tmp);
	ksort($tag_all);
?>
							<div class="widget">
								<div class="widget-title fs-19 fw-bold mb-2">Tags</div>
								<ul class="list-unstyled tag-list">
<?	foreach($tag_all as $tv=>$tk){?>
									<li><a href="<?=$pathindex."tag/".CleanString($tv)?>" class="btn btn-soft-ash btn-sm rounded-pill <?=(CleanString($tv)==$tagurltmp[$tagurlall[$_REQUEST['tag']]]?"current":"")?>"><?=$tv?></a></li>
<?	}?>
								</ul>
                            </div>
<?}
