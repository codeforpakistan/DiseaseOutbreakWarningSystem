<html>
 <head>
 <script type="text/javascript"
             src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>

 <script type="text/javascript">
 google.setOnLoadCallback(drawChart);
 function drawChart() {
   var data = google.visualization.arrayToDataTable([
     ['Day', 'Dengue' ,'Malaria'],
     
     [ 1,      5,0],
     [ 2,     4, 0],
     [ 3,      9, 1],
     [ 4,      6, 0],
	 [ 5,      5, 0],
     [ 6,      4, 1],
     [ 7,     11, 0],
     [ 8,      14, 0],
     [ 9,      16, 0],
	 [ 10,      19, 0]
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
  <div id='polynomial2_div' style='width: 250px; height: 240px; '></div>
 </body>
</html>