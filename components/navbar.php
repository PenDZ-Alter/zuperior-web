<?php
  session_start();
  
	$toggle_user = "";

  if(!isset($_SESSION['username'])) {
    $toggle_user = '
			<a href="./login.php" class="text-decoration-none text-primary"><span class="navbar-text">
				Sign in
			</span></a>
		';
  } else {
		$toggle_user = '
			<a href="./controllers/logout.session.php" class="text-decoration-none text-primary"><span class="navbar-text">
				'.$_SESSION['name'].'
			</span></a>
		';
	}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid ">
		<a class="navbar-brand mb-0 h1" href="#">Zuperior</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Blog</a>
				</li>
				<!-- dropdown link -->
				<!-- <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
									aria-expanded="false">
									Dropdown link
							</a>
							<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
					</li> -->
			</ul>
		</div>
		<?php echo $toggle_user; ?>
	</div>
</nav>
