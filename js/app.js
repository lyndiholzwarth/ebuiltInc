$(document) .ready(function() {

      google.maps.event.addDomListener(window, 'load', drawMap);
 
});


function drawMap() {
	var myLatlng = new google.maps.LatLng(39.971274,-75.130922);
	var mapOptions = {
      center: myLatlng,
      zoom: 16,
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'EBuilt Inc'
  });
};