function initMap() {
	var mapCenter = {lat: 45.9590269, lng: 12.3180639};
	var map = new google.maps.Map(document.getElementById('js-map'), {zoom: 15, center: mapCenter});
	var marker = new google.maps.Marker({position: mapCenter, map: map});
}