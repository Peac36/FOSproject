<?php
require_once 'header.php';
$data = listNews();
if (isset($_POST['search']) and count($_POST['search']) != 0) {

	$string = str_replace('/', '-', trim($_POST['search']));
	if (preg_match('/^(\d{2})-(\d{2})-(\d{4})$/s', $string, $match)) {
		$string = $match[3] . '-' . $match[2] . '-' . $match[1];
		$data = listNews($string);
	}

}

?>
		<div class='news'>
		<div>
			<form  method='POST'  >
				<div class='inputholder'>
				<label for='search'>Choase  date:</label><input type='text' name='search' id='search'/><input id='but' type='submit'  value='Search' style=background-image:url('image/moreinfo.png')>
			</div>
			</form>
		</div>


		<?php foreach ($data as $a => $v) {?>
		<div class='el'>
		<span><?=$v['title'];?> </span>
		<span><?php echo date('d.m.Y', strtotime($v['date_created']));?></span>
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
