var map = L.map('mapid',{
    center: [-22.573794, 17.060685],
    zoom: 15
});

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var logo = L.icon({
    iconUrl: 'images/icons/icon-position-map.png'
});

var marker = L.marker([-22.573794, 17.060685], {icon: logo}).addTo(map);
