<!DOCTYPE html>
<!-- cadastro.html -->
<html>

<head>
	<title>Cadastro do curso</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<main>
			<div class="row g-5">
				<h1>Cadastrar novo curso</h1>
				<form action="insercao_curso.php" method="GET">
					<div class="col-sm-6">
						<label for="ds_curso" class="form-label">Nome Curso:</label>
						<input type="text" name="ds_curso" class="form-control" id="ds_curso" placeholder="">
					</div>
					
					<div class="col-sm-6">
						<label for="nr_carga_horaria" class="form-label">Carga Horária:</label>
						<input type="text" name="nr_carga_horaria" class="form-control" id="nr_carga_horaria" placeholder="">
					</div>
					
					<div class="col-sm-6">
						<label for="dt_inicio" class="form-label">Data de início:</label>
						<input type="date" name="dt_inicio" class="form-control" id="dt_inicio" placeholder="">
					</div>
					
					<br>
					<hr class="my-4 w-50">
					<button class="w-25 btn btn-primary" type="submit">Cadastrar</button>
				</form>
			</div>
		</main>
	</div>
</body>

</html>