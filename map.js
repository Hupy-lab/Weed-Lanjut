let mymap = L.map('mapid').setView([-7.0634452, 110.4606941], 15);

L.tileLayer(
  'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}',
  {
    attribution:
      'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox.streets',
    accessToken:
      'pk.eyJ1IjoiY2F0enkwMDciLCJhIjoiY2pudnp5bWV6MDBiYzNxbG56dnUzNnRzdSJ9.-YVCSx-qce3AGENOp1Z4NQ',
  },
).addTo(mymap);
let marker = L.marker([-7.0634452, 110.4606941]).addTo(mymap);
let circle = L.circle([-7.0634452, 110.4606941], {
  color: 'red',
  fillColor: '#f03',
  fillOpacity: 0.2,
  radius: 150,
}).addTo(mymap);
marker.bindPopup('KP2KKN Jawa Tengah');
