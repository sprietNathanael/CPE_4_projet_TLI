<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Accu</title>
</head>
<body>
    <div id="titleBar" class="grid_wrapper">
        <h1>Accueil</h1>
    </div>
    <div class="grid_wrapper">
        <div class="grid_one"></div>
        <div class="grid_two">
            <form id="connexion_form" action="login" method="post">
                <h2>Connexion</h2>
                <p>
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" name="username" id="connexion_username_input">
                </p>
                <p>
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="connexion_password_input">
                </p>
                <p>
                    <button type="submit">Se connecter</button>
                </p>
            </form>
            <form id="search_form" action="search" method="post">
                <h2>Recherche</h2>
                <p>
                    <label for="name">Nom :</label>
                    <input type="text" name="name" id="search_name_input">
                </p>
                <p>
                    <button type="submit">Chercher</button>
                </p>
            </form>
        </div>
        <div class="grid_three"></div>
    </div>

</body>
</html>