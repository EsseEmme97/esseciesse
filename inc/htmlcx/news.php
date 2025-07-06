							<div class="blog grid grid-view">
								<div class="row isotope gx-md-8 gy-8 mb-8">
<?
$path=array(1=>'news',2=>'news');
$tag=array(1=>'tag',2=>'tag');
$pathcategoria=array(1=>'categoria',2=>'category');
$lannews=array(1=>'news/',2=>'news/',3=>'noticias/');
$lanmore=array(1=>'Scopri di più',2=>'Read more >',3=>'Continuar >');


use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
require_once '../inc/pagerfanta3/autoload.php';
if($_GET['cat'])
	$wheredata="AND (news_data.id_categoria IN (".$id_cat.") OR news_data.id_categoria LIKE '%,".$id_cat."' OR news_data.id_categoria LIKE '".$id_cat.",%' OR news_data.id_categoria LIKE '%,".$id_cat.",%')";
if($_REQUEST['mese'] && $_REQUEST['anno'])
	$wheredata=" AND news_data.datanews between '".$_REQUEST['anno']."-".$_REQUEST['mese']."-01' and '".$_REQUEST['anno']."-".$_REQUEST['mese']."-".cal_days_in_month(CAL_GREGORIAN, $_REQUEST['mese'], $_REQUEST['mese'])."'";
if($_REQUEST['tag'])
	$wheredata=" AND (news_data.tag_url IN ('".$_REQUEST['tag']."') OR news_data.tag_url LIKE '%,".$_REQUEST['tag']."' OR news_data.tag_url LIKE '".$_REQUEST['tag'].",%' OR news_data.tag_url LIKE '%,".$_REQUEST['tag'].",%')";

$query = "SELECT news_data.id_new
	FROM news_com, news_data
	WHERE news_data.attivo = '1' AND
	news_com.id_new = news_data.id_new AND
	id_lingua='".$lingua."'
	$wheredata
	ORDER by datanews DESC, id_new desc";		

$totali=$database->num_rows($query);
$results = $database->get_results($query);


foreach($results as $row){
	$item[]=$row['id_new'];
}
$item_per_pagina=4;
$tot_pages=(int)($totali/$item_per_pagina);
$tot_pages=(($totali%$item_per_pagina)==0?$tot_pages:$tot_pages+1); //numero di pagine

$adapter = new ArrayAdapter($item);
$pagerfanta = new Pagerfanta($adapter);
$pagerfanta->setMaxPerPage($item_per_pagina);
$pagina_corrente=(($tot_pages>=$_GET['pagina'])?($_GET['pagina']?:'1'):'1');
$pagerfanta->setCurrentPage($pagina_corrente);
$currentPageResults = $pagerfanta->getCurrentPageResults();

if ($currentPageResults){
  $val="'";
  foreach($currentPageResults as $k=>$v)
    $val.=$v."','";
  $val=substr($val,0,-2);
} else $val="''";
$query = "select news_data.id_new, titolo, titolo2, descrizione_breve, descrizione_2, news_data.datanews,id_categoria,id_foto,id_doc
	FROM news_com, news_data
	WHERE news_data.id_new in (".$val.") AND
	news_com.id_new = news_data.id_new AND
	id_lingua='".$lingua."'
	ORDER by datanews DESC, id_new desc";		
$results = $database->get_results($query);
foreach($results as $row){
	$id=$row['id_new'];	
	$titolo=$row['titolo'];	
	$titolo2=$row['titolo2'];	
	$id_categoria=$row['id_categoria'];	
	$data=substr($row['datanews'],8,2)." ".ucfirst($mesi_long[$lingua][substr($row['datanews'],5,2)])." ".substr($row['datanews'],0,4);
	$giorno=substr($row['datanews'],8,2);
	$meseanno=ucfirst($mesi_short[$lingua][substr($row['datanews'],5,2)])." ".substr($row['datanews'],0,4);
	$desb=$row['descrizione_2'];
?>
									<article class="item post col-md-6">
										<div class="card">
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
											<figure class="card-img-top overlay overlay-1 hover-scale">
												<a href="<?=$pathindex.$lannews[$lingua].CleanString($titolo)?>"> <img src="../upl/medium/<?=$url?>" alt="<?=$altlan?>" /></a>
												<figcaption>
													<span class="from-top mb-0"><?=$lanmore[$lingua]?></span>
												</figcaption>
											</figure>
<?}}}?>											

											<div class="card-body">
												<div class="post-header">
													<div class="post-category text-line">
<?			
			$query = "SELECT nm,news_tree_data.id
						FROM news_tree_data,news_tree_struct
						WHERE news_tree_struct.lvl=1 AND news_tree_data.id=news_tree_struct.id AND
						id_lingua='".$lingua."' AND
						news_tree_data.id IN (".$id_categoria.")";
			$results = $database->get_results($query);
			if($database->num_rows($query) > 0){
				foreach($results as $row2){	
?>											
											
														<a href="<?=$pathindex.$path[$lingua]."/".$pathcategoria[$lingua]."/".CleanString($row2['nm'])?>" class="hover text-blu-hov-yellow" rel="category"><?=$row2['nm']?></a>&nbsp;|&nbsp;
<?}	}?>														
													</div>
													<!-- /.post-category -->
													<h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="<?=$pathindex.$path[$lingua]."/".CleanString($titolo)?>"><?=$titolo?></a></h2>
													<p class="lead fs-17 mb-7 lh-base">  
														<?=$desb?>
													</p>													
													<a href="<?=$pathindex.$path[$lingua]."/".CleanString($titolo)?>">
														<p class="yellow-hover-blupz fw-normal fs-17" style="color: #60697b;"><?=$lanmore[$lingua]?><i class="more"></i></p>
													</a>													
												</div>
												<!-- /.post-header -->
											</div>
											<!--/.card-body -->
											<div class="card-footer">
												<ul class="post-meta d-flex mb-0">
													<li class="post-date"><i class="uil uil-calendar-alt"></i><span><?=$data?></span></li>
												</ul>
												<!-- /.post-meta -->
											</div>
											<!-- /.card-footer -->
										</div>
										<!-- /.card -->
									</article>                                 
<?}?>
								</div>
								<!-- /.row -->
							</div>
							<!-- /.blog -->
<? if ($tot_pages>1) {?>
							<nav class="d-flex" aria-label="pagination">
								<ul class="pagination">
<?if($pagina_corrente>1){?>
									<li class="page-item"><!--torna alla prima pagina-->
										<a class="page-link" href="<?=$pathindex.($_GET['tag']?$tag[$lingua]."/".$_GET['tag']:$path[$lingua]).($_GET['cat']?"/".$pathcategoria[$lingua]."/".$_GET['cat']:"")?>" aria-label="Next">
										<span aria-hidden="true"><i class="uil uil-angle-double-left"></i></span>
										</a>
									</li>
<!--
									<li class="page-item">
									<span class="page-link">									
									<?='[<a href="'.$pathindex.($_GET['tag']?$tag[$lingua]."/".$_GET['tag']:$path[$lingua]).'"><<</a>]'?></span>
									</li>
-->
<?} if($pagerfanta->hasPreviousPage()){?>
									<li class="page-item"><!--indietro di una pagina-->
										<a class="page-link" href="<?=$pathindex.($_GET['tag']?$tag[$lingua]."/".$_GET['tag']:$path[$lingua]).($_GET['cat']?"/".$pathcategoria[$lingua]."/".$_GET['cat']:"")?>/<?=($pagina_corrente-1)?>" aria-label="Previous">
										<span aria-hidden="true"><i class="uil uil-angle-left"></i></span>
										</a>
									</li>	
									<li class="page-item"><!--vai alla pagina precedente-->
										<a class="page-link" href="<?=$pathindex.($_GET['tag']?$tag[$lingua]."/".$_GET['tag']:$path[$lingua]).($_GET['cat']?"/".$pathcategoria[$lingua]."/".$_GET['cat']:"")?>/<?=($pagina_corrente-1)?>" aria-label="Previous">
										<?=($pagina_corrente-1)?>
										</a>
									</li>	
<?}?>
									<li class="page-item active"><a class="page-link" href="javascript:void(0);"><?=$pagina_corrente?></a></li><!--pagina corrente-->
<?if($pagerfanta->hasNextPage()){?>
									<li class="page-item"><!--vai alla pagina successiva-->
										<a class="page-link" href="<?=$pathindex.($_GET['tag']?$tag[$lingua]."/".$_GET['tag']:$path[$lingua]).($_GET['cat']?"/".$pathcategoria[$lingua]."/".$_GET['cat']:"")?>/<?=($pagina_corrente+1)?>" aria-label="Next">
										<?=($pagina_corrente+1)?>
										</a>
									</li>	
									<li class="page-item"><!--avanti di una pagina-->
										<a class="page-link" href="<?=$pathindex.($_GET['tag']?$tag[$lingua]."/".$_GET['tag']:$path[$lingua]).($_GET['cat']?"/".$pathcategoria[$lingua]."/".$_GET['cat']:"")?>/<?=($pagina_corrente+1)?>" aria-label="Next">
										<span aria-hidden="true"><i class="uil uil-angle-right"></i></span>
										</a>
									</li>
<?} if($pagina_corrente<$tot_pages){?>
									<li class="page-item"><!--vai all'ultima pagina-->
										<a class="page-link" href="<?=$pathindex.($_GET['tag']?$tag[$lingua]."/".$_GET['tag']:$path[$lingua]).($_GET['cat']?"/".$pathcategoria[$lingua]."/".$_GET['cat']:"")?>/<?=$tot_pages?>" aria-label="Next">
										<span aria-hidden="true"><i class="uil uil-angle-double-right"></i></span>
										</a>
									</li>
<!--
									<li class="page-item">
									<span class="page-link">[<a href="<?=$pathindex.($_GET['tag']?$tag[$lingua]."/".$_GET['tag']:$path[$lingua])?>/<?=$tot_pages?>">>></a>]</span>
									</li>
-->
<?}?>
								</ul>
							</nav> 
<?}?>

