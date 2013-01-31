
test
<div class="container-fluid pagination-centered">
	<div class="container">
		<div class="row-fluid">
			<div class="span4">
				<div class="well">
					<?php echo validation_errors(); ?>

					<?php echo form_open('signup/signup_view') ?>
						<h2 class="muted">Registration</h2>

						<label for="email"><strong>Your email account</strong></label>
						<input class="input-large" type="text" name="email" /><br />

						<label for="password"><strong>Password</strong></label>
						<input class="input-large" type="password" name="password" /><br />

						<label for="year"><strong>year</strong></label>
						<input class="input-large" type="year" name="year" /><br />

						<input class="btw btn-primary btn-large" type="submit" name="submit" value="register &raquo" /> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->