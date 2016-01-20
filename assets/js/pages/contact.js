(function ($) {

    function init() {
        var myLatlng = new google.maps.LatLng(-34.9226792,138.589222);
        // If document (your website) is wider than 767px, isDraggable = true, else isDraggable = false
        var isDraggable = $(document).width() > 767 ? true : false;
        var myOptions = {
            zoom: 14,
            //center: myMap,
            mapTypeControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: isDraggable,
            scrollwheel: false,

        };
        var contentString = '<div id="content">' +
            '</div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var map = new google.maps.Map(document.getElementById('map'), myOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Techknowledge Insitute',
            infowindow: infowindow
        });
        var contentString = '<div id="content">' +
            '<div class="text-center">' +
            '<h1 id="firstHeading" class="firstHeading">Techknowledge Insitute</h1>' +
            '<div class="g-address">{address}</div>' +
            '<div class="g-phone-num">{input phone number}</div>' +
            '</div>' +
            '</div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        // infowindow.open(map, marker);
        map.setCenter({
            lat: -34.9226792,
            lng: 138.589222
        });


        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
    }

    google.maps.event.addDomListener(window, 'load', init);

    //END GOOGLE MAP
})(jQuery);
