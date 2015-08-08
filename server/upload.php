<?php
	if ($_FILES){
		$name = $_FILES['filename']['name'];
		move_uploaded_file($_FILES['filename']['tmp_name'], $name);
		echo "Uploaded file '$name' <br/><img src='$name'>";
	}
?>