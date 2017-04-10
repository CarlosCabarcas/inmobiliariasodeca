/*var map
var myLatLng
  function initMap() {

    geolocationInit();

    function geolocationInit(){
      if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(success, fail);
      }else {
        alert("navegador no apto");
      }
    }

    function success(position){
      console.log(position);
      var latval=position.coords.latitude;
      var lngval=position.coords.longitude;

      myLatLng = new google.maps.LatLng(latval, lngval);
      createMap(myLatLng);
      nearbySearch(myLatLng, type);
    }

    function fail(){
      alert("error");
    }

    function createMap(myLatLng){
        map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 13
      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map
      });
    }

    //marcador
    function createMarker(latlng, icn, name){
      var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: icn,
        title: name
      });
    }

    function nearbySearch(myLatLng, type){
      var request = {
        location: myLatLng,
        radius: '2500',
        types: [type]
      };

      service = new google.maps.places.PlacesService(map);
      service.nearbySearch(request, callback);

      function callback(results, status) {

        //console.log(results);
      if (status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
          var place = results[i];
          console.log(place);
          latlng = place.geometry.location;
          icn = place.icn;
          name = place.name;

          createMarker(latlng, icn);
        }
      }
    }
  }
}
