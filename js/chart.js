google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['type', 'Good Mood', 'Stable', 'Bad Mood'],
          ['SEP', 100, 40, 20],
          ['SD', 117, 46, 25],
          ['SAP', 66, 112, 30]
        ]);

        var options = {
          chart: {
            title: 'CorpScan',
            subtitle: 'Company health 2019',
          },
          vAxis: {format: "decimal"},
          colors: ['#cdfece', '#fecb2f', '#fc6521']
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }