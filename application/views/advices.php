<?php 
	foreach ($user_data as $row) {
		$dr_id = $row->id_expert;
		$dr_name = $row->name;
		$dr_company = $row->company;
		$dr_city = $row->city;
		$dr_country = $row->country;
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
				<li><a href="#one" class="active">Advices</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/articles">Articles</a></li>
				<!-- <li><a href="#four">Q&A</a></li> -->
			</ul>
		</nav>
		<footer>
			<h6>Support:<br> alfredo@couplecare.us</h6>
			<h5><a href="#">Log out</a></h5>	
		</footer>
	</section>

	<!-- Main -->
	<div id="main">
		<section id="one">
			<div class="container">
				<header class="major">
					<h3>Advices</h3>
				</header>
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
										<td><a href="'.base_url().'index.php/advices/advice/'.$row->id_advice.'" class="button small fit icon fa-pencil-square-o">Edit</a></td>
										</tr>';
							}
						?>
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