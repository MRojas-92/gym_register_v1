<section>
	<h1>Registrar Amigos</h1>
	<form method="POST" action="menu_invoca.php"> <!--action="registra.php" o action="regis_amigos_db.php"-->
		<div class="inputs">
			<img src="img/usuario.png" width="30px" height="30px">
			<input type="text" name="nombre" placeholder="Nombre de usuario"><br>
		</div>

		<div class="inputs">
			<img src="img/correo-electronico.png" width="30px" height="30px">
			<input type="text" name="email" placeholder="Correo electronico">
		</div>
		<br>
		<input class="confirmar" type="submit" name="B1" value="Agregar" style="cursor: pointer;">
		<br>
		<input class="cancelar" type="submit" name="cancelar" value="Cancelar" style="cursor: pointer;">
	</form>
</section>
