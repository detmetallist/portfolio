<?php
	$site_name=$_POST['site_name'];
	if(is_dir('video/'.$site_name)){
		echo 1;
	} else {
		echo 0;
	}
?>