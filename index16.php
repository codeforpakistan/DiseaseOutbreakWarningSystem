<html>
 <head>
 <script type="text/javascript"
             src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>

 <script type="text/javascript">
 google.setOnLoadCallback(drawChart);
 function drawChart() {
   var data = google.visualization.arrayToDataTable([
     ['Day', 'Dengue' ,'Malaria'],
     
     [ 1, 0,      6],
     [ 2,  0,    5],
     [ 3,   1,    9],
     [ 4,   0,    7],
	 [ 5,  1,    6],
     [ 6,  0,    5],
     [ 7,   0,  12],
     [ 8,   2,   15],
     [ 9,   0,   17],
	 [ 10,  0,    19]
   ]);

   var options = {
     
    // legend: 'none',
	hAxis: {title: "Date", minValue: 1, maxValue: 12},
          vAxis: {title: "Cases", minValue: -3, maxValue: 20},
	 
     crosshair: { trigger: 'both', orientation: 'both' },
     trendlines: {
       0: {
         type: 'polynomial',
         degree: 2,
         visibleInLegend: true,
       }
	   , 1: {
         type: 'polynomial',
         degree: 2,
         visibleInLegend: true,
       }
     }
   };

   var chart = new google.visualization.ScatterChart(document.getElementById('polynomial2_div'));
   chart.draw(data, options);
 }
 </script>
 </head>
 <body>
  <div id='polynomial2_div' style='width: 270px; height: 240px; '></div>
 </body>
</html>