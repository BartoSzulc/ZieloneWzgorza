import L from 'leaflet';

export function initMapContact() {
    const mapContact = L.map('mapContact', {
        // Define the geographical bounds for Poland (example values, adjust as needed)
        maxBounds: [
            [49.0, 14.1], // Southwest coord
            [54.8, 24.1]  // Northeast coordinates
        ],
        minZoom: 6, // Adjust this value as needed to prevent zooming out too far
        maxBoundsViscosity: 1.0, // Makes the bounds fully solid, preventing the user from dragging outside
        scrollWheelZoom: false,
    }).setView([53.7097219, 17.4870662], 13);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '',
        subdomains: 'abcd',
    }).addTo(mapContact);

    const customMarkerHtml = L.divIcon({
        className: 'custom-marker',
        html: '<div class="my-custom-popup"><div class="inside"><p class="text-primary-500 font-bold text-B16 mb-2">Zielone Wzgórza</p><p class="text-B12">Nieżywięć 145, 77-300 <br/> Nieżywięć</p></div></div>',
        iconSize: [190, 130],
    });
    // Create the marker
    const marker = L.marker([53.7097219, 17.4870662], { icon: customMarkerHtml }).addTo(mapContact);
    // Add click event listener to the marker
    marker.on('click', function(e) {
        // Set the map view to the marker's location with a higher zoom level
        mapContact.setView(e.latlng, 17); // You can adjust the zoom level to your preference
    });
}
