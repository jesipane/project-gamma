<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Total item sold</h5>
        <p class="card-text">IDR 125,50</p>
        <p class="card-text">33,87% from last week</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Total Revenue</h5>
        <p class="card-text">IDR 10,230,845</p>
        <p class="card-text">33,87% from last week</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Total Spending</h5>
        <p class="card-text">IDR 100,20:<span class="glyphicon glyphicon-heart"></span></p>
        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
</svg>33,87% from last week</p>
      </div>
    </div>
  </div>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    Highcharts.chart('chartNilai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Emissions to air in Norway'
    },
    subtitle: {
        text: 'Source: ' +
            '<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
            'target="_blank">SSB</a>'
    },
    xAxis: {
        categories: [
            '2010',
            '2011',
            '2012',
            '2013',
            '2014',
            '2015',
            '2016',
            '2017',
            '2018',
            '2019',
            '2010',
            '2021'
        ],
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Million tonnes CO<sub>2</sub>-equivalents'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Oil and gas extraction',
        data: [13.93, 13.63, 13.73, 13.67, 14.37, 14.89, 14.56,
            14.32, 14.13, 13.93, 13.21, 12.16]

    }, {
        name: 'Manufacturing industries and mining',
        data: [12.24, 12.24, 11.95, 12.02, 11.65, 11.96, 11.59,
            11.94, 11.96, 11.59, 11.42, 11.76]

    }, {
        name: 'Road traffic',
        data: [10.00, 9.93, 9.97, 10.01, 10.23, 10.26, 10.00,
            9.12, 9.36, 8.72, 8.38, 8.69]

    }, {
        name: 'Agriculture',
        data: [4.35, 4.32, 4.34, 4.39, 4.46, 4.52, 4.58, 4.55,
            4.53, 4.51, 4.49, 4.57]

    }]
});
              
  </script>
              
  <div class="row row-cols-1 row-cols-md-1 g-1">
  <div class="col">
    <div class="card text-dark mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h5 class="card-title">Number of registered patients</h5>
        <p class="card-text"><strong>121 people</strong></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-dark mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h5 class="card-title">Number of suppliers</h5>
        <p class="card-text"><strong>3 companies</strong></p>
      </div>
    </div>
  </div>
  </div>
<table class="table table">
<thead>
    <tr>
      <th scope="col">Nama produk</th>
      <th scope="col">Total terjual</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Simvastatin</td>
      <td>210</td>
    </tr>
    <tr>
      <td>paracetamol</td>
      <td>360</td>
    </tr>
    <tr>
      <td>Antibiotik Amoxilin</td>
      <td>115</td>
    </tr>
    <tr>
      <td>Glucophage</td>
      <td>98</td>
    </tr>
    <tr>
      <td>Cetirizine</td>
      <td>95</td>
    </tr>
  </tbody>
</table>