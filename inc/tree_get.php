<?
try {
	$rslt = null;
	switch($_GET['operation']) {
		case 'analyze':
			var_dump($fs->analyze(true));
			die();
			break;
		case 'get_node':
			$node = isset($_GET['id']) && $_GET['id'] !== '#' ? (int)$_GET['id'] : 0;
			$temp = $fs->get_children($node);
			$rslt = array();
			foreach($temp as $v) {
				$rslt[] = array('id' => $v['id'], 'text' => $v['nm'], 'children' => ($v['rgt'] - $v['lft'] > 1));
			}
			break;
		case "get_content":
			$node = isset($_GET['id']) && $_GET['id'] !== '#' ? $_GET['id'] : 0;
			$node = explode(':', $node);
			if(count($node) > 1) {
				$rslt = array('content' => 'Multiple selected');
			}
			else {
				$temp = $fs->get_node((int)$node[0], array('with_path' => true));
				//$rslt = array('content' => 'Selected: /' . implode('/',array_map(function ($v) { return $v['nm']; }, $temp['path'])). '/'.$temp['nm']. '/'.$temp['attivo']);
				$rslt = array('content' => $temp['nm'].'|'.$temp['attivo'].'|'.$temp['id_foto'].'|'.$temp['titolo2'].'|'.$temp['descrizione_breve'].'|'.$temp['lvl'].'|'.$temp['id_foto2'].'|'.$temp['id_foto3'].'|'.$temp['id_doc'].'|'.$temp['id_foto4'].'|'.$temp['id_foto5']);
			}
			break;
		case 'create_node':
			$node = isset($_GET['id']) && $_GET['id'] !== '#' ? (int)$_GET['id'] : 0;
			$temp = $fs->mk($node, isset($_GET['position']) ? (int)$_GET['position'] : 0, array('nm' => isset($_GET['text']) ? $_GET['text'] : 'New node'));
			$rslt = array('id' => $temp);
			break;
		case 'rename_node':
			$node = isset($_GET['id']) && $_GET['id'] !== '#' ? (int)$_GET['id'] : 0;
			$rslt = $fs->rn($node, array('nm' => isset($_GET['text']) ? $_GET['text'] : 'Renamed node'));
			break;
		case 'delete_node':
			$node = isset($_GET['id']) && $_GET['id'] !== '#' ? (int)$_GET['id'] : 0;
			$rslt = $fs->rm($node);
			break;
		case 'move_node':
			$node = isset($_GET['id']) && $_GET['id'] !== '#' ? (int)$_GET['id'] : 0;
			$parn = isset($_GET['parent']) && $_GET['parent'] !== '#' ? (int)$_GET['parent'] : 0;
			$rslt = $fs->mv($node, $parn, isset($_GET['position']) ? (int)$_GET['position'] : 0);
			break;
		case 'copy_node':
			$node = isset($_GET['id']) && $_GET['id'] !== '#' ? (int)$_GET['id'] : 0;
			$parn = isset($_GET['parent']) && $_GET['parent'] !== '#' ? (int)$_GET['parent'] : 0;
			$rslt = $fs->cp($node, $parn, isset($_GET['position']) ? (int)$_GET['position'] : 0);
			break;
		default:
			throw new Exception('Unsupported operation: ' . $_GET['operation']);
			break;
	}
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($rslt);
}
catch (Exception $e) {
	header($_SERVER["SERVER_PROTOCOL"] . ' 500 Server Error');
	header('Status:  500 Server Error');
	echo $e->getMessage();
}
die();
?>
