<?php

require_once 'header.php';
$reviews=listReviews();

?>
		<div class='reviews'>
		<div class='bestRate'>
			Best Rate
		</div>
		<div class='el'>

		<div class='new'>
		Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
		</div>
		<div class='stars stars3'></div>
		<div class='clear'></div>
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

					<div class='column1'>
						<div class='inputholder'>
							<label for='email'>Email<span class='req'>*</span></label>
							<input type='text' id='name' name='name'/>
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
							<select id='rating'>
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
						<div  class='send'><button >Send</button></div>

					</div>
					<div class='clear'></div>














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