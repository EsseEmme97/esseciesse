<?
if($_GET['new']){
	//if($lingua==3) $linguatmp=2;
	//else $linguatmp=$lingua;
	$linguatmp=$lingua;
	$query = "select news_com.id_new
		FROM news_com, news_data
		WHERE news_data.attivo = '1' AND
		news_com.id_new = news_data.id_new AND
		id_lingua='".$linguatmp."' AND
		url='".$_GET['new']."'";
	$results = $database->get_results($query);
	list($id_new) = $database->get_row($query);	
}
if($_GET['cat']){
	//if($lingua==3) $linguatmp=2;
	//else $linguatmp=$lingua;
	$linguatmp=$lingua;
	$query="SELECT nm,news_tree_struct.id
		FROM news_tree_struct, news_tree_data
		WHERE news_tree_struct.id=news_tree_data.id AND
		news_tree_struct.lvl='1' AND news_tree_data.attivo='1' AND
		id_lingua=$linguatmp AND
		url='".$_GET['cat']."'
		ORDER by news_tree_struct.pos
		LIMIT 1";
	list($nome_cat,$id_cat) = $database->get_row($query);
}
if($_GET['id']){
	//if($lingua==3) $linguatmp=2;
	//else $linguatmp=$lingua;
	$linguatmp=$lingua;
	$query = "SELECT prodotti_data.id_new
		FROM prodotti_com, prodotti_data
		WHERE prodotti_data.attivo = '1' AND
		prodotti_com.id_new = prodotti_data.id_new AND
		id_lingua=$linguatmp AND
		url='".$_GET['id']."'
		LIMIT 1";
	list($id_prodotto) = $database->get_row($query);
}
if($_GET['categoria']){
	//if($lingua==3) $linguatmp=2;
	//else $linguatmp=$lingua;
	$linguatmp=$lingua;
	$query="SELECT nm,prodotti_tree_struct.id
		FROM prodotti_tree_struct, prodotti_tree_data
		WHERE prodotti_tree_struct.id=prodotti_tree_data.id AND
		prodotti_tree_struct.lvl='1' AND prodotti_tree_data.attivo='1' AND
		id_lingua=$linguatmp AND
		url='".$_GET['categoria']."'
		ORDER by prodotti_tree_struct.pos
		LIMIT 1";
	list($nome_cat,$id_categoria) = $database->get_row($query);
}
?>
