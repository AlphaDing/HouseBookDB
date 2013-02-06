
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

					<?php echo form_open('residence/addResidence') ?>
						<h2 class="muted">Add a residence</h2>

						<label for="Res_name"><strong>Residence name</strong></label>
						<input class="input-large" type="text" name="Res_name" /><br />
						
						
						<label for="Address"><strong>Address</strong></label>
						<input class="input-large" type="text" name="Address" /><br />

						<label for="Contact"><strong>Contact</strong></label>
						<input class="input-large" type="text" name="Contact" /><br />
						
						<label for="Num_bedroom"><strong>Number of bedrooms</strong></label>
						<input class="input-large" type="text" name="Num_bedroom" /><br />
						
						<label for="Num_bathroom"><strong>Number of bathrooms</strong></label>
						<input class="input-large" type="text" name="Num_bathroom" /><br />
						
						<label for="Price"><strong>Price</strong></label>
						<input class="input-large" type="text" name="Price" /><br />
						
						<label for="Landlord"><strong>Landlord</strong></label>
						<input class="input-large" type="text" name="Landlord" /><br />

						<input class="btn btn-primary btn-large" type="submit" name="submit" value="Add now &raquo" /> 
					</form>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->

<?php $this->load->view('include/footer')?>