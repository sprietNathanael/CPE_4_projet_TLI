{extends file="assets/layouts/layout.tpl"}
{block name=title}Recherche{/block}
{block name=content}

<aside>
    <form id="search_form" action="search.php" method="get">
        <h2>Recherche</h2>
        <p>
            <label for="meridien">Méridien :</label>
            <input type="text" name="meridien" id="search_meridien_input">
        </p>
        <p>
            <label for="pathologie">Pathologie :</label>
            <input type="text" name="pathologie" id="search_meridien_input">
        </p>
        <p>
            <label for="caracteristique">Caractéristique :</label>
            <input type="text" name="caracteristique" id="search_meridien_input">
        </p>
        <p>
            <button type="button" onclick="searchDisease()">Chercher</button>
        </p>
    </form>
</aside>
{/block}