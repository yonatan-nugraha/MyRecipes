
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
							<a href="<?php echo site_url("recipes");?>" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Recipes<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Recipes List</a></li>
								<li class="divider"></li>
								<li><a href="">Create Recipes</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo site_url("mealplan");?>" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Meal Plan<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Meal List</a></li>
								<li class="divider"></li>
								<li><a href="">Create Meal Plan</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo site_url("dietplan");?>" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-fire"></span> Diet Plan<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Diet List</a></li>
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