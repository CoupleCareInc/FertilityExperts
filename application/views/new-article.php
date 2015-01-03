<?php 
	foreach ($user_data as $row) {
		$dr_id = $row->id_expert;
		$dr_name = $row->name;
		$dr_company = $row->company;
		$dr_city = $row->city;
		$dr_country = $row->country;
	}


?>

<style type="text/css">
	.wysiwyg-font-size-smaller {
  font-size: smaller;
}

.wysiwyg-font-size-larger {
  font-size: larger;
}

.wysiwyg-font-size-xx-large {
  font-size: xx-large;
}

.wysiwyg-font-size-x-large {
  font-size: x-large;
}

.wysiwyg-font-size-large {
  font-size: large;
}

.wysiwyg-font-size-medium {
  font-size: medium;
}

.wysiwyg-font-size-small {
  font-size: small;
}

.wysiwyg-font-size-x-small {
  font-size: x-small;
}

.wysiwyg-font-size-xx-small {
  font-size: xx-small;
}

.wysiwyg-color-black {
  color: black;
}

.wysiwyg-color-silver {
  color: silver;
}

.wysiwyg-color-gray {
  color: gray;
}

.wysiwyg-color-white {
  color: white;
}

.wysiwyg-color-maroon {
  color: maroon;
}

.wysiwyg-color-red {
  color: red;
}

.wysiwyg-color-purple {
  color: purple;
}

.wysiwyg-color-fuchsia {
  color: fuchsia;
}

.wysiwyg-color-green {
  color: green;
}

.wysiwyg-color-lime {
  color: lime;
}

.wysiwyg-color-olive {
  color: olive;
}

.wysiwyg-color-yellow {
  color: yellow;
}

.wysiwyg-color-navy {
  color: navy;
}

.wysiwyg-color-blue {
  color: blue;
}

.wysiwyg-color-teal {
  color: teal;
}

.wysiwyg-color-aqua {
  color: aqua;
}

.wysiwyg-text-align-right {
  text-align: right;
}

.wysiwyg-text-align-center {
  text-align: center;
}

.wysiwyg-text-align-left {
  text-align: left;
}

.wysiwyg-float-left {
  float: left;
  margin: 0 8px 8px 0;
}

.wysiwyg-float-right {
  float: right;
  margin: 0 0 8px 8px;
}

.wysiwyg-clear-right {
  clear: right;
}

.wysiwyg-clear-left {
  clear: left;
}
</style>
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
				<li><a href="<?php echo base_url(); ?>index.php/articles" class="active">Articles</a></li>
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
					<h3>New Article</h3>
				</header>
				<?php echo form_open('articles/action'); ?>
					<div class="row uniform">
						<div class="12u"><input type="text" name="title" id="subject" placeholder="Title" /></div>
					</div>
					<div class="row uniform">
						<div class="12u"><input type="text" name="subtitle" id="subject" placeholder="Subtitle" /></div>
					</div>
					<div class="row uniform">
						<div id="toolbar" style="display: none;">
						<ul class="icons">
						    <li><a data-wysihtml5-command="bold" title="CTRL+B" class="icon fa-bold"></a></li>
						    <li><a data-wysihtml5-command="italic" title="CTRL+I" class="icon fa-italic"></a></li>
						    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" class="icon fa-text-width"></a></li>
						    <li><a data-wysihtml5-command="insertUnorderedList" class="icon fa-list-ul"></a></li>
						    <li><a data-wysihtml5-command="insertOrderedList" class="icon fa-list-ol"></a></li>
						    <a data-wysihtml5-command="insertSpeech">speech</a>
						    <li><a data-wysihtml5-action="change_view" class="icon fa-code"></a></li>
						</ul>
						   
						    
						  </div>
						<div class="12u"><textarea name="content" id="textarea" rows="8"></textarea></div>
					</div>
					<input type="hidden" name="action" value="insert">
					<div class="row uniform">
						<div class="12u">
							<ul class="actions">
								<li><input type="submit" class="special" name="status" value="Send to post" /></li>
								<li><input type="submit" class="" name="status" value="Save draft" /></li>
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

		<script src="<?php echo base_url(); ?>assets/parser_rules/advanced.js"></script>
		<script src="<?php echo base_url(); ?>assets/dist/wysihtml5-0.3.0.js"></script>
		<script>
		  var editor = new wysihtml5.Editor("textarea", {
		    toolbar:      "toolbar",
		    stylesheets:  "css/stylesheet.css",
		    parserRules:  wysihtml5ParserRules
		  });
		  
		    </script>
			
	</div>
	</body>
</html>