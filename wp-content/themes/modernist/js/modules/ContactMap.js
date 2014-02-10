ContactMap = (function() {
	var setup = function(){
        var myLatlng = new google.maps.LatLng(51.537333, -0.487341),
			mapOptions = {
          		center: myLatlng,
          		zoom: 17,
          		mapMaker: true
        	},
        	map = new google.maps.Map(
        		document.getElementById("map-canvas"),
            	mapOptions
            ),
            marker = new google.maps.Marker({
			    position: myLatlng,
			    map: map,
			    title: 'Hello World!'
			});
  	},
  	init = function() {
  		google.maps.event.addDomListener(window, 'load', setup());
  	};

	return {
		init: init
	};
}());