<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>HTTP/2 Web Toolkit</title>
  <meta name="description" content="This website contains a list of test pages and tools for HTTP2 (h2c h2).">
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="/img/apple-touch-icon.png" />
  <!-- Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body role="document">
<!-- BARRA SUPERIOR DE ENLACES-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
            <span class="navbar-brand"><span class="glyphicon glyphicon-home"></span>&nbsp;HTTP/2 Web Toolkit&nbsp;<sup><span class="label label-default">BETA</span></sup></span>
		</div>
	</div><!-- /.container-fluid -->
</nav><!-- navbar -->

<!-- BLOQUE GRIS-->
<div class="jumbotron">
	<div class="container">
		<h1>Template 07&nbsp;<small>Basic HTML form.</small></h1>
	</div>
</div>

<!-- FORMULARIO -->
<div  align="middle" class="container">
  	<hr>
  		<?php
			function getReceivedVar($label) {
				if (isset($_POST[$label])) {
					echo $_POST[$label];
				} else {
					echo "Not received";
				}
			}
			echo "<ul>";
			echo "<li>HTML form page name: ";
			echo getReceivedVar('pageName') . "<br>";
			echo "<li>User name: ";
			echo getReceivedVar('pName') . "<br>";
			echo "<li>User age: ";
			echo getReceivedVar('pAge') . "<br>";
			echo "<li>User gender: ";
			echo getReceivedVar('pGender');
			echo "</ul>";
			echo "<div class=\"alert alert-success\" role=\"alert\">";
			echo "<strong>POST data output:</strong><br>";
			echo var_dump($_POST);
			echo "</div>"
		?>
    
    <!-- PIE DE PAGINA -->
    <div class="row">
        <div class="col-lg-12">
        <br><br>
          <p class="pull-right"><a href="http://www.telefonica.com"><img src="/img/logo_telefonica_azul.png" style="width: 150px" align="middle"></a></p>
        <br><br>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</footer>

  </body>
</html>
