<?php

header('Content-type: application/json; charset=utf-8');

$respuesta = [
	[
		'id' => '3367ad35ff9',
		'nombre' => 'Carlos',
		'edad' => 19,
		'pais' => 'Ecuador',
		'correo' => 'celucio@espe.edu.ec'
	],
	[
		'id' => '3367ad35ft9',
		'nombre' => 'Luis',
		'edad' => 20,
		'pais' => 'Francia',
		'correo' => 'correo@correo.com'
	],
	[
		'id' => '34yhfusdft9',
		'nombre' => 'Selena',
		'edad' => 22,
		'pais' => 'Alemania',
		'correo' => 'serivas@correo.com'
	],
	[
		'id' => '1ty4n3c4uwu',
		'nombre' => 'Joan',
		'edad' => 22,
		'pais' => 'Australia',
		'correo' => 'jfcevallos@correo.com'
	]
];

echo json_encode($respuesta);
