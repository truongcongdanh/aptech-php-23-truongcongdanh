
function taoElement() {
    var tableBodyElement = document.getElementById('table-body');
    for (var i = 0; i < 3; i++) {
        var tableRow = document.createElement('tr');
        tableBodyElement.appendChild(tableRow);

        var tableData1 = document.createElement('td');
        tableData1.innerHTML = i;

        var tableData2 = document.createElement('td');
        tableData2.innerHTML = "samsung";

        var tableData3 = document.createElement('td');
        tableData3.innerHTML = "iphone";

        tableRow.appendChild(tableData1);
        tableRow.appendChild(tableData2);
        tableRow.appendChild(tableData3);
    }
}
