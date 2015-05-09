<?php require_once 'header.php';?>
		<div class='contact'>
		<form method='post' action='trala.php' >
		<div>
			<span class='inputholder' >
				<label for='name'>Name:</label>
				<input type='text' name='Name' id='name' />
				<div class='clear'></div>
			</span>
			<span class='inputholder' >
			<label for='email'>Email:<span class='req'>*</span></label>
			<input type='email' name='email' id='email'/>
			<div class='clear'></div>
			</span>
			<div class='clear'></div>
		</div>
		<div>
		<div class='inputholder'>
			<label>Phone<span class='req'>*</span>:</label><input type='phone' name='phone' />
			<div class='clear'></div>
		</div>
		<div class='clear'></div>
		</div>
		<div class='textholder'>
		<label for='message'>Message<span class='req'>*</span>:</label><textarea name='message' id='message' ></textarea>
		<div class='clear'></div>
		</div >
			<div  id='send'>
			<input type='submit' name='submit'  value='Send'/>
			</div>
		</form>
		</div>
		<?php require_once 'footer.php';?>