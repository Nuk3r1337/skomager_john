const xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(function () {
            drawStuff(data)
        });
    }
};

xhttp.open("GET","/skomager_john/ajax/graphData.php", true);
xhttp.send();

function drawStuff(dataValues) {

    console.log(dataValues)

    let data = new google.visualization.DataTable();
    data.addColumn('number', 'Skostørrelse');
    data.addColumn('number', 'Antal');
    data.addRows(dataValues);

    //let data = new google.visualization.arrayToDataTable(dataValues);

    const options = {
        width: 800,
        colors: ['red','yellow', 'blue','green','red','yellow', 'blue','green','hotpink'],
        legend: { position: 'none' },
        chart: {
            title: 'Hyppighed blandt skostørrelser',
            subtitle: 'Massere af vafler' },
        axes: {
            x: {
                0: { side: 'bottom', label: 'Skostørrelser'} // Top x-axis.
            }
        },
        bar: { groupWidth: "90%" },
        is3D: true
    };

    const chart = new google.charts.Bar(document.getElementById('top_x_div'));
    // Convert the Classic options to Material options.
    chart.draw(data, options);
}