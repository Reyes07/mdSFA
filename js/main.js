$(function()){
	$("#geocomplete").geocomplete({
		map:".map_canvas",
		details:"form",
		types:["geocode","establishment"]
	}).bind("geocode:result",function(event,result){
		$address = $("#address").val();
		$lat = $("#lat").val();
		$lng = $("#lng").val();
		$.post(
			"insert.php", 
			{address : $address,lat : $lat, lng: $lng}
			)
	});
	$("#find").click(function(){
		$("#geocomplete").trigger("geocode");
	});
	$(".menu-icon").click(function(){
		$.post(
			"load.php",
			function(data){
				var loadHistory = JSON.parse(data);
				$(".tk-museo-sans").html("");
				for(var i=0; i < loadHistory.length;i++){
					//funcion encargada de listar los resultados de la consulta
					$(".tk-museo-sans").append('<li class="item" data-lng="'+loadHistory[i].lng+'" data-lat="'
						+loadHistory[i].lat+'" data-address="'+loadHistory[i].address+'">'
						+loadHistory[i].address+'</li><a data-lat="'+loadHistory[i].lat+' data-lng='
						+loadHistory[i].lng+' class="close></a>');
				}
			}
			);
	});
	$(".close").live("click"),function(){
		var lat = $(this).data("lat");
		var lng = $(this).data("lng");
		$(this).prev("li").remove();
		$(this).remove();
		$.post(
			"delete.php",
			{lat: $lat,lng: $lng } data, success)
	});
});