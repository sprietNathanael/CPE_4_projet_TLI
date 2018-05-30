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
            <button type="button" onclick="searchInName()">Chercher</button>
        </p>
    </form>
</aside>
<main>
    <table id="diseasesTable">
        <thead>
            <tr>
                <th>
                    <div class="tableHeaderContent">
                        <p>Pathologie</p>
                        <div class="sortControls">
                            <button id="sortUp_patho" class="sortButton sortUpButton" onclick="sortTable(sort,'name')">
                                <img
                                    src="assets/icons/sort-alpha-up.svg"
                                    alt="sort alpha up"
                                    height="100px"/>
                            </button>
                            <button id="sortDown_patho" class="sortButton sortDownButton" onclick="sortTable(sortreverse,'name')">
                                <img
                                    src="assets/icons/sort-alpha-down.svg"
                                    alt="sort alpha down"
                                    height="100px"/>
                            </button>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="tableHeaderContent">
                        <p>Type</p>
                        <div class="sortControls">
                            <button id="sortUp_type" class="sortButton sortUpButton" onclick="sortTable(sort,'type')">
                                <img
                                    src="assets/icons/sort-alpha-up.svg"
                                    alt="sort alpha up"
                                    height="100px"/>
                            </button>
                            <button id="sortDown_type" class="sortButton sortDownButton" onclick="sortTable(sortreverse,'type')">
                                <img
                                    src="assets/icons/sort-alpha-down.svg"
                                    alt="sort alpha down"
                                    height="100px"/>
                            </button>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="tableHeaderContent">
                        <p>Méridien</p>
                        <div class="sortControls">
                            <button id="sortUp_meridian" class="sortButton sortUpButton" onclick="sortTable(sort,'meridian')">
                                <img
                                    src="assets/icons/sort-alpha-up.svg"
                                    alt="sort alpha up"
                                    height="100px"/>
                            </button>
                            <button id="sortDown_meridian" class="sortButton sortDownButton" onclick="sortTable(sortreverse,'meridian')">
                                <img
                                    src="assets/icons/sort-alpha-down.svg"
                                    alt="sort alpha down"
                                    height="100px"/>
                            </button>
                        </div>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody id="diseasesTable_content">
        </tbody>
    </table>
    <div id="pageManager">
        <div>
            Résultats par page : <select id="resultsPerPageSelector" onchange="refreshPagesNumber()">
                <option value="10">10</option>
                <option value="20" selected>20</option>
                <option value="25">25</option>
            </select>
        </div>
        <div id="pages"></div>
    </div>
    <script>
        var diseases = {$diseases|json_encode};
    </script>
</main>
{/block}
