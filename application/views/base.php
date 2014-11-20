
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home</title>
		<link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>dist/css/customstyle.css" rel="stylesheet">
		<link href="<?php echo base_url();?>dist/css/agency.css" rel="stylesheet">
	</head>

	<body class="bg-light-gray">
		<div class="navbar" style="background-color: #000">
			<div class="container container-header">
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url("home");?>" class="navbar-brand"><span class="glyphicon glyphicon-cutlery"></span> MyRecipes</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php if (!isset($name) || empty($name)) { ?>
						<li>
							<a href="<?php echo site_url("account/login");?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
						</li>
						<?php } else { ?>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Recipes<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url("recipes");?>">Recipes List</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo site_url("recipes/create_recipe/1");?>">Create Recipes</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo site_url("mealplan");?>" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Meal Plan<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url("mealplan");?>">Meal List</a></li>
								<li class="divider"></li>
								<li><a href="">Create Meal Plan</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo site_url("dietplan");?>" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire"></span> Diet Plan<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url("dietplan");?>">Diet List</a></li>
								<li class="divider"></li>
								<li><a href="">Create Diet Plan</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $name; ?><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Settings</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo site_url("account/signout");?>">Sign Out</a></li>
							</ul>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>  

		<div id="wrapper">
			<?php echo $content; ?>
		</div>

		<div class="container container-body">
			<foot>
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p>&copy; 2014 MyRecipes, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			</foot>
		</div>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="<?php echo base_url();?>dist/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>dist/js/customjs.js"></script>
	</body>
</html>