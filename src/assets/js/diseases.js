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
