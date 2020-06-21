google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Stress Indicator', 'colors'],
          ['SEP',   34],
          ['SD',   33],
          ['SAP',  33]
        ]);

        var options = {
          title: 'Stress User Indicator',
          is3D: true,
          colors: ['#cdfece', '#fecb2f', '#fc6521'],
          
        };
        

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }