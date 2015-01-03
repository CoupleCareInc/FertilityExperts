
	<div id="main">

		<!-- One -->
		<section id="one">
			<div class="container">
				<header class="major">
					<h3><font color="#27abe1">Couple Care</font> for fertility experts </h3>
					<?php echo $mensaje_error; ?>
				</header>
				<?php echo form_open('welcome/login'); ?>
					<div class="row uniform">
						<div class="12u"><input type="text" name="email" id="subject" placeholder="Email" /></div>
					</div>
					<div class="row uniform">
						<div class="12u"><input type="password" name="password" id="subject" placeholder="Password" /></div>
					</div>
					
					<div class="row uniform">
						<div class="12u">
							<ul class="actions">
								<li><input type="submit" class="special"  value="Sign in" /></li>
								<li><a href="#two" class="button">Sign up</a></li>
							</ul>
						</div>
					</div>
				<?php echo form_close(); ?>		
			</div>
		</section>
						
					<!-- Two -->
						<section id="two">
							<div class="container">
								<h3>Want to be part of the expert community?</h3>
								<h4>Send us an email to <a href="mailto:sebastian@couplecare.us">sebastian@couplecare.us</a></h4>
								
							</div>
						</section>
						
					
				
				</div>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<ul class="copyright">
							<li>&copy; Couple Care, Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>
			
	</body>
</html>