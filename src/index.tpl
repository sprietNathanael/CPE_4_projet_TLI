{extends file="assets/layouts/layout.tpl"}
{block name=title}Accueil{/block}
{block name=content}

{if not $loggedIn}
    <form id="connexion_form" action="" method="POST">
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
            <input type="submit" name="logIn" value="Se connecter">
        </p>
    </form>
{/if}
{if $loggedIn}
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
{/if}
<form id="search_form" action="search" method="post">
    <h2>Information</h2>
    <p>
        <button type="submit" onclick>Aperçu</button>
    </p>
</form>
{/block}