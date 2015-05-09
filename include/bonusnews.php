<?php
$news = listPages();
if (isset($_GET['new']) and is_numeric($_GET['new']) and $_GET['new'] <= count($news)) {
	$newid = $_GET['new'];
} else {
	$newid = 1;
}

$new = getPage($newid);
?>
	<div class='el'>
		<span><?=$new['title'];?> </span>
		<span><?php echo date('d.m.Y', $new['date_created']);?></span>
		<div class='clear'></div>
		<div class='new'>
			<?=$new['content'];?>
		</div>


		<div class='clear'></div>
		</div>