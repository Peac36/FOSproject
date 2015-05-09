<?php 
require_once 'header.php';
validateForm();
;?>
			<div class='register'>

			<form  method='post' onsubmit='return check()'>

					<div class='wrapper'>
						<div class='inputholder'>
							<label for='Email'>Email<span class='req'>*</span>
							</label><input type='text' name='email' / id='Email'>
							<div class='clear'></div>
							<div class='erremail'></div>
						</div>

						<div class='inputholder'>
							<label for='city'>city</label>
							<input type='text' name='city' / id='city'>
							<div class='clear'></div>
							<div class='errcity'></div>

						</div>
						<div class='clear'></div>
					</div>


				<div class='wrapper'>
					<div class='inputholder'>
						<label for='pass'>Password<span class='req'>*</span></label>
						<input type='password' name='pass' / id='pass'>
						<div class='clear'></div>
						<div class='errpass' ></div>
					</div>

					<div class='inputholder'>
						<label for='rpass'>Repeat Pass<span class='req'>*</span></label>
						<input type='password' name='rpass' / id='rpass'>
						<div class='clear'></div>
						<div class='errrpass'></div>
					</div>
						<div class='clear'></div>
				</div>
				<div class='wrapper'>
					<div class='inputholder'>
						<label for='fname'>First Name</label>
						<input type='text' name='firstname' / id='fname'>
						<div class='clear'></div>
						<div class='errfname' ></div>
					</div>

					<div class='inputholder'>
						<label for='sname'>Second Name</label>
						<input type='text' name='secondname' / id='sname'>
						<div class='clear'></div>
						<div class='errsname'></div>
					</div>
					<div class='clear'></div>

				</div>
				<div class='wrapper'>
					<div class='inputholder'>
						<label>Gender</label><select name='gender'>
						<option value='male'>Male</option>
						<option value='Female'>Femaale</option>
					    </select>
				    </div>
				    <div><!--dumm for align purpose--></div>
				</div>
				<div class='clear'></div>







				<div class='wrapper'>
				   <div><!--dumm for align purpose--></div>
				<div class='save' ><button>Save</button></div>
			</div>


			</form>

			</div>
		<?php require_once 'footer.php';?>