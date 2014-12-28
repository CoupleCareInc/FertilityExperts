<?php 
	foreach ($user_data as $row) {
		$dr_id = $row->id_expert;
		$dr_name = $row->name;
		$dr_company = $row->company;
		$dr_city = $row->city;
		$dr_country = $row->country;
	}

	function ArticleStatus($status){
		if ($status == 'ready to post') {
			return '<h5><font color="#27d6e1">Ready to post</font></h5>
			<a href="#" class="button small fit icon fa-pencil-square-o">Edit</a>';
		}
		if ($status == 'posted') {
			return '<h5><font color="#55da75">Posted</font></h5>';
		}
		if ($status == 'draft') {
			return '<h5><font color="#dac955">Draft</font></h5>
			<a href="#" class="button small fit icon fa-pencil-square-o">Edit</a>';
		}
		return '';
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
				<li><a href="#one" class="active">Home</a></li>
				<li><a href="#two">Advices</a></li>
				<li><a href="#three">Articles</a></li>
				<!-- <li><a href="#four">Q&A</a></li> -->
			</ul>
		</nav>
		<footer>
			<h6>Support:<br> alfredo@couplecare.us</h6>
		</footer>
	</section>

	<!-- Main -->
	<div id="main">

		<!-- One -->
		<section id="one">
			<div class="container">
				<header class="major">
					<h3><font color="#27abe1">Welcome to Couple Care</font></h3>
					<p>For fertility experts</p>
								</header>
								<ul class="feature-icons">
									<a href="#two"><li class="fa-lightbulb-o fa-2x">Advices</li></a>
									<a href="#three"><li class="fa-newspaper-o fa-2x">Articles</li></a>
									<a href="#"><li class="fa-comments fa-2x">Q&A (soon)</li></a>
									<a href="#"><li class="fa-user-md fa-2x">Patients (soon)</li></a>
									
								</ul>
							</div>
						</section>
						
					<!-- Two -->
						<section id="two">
							<div class="container">
								<h3>Advices</h3>
								<p>
								<p>Through this section you can share advices of fertility, PMS, TTC to our users</p>
								<div class="table-wrapper">
									<table class="alt">
										<tbody>
											<?php 
												if ($advices_data == null) {
													echo '<font color="#da5555">You have not shared any advice to the users of Couple Care</font>';
												}
												foreach ($advices_data as $row) {
													echo '<tr>
														<td>'.$row->advice.'</td>
														<td><a href="#" class="button small fit icon fa-pencil-square-o">Edit</a></td>
													</tr>';
												}
											 ?>
										</tbody>
									</table>
									<a href="#" class="button special small fit icon fa-plus-circle">New advice</a>
									<a href="#" class="button small fit icon fa-ellipsis-h">More advices</a>
								</div>
							</div>
						</section>
						
					<!-- Three -->
						<section id="three">
							<div class="container">
								<h3>Articles</h3>
								<p>Through this section you can share advices of fertility, PMS, TTC to our users</p>
								<?php 
									if ($articles_data == null) {
										echo '<font color="#da5555">You have not shared any article to the blog of Couple Care</font>';
									}
								 ?>
								<div class="features">
									
									<?php 
										foreach ($articles_data as $row) {
											echo '<article>
												'.$row->datecreated.'<br>
												<a href="#" class="image"><img src="'.base_url().'assets/images/pic01.jpg" alt="" /></a>
												<div class="inner">
													<h4>'.$row->title.'</h4>
													<p>'.$row->subtitle.'</p>
													'.ArticleStatus($row->status).'
												</div>
											</article>';
										}
								 	?>
									<!--
									<article>
										<a href="#" class="image"><img src="<?php echo base_url(); ?>assets/images/pic01.jpg" alt="" /></a>
										<div class="inner">
											<h4>Title</h4>
											<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											<a href="#" class="button small fit icon fa-pencil-square-o">Edit</a>
											<h5><font color="#27d6e1">Ready to post</font></h5>
										</div>
									</article>
									<article>
										<a href="#" class="image"><img src="<?php echo base_url(); ?>assets/images/pic01.jpg" alt="" /></a>
										<div class="inner">
											<h4>Title</h4>
											<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											<h5><font color="#55da75">Posted</font></h5>
										</div>
									</article>
									<article>
										<a href="#" class="image"><img src="<?php echo base_url(); ?>assets/images/pic01.jpg" alt="" /></a>
										<div class="inner">
											<h4>Title</h4>
											<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											<a href="#" class="button small fit icon fa-pencil-square-o">Edit</a>
											<h5><font color="#dac955">Draft</font></h5>
										</div>
									</article>
									-->
									<a href="#" class="button special small fit icon fa-plus-circle">New post</a>
									<a href="#" class="button small fit icon fa-ellipsis-h">More posts</a>
								</div>
							</div>
						</section>
						
					<!-- Four 
						<section id="four">
							<div class="container">
								<h3>Question & Answer</h3>
								<div id="accordion" class="alt">
								  <h3 style="background-color:#27abe1;color:white;padding:10px;">Alfredo Reyes | Dec 21, 2014 | <font color="#da5555">Pending</font></h3>
								  <div>
								    <p>
								    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<form method="post" action="#">
								    	<div class="row uniform">
											<div class="12u"><textarea name="message" id="message" placeholder="Message" rows="2"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Reply" /></li>
												</ul>
											</div>
										</div>
									</form>
									<br>
								    </p>
								  </div>
								  <h3 style="background-color:#27abe1;color:white;padding:10px;">Sebastian Abramowicz | Dec 20, 2014 | <font color="#da5555">Pending</font></h3>
								  <div>
								    <p>
								    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<form method="post" action="#">
								    	<div class="row uniform">
											<div class="12u"><textarea name="message" id="message" placeholder="Message" rows="2"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Reply" /></li>
												</ul>
											</div>
										</div>
									</form>
									<br>
								    </p>
								  </div>
								  <h3 style="background-color:#27abe1;color:white;padding:10px;">Melissa López | Dec 19, 2014 | <font color="#55da75">Answered</font></h3>
								  <div>
								    <p>
								    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
								    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis. <font color="#27abe1"> - Shasta Tierra</font></blockquote>
								    </p>
								  </div>
								  <h3 style="background-color:#27abe1;color:white;padding:10px;">Alonso Salcido | Dec 17, 2014 | <font color="#55da75">Answered</font></h3>
								  <div>
								    <p>
								    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
								    <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis. <font color="#27abe1"> - Shasta Tierra</font></blockquote>
								    </p>
								  </div>
							   </div>
							   <a href="#" class="button small fit icon fa-ellipsis-h">All questions</a>
							</div>
						</section>
						-->
				
				</div>

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