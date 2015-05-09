<?php
require_once 'header.php';
$data=listNews();
?>
		<div class='news'>
		<div>
			<form action='tra.php' method='Post'>
			<label for='search'>Choase  date:</label><input type='text' name='search' id='search'	/><input id='but' type='submit' name='submit' value='Search' style=background-image:url('image/moreinfo.png')>
			</form>
		</div>
		

		<?php foreach ($data as $a => $v) {?>
		<div class='el'>
		<span><?=$v['title'];?> </span>
		<span><?php echo  date('d.m.Y',strtotime($v['date_created']));?></span>
		<div class='clear'></div>
		<div class='new'>
			<?=getShort($v['news']);?>
		</div>
		<div class='fullnew'>
			<?=$v['news'];?>
		</div>
		<div class='foot'>View More</div>
		<div class='clear'></div>
		</div>




		<?php }?>

		</div>
		<?php require_once 'footer.php';?>
