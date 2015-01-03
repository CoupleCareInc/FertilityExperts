<?php 
	foreach ($user_data as $row) {
		$dr_id = $row->id_expert;
		$dr_name = $row->name;
		$dr_company = $row->company;
		$dr_city = $row->city;
		$dr_country = $row->country;
	}
	function ArticleStatus($status, $id){
		if ($status == 'ready to post') {
			return '<h5><font color="#27d6e1">Ready to post</font></h5>
			<a href="'.base_url().'index.php/articles/article/'.$id.'" class="button small fit icon fa-pencil-square-o">Edit</a>';
		}
		if ($status == 'posted') {
			return '<h5><font color="#55da75">Posted</font></h5>';
		}
		if ($status == 'draft') {
			return '<h5><font color="#dac955">Draft</font></h5>
			<a href="'.base_url().'index.php/articles/article/'.$id.'" class="button small fit icon fa-pencil-square-o">Edit</a>';
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
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/advices">Advices</a></li>
				<li><a href="#" class="active">Articles</a></li>
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
					<h3>Articles</h3>
				</header>
				<div class="table-wrapper">
					<table class="alt">
						<tbody>
						<a href="<?php echo base_url(); ?>index.php/articles/newarticle" class="button special small fit icon fa-plus-circle">New post</a>
						<div class="features">
						<?php 
							if ($articles_data == null) {
								echo '<font color="#da5555">You have not shared any article in the blog of Couple Care</font>';
							}
							foreach ($articles_data as $row) {
								echo '<article>
										<b>'.$row->datecreated.'</b><br>
										<a href="#" class="image"><img src="'.base_url().'assets/images/pic01.jpg" alt="" /></a>
										<div class="inner">
											<h4>'.$row->title.'</h4>
											<p>'.$row->subtitle.'</p>
											'.ArticleStatus($row->status, $row->id_article).'
										</div>
									  </article>';
							}
						?>
						</div>
						</tbody>
					</table>
				</div>
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