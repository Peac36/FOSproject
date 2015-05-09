<?php
//reviews insert
if (isset($_POST['name'], $_POST['rate'], $_POST['comment'], $_POST['email'])) {
	;
	$name = $_POST['name'];
	$rate = $_POST['rate'];
	$comment = $_POST['comment'];
	$email = $_POST['email'];
	if (count($name) !== 0 && count($email) !== 0 && count($comment) !== 0 && count($rate) !== 0 && is_numeric($rate)) {
		$data = array('name' => $name, `e-mail`=> $email, 'rate' => $rate, 'comment' => $comment);
		Insert('reviews', $data);
		echo 'Thank you for your review!';

	} else {
		echo "Error";
	}
	unset($_POST['name'], $_POST['rate'], $_POST['comment'], $_POST['email']);
}
require_once 'header.php';
//taking reviews
if (isset($_GET['best']) and $_GET['best'] == 'on') {
	$status = 'All Reviews';
	$reviews = listReviews(null);
} else {
	$status = 'Best RaTe';
	$reviews = listReviews();
};

?>
		<div class='reviews'>
		<div class='bestRate'>
		<?php
if ($status === 'All Reviews') {
	echo "<a href='" . $_SERVER['PHP_SELF'] . "?page=reviews'>$status</a>";
} else {
	echo "<a href='" . $_SERVER['PHP_SELF'] . "?page=reviews&best=on'>$status</a>";

}
?>

		</div>

		<?php foreach ($reviews as $v) {?>
		<div class='el'>
		<div class='new'>
			<?=$v['comment'];?>
		</div>
		<div class='stars stars<?=$v['rate']?>' ></div>
		<div class='clear'></div>
		</div>

		<?php }?>

		</div>
		<div class='comment'>
			<div>Leave a Review</div>
			<div class='clear'></div>
					<form method='post'>
					<div class='column1'>
						<div class='inputholder'>
							<label for='email'>Email<span class='req'>*</span></label>
							<input type='text' id='name' name='email'/>
							<div class='clear'></div>
						</div>
						<div class='clear'></div>

						<div class='inputholder'>
							<label for='name'>Name</label>
							<input type='text' id='name' name='name'/>
							<div class='clear'></div>
						</div>

						<div class='clear'></div>
						<div class='inputholder'>
						<label for='rating'>Rate:</label>
							<select id='rating' name='rate'>
							<option selected='selected'  >Choose a rate</option>
							</select>
							<div class='clear'></div>
						</div>
						<div class='clear'></div>
					</div>





					<div class='column2'>
						<div >
						<label>Comment<span class='req'>*</span>:</label>
						<textarea name='comment'  ></textarea>
						<div class='clear'></div>
						</div>
						<div  class='send'><button type='submit'>Send</button></div>

					</div>
					<div class='clear'></div>
					</form>













			<div class='clear'></div>
		</div>
	<script>
		$(document).ready(function(){
			var el=$('#rating')
			for(var i=0;i<=5;i++){
				el.append('<option value='+i+'>'+i+'</option>')
			}

		})

		</script>




<?php require_once 'footer.php';?>