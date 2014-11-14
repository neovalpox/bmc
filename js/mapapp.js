var mapdata = { destination: new google.maps.LatLng(59.3327881, 18.064488100000062) };

//Home page
$('#page-home').live("pageinit", function() {
 $('#map_square').gmap(
     { 'center' : mapdata.destination,
       'zoom' : 12,
       'mapTypeControl' : false,
       'navigationControl' : false,
       'streetViewControl' : false
     })
     .bind('init', function(evt, map) {
         $('#map_square').gmap('addMarker',
             { 'position': map.getCenter(),
               'animation' : google.maps.Animation.DROP
});                                                                                                                                                                                                               
     });
 $('#map_square').click( function() {
     $.mobile.changePage($('#page-map'), {});
 });
});
