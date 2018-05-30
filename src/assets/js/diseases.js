var resultsPerPage = parseInt(document.getElementById("resultsPerPageSelector").value);
var currentPage = 0;
var pagesNumber;
generatePagesSelection();
generateDiseasesTablePage(0);

function refreshPagesNumber()
{
    resultsPerPage = parseInt(document.getElementById("resultsPerPageSelector").value);
    generatePagesSelection();
    currentPage = 0;
    generateDiseasesTablePage(0);

}

function generatePagesSelection()
{
    pagesNumber = Math.ceil(diseasesToDisplay.length/resultsPerPage);
    document.getElementById("pages").innerHTML = "";
    html = "";
    html += "<button id='buttonPage-previous' class='buttonPage' onclick='preivousPage()'><</button>";
    for(let i = 1; i <= pagesNumber; i++)
    {
        html += "<button id='buttonPage-"+(i-1)+"' class='buttonPage' onclick='generateDiseasesTablePage("+(i-1)+")'>"+i+"</button>";
    }
    html += "<button id='buttonPage-next' class='buttonPage' onclick='nextPage()'>></button>";
    document.getElementById("pages").innerHTML = html;
}

function preivousPage()
{
    generateDiseasesTablePage(currentPage-1);
}

function nextPage()
{
    generateDiseasesTablePage(currentPage+1);
}

function generateDiseasesTablePage(page)
{
    if(page >= 0 && page < pagesNumber)
    {
        document.getElementById("buttonPage-"+currentPage).classList.remove("currentPage");
        currentPage = page;
        document.getElementById("buttonPage-"+currentPage).classList.add("currentPage");
        document.getElementById("diseasesTable_content").innerHTML = "";
        res = "";
        start = page*resultsPerPage;
        end = start+resultsPerPage;
        for(let i = start; i < end; i++)
        {
            if(diseasesToDisplay[i] !== undefined)
            {
                res +="\
                <tr>\
                <td class="nameElement">'+diseasesToDisplay[i].name+'</td>\
                <td class="typeElement">'+diseasesToDisplay[i].type+'</td>\
                <td class="meridianElement">'+diseasesToDisplay[i].meridian+'</td>\
                </tr>";
            }
        }
        document.getElementById("diseasesTable_content").innerHTML = res;
    }
}

function sortTable(sorting, target)
{
    sorting(target);
    generateDiseasesTablePage(0);
}

function sort(target)
{
    diseasesToDisplay.sort((a, b) =>
    {
        if(a[target].toLowerCase() < b[target].toLowerCase()) return -1;
        if(a[target].toLowerCase() > b[target].toLowerCase()) return 1;
    });
}

function sortreverse(target)
{
    diseasesToDisplay.sort((a, b) =>
    {
        if(a[target].toLowerCase() > b[target].toLowerCase()) return -1;
        if(a[target].toLowerCase() < b[target].toLowerCase()) return 1;
    });
}

function searchInName()
{
    var search = document.getElementById("search_name_input").value;
    diseasesToDisplay = [];
    diseasesToDisplay = diseases.filter(disease => disease.name.toLowerCase().includes(search.toLowerCase()));
    refreshPagesNumber();

}