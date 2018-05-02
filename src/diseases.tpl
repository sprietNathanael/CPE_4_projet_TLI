{extends file="assets/layouts/layout.tpl"}
{block name=title}Recherche{/block}
{block name=content}

<aside>
    <form id="search_form" action="search" method="post">
        <p>Rechercher une pathologie</p>
        <p>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="search_name_input">
        </p>
        <p>
            <button type="submit">Chercher</button>
        </p>
    </form>
</aside>
<main>
    <table id="diseasesTable">
        <thead>
            <tr>
                <th>Pathologie</th>
                <th>Type</th>
                <th>Méridien</th>
            </tr>
        </thead>
        <tbody id="diseasesTable_content">
            {foreach from=$diseases item=disease}
            <tr>
                <td class="nameElement">{$disease->name}</td>
                <td class="typeElement">{$disease->type}</td>
                <td class="meridianElement">{$disease->meridian}</td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</main>
{/block}
