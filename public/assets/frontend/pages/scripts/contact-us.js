var ContactUs = function () {

    return {
        //main function to initiate the module
        init: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
	            lat: 14.541062092433394,
				lng: 121.01545441793826,
				zoom: 15,
			  });
			   var marker = map.addMarker({
		            lat: 14.541062092433394,
					lng: 121.01545441793826,
		            title: 'Teknolohiya Philippines',
		            infoWindow: {
		                content: "<b>Teknolohiya Philippines</b> 2399 Belarmino St. Bangkal<br>1233 Makati City, Metro Manila, RP"
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();