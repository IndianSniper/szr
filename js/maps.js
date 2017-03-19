// the calback function for Google maps
function initMap() {

    // array containing latitude and longitude
    var latNLngObj = {};

    latNLngObj = {
        Agartala: { lat: 23.8315, lng: 91.2868, state: 'Tripura' },
        Agra: { lat: 27.1767, lng: 78.0081, state: 'Uttar Pradesh' },
        Ahmedabad: { lat: 23.0225, lng: 72.5714, state: 'Gujrat' },
        Akbarpur: { lat: 26.4407, lng: 82.5538, state: 'Uttar Pradesh' },
        Aluva: { lat: 10.1076, lng: 76.3457, state: 'Kerala' },
        Andheri: { lat: 19.1363, lng: 72.8277, state: 'Mumbai, Maharashtra' },
        Asansol: { lat: 23.6739, lng: 86.9524, state: 'West Bengal' },
        Bagdogra: { lat: 26.6994, lng: 88.3143, state: 'West Bengal' },
        Bandra: { lat: 19.0607, lng: 72.8362, state: 'Mumbai, Maharashtra' },
        Bijapur: { lat: 16.8302, lng: 75.71, state: 'Karnataka' },
        Borivali: { lat: 19.2372, lng: 72.8441, state: 'Mumbai, Maharashtra' },
        Chandrapur: { lat: 20.2095, lng: 79.5603, state: 'Maharashtra' },
        Cuttack: { lat: 20.4625, lng: 85.883, state: 'Odisha' },
        Dibrugarh: { lat: 27.4728, lng: 94.912, state: 'Assam' },
        'Elphinstone Road': { lat: 19.0075, lng: 72.8359, state: 'Mumbai, Maharashtra' },
        Ghatkopar: { lat: 19.079, lng: 72.908, state: 'Mumbai, Maharashtra' },
        Goregaon: { lat: 19.1551, lng: 72.8679, state: 'Mumbai, Maharashtra' },
        Guntur: { lat: 16.3067, lng: 80.4365, state: 'Andhra Pradesh' },
        Gurgaon: { lat: 28.4595, lng: 77.0266, state: 'Haryana' },
        Guwahati: { lat: 26.1445, lng: 91.7362, state: 'Assam' },
        Haridwar: { lat: 29.9457, lng: 78.1642, state: 'Uttarakhand' },
        Hazaribagh: { lat: 23.9966, lng: 85.3691, state: 'Jharkhand' },
        Jamkhambalia: { lat: 22.2053, lng: 69.6588, state: 'Gujrat' },
        Janakpuri: { lat: 28.6219, lng: 77.0878, state: 'Delhi' },
        Jaripatka: { lat: 21.1821, lng: 79.086, state: 'Nagpur, Maharashtra' },
        Jogeshwari: { lat: 19.1405, lng: 72.8422, state: 'Mumbai, Maharashtra' },
        Kannauj: { lat: 27.0514, lng: 79.9137, state: 'Uttar Pradesh' },
        Karimnagar: { lat: 18.4386, lng: 79.1288, state: 'Telangana' },
        Karnal: { lat: 29.6857, lng: 76.9905, state: 'NCR, Haryana' },
        Khar: { lat: 19.0717, lng: 72.8341, state: 'Mumbai, Maharashtra' },
        Khurja: { lat: 28.2514, lng: 77.8539, state: 'Uttar Pradesh' },
        Kolhapur: { lat: 16.705, lng: 74.2433, state: 'Maharashtra' },
        Koperkhairane: { lat: 19.1028, lng: 73.009, state: 'Navi Mumbai, Maharashtra' },
        Kota: { lat: 25.2138, lng: 75.8648, state: 'Rajasthan' },
        Kukatpally: { lat: 17.4948, lng: 78.3996, state: 'Telangana' },
        Mahim: { lat: 19.0352, lng: 72.8404, state: 'Mumbai, Maharashtra' },
        Mandigobingarh: { lat: 30.6637, lng: 76.3, state: 'Punjab' },
        Midnapur: { lat: 22.4309, lng: 87.3215, state: 'West Bengal' },
        'Mira Road': { lat: 19.2871, lng: 72.8688, state: 'Maharashtra' },
        Mumbai: { lat: 19.076, lng: 72.8777, state: 'Maharashtra' },
        Murbad: { lat: 19.2612, lng: 73.3889, state: 'Maharashtra' },
        Nagpur: { lat: 21.1458, lng: 79.0882, state: 'Maharashtra' },
        Nashik: { lat: 19.9975, lng: 73.7898, state: 'Maharashtra' },
        Pathanamthitta: { lat: 9.2648, lng: 76.787, state: 'Kerala' },
        Puducherry: { lat: 11.9139, lng: 79.8145, state: 'Puducherry' },
        Pune: { lat: 18.5204, lng: 73.8567, state: 'Maharashtra' },
        Raichur: { lat: 16.212, lng: 77.3439, state: 'Karnataka' },
        Rajkot: { lat: 22.3039, lng: 70.8022, state: 'Gujarat' },
        Sangli: { lat: 16.8524, lng: 74.5815, state: 'Maharashtra' },
        Santacruz: { lat: 19.0844, lng: 72.836, state: 'Maharashtra' },
        Satara: { lat: 17.6805, lng: 74.0183, state: 'Maharashtra' },
        Sitapur: { lat: 27.5325, lng: 80.8987, state: 'Uttar Pradesh' },
        Srinagar: { lat: 34.0837, lng: 74.7973, state: 'Jammu and Kashmir' },
        Sultanpur: { lat: 26.2648, lng: 82.0727, state: 'Uttar Pradesh' },
        Surat: { lat: 21.1702, lng: 72.8311, state: 'Gujrat' },
        Tardeo: { lat: 18.9681, lng: 72.8122, state: 'Maharashtra' },
        Thane: { lat: 19.2183, lng: 72.9781, state: 'Maharashtra' },
        Trivandrum: { lat: 8.5241, lng: 76.9366, state: 'Kerala' },
        Tumkur: { lat: 13.3392, lng: 77.114, state: 'Karnataka' },
        Vapi: { lat: 20.3893, lng: 72.9106, state: 'Gujrat' },
        Vashi: { lat: 19.0771, lng: 72.999, state: 'Maharashtra' },
        Vellore: { lat: 12.9165, lng: 79.1325, state: 'Tamil Nadu' },
        'Yari road': { lat: 19.1398, lng: 72.8093, state: 'Maharashtra' },
    };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: latNLngObj.Nagpur,
    });

    var infowindow = new google.maps.InfoWindow();

    var location = [];

    // adding markers
    var locationIndex = 0;
    for (var city in latNLngObj) {
        var marker = new google.maps.Marker({
            position: latNLngObj[city],
            map: map,
            title: city
        });

        location[locationIndex] = city + ', ' + latNLngObj[city].state;

        marker.addListener('click', (function (marker, i) {
            return function () {
                infowindow.setContent('<b>' + String(location[i]) + '</b>');
                infowindow.open(map, marker);
            }
        })(marker, locationIndex));
        locationIndex += 1;
    }

}
