var mymap = L.map('maps', {
    center: [0.5477, 101.4479],
    zoom: 8,
    zoomControl: true 
});

// OpenStreetMap Layer
var osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

// Satellite Layer (Google Maps)
var satelliteLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.google.com/maps">Google</a>',
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

// CartoDB Positron Layer
var positronLayer = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    subdomains: 'abcd'
});

osmLayer.addTo(mymap);

var baseLayers = {
    "CartoDB Positron": positronLayer,
    "OpenStreetMap": osmLayer,
    "Satellite": satelliteLayer
};

L.control.layers(baseLayers).addTo(mymap);

var cityLayers = {
    "Pekanbaru": L.layerGroup(),
    "Dumai": L.layerGroup(),
    "Duri": L.layerGroup(),
    "Rengat": L.layerGroup(),
    "Taluk Kuantan": L.layerGroup()
};

var cityControl = L.control.layers(null, cityLayers, { collapsed: false });
cityControl.addTo(mymap);

var markersData = [
    { lat: 0.536053, lon: 101.450923, label: "PLN UP3 PEKANBARU", city: "Pekanbaru", address: "Jl. DR Setia Budhi No.57 Pekanbaru", photo: "/img/setiabudi1.jpg" },
    { lat: 0.516703, lon: 101.446156, label: "Kantor Gubernur Riau", city: "Pekanbaru", address: "Jl. Jend Sudirman No. 460 Jadirejo, Sukajadi, Pekanbaru", photo: "/img/gubernur1.jpg" },
    { lat: 0.503405, lon: 101.419843, label: "Transmart Pekanbaru A", city: "Pekanbaru", address: "Jl. Musyawarah No. 11, Labuh Baru Tim., Payung Sekaki, Pekanbaru", photo: "/img/transmarta1.jpg" },
    { lat: 0.502867, lon: 101.419909, label: "Transmart Pekanbaru B", city: "Pekanbaru", address: "Jl. Musyawarah No. 11, Labuh Baru Tim., Payung Sekaki, Pekanbaru", photo: "/img/transmartb1.jpg" },
    { lat: 0.498803, lon: 101.418184, label: "Mal SKA Pekanbaru", city: "Pekanbaru", address: "Complex Mal SKA, Jl. Soekarno Hatta, Delima, Pekanbaru", photo: "/img/malska1.jpg" },
    { lat: 0.477945, lon: 101.424392, label: "PLN ULP Kota Barat", city: "Pekanbaru", address: "Jl. Dirgantara Timur No. 59, Sidomulyo Tim., Marpoyan Damai, Pekanbaru", photo: "/img/kotabarat1.jpg" },
    { lat: 0.444128, lon: 101.445309, label: "PLN ULP Simpang Tiga", city: "Pekanbaru", address: "Jl. Kartama, Perhentian Marpoyan, Marpoyan Damai, Pekanbaru", photo: "/img/sptiga1.jpg" },
    { lat: 0.466717, lon: 101.454164, label: "Taman AeroSport", city: "Pekanbaru", address: "Jl. Kaharuddin Nst No. 169c, Perhentian Marpoyan, Pekanbaru", photo: "/img/aerosport1.jpg" },
    { lat: 0.473519, lon: 101.455171, label: "Hotel Prime Park", city: "Pekanbaru", address: "Jl. Jend Sudirman No. 3, Simpang Tiga, Pekanbaru", photo: "/img/primepark1.jpg" },
    { lat: 0.483922, lon: 101.453902, label: "Wuling Arista Pekanbaru", city: "Pekanbaru", address: "Jl. Jend Sudirman No. 228, Tangkerang Tengah, Marpoyan Damai, Pekanbaru", photo: "/img/wuling1.jpg" },
    { lat: 0.463848, lon: 101.378922, label: "PLN ULP PANAM", city: "Pekanbaru", address: "Jl. HR Soebrantas No.12, Simpang Baru, Tampan, Pekanbaru", photo: "" },
    { lat: 0.494379, lon: 101.496552, label: "Agung Toyota Harapan Raya", city: "Pekanbaru", address: "Jl. Imam Munandar, Tangkerang Tim., Tenayan Raya, Pekanbaru", photo: "" },
    { lat: 0.501970, lon: 101.410709, label: "PLN UID Riau & Kepri", city: "Pekanbaru", address: "Jl. Tambusai Ujung Gg. Musyawarah, Labuh Baru Barat, Payung Sekaki, Pekanbaru", photo: "/img/nangka1.jpg" },
    { lat: 0.464220, lon: 101.391940, label: "Hyundai Panam", city: "Pekanbaru", address: "Jl. HR Soebrantas, Simpang Baru, Tampan, Pekanbaru", photo: "/img/hyundai1.jpg" },
    { lat: 0.411454, lon: 101.047300, label: "Rest Area KM 36 A Pekanbaru - Bangkinang", city: "Pekanbaru", address: "Jl. Tol Pekanbaru - Bangkinang KM 36 A, Muara Jalai, Bangkinang, Kampar, Riau", photo: "/img/pkubkn1.jpg" },
    { lat: 0.936552, lon: 101.230508, label: "Rest Area KM 45 A Pekanbaru - Dumai", city: "Dumai", address: "Jl. Tol Pekanbaru - Dumai KM 45 A, Kandis, Siak, Riau", photo: "/img/pkudmi1.jpg" },
    { lat: 1.669763, lon: 101.447486, label: "PLN UP3 Dumai", city: "Dumai", address: "Jl. Jend Sudirman No. 185b, Bintan, Dumai, Riau", photo: "/img/dumai1.jpg" },
    { lat: 1.278672, lon: 101.182016, label: "PLN ULP Duri", city: "Duri", address: "Jl. Hangtuah, Air Jamban, Mandau, Bengkalis, Riau", photo: "/img/duri1.jpg" },
    { lat: -0.391777, lon: 102.436557, label: "PLN UP3 Rengat", city: "Rengat", address: "Jl. Lintas Timur, Desa Sungai Dawu, Rengat Barat, Indragiri Hulu, Riau", photo: "/img/rengat1.jpg" },
    { lat: -0.531555, lon: 101.570446, label: "PLN ULP Taluk Kuantan", city: "Taluk Kuantan", address: "Ps. Taluk, Kuantan Tengah, Kuantan Singingi, Riau", photo: "/img/talukkuantan1.jpg" }
];

var searchLayer = L.layerGroup().addTo(mymap);

markersData.forEach(data => {
    var marker = L.marker([data.lat, data.lon]).bindPopup(`
        <div class="card" style="width: 18rem;">
            <img src="${data.photo}" class="card-img-top" alt="photo">
            <div class="card-body">
                <h5 class="card-title">${data.label}</h5>
                <p class="card-text"><strong>Alamat:</strong> ${data.address}</p>
            </div>
        </div>
    `);
    
    cityLayers[data.city].addLayer(marker);
    
    searchLayer.addLayer(marker);
});

var searchControl = new L.Control.Search({
    layer: searchLayer, 
    propertyName: 'label', 
    moveToLocation: function(latlng, title, map) {
        map.setView(latlng, 15);
        L.marker(latlng).addTo(map).bindPopup(title).openPopup();
    },
    marker: L.marker([0, 0]), 
    autoType: false,
    minLength: 2 
});
searchControl.addTo(mymap);

Object.values(cityLayers).forEach(layer => layer.addTo(mymap));

var riauGeoJSON = "/riau.geojson";

fetch(riauGeoJSON)
    .then(response => response.json())
    .then(data => {
        L.geoJSON(data, {
            pointToLayer: function (feature, latlng) {
                return null; 
            },
            style: function (feature) {
                return {
                    color: "blue",
                    fillColor: "lightblue",
                    weight: 2,
                    opacity: 0.3
                };
            }
        }).addTo(mymap);
    })
    .catch(error => console.error('Error loading GeoJSON:', error));