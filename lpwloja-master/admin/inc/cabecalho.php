<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Loja Virtual</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/navbar-fixed/navbar-top-fixed.css">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="collapse navbar-collapse" id="navbarCollapse">
        <?php
        if(isset($_SESSION['nome'])){
        	echo '<a align="right" class="btn btn-sm btn-primary" href="'.$base_url.'logout.php">Logout</a>';
        }
        ?>
	</div>
</nav>
<main role="main" class="container">