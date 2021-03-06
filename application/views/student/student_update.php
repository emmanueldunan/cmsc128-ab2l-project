<div class="pure-menu adminnav">
	<ul class="pure-menu-list custom-restricted-width">

		<li class="pure-menu-item">
			<a href="<?php echo site_url('student/') ?>" class="pure-menu-link navLink" id="logs">Profile</a>
		</li>

		<li class="pure-menu-item pure-menu">
			<a href="<?php echo site_url('student/grades') ?>" class="pure-menu-link navLink" id="add">View Grades</a>
		</li>

		<li class="pure-menu-item pure-menu-selected">
			<a href="<?php echo site_url('student/update') ?>" class="pure-menu-link navLink" id="update">Update Profile</a>
		</li>

		<li class="pure-menu-item">
			<a href="<?php echo site_url('student/search') ?>" class="pure-menu-link navLink" id="update">Search Adviser</a>
		</li>

	</ul>
</div>

	<div class="body-panel">
		<center>
			<div>
				<?php echo form_open('student/update_student');
				foreach($student as $stud) : ?>
				<form method="POST" action="#" class="mq-table">
					<table border="true" class="pure-table">
						<tr>
							<td>Name: </td>
							<td><input type="hidden" name="username" value="<?php echo $stud->username ?>">
							<input type="hidden" name="password" value="<?php echo $stud->password ?>">
							<input type="text" name="last_name" value="<?php echo $stud->last_name ?>">
							<input type="text" name="first_name" value="<?php echo $stud->first_name ?>">
							<input type="text" name="middle_name" value="<?php echo $stud->middle_name ?>"></td>
						</tr>
						<tr>
							<td>Student Number: </td>
							<td><input class="pure-input" type="text" name="student_number" value="<?php echo $stud->student_number ?>"></td>
						</tr>
						<tr>
							<td>Classification: </td>
							<td><input class="pure-input" type="text" name="classification" value="<?php echo $stud->classification ?>"></td>
						</tr>
						<tr>
							<td>Curriculum: </td>
							<td><input class="pure-input" type="text" name="curriculum" value="<?php echo $stud->curriculum ?>"></td>
						</tr>
						<tr>
							<td>Contact Number: </td>
							<td><input class="pure-input" type="text" name="contact_number" value="<?php echo $stud->contact_number ?>"></td>
						</tr>
						<tr>
							<td>E-mail Address: </td>
							<td><input class="pure-input" type="text" name="email_address" value="<?php echo $stud->email_address ?>"></td>
						</tr>
						<tr>
							<td>College Address: </td>
							<td><input class="pure-input" type="text" name="college_address" value="<?php echo $stud->college_address ?>"></td>
						</tr>
						<tr>
							<td>Home Address: </td>
							<td><input class="pure-input" type="text" name="home_address" value="<?php echo $stud->home_address ?>"></td>
						</tr>
					</table>
					<br><br>
					<button class="pure-button" type="submit">Update</button>
				</form>
				<?php endforeach; ?>
			</div>
		</center>
	</div>
</div>