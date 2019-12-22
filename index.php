<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="btpgrid">
    <link rel="stylesheet" href="btp">
    <link rel="stylesheet" href="css">
    <title>Banque du peuple</title>
</head>


<body>

<div class="jumbotron jumbotron-fluid bg-info">
<nav class="navbar navbar-expand-sm bg-light">

  <h2>Banque du peuple</h2>

</nav>

<form action="connect" method="post" class="form-signin col-md-4 offset-4 text-center">
            <div class="form-group">
                <img src="public/img/squall.png" width="100%" alt="" class="col-md-4">
                <h1>Bienvenue</h1>
            </div>
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" class="form-control" required>
            </div>
            <hr>
            <div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
                <!-- <a href="view/inscription.php">
                    <button type="button" class="btn btn-success">
                        S'inscrire
                    </button>
                </a> -->
            </div>
        </form>
</div>
</body>

</html>