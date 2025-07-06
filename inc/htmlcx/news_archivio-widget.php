<?
$archivio=array(1=>'Archivio',2=>'Archive',3=>'Архив',4=>'Archivo',12=>'Archive',14=>'Archivo');
$path=array(1=>'news',2=>'en/blog',3=>'ru/blog', 4=>'es/blog',12=>'us/blog', 14=>'mx/blog');
$query = "select YEAR(ANY_VALUE(news_data.datanews)) as year_data, MONTH(ANY_VALUE(news_data.datanews)) AS month_data, COUNT(news_data.id_new) AS totale FROM news_com, news_data
WHERE news_data.attivo = '1' AND
	news_com.id_new = news_data.id_new AND
	id_lingua='".$lingua."'
GROUP BY year_data,month_data
ORDER by year_data DESC,month_data DESC
	LIMIT 5";
if($database->num_rows($query)>0){
	$results = $database->get_results($query);	
?>
							<div class="widget">
                                <div class="widget-title fs-19 fw-bold mb-2"><?=$archivio[$lingua]?></div>
								<ul class="unordered-list bullet-primary">
<?
	foreach($results as $row){
		$id=$row['id_new'];	
		$totale=$row['totale'];	
		$mese=($row['month_data']>9?$row['month_data']:'0'.$row['month_data']);
		$anno=$row['year_data'];
?>                                       
									<li>
										<a href="<?=$pathindex.$path[$lingua]."/".$mese.'/'.$anno?>" class="<?=(($mese.$anno==$_GET['mese'].$_GET['anno'])?"current":"text-reset")?>"><?=ucfirst($mesi_long[$lingua][$mese])." ".$anno?> (<?=$totale?>)</a>
									</li>
<?	}?>
								</ul>
                            </div>									
<?}?>
