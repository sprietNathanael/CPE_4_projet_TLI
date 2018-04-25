{extends file="layout.tpl"}
{block name=title}Recherche{/block}
{block name=content}

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
<main>
    <table>
        <thead>
            <tr>
                <th>Pathologie</th>
                <th>Type</th>
                <th>Méridien</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$diseases item=disease}
            <tr>
                <td>{$disease->name}</td>
                <td>{$disease->type}</td>
                <td>{$disease->meridian}</td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</main>

