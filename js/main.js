if('geolocation' in navigator){
	/*navigator.geolocation.getCurrentPosition(function(position){
		console.log(position)
	},function(error){
		console.log(error)
	})*/

	 var lat;
	 var long;

	const watcher = navigator.geolocation.watchPosition(function(position){
		console.log(position)
		latitude = 5;
		lat = latitude;


	}, function(error){
		console.log(error)
	}, {enableHighAccuracy: true, maximumAge: 30000, timeout: 30000})
	
}else{
	alert('ops, não foi possivel pegar a localização')
}

alert(lat)

