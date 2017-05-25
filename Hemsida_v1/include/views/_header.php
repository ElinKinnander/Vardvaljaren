<header>
	<!-- HEADER TITLE -->
	<div id="header-title-container" class="top-menu-click-function">
		<h1>Välkommen till vårdvalet.se!</h1>
		<p class="header-text">Din hjälp till att hitta rätt vård.</p>
	</div>
	
	<!-- HEADER MENU-->
	<div id="header-menu-container" >
		<a href="faq-redirect.php" class="header-text top-menu-click-function">Vanliga frågor</a>
		<a href="faq.php" class="header-text .top-menu-click-function">Vården i Sverige</a>
	</div>

	<!-- HEADER LOGIN FORM -->
	<div id="header-login-container" class="header-text">
		<form name="topLoginForm" onsubmit="return validate()" method="POST" action="login_process.php">
			<label for="name">Login name:</label>
			<input type="text" name="name" class="header-login-form-input">
			<label for="password">Password:</label>			
			<input type="password" name="password" class="header-login-form-input">
			<input type="submit" value="Log in" class="header-button"/>
		</form>
	</div>
</header>