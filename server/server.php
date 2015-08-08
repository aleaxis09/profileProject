<?php
	$action = $_POST['action'];
	$data	 = $_POST['data'];

	$action($action, $data);

	function returnName($action, $data){

		if(file_exists("info.txt")){
			copy("info.txt", "info2.txt");
			$file = fopen("info.txt", "r") or die("Fail in load file");
			fwrite($file, "Segunda Nueva linea");
			$info = fread($file, 1);
			fclose($file);
			unlink("info2.txt");
		}

		$date =date("l F jS, Y - g:ia", time());
		$json = array('action' => $action, 'data' => $data, 'date' => $date, "info" => $info);
		echo json_encode($json);
	}
?>