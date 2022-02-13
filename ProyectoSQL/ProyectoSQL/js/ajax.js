var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){
	var peticion = new XMLHttpRequest();
	peticion.open('GET', 'php/usuarios.php');

	loader.classList.add('active');

	peticion.onload = function(){
		var datos = JSON.parse(peticion.responseText);
		datos.innerHTML = '';
		for(var i = 0; i < datos.length; i++){
			var elemento = document.createElement('tr');
			elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
			document.getElementById('muestra').appendChild(elemento);
		}
	
	}

	peticion.onreadystatechange = function(){
		if(peticion.readyState == 4 && peticion.status == 200){
			loader.classList.remove('active');
		}
	}


	peticion.send();

});

idSum = 0;
function funBoton(){
	res = document.querySelector('#muestra');
	idSum = idSum + 5;
    id = '3367ad35ff55'+idSum;
    nombre = document.getElementById("nombre").value;
    edad = document.getElementById("edad").value;
	correo = document.getElementById("correo").value;
    pais = document.getElementById("pais").value;

    res.innerHTML += `<tr>
                <td>${id}</td>  
                <td>${nombre}</td>
                <td>${edad}</td>
                <td>${pais}</td>
                <td>${correo}</td>
                </tr>`;

	console.log(res);
}
