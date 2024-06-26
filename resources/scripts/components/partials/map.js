import L from 'leaflet';
import icon from '../../../images/icons/MapPinLine.svg'; // Ensure the path to your icon is correct

export async function initMap() {
    const getData = async (url) => {
        try {
            const response = await fetch(url);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            return data;
        } catch (error) {
            console.error("Could not fetch data:", error);
            return null;
        }
    };

    const map = L.map('mapid', {
        maxBounds: [
            [49.0, 14.1],
            [54.8, 24.1]
        ],
        minZoom: 6,
        maxBoundsViscosity: 1.0,
        scrollWheelZoom: false,
    }).setView([53.7097219, 17.4870662], 13);

    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        attribution: '',
        subdomains: 'abcd',
    }).addTo(map);

    const URL = '../wp-json/wp/v2/pages/13';

    const pageData = await getData(URL);
    const customIcon = L.icon({
        iconUrl: icon,
        iconSize: [40, 40],
        iconAnchor: [20, 40],
        popupAnchor: [0, -40]
    });

    let latLngs = []; // Array to store the latitude and longitude of each marker
    let firstMarker = null; // Variable to store the first marker

    if (pageData && pageData.acf && pageData.acf["attractions-map"] && pageData.acf["attractions-map"].attractions) {
        pageData.acf["attractions-map"].attractions.forEach((attraction, index) => {
            const [lat, lng] = attraction.geo.split(',').map(Number);
            const marker = L.marker([lat, lng], {icon: customIcon}).addTo(map);

            marker.bindPopup(`<div class="my-custom-popup"><div class="inside"><p class="text-primary-500 font-bold text-B16">${attraction.name}</p><p class="text-B12">${attraction.undername}</p></div></div>`, {maxWidth: 200});

            latLngs.push([lat, lng]); // Add the marker's position to the array

            if (index === 0) { // Check if it's the first marker
                firstMarker = marker; // Store the first marker
            }
        });

        if (latLngs.length > 0) {
            const bounds = L.latLngBounds(latLngs);
            map.fitBounds(bounds, {
                padding: [50, 50], // Optional: Adjust padding
                maxZoom: 15 // Optional: Adjust max zoom level
            });

            if (firstMarker) {
                firstMarker.openPopup(); // Open the popup of the first marker
            }
        }
    }
}
