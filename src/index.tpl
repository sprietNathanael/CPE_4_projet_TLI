{extends file="layout.tpl"}
{block name=title}Accueil{/block}
{block name=content}

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
{/block}