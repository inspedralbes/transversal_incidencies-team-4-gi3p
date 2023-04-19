
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Título de la página</title>
	<link rel="stylesheet" href="estilos.css">
	<script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
  <style>
    header {
  background-color: #292929;
  color: #fff;
  height: 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0px 0px;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
}

.logo {
  font-weight: bold;
  font-size: 1.8rem;
  letter-spacing: 2px;
}

nav ul {
  list-style: none;
  display: flex;
  margin: 0;
  padding: 0;
}

nav li {
  margin: 0 7px;
}

nav a {
  color: #fff;
  text-decoration: none;
  font-size: 1.2rem;
  text-transform: uppercase;
  transition: color 0.3s ease;
}

nav a:hover {
  color: #8cd98c;
}
</style>
</head>
<body>

	<header>
		<div class="menu-btn">
			<div class="btn-line"></div>
			<div class="btn-line"></div>
			<div class="btn-line"></div>
		</div>
		<nav class="menu">
			<ul class="menu-items">
				<li><a href="user.php">Inici User</a></li>
				<li><a href="logoutSuccess.html">Logout</a></li>
			</ul>
		</nav>
		<div class="logo">
			<img src="images/insertar.png" alt="Logo" height="35px" width="50px">
		</div>
	</header>

	<script src="menu.js"></script>

</body>
</html>

