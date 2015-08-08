function putName(){
	var name = "Alexis";
	var poner = $("#name").html(name);
}

function printName(){
	var info = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
	var infoJson = JSON.stringify(info);
	var valor = {action : 'returnName', data:  'test'};
	$.ajax({
		url: '../server/server.php',
		type: 'POST',
		data: valor ,
		dataType: 'json',
		cache: false,
		success: function(other){
			var name="Alexis";
			var poner = $("#name").html(name);
			console.log(other['data']);
			console.log(other['action']);
			console.log(other['date']);
			console.log(other['info']);
		}
	})
}

printName();