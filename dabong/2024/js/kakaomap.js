function MapMarker(ele, latitude, longitude, content = '<p>다봉산업주식회사</p>') {
  // Map container element
  this.mapContainer = document.getElementById(ele);
  this.latitude = latitude;
  this.longitude = longitude;
  this.content = content;



  // Map options
  this.mapOption = {
      center: new kakao.maps.LatLng(this.latitude, this.longitude),
      level: 5
  };

  // Create a new map
  this.map = new kakao.maps.Map(this.mapContainer, this.mapOption);
  this.position = new kakao.maps.LatLng(this.latitude, this.longitude);

//   // Create a marker
  this.marker = new kakao.maps.Marker({
      position: this.position,
      map: this.map
  });

  // Add the marker to the map
//   this.marker.setMap(this.map);

  // Create an InfoWindow
  this.overlay = new kakao.maps.CustomOverlay({
    content: this.content,
    map: this.map,
    position: this.marker.getPosition()    
});

  // Add click event to marker to open InfoWindow
  kakao.maps.event.addListener(this.marker, 'click', () => {
      this.overlay.setMap(this.map);
  });

  this.closeOverlay = function() {
    this.overlay.setMap(null);     
};
document.addEventListener('click', (event) => {
    if (event.target.classList.contains('close')) {
        this.closeOverlay();
    }
});


  this.map.setZoomable(false); 

 

  
  
}