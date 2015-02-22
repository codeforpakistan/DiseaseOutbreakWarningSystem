<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAdTTBU4QXZfeUQM51PBEN6jhZscCs5CTQ&sensor=false">
</script>

<script>
var center=new google.maps.LatLng(30.3894007, 69.3532207);
var lrh=new google.maps.LatLng(33.997502,71.486385);
var kth=new google.maps.LatLng(31.571701,74.315854);
/*var hmc=new google.maps.LatLng(33.992071,71.449973);
var cmh=new google.maps.LatLng(34.00313,71.54269);*/
function initialize()
{
var mapProp = {
  center:center,
  zoom:6,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);

 var marker=new google.maps.Marker({
  position:lrh,
  title: "Leady Reading Hospital",
  icon: "http://s11.postimg.org/d68xfyz5r/pin4.png"
  });
 
 var marker1=new google.maps.Marker({
  position:kth,
    title: "Khyber Teaching Hospital", 
  icon: "http://s11.postimg.org/d68xfyz5r/pin4.png"
  });
  
  /*var marker2=new google.maps.Marker({
  position:hmc,
    title: "Hayatabad Medical Complex", 
  icon: "http://s28.postimg.org/3r4axmwrd/pin.png"
  });
 var marker3=new google.maps.Marker({
  position:cmh,
    title: "CMH", 
  icon: "http://s28.postimg.org/3r4axmwrd/pin.png"
  });*/
  
  
       var html = '<iframe width=300px height=260px  src="index6.php"></iframe>';
    infowindow1 = new google.maps.InfoWindow({
     content: html
    });
	
       var html2 = '<iframe width=300px height=260px  src="index16.php"></iframe>';
    infowindow2 = new google.maps.InfoWindow({
     content: html2
    });
      /* var html3 = "<table>" +
                 "<tr><td>Dengue:</td> <td>&nbsp;&nbsp;&nbsp; <?php
				  include('database.php');	
$insert_posts = "SELECT SUM( no_of_cases ) as sum2 FROM  `reports` WHERE hosp_id =  'HMC' AND disease_id =  'Dengue'";
$run_posts=mysql_query($insert_posts);
$value=mysql_fetch_assoc($run_posts);
echo $value['sum2'];
				  ?> </td> </tr>" +
                 "<tr><td>Malaria:</td> <td>&nbsp;&nbsp;&nbsp;<?php
				  include('database.php');	
$insert_posts = "SELECT SUM( no_of_cases ) as sum2 FROM  `reports` WHERE hosp_id =  'HMC' AND disease_id =  'Malaria'";
$run_posts=mysql_query($insert_posts);
$value=mysql_fetch_assoc($run_posts);
echo $value['sum2'];
				  ?> </td> </tr>" +
                 "<tr><td>Typhoid:</td> <td>&nbsp;&nbsp;&nbsp;<?php
				  include('database.php');	
$insert_posts = "SELECT SUM( no_of_cases ) as sum2 FROM  `reports` WHERE hosp_id =  'HMC' AND disease_id =  'Typhoid'";
$run_posts=mysql_query($insert_posts);
$value=mysql_fetch_assoc($run_posts);
echo $value['sum2'];
				  ?> </td></tr>";
    infowindow3 = new google.maps.InfoWindow({
     content: html3
    });
       var html4 = "<table>" +
                 "<tr><td>Dengue:</td> <td>&nbsp;&nbsp;&nbsp; <?php
				  include('database.php');	
$insert_posts = "SELECT SUM( no_of_cases ) as sum2 FROM  `reports` WHERE hosp_id =  'CMH' AND disease_id =  'Dengue'";
$run_posts=mysql_query($insert_posts);
$value=mysql_fetch_assoc($run_posts);
echo $value['sum2'];
				  ?> </td> </tr>" +
                 "<tr><td>Malaria:</td> <td>&nbsp;&nbsp;&nbsp;<?php
				  include('database.php');	
$insert_posts = "SELECT SUM( no_of_cases ) as sum2 FROM  `reports` WHERE hosp_id =  'CMH' AND disease_id =  'Malaria'";
$run_posts=mysql_query($insert_posts);
$value=mysql_fetch_assoc($run_posts);
echo $value['sum2'];
				  ?> </td> </tr>" +
                 "<tr><td>Typhoid:</td> <td>&nbsp;&nbsp;&nbsp;<?php
				  include('database.php');	
$insert_posts = "SELECT SUM( no_of_cases ) as sum2 FROM  `reports` WHERE hosp_id =  'CMH' AND disease_id =  'Typhoid'";
$run_posts=mysql_query($insert_posts);
$value=mysql_fetch_assoc($run_posts);
echo $value['sum2'];
				  ?> </td></tr>";
    infowindow4 = new google.maps.InfoWindow({
     content: html4
    });*/
  
 
google.maps.event.addListener(marker, 'click', function() {
  infowindow1.open(map,marker);
  });
google.maps.event.addListener(marker1, 'click', function() {
  infowindow2.open(map,marker1);
  });
/*google.maps.event.addListener(marker2, 'click', function() {
  infowindow3.open(map,marker2);
  });
google.maps.event.addListener(marker3, 'click', function() {
  infowindow4.open(map,marker3);
  });*/
  
  

marker.setMap(map);
marker1.setMap(map);
/*marker2.setMap(map);
marker3.setMap(map);*/
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>

<body>
<center><div id="googleMap" style="width:100%;height:640px;" ></div></center>
</body>
</html>