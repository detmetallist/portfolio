<?php
	$site_name=$_POST['site_name'];
	$files = scandir('img/portfolio/thumb/'.$site_name);
	?>
	<a href="#screen-<?php echo $site_name; ?>-main" class="active">
		<div class="slide_bg"><img src="/img/zoom_in.png"></div>
		<img src="/img/portfolio/thumb/<?php echo $site_name.'/'.$site_name.'-main.jpg'; ?>">
	</a>
	<?php
	foreach ($files as $file) {
		$pos1=stripos($file, '.jpg');
		if($pos1&&$file!=$site_name.'-main.jpg'){ 
			$link=mb_substr($file, 0, $pos1);
			?>
				<a href="#screen-<?php echo $link; ?>">
					<div class="slide_bg"><img src="/img/zoom_in.png"></div>
					<img src="/img/portfolio/thumb/<?php echo $site_name.'/'.$file; ?>">
				</a>
		<? }
	}
?>