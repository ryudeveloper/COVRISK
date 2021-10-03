self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request).then(function(response) {
            return response || fetch(event.request);
            setInterval(function() {
                var url = "http://localhost:8765/users/update-geolocation";

                var xhr = new XMLHttpRequest();
                xhr.open("POST", url);

                xhr.setRequestHeader("Accept", "application/json");
                xhr.setRequestHeader("Content-Type", "application/json");

                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                        console.log(xhr.status);
                        console.log(xhr.responseText);
                    }
                };

                var data = `{
  "id": 78912,
  "Customer": "Jason Sweet",
  "Quantity": 1,
  "Price": 18.00
}`;

                xhr.send(data);

            }, 5000);
        })
    );
});