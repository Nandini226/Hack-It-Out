<html>

<script >
    mapboxgl.accessToken = 'pk.eyJ1IjoiYWtzaGl0Y2hhcHJvdCIsImEiOiJjazYwYzU1b2IwNjExM2xzNmtsbWxxNnJ3In0.OvuCCyqVi9T5PYORKfUz4w';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v10',
  center: [75.857727, 22.719568],//[-122.662323, 45.523751], // starting position
  zoom: 12
});
// set the bounds of the map
var bounds = [[70, 19], [80, 27]];
map.setMaxBounds(bounds);

// initialize the map canvas to interact with later
var canvas = map.getCanvasContainer();

// an arbitrary start will always be the same
// only the end or destination will change
var start = [75.857727, 22.719568];

// this is where the code for the next step will go

// create a function to make a directions request
function getRoute(end) 
{
  // make a directions request using driving profile
  // an arbitrary start will always be the same
  // only the end or destination will change
  var start = [75.857727, 22.719568];
  var url = 'https://api.mapbox.com/directions/v5/mapbox/driving/' + start[0] + ',' + start[1] + ';' + end[0] + ',' + end[1] + '?steps=true&geometries=geojson&access_token=' + mapboxgl.accessToken;

  // make an XHR request https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
  var req = new XMLHttpRequest();
  req.open('GET', url, true);
  req.onload = function() {
    var json = JSON.parse(req.response);
    var data = json.routes[0];
    var route = data.geometry.coordinates;
    var geojson = {
      type: 'Feature',
      properties: {},
      geometry: {
        type: 'LineString',
        coordinates: route
      }
    };
    // if the route already exists on the map, reset it using setData
    if (map.getSource('route')) {
      map.getSource('route').setData(geojson);
    } else { // otherwise, make a new request
      map.addLayer({
        id: 'route',
        type: 'line',
        source: {
          type: 'geojson',
          data: {
            type: 'Feature',
            properties: {},
            geometry: {
              type: 'LineString',
              coordinates: geojson
            }
          }
        },
        layout: {
          'line-join': 'round',
          'line-cap': 'round'
        },
        paint: {
          'line-color': '#3887be',
          'line-width': 5,
          'line-opacity': 0.75
        }
      });
    }
    // add turn instructions here at the end

    // get the sidebar and add the instructions
    var instructions = document.getElementById('instructions');
    var steps = data.legs[0].steps;

    var tripInstructions = [];
    for (var i = 0; i < steps.length; i++) {
    tripInstructions.push('<br><li>' + steps[i].maneuver.instruction) + '</li>';
  instructions.innerHTML = '<br>Trip duration: ' + Math.floor(data.duration / 60) + ' min 🚴 ' + tripInstructions;
    }
  };
  req.send();
}

map.on('load', function() {
  // make an initial directions request that
  // starts and ends at the same location
  getRoute(start);

  // Add starting point to the map
  map.addLayer({
    id: 'point',
    type: 'circle',
    source: {
      type: 'geojson',
      data: {
        type: 'FeatureCollection',
        features: [{
          type: 'Feature',
          properties: {},
          geometry: {
            type: 'Point',
            coordinates: start
          }
        }
        ]
      }
    },
    paint: {
      'circle-radius': 10,
      'circle-color': '#3887be'
    }
  });
  // this is where the code from the next step will go
 

  var coords =[
    <?php 
$servername="localhost";
$username="root";
$password="";
$database="product1";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());

}
$sql="SELECT longitude FROM `item5` WHERE S_no=1;";
$result=mysqli_query($conn,$sql);
//records returned
$num= mysqli_num_rows($result);

//display
if($num>0){
while($row=mysqli_fetch_assoc($result)){
    echo $row["longitude"];
}
}
  ?>,
  <?php 
$servername="localhost";
$username="root";
$password="";
$database="product1";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());

}
$sql="SELECT lattitude FROM `item5` WHERE S_no=1;";
$result=mysqli_query($conn,$sql);
//records returned
$num= mysqli_num_rows($result);

//display
if($num>0){
while($row=mysqli_fetch_assoc($result)){
    echo $row["lattitude"];
}
}
  ?>
    
  ];
  var end = {
    type: 'FeatureCollection',
    features: [{
      type: 'Feature',
      properties: {},
      geometry: {
        type: 'Point',
        coordinates: coords
      }
    }
    ]
  };
  if (map.getLayer('end')) {
    map.getSource('end').setData(end);
  } else {
    map.addLayer({
      id: 'end',
      type: 'circle',
      source: {
        type: 'geojson',
        data: {
          type: 'FeatureCollection',
          features: [{
            type: 'Feature',
            properties: {},
            geometry: {
              type: 'Point',
              coordinates: coords
            }
          }]
        }
      },
      paint: {
        'circle-radius': 10,
        'circle-color': '#f30'
      }
    });
  }
  getRoute(coords);

});

</script>
</html>