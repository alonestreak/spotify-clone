<div id="navBarContainer">
	<nav class="navBar">

		<span  id="fir" role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
			<img src="assets/images/icons/logo.png">
		</span>


		<div class="group">

			<div class="navItem">
				<span role='link' tabindex='0' onclick='openPage("search.php")' class="navItemLink">
					Search
					<img src="assets/images/icons/search.png" class="icon" alt="Search">
				</span>
			</div>

		</div>

		<div class="group">
			<nav id="page-nav">
      		<!-- [THE HAMBURGER] -->
      		<label for="hamburger">&#9776;</label>
      		<input type="checkbox" id="hamburger"/>
			<ul>
			<li>
				<div class="navItem">
					<span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
				</div>
			</li>
			<li>
				<div class="navItem">
					<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
				</div>
			</li>
			<li>
				<div class="navItem">
					<span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
				</div>
			</li>
		</ul>
	</nav>
		</div>

	</nav>
</div>