if (typeof(System) === "undefined") {
    System = {};
};

System.MainPage = function MainPage(page) {

    this.GetArticles = (callback) => {
        Request("/articles/list",
            {},
            "GET",
            function(result) {
                callback(result.data);
            }
        )
    }

    this.GetDestinations = (callback) => {
        Request("/destinations/list",
            {},
            "GET",
            function(result) {
                callback(result.data);
            }
        )
    }

    this.GetInterests = (page, callback) => {
        var data = {
                        '_token': token,
                        'page': page
                    }

        Request("/interests/list",
            data,
            "POST",
            function(result) {
                callback(result.data);
            }
        )
    }
}

var module;
var page;
var token;

$(document).ready(function() {
    module = new System.MainPage();
    page = window.location.pathname.replace('/', '');
    token = $('meta[name=csrf-token]').attr('content');

    getArticles();

    if (page == "")
        loadMap();

    if (page== "destinations")
        getDestinations();

    if (jQuery.inArray(page, ["", "destinations"]) == -1)
        getInterests(page);
})

$(window).on('load', function() {
    
});

function getArticles() {
    module.GetArticles(function(res){
        res.data.forEach(function(e){
            $template = $("#articles-tmpl").tmpl(e);
            $("#articles-list").append($template);
        });
    });
}

function getDestinations() {
    module.GetDestinations(function(res){
        res.data.forEach(function(e){
            $template = $("#destinations-tmpl").tmpl(e);
            $("#destinations-list").append($template);
        });
    });
}

function getInterests(page) {

    module.GetInterests(page, function(res){
        res.data.forEach(function(e){
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