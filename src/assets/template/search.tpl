{extends file="assets/template/layout.tpl"}
{block name=title}Recherche{/block}
{block name=content}

<aside>
    <form id="search_form" action="search.php" method="get">
        <h2>Recherche</h2>
        <p>
            <label for="meridien">Méridien :</label>
            <select id="search_meridien_input" name="meridien">
                <option value="" default>--</option>
                <option value="-QM">Yin Qiao Mai</option>
                <option value="-WM">Yin Wei Mai</option>
                <option value="+QM">Yang Qiao Mai</option>
                <option value="+WM">Yang Wei Mai</option>
                <option value="C">Coeur</option>
                <option value="ChM">Chong Mai</option>
                <option value="DaiM">Dai Mai</option>
                <option value="DM">Du Mai</option>
                <option value="E">Estomac</option>
                <option value="F">Foie</option>
                <option value="GI">Gros intestin</option>
                <option value="IG">Intestin Grêle</option>
                <option value="MC">Protecteur du coeur</option>
                <option value="P">Poumon</option>
                <option value="R">Rein</option>
                <option value="RM">Ren Mai</option>
                <option value="Rte">Rate Pancréas</option>
                <option value="TR">Triple réchauffeur</option>
                <option value="V">Vessie</option>
                <option value="VB">Vésicule Biliaire</option>
            </select>
        </p>
        <p>
            <label for="pathologie">Type :</label>
            <select id="search_type_input" name="pathologie">
                <option value="" default>--</option>
                <option value="me">me</option>
                <option value="mi">mi</option>
                <option value="lp">lp</option>
                <option value="lv">lv</option>
                <option value="j">j</option>
                <option value="tfp">tfp</option>
                <option value="tfv">tfv</option>
                <option value="tfc">tfc</option>
                <option value="tff">tff</option>
                <option value="tfpc">tfpc</option>
                <option value="tfvf">tfvf</option>
                <option value="l2p">l</option>
                <option value="l2v">l</option>
                <option value="tfv-">tfv</option>
                <option value="tfv+">tfv</option>
                <option value="tfvfs">tfvfs</option>
                <option value="tfpcs">tfpcs</option>
                <option value="tfvfm">tfvfm</option>
                <option value="tfpcm">tfpcm</option>
                <option value="tfvfi">tfvfi</option>
                <option value="tfpci">tfpci</option>
                <option value="mv">mv</option>
                <option value="mvi">mvi</option>
                <option value="mvp">mvp</option>
                <option value="mva">mva</option>
            </select>
        </p>
        <p>
            <label for="caracteristique">Pathologie :</label>
            <input type="text" name="caracteristique" id="search_patho_input">
        </p>
        <p>
            <button type="button" onclick="searchDisease()">Chercher</button>
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
</main>
{/block}