<?
$categorie=array(1=>'Categorie',2=>'Archive',3=>'Архив',4=>'Archivo',12=>'Archive',14=>'Archivo');
$path=array(1=>'news/categoria',2=>'en/blog',3=>'ru/blog', 4=>'es/blog',12=>'us/blog', 14=>'mx/blog');
$query = "SELECT id_categoria
		FROM news_com, news_data
		WHERE news_data.attivo = '1' AND
		news_com.id_new = news_data.id_new AND
		id_lingua='".$lingua."'
		ORDER by datanews DESC, news_com.id_new desc";
if($database->num_rows($query)>0){
?>
							<div class="widget">
								<div class="widget-title fs-19 fw-bold mb-2"><?=$categorie[$lingua]?></div>
								<ul class="unordered-list bullet-primary">
<?
	$results = $database->get_results($query);
	foreach($results as $row){
		$cattmp.=$row['id_categoria'].",";
	}
	$cattmp=substr($cattmp,0,-1);
	$cattmp=explode(",",$cattmp);
	foreach($cattmp as $k=>$v)
		$tot[$v]=$tot[$v]+1;
	$query = "SELECT nm,news_tree_data.id
				FROM news_tree_data,news_tree_struct
				WHERE news_tree_struct.lvl=1 AND news_tree_data.id=news_tree_struct.id AND
				id_lingua='".$lingua."' 
				ORDER BY nm";
	$results = $database->get_results($query);
	if($database->num_rows($query) > 0){
		foreach($results as $row2){	
?>											
									<li><a href="<?=$pathindex.$path[$lingua]."/".CleanString($row2['nm'])?>" class="<?=($id_cat==$row2['id']?"current":"text-reset")?>"><?=$row2['nm']?> (<?=$tot[$row2['id']]?>)</a></li>
<?}	}?>
								</ul>
							</div>
<?}?>
