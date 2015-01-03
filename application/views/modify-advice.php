<?php 
	foreach ($user_data as $row) {
		$dr_id = $row->id_expert;
		$dr_name = $row->name;
		$dr_company = $row->company;
		$dr_city = $row->city;
		$dr_country = $row->country;
	}

	foreach ($advice_data as $row) {
		$advice_id = $row->id_advice;
		$advice_gender = $row->gender;
		$advice_status_day = $row->status_day;
		$advice_ttc = $row->ttc;
		$advice_advice = $row->advice;
	}

?>
<div id="wrapper">

	<!-- Header -->
	<section id="header" class="skel-layers-fixed">
		<header>
			<span class="image avatar"><img src="<?php echo base_url(); ?>assets/images/avatar/<?= $dr_id; ?>.png" alt="" /></span>
			<h1 id="logo"><a href="#"><?= $dr_name; ?></a></h1>
			<p><?= $dr_company; ?><br />
			<?= $dr_city.', '.$dr_country; ?></p>
		</header>
		<nav id="nav">
			<ul>
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/advices" class="active">Advices</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/articles">Articles</a></li>
				<!-- <li><a href="#four">Q&A</a></li> -->
			</ul>
		</nav>
		<footer>
			
			<h6>Support:<br> alfredo@couplecare.us</h6>	
			
			<h5><a href="<?php echo base_url(); ?>index.php/welcome/logout">Log out</a></h5>	
			
			
		</footer>
	</section>

	<!-- Main -->
	<div id="main">
		<section id="one">
			<div class="container">
				<header class="major">
					<h3>Modify advice</h3>
				</header>
				<?php echo form_open('advices/action'); ?>
					<div class="row uniform">
						<div class="12u"><textarea name="advice" id="message" rows="5"><?= $advice_advice; ?></textarea></div>
					</div>
					<div class="row uniform">
						<div class="12u">
						<label>Status day:</label>
							<div class="select-wrapper">
								<select name="status_day" id="demo-category">
									<option value="<?= $advice_status_day;  ?>"><?= $advice_status_day;  ?></option>
									<option value="General">General</option>
									<option value="Period day">Period day</option>
									<option value="Fertile day">Fertile day</option>
									<option value="Most fertile day">Most rertile day</option>
									<option value="Less fertile day">Less fertile day</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row uniform">
						<div class="12u">
						<label>Gender:</label>
							<div class="select-wrapper">
								<select name="gender" id="demo-category">
									<option value="<?= $advice_gender;  ?>"><?= $advice_gender;  ?></option>
									<option value="Female">Female</option>
									<option value="Male">Male</option>
									<option value="Both">Both</option>
								</select>
							</div>
						</div>
					</div>


					<div class="row uniform">
						<div class="4u 12u(2)">
							<?php 
								if ($advice_ttc == 'ttc') {
									echo '<input type="radio" id="demo-priority-low" name="ttc" value="ttc" checked>';		
								}
								else{
									echo '<input type="radio" id="demo-priority-low" name="ttc" value="ttc">';
								}
							 ?>
							
							<label for="demo-priority-low">Trying to conceive</label>
							
						</div>
						<div class="4u 12u(2)">
						<?php 
							if ($advice_ttc == 'jkt') {
								echo '<input type="radio" id="demo-priority-normal" name="ttc" value="jkt" checked>';		
							}
							else{
								echo '<input type="radio" id="demo-priority-normal" name="ttc" value="jkt">';
							}
						 ?>
							<label for="demo-priority-normal">Just keeping track</label>
						</div>
					</div>
					<input type="hidden" value="<?= $advice_id; ?>" name="id_advice">
					<input type="hidden" value="update" name="action">
					<div class="row uniform">
						<div class="12u">
							<ul class="actions">
								<li><input type="submit" class="special" value="Modify" /></li>
							</ul>

						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
		</section>
					

		<!-- Footer -->
		<section id="footer">
			<div class="container">
				<ul class="copyright">
					<li>&copy; Couple Care, Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</section>
			
	</div>
	</body>
</html>