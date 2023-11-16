<?php
  require_once("../../config/conexiones.php"); 

if(isset($_SESSION["usuario_id"])){

?>



<!DOCTYPE html>
<html>

<?php require_once("../MainHead/head.php");?>
<title>Home Help Desk</>::Detalle Ticket</title>

</head>
<body class="with-side-menu">

<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
<?php require_once("../MainNav/nav.php");?>


<!-- contenido-->
	<div class="page-content">
		<div class="container-fluid">
        <section class="activity-line">
				<article class="activity-line-item box-typical">
					<div class="activity-line-date">
						Lunes<br/>
						Nov 9
					</div>
					<header class="activity-line-item-header">
						<div class="activity-line-item-user">
							<div class="activity-line-item-user-photo">
								<a href="#">
									<img src="img/photo-64-2.jpg" alt="">
								</a>
							</div>
							<div class="activity-line-item-user-name">Pablo Diaz</div>
							<div class="activity-line-item-user-status">Administracion</div>
						</div>
					</header>
					<div class="activity-line-action-list">
						<section class="activity-line-action">
							<div class="time">10:40 AM</div>
							<div class="cont">
								<div class="cont-in">
									
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, repellat quo! Nisi ea explicabo ab laudantium ratione, totam in iusto temporibus perspiciatis placeat, repudiandae tenetur modi labore, voluptatibus debitis cupiditate!</p>
									
									<ul class="meta">
										<li><a href="#">5 Comentarios</a></li>
										
									</ul>
								</div>
							</div>
						</section>
						<section class="activity-line-action">
							<div class="time">10:50 AM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  aspernatur minima officia quis cupiditate suscipit!</p>
									
									<ul class="meta">
										<li><a href="#">5 Comentarios</a></li>
										
									</ul>
								</div>
							</div>
						</section>
						<section class="activity-line-action">
							<div class="time">15:30 PM</div>
							<div class="cont">
								<div class="cont-in">
									<p>Se adjuntan cotizaciones</p>
									<ul class="attach-list">
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">ejemplo.doc</a>
										</li>
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">ejemplo.doc</a>
										</li>
										<li>
											<i class="font-icon font-icon-page"></i>
											<a href="#">ejemplo.doc</a>
										</li>
									</ul>
									<ul class="meta">
										<li><a href="#">2 Comentarios</a></li>
										
									</ul>
								</div>
							</div>
						</section>
					</div>
				</article>

				
			</section>
		

		</div>
	</div>
<!-- contenido-->
<?php require_once("../MainJs/js.php");?>
<script type="text/javascript" src="detalle_ticket.js" ></script>

</body>
</html>

<?php
}else{
	header("Location:".conectar::ruta()."/view/home/index.php");
}

?>

