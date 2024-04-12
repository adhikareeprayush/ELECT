<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
        #map {
            height: 400px;
            border-radius: 20px;
            width: 80%;
        }
    </style>

<div id="map"></div>

<!-- Leaflet JavaScript -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

<script>
    // Wait for the DOM to be fully loaded before initializing the map
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize the map
        var map = L.map('map').setView([27.6949663991989, 85.37251786596472], 13);

        // Add the OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Define a marker with a popup
        var marker = L.marker([27.6949663991989, 85.37251786596472])
            .addTo(map)
            .bindPopup('One Forty')
            .openPopup();

        // Add a click event listener to the marker to display coordinates and details
        marker.on('click', function (e) {
            var coordinates = e.latlng.lat.toFixed(6) + ', ' + e.latlng.lng.toFixed(6);
            marker.bindPopup('<b>Coordinates:</b> ' + coordinates + '<br> <b>Place:</b> One Forty').openPopup();
        });

        // Fit the bounds to the marker
        map.fitBounds(marker.getBounds());
    });
</script>