<!DOCTYPE html>
<html>
<head>
  <title>Atlanta Regional Commission</title>
  <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/keen-dashboards.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
</head>
<body class="application">

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../">
          <img src="images/com-insights.png" height="38">
<!--          <span class="glyphicon glyphicon-chevron-left"></span> -->
        </a>
<!--        <a class="navbar-brand" href="#">Atlanta Regional Commission</a> -->
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
          <li><a href="#">Welcome, Janae</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid">

  <div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#chart" aria-controls="chart" role="tab" data-toggle="tab">Chart Data</a></li>
      <li role="presentation"><a href="#geographic" aria-controls="geographic" role="tab" data-toggle="tab">Geographic Data</a></li>
    </ul>

      <!-- Tab panes -->
    <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="chart">

    <div class="row">
      <div class="col-sm-8">
        <div class="chart-wrapper">
          <div class="chart-title">
           Cost Per Trip Mile
          </div>
          <div class="chart-stage">
            <div id="grid-1-1">
              <div id="cost_per_tripmile_div" width="100%"></div>
            </div>
          </div>
          <div class="chart-notes">
            <!-- american dollars -->
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="chart-wrapper">
          <div class="chart-title">
            Total Rides by Carrier
          </div>
          <div class="chart-stage">
            <div id="carrier_chart"></div>
          </div>
          <div class="chart-notes">
            Data for January 2015
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="chart-wrapper">
          <div class="chart-title">
            Total Rides by County
          </div>
          <div class="chart-stage">
            <div id="total_rides_by_county_div" width="100%"></div>
          </div>
          <div class="chart-notes">
            <!-- notes -->
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cost Over Time
          </div>
          <div class="chart-stage">
            <div id="chart_div3">
            </div>
          </div>
          <div class="chart-notes">
            <!-- Notes about this chart -->
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="chart-wrapper">
          <div class="chart-title">
            Cost Per Ride
          </div>
          <div class="chart-stage">
            <div id="cost_per_ride_div"></div>
          </div>
          <div class="chart-notes">
            <!-- Notes about this chart -->
          </div>
        </div>
      </div>
<!-- end of three -->
<!-- div chart_div & chart_div2 removed -->

  </div>

</div>
<div role="tabpanel" class="tab-pane" id="geographic">

    <div class="row">
      <div class="col-sm-12">
        <div class="chart-wrapper">
        <script type='text/javascript' src='https://public.tableau.com/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 904px; height: 769px;'><noscript><a href='#'><img alt='Where are the facilities located  ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;AR&#47;ARC_0&#47;Wherearethefacilitieslocated&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='904' height='769' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='site_root' value='' /><param name='name' value='ARC_0&#47;Wherearethefacilitieslocated' /><param name='tabs' value='no' /><param name='toolbar' value='no' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;AR&#47;ARC_0&#47;Wherearethefacilitieslocated&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /><param name='showTabs' value='y' /></object></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="chart-wrapper">

          <script type='text/javascript' src='https://public.tableausoftware.com/javascripts/api/viz_v1.js'></script><div class='tableauPlaceholder' style='width: 704px; height: 569px;'><noscript><a href='#'><img alt='Where Are Patients Coming From? ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;At&#47;AtlantaRegionalCouncil2&#47;WhereArePatientsComingFrom&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' width='704' height='569' style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableausoftware.com%2F' /> <param name='site_root' value='' /><param name='name' value='AtlantaRegionalCouncil2&#47;WhereArePatientsComingFrom' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;At&#47;AtlantaRegionalCouncil2&#47;WhereArePatientsComingFrom&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='showVizHome' value='no' /><param name='showTabs' value='y' /></object></div>

        </div>
      </div>
    </div>

</div>
</div>
</div>

    <hr>

    <p class="small text-muted">Built at <a href="">GoodieHack</a></p>

  </div>

  <script type="text/javascript" src="assets/lib/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="assets/lib/holderjs/holder.js"></script>
  <script>
    Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });
  </script>

  <script type="text/javascript" src="assets/js/meta.js"></script>

      <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">

          // Load the Visualization API and the piechart package.
          google.load('visualization', '1.0', {'packages':['corechart', 'controls', 'bar', 'table']});

          // Set a callback to run when the Google Visualization API is loaded.
          google.setOnLoadCallback(drawChart);

          // Callback that creates and populates a data table,
          // instantiates the pie chart, passes in the data and
          // draws it.
          function drawChart() {

            // Create the data table.
/*            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
              ['Mushrooms', 3],
              ['Onions', 1],
              ['Olives', 1],
              ['Zucchini', 1],
              ['Pepperoni', 2]
            ]);
            // Create the data table.
            var data2 = new google.visualization.DataTable();
            data2.addColumn('string', 'Topping');
            data2.addColumn('number', 'Slices');
            data2.addRows([
              ['Mushrooms', 3],
              ['Onions', 1],
              ['Olives', 15],
              ['Zucchini', 1],
              ['Pepperoni', 2]
            ]);
*/
            var data3 = new google.visualization.DataTable();
            data3.addColumn('string', 'Year');
            data3.addColumn('number', 'Sales');
            data3.addColumn('number', 'Expenses');
            data3.addRows([
              ['2004', 1000, 400],
              ['2005', 1170, 460],
              ['2006',  860, 580],
              ['2007', 1030, 540]
            ]);

            var data4 = google.visualization.arrayToDataTable([
              ['Name', 'Donuts eaten'],
              ['Michael' , 5],
              ['Elisa', 7],
              ['Robert', 3],
              ['John', 2],
              ['Jessica', 6],
              ['Aaron', 1],
              ['Margareth', 8]
            ]);

            // Set chart options
/*
            var options = {'title':'How Much Pizza I Ate Last Night',
                           'width':400,
                           'height':300};
            // Set chart options
            var options2 = {'title':'How Much Pizza You Ate Last Night',
                           'width':400,
                           'height':300};
*/
            // Set chart options
            var options3 = {'title':'Line chart',
                           'width':400,
                           'height':300};


            // dashboard
            var dashboard = new google.visualization.Dashboard(document.getElementById('dashboard_div'));

            // Create a range slider, passing some options
            var donutRangeSlider = new google.visualization.ControlWrapper({
              'controlType': 'NumberRangeFilter',
              'containerId': 'filter_div',
              'options': {
                'filterColumnLabel': 'Donuts eaten'
              }
            });

            // Create a pie chart, passing some options
            var pieChart = new google.visualization.ChartWrapper({
              'chartType': 'PieChart',
              'containerId': 'piechart_div',
              'options': {
                'width': 300,
                'height': 300,
                'pieSliceText': 'value',
                'legend': 'right'
              }
            });

            dashboard.bind(donutRangeSlider, pieChart);

            // Instantiate and draw our chart, passing in some options.
/*
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
            var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
            chart2.draw(data2, options2);
*/
            var chart3 = new google.visualization.LineChart(document.getElementById('chart_div3'));
            chart3.draw(data3, options3);


/*            dashboard.draw(data4); */

/*** Total Rides by County ***/

            var total_rides_by_county_data = google.visualization.arrayToDataTable([
              ['County',          'January 2015'],
              ['Cobb',       1242],
              ['Fulton',         4691],
              ['Cwinnett',             2499],
              ['DeKalb',             3843]

            ]);

            var total_rides_by_county_options = {
              width: '100%',
              height: 'auto',
              hAxis: {
                minValue: 0
              },
              vAxis: {
                title: 'County'
              }
            };

            var total_rides_by_county_chart = new google.visualization.BarChart(
              document.getElementById('total_rides_by_county_div'));

            total_rides_by_county_chart.draw(total_rides_by_county_data, total_rides_by_county_options);

/*** Carrier Data ***/

            var carrier_data = google.visualization.arrayToDataTable([
              ['Carrier', 'Total Rides'],
              ['Fulton Am', 4098],
              ['MARTA', 6932],
              ['Private Med', 3245],
              ['DHS', 2576],
              ['Cobb EMS', 1589]
            ]);

            var carrier_options = {
              title: 'January 2015'
            };

            var carrier_chart = new google.visualization.PieChart(document.getElementById('carrier_chart'));

            carrier_chart.draw(carrier_data, carrier_options);

// *** Cost Per Trip Mile

            var cost_per_tripmile_data = google.visualization.arrayToDataTable([
              ['Year', 'Jan', 'Feb', 'Mar'],
              ['MARTA', 1342, 1450, 1215],
              ['DHS', 4200, 4143, 3945],
              ['Private Med', 3065, 3187, 2978],
              ['Fulton AM', 1030, 1090, 976]
            ]);

            var cost_per_tripmile_options = {
              chart: {
                subtitle: 'January - March 2015',
              },
              bars: 'horizontal' // Required for Material Bar Charts.
            };

            var cost_per_tripmile_chart = new google.charts.Bar(document.getElementById('cost_per_tripmile_div'));

            cost_per_tripmile_chart.draw(cost_per_tripmile_data, cost_per_tripmile_options);

  // ***
            var cost_per_ride_data = new google.visualization.DataTable();
            cost_per_ride_data.addColumn('string', 'Provider');
            cost_per_ride_data.addColumn('number', 'Rides');
            cost_per_ride_data.addColumn('string', 'Cost per Ride');
            cost_per_ride_data.addRows([
                ['MARTA',  6392, '$15.40'],
                ['DHS',   2576, '$12.50'],
                ['Private Med', 3245, '$13.25'],
                ['Fulton AM',   4098,  '$10.97'],
                ['Cobb EMS',   1589,  '$11.90']
              ]);

            var cost_per_ride_table = new google.visualization.Table(document.getElementById('cost_per_ride_div'));

            cost_per_ride_table.draw(cost_per_ride_data, {showRowNumber: true});

  }

</script>

</body>
</html>
