var diseasesToDisplay = diseases;
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
                res += '\
                <tr>\
                <td class="nameElement">'+diseasesToDisplay[i].name+'</td>\
                <td class="typeElement">'+diseasesToDisplay[i].type+'</td>\
                <td class="meridianElement">'+diseasesToDisplay[i].meridian+'</td>\
                </tr>';
            }
        }
        document.getElementById("diseasesTable_content").innerHTML = res;
    }
}

function sortTable(sorting, target)
{
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("diseasesTable_content");
    switching = true;

    while (switching) {
        switching = false;
        rows = table.getElementsByTagName("TR");

        for (i = 0; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/

            //check if the two rows should switch place:
            if (sorting(rows[i],rows[i + 1], target))
            {
                //if so, mark as a switch and break the loop:
                shouldSwitch= true;
                break;
            }
        }
        if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
        }
    }
}

function sort(firstRow, secondRow, target)
{
    firstElement = firstRow.getElementsByClassName(target)[0];
    secondElement = secondRow.getElementsByClassName(target)[0];
    return firstElement.innerHTML.toLowerCase() > secondElement.innerHTML.toLowerCase();
}

function sortreverse(firstRow, secondRow, target)
{
    firstElement = firstRow.getElementsByClassName(target)[0];
    secondElement = secondRow.getElementsByClassName(target)[0];
    return firstElement.innerHTML.toLowerCase() < secondElement.innerHTML.toLowerCase();
}
