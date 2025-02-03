

<!DOCTYPE html>
<html>
<head>
    <title> Map</title>
   
</head>
<body>


<section class="checkout-wrapper section">
        <div class="container">
        <div id="map" style="height: 400px; width: 100%;"></div>

        </div>
    </section>
    


    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Delivery
            const location = {
                lat: Number("{{ $delivery->lat }}"),
                lng: Number("{{ $delivery->lng }}")
            };
            // The map, centered at Uluru
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: location,
            });
            // The marker, positioned at Uluru
            marker = new google.maps.Marker({
                position: location,
                map: map,
            });
        }

        window.initMap = initMap;
    </script>
  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7CY-m-BF900TKSXTOHjmwz7aQLLUPHDQ&callback=initMap&v=weekly" async defer></script>


    </body>
</html>

  
    


