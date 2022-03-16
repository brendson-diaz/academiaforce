<!DOCTYPE html>
<meta charset="UTF-8" />
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link href="stylelogin.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>academia force</title>
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>

<body>
  <div class="menu-content">
  <h1 class="logo"> Academiaforce</h1>
  <nav class="header-menu">
    <ul class="list-itens">
      <li><a href="home.html">home</a></li>
      <li><a href="sobre.html">sobre</a></li>
      <li><a href="contatos.html">contatos</a></li>
      <li><a href="cadastro.html">cadastro</a></li>
      <li><a href="login.html">logim </a></li>
      <li><a href="https://www.facebook.com/brendson.diaz.7"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="https://www.instagram.com/brendson_diaz/"><i class="fab fa-instagram"></i></a></li>
    </ul>
  </nav>
  </div>
  
  <form method="POST">
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
  
    <span> Digite Seu nome completo:    </span>
    <input type="text" name=Nome placeholder="Nome" required>
    <br><br>
    <span> Digite o número de telefone:    </span>
    <input type="text" name=Numero placeholder="número" required>
    <br><br>
    <span> "Digite o e-mail:     "</span>
    <input type="text" name=Email placeholder="E-mail" required>
    <br><br>
    <span> Digite o Nome de Usuário(Utilizado para logar): </span>
    <input type="text" name=login placeholder="Usuário" required>
    <br><br>
    <span> Digite uma Senha Númerica:      </span>
    <input type="text" name=password placeholder="senha" required>
    <br><br>
    <input type="submit" name=Enviar>
    </br>

  </form>

  <?php

  if (isset($_POST['Enviar'])) {
    $Nome = $_POST['Nome'];
    $Numero = $_POST['Numero'];
    $Email = $_POST['Email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    echo "<br>" . "Cadastro realizado";

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = "academiaforce";

    $link = mysqli_connect($servidor, $usuario, $senha);
    if (!($link)) {
      echo "não foi possivel se conectar ao servidor";
      exit;
    }
    $selecao = mysqli_select_db($link, $banco);
    if (!($link)) {
      echo "não foi possivel se conectar a base";
      exit;
    }

    $insert = "INSERT INTO base (Nome,Numero,Email,login,password)
             VALUES('$Nome','$Numero','$Email','$login','$password')";

    mysqli_query($link, $insert);
  }
  ?>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>