<?php
	$action = $_POST['action'];
	$data	 = $_POST['data'];
	($action()) ? $action($action, $data) : echo"Hubo un error" ;

	function returnName($action, $data){
		echo json_encode($data);
	}
?>