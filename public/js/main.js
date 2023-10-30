function getArticles() {
    $.get('/articles/list', {
    
    }, function(data){
        data.forEach(function(e){
            $template = $("#articles-tmpl").tmpl(e);
            $("#articles-list").append($template);
        });
    });
}

function getDestinations() {
    $.get('/destinations/list', {
    
    }, function(data){
        data.forEach(function(e){
        $template = $("#destinations-tmpl").tmpl(e);
            $("#destinations-list").append($template);
        });
    });
}

function getInterests(pathname) {
    $.post('/interests/list', {
        '_token': $('meta[name=csrf-token]').attr('content'),
        'pathname':pathname
    }, function(data){
    
    data.forEach(function(e){
        $template = $("#interests-tmpl").tmpl(e);
            $("#interests-list").append($template);
        });
    });
}

function loadMap() {
    var map = L.map("my-map").setView([36.1853895, 137.7609423], 6.5); // 36.1853895,137.7609423,6.5
    
    // Retina displays require different mat tiles quality
    var isRetina = L.Browser.retina;
    var baseUrl =`https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}.png?apiKey=${geoapifyKey}`;
    var retinaUrl =`https://maps.geoapify.com/v1/tile/osm-bright/{z}/{x}/{y}@2x.png?apiKey=${geoapifyKey}`;
    
    // Add map tiles layer. Set 20 as the maximal zoom and provide map data attribution.
     L.tileLayer(isRetina ? retinaUrl : baseUrl, {
        attribution: 'Powered by <a href="https://www.geoapify.com/" target="_blank">Geoapify</a> | © OpenStreetMap <a href="https://www.openstreetmap.org/copyright" target="_blank">contributors</a>',
         apiKey: geoapifyKey,
         maxZoom: 20,
         scaleControl: false,
        id: "osm-bright",
    }).addTo(map);
    
    map.on('click', onMapClick);
}
    
function onMapClick(e) {
    
    var lat = e.latlng.lat;
    var lon = e.latlng.lng;
    
    $.get(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${weatherMapKey}`, {

    },
    function(data) {
        var iconurl = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
        $('.weather-details-container, .weather-details').show();
        $('#wicon').attr('src', iconurl).show();
        $('#name').html(data.name);
        $('#weather').html(data.weather[0].main);
        $('#description').html(data.weather[0].description);
        $('#wind-deg').html(data.wind.deg);
        $('#wind-speed').html(data.wind.speed);
        $('#wind-gust').html(data.wind.gust);
    });
}
