/*RENDER MAP*/
var mapBounds = L.latLngBounds([[-90, -180], [90, 180]]);

var mapRender = L.map('map-render', {
    center: [51.505, 10],
    zoom: 3,
    scrollWheelZoom: false,
    maxBounds: mapBounds,
    maxBoundsViscosity: 1.0,
});

var tileLayerURL = 'http://127.0.0.1:8000/' + mapName + '/{z}/{y}/{x}';

var tileLayer = L.tileLayer(tileLayerURL, {
    maxZoom: maxZoomLevel,
    minZoom: 3,
}).addTo(mapRender);

