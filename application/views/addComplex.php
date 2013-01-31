<?php $this->load->view('include/header')?>
<?php $this->load->view('include/navbar')?>


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

					<?php echo form_open('complex/addComplex') ?>
						<h2 class="muted">Add a new complex</h2>

						<label for="cname"><strong>Complex name</strong></label>
						<input class="input-large" type="text" name="cname" /><br />

						<label for="caddr"><strong>Complex address</strong></label>
						<input class="input-large" type="text" name="caddr" /><br />
						
						<input class="btn btn-primary btn-large" type="submit" name="submit" value="register &raquo" /> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->

<?php $this->load->view('include/footer')?>