<!DOCTYPE html>

<html lang='es'>

	<head>

		<meta charset='UTF-8'>

		<title>UroohCMS</title>

		<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' type='text/css' href="./style.css">

		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

		<script type='text/javascript'>

		var show = false;

		$(document).ready(function(){

			function showr(what, why){

				$(why).click(function(){

					var h = $(show).css('display');

					if(show && show != what && h != 'none'){

						$(show).slideUp('normal');

					}

					$(what).slideToggle('normal');

					return show = what;

				});

			}

			showr('#login', '#loginbutton');
			showr('#register', '#registerbutton');

		});

		</script>

	</head>

	<body>

		<header>

			<div id="login" class='floatingdiv'>
			<span>Log in</span>
				<form>
					<label>Usuario:</label><br>
					<input type='text'><br>
					<label>Contraseña:</label><br>
					<input type='text'><br><br>
				</form>
			</div>

			<div id="register" class='floatingdiv'>
			<span>Sign up</span>
				<form>
				<aside>
					<label>Usuario:</label><br>
					<input type='text'>
				</aside>
				<aside>
					<label>Correo electrónico:</label><br>
					<input type='text'>
				</aside>
				<aside>
					<label>Contraseña:</label><br>
					<input type='text'><br>
				</aside>
				<aside>
					<label>Repite contraseña:</label><br>
					<input type='text'>
				</aside>
				</form>
			</div>

			<nav>

				<ul>

					<li>HOME</li>
					<li>CONTACT</li>
					<li id='loginbutton'>ENTRAR</li>
					<li id='registerbutton'>REGÍSTRATE</li>

				</ul>

			</nav>

		</header>

		<section id='wrapper'>

		<section id='content'>

			<section id='left'>

				<article>

					<h2>If you want, you can build<br> <strong>amazing things</strong></h2>

					We will teach you what, when, how and why.

				</article>

				<br>

				<article>

					<h2>Each person has a talent, <br>find yours</h2>

					You're unique, you has at least one talent inside you. Science? Math? Computer Science perhaps?

				</article>

			</section>

			<section id='right'>

				<article>

					<h2 class='sidebar_title'>We love the Open Source web</h2>

					We love to share free knowledge and leave another people learn new amazing things.

				</article>

				<br>

				<article>

					<h2 class='sidebar_title'>Because the knowledge is free</h2>

					Many people have money. Others have a pretty face. The another ones, just have knowledge. Knowledge which will help them to change and build a better world, innovate outdated systems, and reach the glory.

				</article>


			</section>

		</section>

			<footer>
				<span>Powererd by UroohCMS</span>
			</footer>

		</section>

	</body>

</html>
