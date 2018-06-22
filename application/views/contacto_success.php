<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<style>
a {
color: #fff;
}
a:hover {
font-weight: bolder;
}
a i {
	color: #fff;
}
a i:hover {
	color: #333;
}
li i {
	color: #aaa;
}
</style>
</head>
<body>
<nav style="display: flex;flex-direction: row;background: #333;padding: 2%;position: fixed;z-index: 1;width: 100%;">
	<ul class="menu align-left">
	<img src="https://megacursos.com/themes/megacursos/assets/images/logo.png">
</ul>
<ul class="menu align-right" style="padding-top: 1%;margin-left: 30%;">
	<li><a href="#">Clases Gratis</a></li>
  <li><a href="#">Megacursos</a></li>
  <li><a href="#">Descarga</a></li>
  <li><a href="#">Clientes</a></li>
  <li><a href="#">Contacto</a></li>
</ul>
</nav>
 <section class="grid-y" style="height: 30em;padding-top: 8%;">
 	<div class="cell" style="background-image: url('https://assets.jtdwjcwq6f4wp4ce.com/bundles/y4trfx/less-autopilot/images/hero/san-jose.jpg');display: flex;flex-direction: column;align-items: center;background-size: cover;background-repeat: no-repeat;background-position: center;">
 		<h2 style="color: #fff;margin: 8% 0%;">Contáctanos<br>
 			<small>Acelera tu aprendizaje contactando con nosotros</small>
 		</h2>
 		<footer style="width: 100%;display: flex;justify-content: center;margin-bottom: 2%;">
 		<div style="width: 15%;display: flex;justify-content: space-between;">
 			<a href="#">
 				<i class="fab fa-facebook-square"></i>
 			</a>
 			<a href="#">
 				<i class="fab fa-instagram"></i>
 				</a>
 			<a href="#">
 				<i class="fab fa-twitter"></i>
 				</a>
 		</div>
 	</footer>
 	</div>
 </section>
 <br>
<section class="x-grid" style="display: flex;align-items: center;flex-direction: column;text-align: center;margin-top: 2%;">
	<div>
		<h2 style="color: green;">Categoría creada<br>
			<small>Operación efectuada exitosamente</small>
		</h2>
	</div>
	<br>
	<div style="margin-top: 6%;display: flex;flex-direction: row;width: 60%;">
		<div class="align-left">
			<header>
				<h4>Categoría</h4>
				<div>
					<a href="">Buscar</a>
					<a href="">Crear</a>
				</div>
			</header>
			<br>
	<div class="grid-container">
    <div class="grid-y grid-padding-y">
      <div class="small-6 cell">
			<?php echo form_open('contact'); ?>
        <label>Nombre
          <input type="text" placeholder="Nombre de la Categoría" name="cat_name">
        </label>
        <?php echo '<span style="color: red;">'.form_error('cat_name').'</span>'; ?>
      </div>
      <div class="small-6 cell">
        <label>Detalles
          <input type="text" placeholder="Detalles" name="details">
        </label>
        <?php echo '<span style="color: red;">'.form_error('details').'</span>'; ?>
      </div>
      <div class="small-6 cell">
        <label>Status
          <input type="number" min="1" max="1000" placeholder="Status" name="status">
        </label>
        <?php echo '<span style="color: red;">'.form_error('status').'</span>'; ?>
      </div>
       <div class="small-6 cell">
        <button type="submit" class="button large" style="color: #fff;">Consultar</button>
      </div>
    </div>
  </div>
		</form>
		</div>
		<hr style="border: 1px solid #ddd;height: 25em;">
	<div class="align-right">
		<header>
				<h4>Cursos Disponibles</h4>
			</header>
			<br>
	<div class="grid-container">
    <div class="grid-y grid-padding-y">
    	<p>Nombre: <?php echo $nombre;?></p>
    	<p>Categoría: <?php echo $categoria;?></p>
    	<p>Horas: <?php echo $horas;?></p>
    	<p>Detalles: <?php echo $detalles;?></p>
    	<p>Precio: <?php echo $precio;?></p>
    </div>
  </div>
	</div>		
	</div>
</section>
<footer class="grid-y" style="background: #333;display: flex;flex-direction: row;margin-top: 8%;">
	<div class="cell small-6" style="width: 33.3%;display: flex;justify-content: center;padding: 2% 0%;">
	<ul style="color: #444;list-style-type: none;display: flex;flex-direction: column;justify-content: center;">
		<li>Copyright © 2009-2018</li>
		<li>Suotta Ltd.</li>
		<li>Todos los derechos reservados.</li>
	</ul>
	</div>
	<div class="cell small-6" style="width: 33.3%;display: flex;justify-content: center;padding: 2% 0%;">
	<ul style="color: #444;list-style-type: none;display: flex;flex-direction: column;justify-content: center;">
		<li><i class="fas fa-phone"></i> +1 (917) 341 2153</li>
		<li><i class="fas fa-envelope"></i> atencion2@megacursos.com</li>
		<li><i class="fas fa-map-marker-alt"></i> 111 John St 1509 New York, EEUU</li>
	</ul>
	</div>
	<div class="cell small-6" style="width: 33.4%;display: flex;justify-content: center;padding: 2% 0%;">
	<div class="cell">
	<h4 style="color: #444;">Síguenos en Instagram</h4>
	<a href="https://instagram.com/megacursosoficial">
		<img src="https://megacursos.com/themes/megacursos/assets/images/instagram.png" style="width: 30%;">
	</a>
	</div>
	</div>
</footer>
</body>
</html>
</body>
</html>