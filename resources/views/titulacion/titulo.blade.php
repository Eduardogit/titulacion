
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	
</head>
<body>
	
<style>
	h2{
		text-align: center;
		margin-bottom: 20px;
		font-size: 38px;
	}
	
	#nombre, p{
		margin-bottom: 20px;		
		font-size: 38px;
		text-align: center;
	}
	.texto > p{
		text-align: center;
		font-size: 20px;
	}
	.footer{
		font-size: 20px;		
	}
</style>
	<div class="text-center">
		<h2 class="">El Tecnológico de Estudios Superiores de Chalco</h2>
		<h2 class="">otorga a </h2>
		<p id="nombre" class="">{{$datos[0]->Nombre ." ". $datos[0]->Paterno ." ". $datos[0]->Materno }}</p>
		<h2>el Título de</h2>
		<p>
		@foreach(explode(' ', $carrera[0]->CarreraNombre) as $info) 
			@if ($datos[0]->Sexo == 0 and $info == 'INGENIERIA')
			 	INGENIERA
			 @elseif($info == 'INGENIERIA')
			 	INGENIERO
			 @else
				{{$info}}
			 @endif 
		@endforeach
		</p>
		<div class="col-md-offset-2 texto">
			<p >En atencion a que demostro haber realizados los estudios conforme a los planes y</p>
			<p >programas autorizados por la Secretaria de Educacion Publica y haber sido 
			@if ($datos[0]->Sexo == 0)
			 	aprobada
			 @else
			 	aprobado
			 @endif </p>
			<p >en el examen profesional que sustento el dia [dia] segun consta en</p>
			<p >los archivos de este Tecnológico.</p>
		</div >
			<p class="text-center footer" > Dado en Chalco, Estado de México , el dia 
			
			</p>
	</div>

</body>
</html>