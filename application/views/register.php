<?php $this->load->view('include/header')?>

<div class="container-fluid pagination-centered">
	<div class="container">
		<div class="row-fluid">
			<div class="span4 offset4">
				<div class="well">
					<?php if(validation_errors()):?>
						<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<?php echo validation_errors(); ?>
						</div>
					<?php endif;?>

					<?php echo form_open('user/register') ?>
						<h2 class="muted">Registration</h2>

						<label for="email"><strong>E-mail</strong></label>
						<input class="input-large" type="text" name="email" /><br />

						<label for="password"><strong>Password</strong></label>
						<input class="input-large" type="password" name="password" /><br />
						
						<input class="btn btn-primary btn-large" type="submit" name="submit" value="register &raquo" /> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->

<?php $this->load->view('include/footer')?>