<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Système d'assurance - Inscription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<style>
		body {
			background-color: #1e52a8;
			color: white;
		}
	</style>
</head>
<body>
   <!-- @include('View.Navigation') -->
	<div class="container">
		<form  action = "userAdd" method="POST">
        <h1>Inscription au système d'assurance</h1>
            @csrf
			<div class="form-group">
				<label for="nom">Nom:</label>
				<input type="text" class="form-control" id="nom">
			</div>
			<div class="form-group">
				<label for="prenom">Prénom:</label>
				<input type="text" class="form-control" id="prenom">
			</div>
			<div class="form-group">
				<label for="username">Nom d'utilisateur:</label>
				<input type="text" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="email">Adresse email:</label>
				<input type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="password">Mot de passe:</label>
				<input type="password" class="form-control" id="password">
			</div>
			<button type="submit" class="btn btn-primary">Inscription</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/XvoWrTEQIpA7hF" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>