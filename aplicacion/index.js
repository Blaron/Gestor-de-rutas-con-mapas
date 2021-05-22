var map = L.map('map');
map.setView(new L.latLng(37.34874394267787, -5.843562254121813),800);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

cogerPuntos();
async function cogerPuntos() {
    let sCalle;
    let oCalles = await fetch('localizaciones.php');

    if (oCalles.ok) { // if HTTP-status is 200-299
        // get the response body (the method explained below)
        let json = await oCalles.json();
        if (json == 0) {
            console.log("No hay calles");
        } else {

            for (var i = 0, max = 10; i < json.length; i++) {
                sCalle = (json[i]);

                let response = await fetch(`https://nominatim.openstreetmap.org/search.php?q=${sCalle}%2C+alcalá+de+guadaira%2C41500&format=jsonv2`);

                if (response.ok) { // if HTTP-status is 200-299
                    
                    let json = await response.json();
                    if (json == 0) {
                        alert("Calle incorrecta o no encontrada");
                    } else {
                        console.log(json[0].display_name);
                        console.log(json[0].lat, json[0].lon);
                        let addRuta = new L.latLng(json[0].lat, json[0].lon);
                        control.spliceWaypoints(1, 0, addRuta);
                    }
                } else {
                    console.log(response.status);
                }

            }

        }
    } else {
        console.log(oCalles.status);
    }


}

const control = L.Routing.control(L.extend(window.lrmConfig, {
    // Ponemos en español la busqueda
    language: 'es',
    formatter: new L.Routing.Formatter({
        language: 'es'
    }),
    waypoints: [
        L.latLng(37.34874394267787, -5.843562254121813),
        L.latLng(37.34874394267787, -5.843562254121813)
    ],
    router: L.Routing.mapbox('API KEY', {language: 'es'}),
    geocoder: L.Control.Geocoder.nominatim(),
    routeWhileDragging: true,
    reverseWaypoints: true,
    showAlternatives: true, // Solo quiero mostrar una ruta posible
    altLineOptions: {
        styles: [
            {color: 'black', opacity: 0.15, weight: 9},
            {color: 'white', opacity: 0.8, weight: 6},
            {color: 'blue', opacity: 0.5, weight: 2}
        ]
    }
})).addTo(map);

L.Routing.errorControl(control).addTo(map);

var myIcon = L.icon({
iconUrl: 'https://images-ext-1.discordapp.net/external/0M63KjhS3drtvhObkWjiFpPQEln3nN3HCsw-feUt1XY/https/raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
iconSize: [29, 44],
iconAnchor: [14, 44],
popupAnchor: [-3, -76],
shadowUrl: 'https://images-ext-2.discordapp.net/external/iimorV_5sW59KCt0gxRN_kQ1ebXCgzTQJ4zppW4FLhQ/https/cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
shadowSize: [68, 95],
shadowAnchor: [22, 94],

});
L.marker([37.34874394267787, -5.843562254121813], {icon: myIcon}).addTo(map).bindPopup("<center><h3>Centro de día</h3><span>Punto de Inicio y Llegada</span></center>").setZIndexOffset(1000);
